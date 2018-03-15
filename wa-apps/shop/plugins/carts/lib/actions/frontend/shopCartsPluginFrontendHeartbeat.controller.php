<?php

class shopCartsPluginFrontendHeartbeatController extends waController
{
    public function execute()
    {
        /**
         * @var shopCartsPlugin $plugin
         */
        $plugin = wa('shop')->getPlugin('carts');
        $plugin->saveStorefront(null);

        wa()->getResponse()->addHeader('Cache-Control', 'no-cache, no-store, must-revalidate');
        wa()->getResponse()->addHeader('Pragma', 'no-cache');
        wa()->getResponse()->addHeader('Expires', '0');
        wa()->getResponse()->addHeader('Content-type', 'application/json');
        echo '"ok"';
    }

}