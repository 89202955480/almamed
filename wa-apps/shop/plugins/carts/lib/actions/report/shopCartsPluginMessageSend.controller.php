<?php


class shopCartsPluginMessageSendController extends waJsonController
{

    public function preExecute()
    {
        $u = $this->getUser();

        if (!($u->isAdmin('shop') || $u->getRights('shop', 'carts_plugin.contacts_report'))) {
            throw new waRightsException(_w("Access denied"));
        }
    }


    public function execute()
    {
        $code = waRequest::post('code', '');
        $email = waRequest::post('email');
        $phone = waRequest::post('phone');

        $csm = new shopCartsPluginStorefrontModel();
        $clm = new shopCartsPluginLogModel();
        $sender = new shopCartsPluginSender();
        $cart_products = new shopCartsPluginCartProducts();

        $mess = array(
            'code' => $code,
            'message_id' => 0,
            'sent' => date('Y-m-d H:i:s'),
            'status' => 0,
            'comment' => ''
        );
        try {
            $storefront = $csm->getStorefrontByCode($code);

            $customer = $csm->getContactByCode($code);
            if(!$customer) $customer = new shopCartsPluginCustomer();
            if($email) $customer->set('email', $email);
            if($phone) $customer->set('phone', $phone);

            $data = $cart_products->getByCode($code, $storefront);

            $cart = waRequest::post();

            $mess = array_merge($mess, $sender->sendOne($cart, $data, $customer));
            if(is_array($mess['comment'])) $mess['comment'] = implode(', ', $mess['comment']);
            if(is_array($mess['status'])) $mess['status'] = $mess['status'][0] || $mess['status'][1];
            $clm->insert($mess);

            $csm->updateById($code, array(
                'last_send_datetime' => $mess['sent']
            ));
        } catch (Exception $e) {
            $mess['comment'] = $e->getMessage();
        }
        $this->response = $mess;
    }
}