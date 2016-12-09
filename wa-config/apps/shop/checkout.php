<?php
return array (
  'contactinfo' => 
  array (
    'name' => 'Контактная информация',
    'fields' => 
    array (
      'company' => 
      array (
        'localized_names' => 'Компания',
        'required' => '',
      ),
      'firstname' => 
      array (
        'localized_names' => 'Имя',
        'required' => '1',
      ),
      'lastname' => 
      array (
        'localized_names' => 'Фамилия',
        'required' => '1',
      ),
      'phone' => 
      array (
        'localized_names' => 'Телефон',
        'required' => '1',
      ),
      'email' => 
      array (
        'localized_names' => 'Email',
        'required' => '1',
      ),
      'address' => 
      array (
        'localized_names' => 'Адрес',
        'fields' => 
        array (
          'street' => 
          array (
            'localized_names' => 'Улица, дом, квартира / офис',
            'required' => '',
          ),
          'city' => 
          array (
            'localized_names' => 'Город',
            'required' => '',
          ),
          'region' => 
          array (
            'localized_names' => 'Регион',
            'required' => '',
          ),
          'zip' => 
          array (
            'localized_names' => 'Индекс',
            'required' => '',
          ),
          'country' => 
          array (
            'localized_names' => 'Страна',
            'required' => '',
          ),
        ),
      ),
      'address.shipping' => 
      array (
        'localized_names' => 'Адрес',
        'fields' => 
        array (
          'street' => 
          array (
            'localized_names' => 'Улица, дом, квартира / офис',
            'required' => '',
          ),
          'city' => 
          array (
            'localized_names' => 'Город',
            'required' => '',
          ),
          'region' => 
          array (
            'localized_names' => 'Регион',
            'required' => '',
          ),
          'zip' => 
          array (
            'localized_names' => 'Индекс',
            'required' => '',
          ),
          'country' => 
          array (
            'localized_names' => 'Страна',
            'required' => '',
          ),
        ),
      ),
    ),
  ),
  'payment' => true,
  'confirmation' => true,
);
