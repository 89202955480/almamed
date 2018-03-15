<?php

class shopCartsPluginCheckCli extends waCliController {


    /**
     * @var waAppSettingsModel
     */
    protected $asm;
    /**
     * @var shopCartsPluginMessageModel
     */
    protected $cem;
    /**
     * @var shopCartsPluginContactModel
     */
    protected $ccm;
    /**
     * @var shopCartsPluginLogModel
     */
    protected $log;
    /**
     * @var shopCartsPluginStorefrontModel
     */
    protected $csm;
    /**
     * @var shopCartsPluginSender
     */
    protected $sender;
    /**
     * @var bool
     */
    protected $debug;
    /**
     * @var shopCartsPlugin
     */
    protected $plugin;
    /**
     * @var shopCartsPluginCartProducts
     */
    protected $cart_products;


    public function __construct()
    {
        $this->asm = new waAppSettingsModel();
        $this->cem = new shopCartsPluginMessageModel();
        $this->ccm = new shopCartsPluginContactModel();
        $this->log = new shopCartsPluginLogModel();
        $this->csm = new shopCartsPluginStorefrontModel();
        $this->sender = new shopCartsPluginSender();
        $this->debug = $this->asm->get(array('shop','carts'), 'debug', 0);
        $this->plugin = wa('shop')->getPlugin('carts');
        $this->cart_products = new shopCartsPluginCartProducts();
    }

    public function execute()
    {
        $this->cliLocaleVoodooMagic();

        $now = time();
        $last_check = $this->getLastCheck($now);

        foreach($this->cem->getByDelay() as $cart) {
            $delay = ((int) $cart['delay']) * 3600;

            $between_from = date('Y-m-d H:i:s', $last_check - $delay);
            $between_to = date('Y-m-d H:i:s', $now - $delay);

            $this->consoleLog(sprintf('message #%d: from %s to %s', $cart['id'], $between_from, $between_to));

            $contact_ids = $this->csm->getContactIdsByRange($between_from, $between_to);

            foreach($contact_ids as $code => $contact_id) {
				if(!$code) continue;
                $this->sendMessage($cart, $code, $contact_id);
            }
        }
    }

    /**
     * I don't know how exactly it works. But it does.
     */
    protected function cliLocaleVoodooMagic()
    {

        /**
         * @var shopPlugin $plugin
         */
        $plugin = wa('shop')->getPlugin('carts');
        $locale = $plugin->getSettings('locale');
        if(!in_array($locale, shopCartsPlugin::getAvailableLocales())) $locale = shopCartsPlugin::DEFAULT_LOCALE;
        $locale_path = waSystem::getInstance()->getAppPath('plugins/carts/locale', 'shop');
        waLocale::load($locale, $locale_path, 'shop_carts');
        wa()->pushActivePlugin('carts', 'shop');
    }

    private function getLastCheck($now)
    {
        // Настройки кэшируются.
        // Если у cli-сприпта не хватает прав перезаписать кэш, asm->get будет возвращать неверное значение.
        // Поэтому прямым запросом.
        $last_check = $this->asm
            ->select('value')
            ->where('app_id LIKE ? AND name = ?', 'shop.carts', 'last_check')
            ->fetchField();

        if(!$last_check) {
            $last_check = $now;
        }

        if(!$this->debug) {
            $this->asm->set(array('shop', 'carts'), 'last_check', $now);
        }

        return $last_check;
    }

    private function consoleLog($message)
    {
        if($this->debug) {
            echo $message, "\n";
        }
    }

    private function sendMessage($cart, $code, $contact_id)
    {
        $mess = array(
            'message_id' => $cart['id'],
            'code' => $code,
            'sent' => date('Y-m-d H:i:s'),
            'status' => 0,
        );

        try {

            $storefront = $this->csm->getStorefrontByCode($code);
            if($cart['source'] && ($cart['source'] != $storefront)) {
                return;
            }

            if(!$this->debug && $this->log->isSent($cart['id'], $code)) {
                return;
            }


            if(!$contact_id) {
                $customer = $this->ccm->getContactByCode($code);
                if(!$customer) throw new waException(_wp('No contact data!'));
            } else {
                $customer = new shopCartsPluginCustomer($contact_id);
            }

            $data = $this->cart_products->getByCode($code, $storefront);

            if(!$this->plugin->getSettings('send_if_empty') && empty($data['items'])) {
                throw new waException(_wp('Shopping cart is empty!'));
            }

            $mess = array_merge($mess, $this->sender->sendOne($cart, $data, $customer));

            $this->log->insert($mess);

            $this->csm->updateById($code, array(
                'last_send_datetime' => $mess['sent']
            ));
        } catch (shopCartsPluginStopMessageException $e) {
            // Шаблон остановлен по условию.
            $this->consoleLog($e->getMessage());

            $mess['comment'] = $e->getMessage();
            $this->log->insert($mess);

            $this->csm->updateById($code, array(
                'last_send_datetime' => $mess['sent']
            ));

        } catch (Exception $e) {
            $this->consoleLog($e->getMessage());

            $mess['comment'] = $e->getMessage();
            $this->log->insert($mess);

            $this->csm->updateById($code, array(
                'last_send_datetime' => $mess['sent']
            ));
        }
    }
}