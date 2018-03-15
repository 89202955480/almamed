<?php

class shopCartsPluginFrontendRestoreAction extends waViewAction {

    public function execute()
    {
        if($hash = waRequest::param('hash')) {
            // header for IE
            $this->getResponse()->addHeader('P3P', 'CP="NOI ADM DEV COM NAV OUR STP"');
            $this->getResponse()->setCookie('shop_cart', $hash, time() + 30 * 86400, null, '', false, true);
            $this->getStorage()->set('shop/cart', array());

            $storefront_model = new shopCartsPluginStorefrontModel();
            $storefront_model->updateById($hash, array(
                'restore' => 1,
            ));
        }

        $url = wa()->getRouteUrl('shop/frontend/cart');
        $this->redirect($url);
    }
}