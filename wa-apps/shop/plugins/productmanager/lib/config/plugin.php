<?php

return array(
    'name' => 'менеджер продукта',
    'description' => 'Закрепить пользователя за товаром',
    'img'  => 'img/brands.png',
    'version' => '1.0.0',
    'handlers' => array(
        'backend_product' => 'product_edit',
        'frontend_product' => 'front_product',
    )
);