<?php

return array(
    'switchoff' => array(
        'title' => 'Switchoff',
        'value' => 0,
        'control_type' => waHtmlControl::SELECT,
    ), 
	
    'in_carts' => array(
        'title' => 'If in carts',
        'value' => 0,
        'control_type' => waHtmlControl::CHECKBOX,
    ),

    'summ_in_carts' => array(
        'title' => 'Summ in carts',
        'value' => 0,
        'control_type' => waHtmlControl::INPUT,
    ),

	'pdn' => array(
        'title' => 'Pdn',
        'value' => 0,
        'control_type' => waHtmlControl::CHECKBOX,
    ),

    'pdn_text' => array(
        'title' => 'Pdn Text',
        'value' => 'Я принимаю условия <a href="---ВСТАВЬТЕ СЮДА ССЫЛКУ НА ДОКУМЕНТ!---" target="_blank">политики обработки персональных данных</a>',
        'control_type' => waHtmlControl::TEXTAREA,
    ),

    'title' => array(
        'title' => 'Name',
        'value' => 'Не торопитесь уходить!',
        'control_type' => waHtmlControl::INPUT,
    ), 

    'text' => array(
        'title' => 'Description',
        'value' => 'Уже уходите? А мы приготовили для Вас специальный подарок - купон на скидку!',
        'control_type' => waHtmlControl::TEXTAREA,
    ),
	
    'img' => array(
        'title' => 'Image',
        'value' => 2,
        'control_type' => waHtmlControl::HIDDEN,
    ),	

    'type' => array(
        'title' => 'Type',
        'value' => 0,
        'control_type' => waHtmlControl::SELECT,
    ),

    'show' => array(
        'title' => 'Show',
        'value' => 0,
        'control_type' => waHtmlControl::SELECT,
    ),

    'second' => array(
        'title' => 'Wait in second',
        'value' => 60,
        'control_type' => waHtmlControl::INPUT,
    ),
	
    'email' => array(
        'title' => 'Email',
        'value' => '',
        'control_type' => waHtmlControl::INPUT,
    ), 	

    'email_subject' => array(
        'title' => 'Email subject',
        'value' => 'Всплывающее окно при уходе с сайта - заполнена форма',
        'control_type' => waHtmlControl::INPUT,
    ),  

    't0_cookie' => array(
        'title' => 'Сookie',
        'value' => 30,
        'control_type' => waHtmlControl::INPUT,
    ),

    't0_type' => array(
        'title' => 'Type0 type',
        'value' => 0,
        'control_type' => waHtmlControl::SELECT,
    ),

    't0_value' => array(
        'title' => 'Type0 value',
        'value' => '',
        'control_type' => waHtmlControl::INPUT,
    ), 

    't0_hours' => array(
        'title' => 'Type0 hours',
        'value' => 24,
        'control_type' => waHtmlControl::INPUT,
    ), 

    't0_comment' => array(
        'title' => 'Type0 comment',
        'value' => 'Всплывающее окно при уходе с сайта',
        'control_type' => waHtmlControl::INPUT,
    ), 

    't1_code' => array(
        'title' => 'Type1 coupon code',
        'value' => '',
        'control_type' => waHtmlControl::INPUT,
    ),

	't1_value' => array(
        'title' => 'Type1 value',
        'value' => '',
        'control_type' => waHtmlControl::INPUT,
    ),
	
	't1_hours' => array(
        'title' => 'Type1 hours',
        'value' => 24,
        'control_type' => waHtmlControl::INPUT,
    ),
	
    't2_name' => array(
        'title' => 'Type2 name',
        'value' => 'Отправить',
        'control_type' => waHtmlControl::INPUT,
    ),	
	
    't3_name' => array(
        'title' => 'Type3 name',
        'value' => 'Отправить',
        'control_type' => waHtmlControl::INPUT,
    ),

    't3_form_id' => array(
        'title' => 'Type3 form ID',
        'value' => '',
        'control_type' => waHtmlControl::INPUT,
    ),  
	
    't4_name' => array(
        'title' => 'Type4 name',
        'value' => 'Открыть',
        'control_type' => waHtmlControl::INPUT,
    ), 

    't4_url' => array(
        'title' => 'Type4 url',
        'value' => '',
        'control_type' => waHtmlControl::INPUT,
    ), 
	
	't5_field_name' => array(
        'title' => 'Field Name',
        'value' => 1,
        'control_type' => waHtmlControl::SELECT,
    ),
	
	't5_field_email' => array(
        'title' => 'Field Email',
        'value' => 2,
        'control_type' => waHtmlControl::SELECT,
    ),
	
	't5_field_phone' => array(
        'title' => 'Field Phone',
        'value' => 1,
        'control_type' => waHtmlControl::SELECT,
    ),
	
    't5_name' => array(
        'title' => 'Type5 name',
        'value' => 'Отправить',
        'control_type' => waHtmlControl::INPUT,
    ),

    't5_form_id' => array(
        'title' => 'Type5 form ID',
        'value' => '',
        'control_type' => waHtmlControl::INPUT,
    ),  
);