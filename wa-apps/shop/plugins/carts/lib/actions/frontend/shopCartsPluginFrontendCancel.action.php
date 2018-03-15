<?php

class shopCartsPluginFrontendCancelAction extends waViewAction {


    public function execute()
    {
        if($hash = waRequest::param('hash')) {
            // header for IE
            $this->getResponse()->addHeader('P3P', 'CP="NOI ADM DEV COM NAV OUR STP"');

            $code = md5(uniqid(time(), true));
            $this->getResponse()->setCookie('shop_cart', $code, time() + 30 * 86400, null, '', false, true);
            $this->getStorage()->set('shop/cart', array());

            $model = new shopCartItemsModel();
            $model->deleteByField('code', $hash);


            $storefront_model = new shopCartsPluginStorefrontModel();
            $storefront_model->updateById($hash, array(
                'cancel' => 1,
            ));
        }

        $url = wa()->getRouteUrl('shop/frontend');
        $this->redirect($url);
    }
}