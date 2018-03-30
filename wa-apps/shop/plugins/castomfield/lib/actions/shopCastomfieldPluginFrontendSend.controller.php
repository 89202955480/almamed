<?php

class shopCastomfieldPluginFrontendSendController extends waJsonController
{

    public function execute()
    {
        $data = waRequest::post();
        $product = new shopProduct($data['id_prod_user']);
        $product['price_user'] = $data['price_user'];
        $product['delivery_user'] = $data['delivery_user'];
        $product->save();
        $this->response = array('response' => $data);
    }
}