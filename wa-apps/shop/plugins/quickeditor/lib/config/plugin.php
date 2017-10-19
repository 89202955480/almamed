<?php

return array(
    'name' => 'Quick products editor',
    'version' => '0.1.3',
    'vendor' => 963918,
    'handlers' => array(
        'frontend_head' => 'frontendHead',
        'frontend_product' => 'frontendProduct',
        'frontend_category' => 'frontendCategory',
    ),
    'img' => 'img/plugin.png',
    'rights' => 1,
    'description' => 'Opens the edit product window from the frontend',
    'shop_settings' => true,
    'frontend' => false,
);
