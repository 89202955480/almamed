<?php

class shopCartsPluginLogModel extends waModel {

    protected $table = 'shop_carts_plugin_log';

    public function isSent($message_id, $code)
    {
        return (bool) $this->getByField(array(
            'message_id' => $message_id,
            'code' => $code,
            'status' => 1,
        ));
    }

}