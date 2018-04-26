<?php
return array(
    'name' => 'customs field',
    'description' => 'custom field',
    'version' => '1.0',
    'img'=>'img/brands.png',
    'frontend' => true,
    'icons'=>array(
        16 => 'img/brands.png',
    ),
    'handlers' => array(
        'backend_product' => 'backend_product',
        'backend_category_dialog' => 'backend_category_dialog',
    ),
);

