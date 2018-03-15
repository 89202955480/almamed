<?php


class shopCartsPluginReportMessagesAction extends waViewAction
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
        $code = waRequest::get('code', '', waRequest::TYPE_STRING_TRIM);
        $storefront_model = new shopCartsPluginStorefrontModel();
        $data = $storefront_model->getById($code);

        $shop_config =  wa('shop')->getConfig();
        $default_sender = $shop_config->getGeneralSettings('email');
        $this->getMessages($code);
        $this->getContact($code, $data['contact_id']);
        $this->getProducts($code, $data['storefront']);
        $this->view->assign('code', $code);
        $this->view->assign('sender', $default_sender);
        $this->view->assign('storefront_data', $data);
    }

    protected function getMessages($code)
    {
        $clm = new shopCartsPluginLogModel();
        $items = $clm->where('code=?', $code)->order('sent DESC')->fetchAll();
        $this->view->assign('sent_messages', $items);

        $cmm = new shopCartsPluginMessageModel();
        $items = $cmm->select('id,name')->fetchAll();
        $this->view->assign('messages', $items);
    }

    protected function getContact($code, $contact_id = null)
    {
        if($contact_id) {
            $customer = new shopCustomer($contact_id);
        } else {

            $model = new shopCartsPluginContactModel();
            $customer = $model->getContactByCode($code);
            if($customer) {
                $contact_id = $model->select('contact_id')->where('code = ?', $code)->fetchField();
            }
        }
        $this->view->assign('contact_id', $contact_id);
        $this->view->assign('customer', $customer);
    }

    protected function getProducts($code, $storefront)
    {
        $model = new shopCartsPluginCartProducts();
        $this->view->assign('products', $model->getByCode($code, $storefront));
    }
}