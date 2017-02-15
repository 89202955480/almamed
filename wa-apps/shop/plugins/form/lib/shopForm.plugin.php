<?php

/**
 * @author wa-apps.ru <info@wa-apps.ru>
 * @copyright 2013-2015 wa-apps.ru
 * @license Webasyst License http://www.webasyst.ru/terms/#eula
 * @link http://www.webasyst.ru/store/plugin/shop/productbrands/
 */
class shopFormPlugin extends shopPlugin
{


    public static function getForm()
    {
        $name = waRequest::post('name');
        $phone = waRequest::post('phone');
        $mess = waRequest::post('messages');
        $btn = waRequest::post('send');

        $plugin = wa('shop')->getPlugin('form');
        $settings = $plugin->getSettings();

        $email_admin = $settings['email'];



?>
<style>
  .wa-form { float: left; margin: 10px 0; overflow: visible; }
  .wa-form .wa-field { clear: left; margin: 0; padding-top: 3px; }
  .wa-form .wa-field .wa-name { float: left; width: 155px; padding-top: 0.05em; padding-bottom: 10px; font-size: 0.95em; }
  .wa-form .wa-field .wa-value { margin-left: 180px; margin-bottom: 5px; position: relative; }
  .wa-form .wa-field .wa-value.wa-submit { margin-top: 0px; }
  .wa-form .wa-field .wa-value input[type="text"], .wa-form .wa-field .wa-value input[type="email"], .wa-form .wa-field .wa-value input[type="password"] { width: 30%; min-width: 200px; margin: 0; }
  .wa-form .wa-field .wa-value textarea { min-width: 300px; height: 70px; }
  input, textarea { font-size: 1em; color: black; font-family: "Georgia", Times, serif; }
  .wa-form .wa-captcha { padding: 7px 0 10px; }
  .wa-form .wa-captcha p { clear: left; margin: 0; }
  .wa-captcha img { float: left; margin-right: 5px; margin-top: -8px; }
  .wa-captcha .wa-captcha-refresh { color: #AAAAAA; font-size: 0.8em; text-decoration: underline; }
</style>
<? if(!empty($btn)){?>
        <? if(empty($name) OR empty($phone) OR empty($mess)){ ?>
<p><em style="color: red;" class="wa-error-msg">Заполните все поля</em></p>
        <? }else{ ?>
            <?
            $to = $email_admin;

// тема письма
            $subject = 'Запрос с 404 страницы сайта AlmaMed.su';

// текст письма
            $message = '
<html>
<head>
  <title>Запрос с 404 страницы сайта AlmaMed.su</title>
</head>
<body>
  <p>Клиент оставил заявку на обратную связь, данные</p>
  <p>Имя: '.$name.'</p>
  <p>Телефон: '.$phone.'</p>
  <p>Меня интересует: '.$mess.'</p>
</body>
</html>
';


            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $headers .= 'From: '. $email_admin . "\r\n" .
                'Reply-To: '. $email_admin . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $send = mail($to, $subject, $message, $headers);

            ?>
<h1>Спасибо!</h1>
<p>Ваше сообщение отправленно</p>

        <? } ?>
<?}?>

<div class="wa-form" style="<?if($send == true):?>display:none<?endif;?>">
  <form method="post" action="">
  <div class="wa-field">
    <div class="wa-name">Имя:</div>
    <div class="wa-value"><input name="name" type="text" value="<?=$name;?>"></div>
  </div>
  <div class="wa-field">
    <div class="wa-name">Телефон:</div>
    <div class="wa-value">
      <input name="phone" type="text" value="<?=$phone;?>" >
      <em class="wa-error-msg"></em>
    </div>
  </div>
  <div class="wa-field">
    <div class="wa-name">Меня интересует:</div>
    <div class="wa-value">
      <textarea class="wa-error" name="messages"><?=$mess;?></textarea>
      <em class="wa-error-msg"></em>
    </div>
  </div>

  <div class="wa-field">
    <div class="wa-value wa-submit">
      <input type="submit" value="Отправить" name="send">
    </div>
  </div>
  </form>
</div>
<?
    }


}

