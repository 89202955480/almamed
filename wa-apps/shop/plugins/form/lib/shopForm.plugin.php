<?php

/**
 * @author wa-apps.ru <info@wa-apps.ru>
 * @copyright 2013-2015 wa-apps.ru
 * @license Webasyst License http://www.webasyst.ru/terms/#eula
 * @link http://www.webasyst.ru/store/plugin/shop/productbrands/
 */
class shopFormPlugin extends shopPlugin
{

    public static function getFormApp(){
        $arFields = array(
            array("type" => "text","label" => "ФИО","name" => "name","required" => true),
            array("type" => "text","label" => "Телефон","name" => "phone","required" => true),
            array("type" => "text","label" => "E-mail","name" => "email","required" => true),
            array("type" => "text","label" => "Город","name" => "city","required" => true),
            array("type" => "text","label" => "Укажите наименование клиники","name" => "clinic","required" => true),
            array("type" => "textarea","label" => "Ваш вопрос","name" => "question","required" => false),
            array("type" => "file","label" => "Прикрепить файл","name" => "app_file","required" => false),
            array("type" => "checkbox","label" => "","name" => "rule","required" => true)
        );

        if(waRequest::post('send_app')){

            $arPost = array();
            $error = false;
            foreach($arFields as &$fields){
                if($fields['required'] and empty(waRequest::post($fields['name']))){
                    $fields['error_msg'] = "Это поле обязательное";
                    $error = true;
                }else{
                    unset($fields['error_msg']);
                }

                if(empty($fields['error_msg'])){
                    $arPost[$fields['name']] = strip_tags(waRequest::post($fields['name']));
                }
            }

            if($arPost and !$error){

                $plugin = wa('shop')->getPlugin('form');
                $settings = $plugin->getSettings();
                $email_admin = $settings['email'];

                $to = $email_admin;
                $From = ' Almamed <noreply@almamed.su>';

                $EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём

                $message = 'ФИО: '.$arPost['name'].'<br>';
                $message .= 'Телефон: '.$arPost['phone'].'<br>';
                $message .= 'E-mail: '.$arPost['email'].'<br>';
                $message .= 'Город: '.$arPost['city'].'<br>';
                $message .= 'Укажите наименование клиники: '.$arPost['clinic'].'<br>';
                $message .= 'Ваш вопрос: '.$arPost['question'].'<br>';
                if(waRequest::get('page-send')){
                    $message .= 'Страница отправки: '.waRequest::get('page-send').'<br>';
                }

                $subject = 'Запрос с сайта AlmaMed.su';


                $boundary     = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.

                $headers    = "MIME-Version: 1.0;$EOL";
                $headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";
                $headers   .= "From: $From";

                $multipart  = "--$boundary$EOL";
                $multipart .= "Content-Type: text/html; charset=utf-8$EOL";
                $multipart .= "Content-Transfer-Encoding: base64$EOL";
                $multipart .= $EOL; // раздел между заголовками и телом html-части
                $multipart .= chunk_split(base64_encode($message));


                if($_FILES["app_file"]["tmp_name"]){

                    $filename = $_FILES["app_file"]["tmp_name"];
                    $file = fopen($filename, "rb");
                    $data = fread($file,  filesize( $filename ) );
                    fclose($file);
                    $NameFile = $_FILES["app_file"]["name"]; // в этой переменной надо сформировать имя файла (без всякого пути);
                    $File = $data;
                    $multipart .=  "$EOL--$boundary$EOL";
                    $multipart .= "Content-Type: application/octet-stream; name=\"$NameFile\"$EOL";
                    $multipart .= "Content-Transfer-Encoding: base64$EOL";
                    $multipart .= "Content-Disposition: attachment; filename=\"$NameFile\"$EOL";
                    $multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла
                    $multipart .= chunk_split(base64_encode($File));

                }


                $multipart .= "$EOL--$boundary--$EOL";

                if(!mail($to, $subject, $multipart, $headers)){
                    echo 'Письмо не отправлено';
                } //Отправляем письмо
                else{

                    $text_client = $settings['email_client'];
                    $email_client = trim(strip_tags($arPost['email']));

                    $headers_client  = 'MIME-Version: 1.0' . "\r\n";
                    $headers_client .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                    $headers_client .= "From: $From";

                    mail($email_client, $subject, $text_client, $headers_client);
                    wa()->getResponse()->redirect('/ostavit-zayavku/?send=ok', 302);
                }
            }
        }
        
        ?>
        <style>
            .wa-form .wa-field .wa-name{
                padding-top: 0;
                padding-bottom: 0;
                color: #000;
                width: 250px;
            }

            .wa-form .wa-field{
                margin-bottom: 20px;
            }

            .file_upload{
                display: block;
                position: relative;
                overflow: hidden;
                font-size: 1em;              /* example */
                height: 2em;                 /* example */
                line-height: 2em             /* the same as height */
            }
            .file_upload .button, .file_upload > mark{
                display: block;
                cursor: pointer              /* example */
            }
            .file_upload .button{
                float: right;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 100%;
            }
            .file_upload > mark{
                background: transparent;
                padding-left: 1em;
                font-size: 12px;
                color: #aaaaaa;
                font-weight: normal;

            }
            @media only screen and ( max-width: 500px ){  /* example */
                .file_upload > mark{
                    display: none
                }
                .file_upload .button{
                    width: 100%
                }
            }
            .file_upload input[type=file]{
                position: absolute;
                top: 0;
                opacity: 0;
                cursor: pointer;
            }

            /* Making it beautiful */

            .file_upload{
                border: 1px solid #ccc;
                border-radius: 3px;
                box-shadow: 0 0 5px rgba(0,0,0,0.1);
                transition: box-shadow 0.1s linear;
                width: 300px;
                cursor: pointer;
            }
            .file_upload.focus{
                box-shadow: 0 0 5px rgba(0,30,255,0.4)
            }
            .file_upload .button{
                font-size: 0.95rem;
                font-weight: normal;
                border-radius: 2px;
                text-transform: none;
                line-height: unset;
            }

            .file_upload:active .button{
                background: #5d00b3;
                box-shadow: 0 0 3px rgba(0,0,0,0.3) inset
            }

            .wa-form .wa-field .wa-value input[type="text"]{
                height: 2.5rem;
            }

            .wa-form .wa-field .wa-value{
                margin-left: 255px;
            }
        </style>

    <?
    if(waRequest::get('send') == "ok"):
    ?>
        <h1 style="color: #19a5cc;">Сообщение отправленно!</h1>
        <script type="text/javascript">
            window.onload = function() {
                yaCounter34079080.reachGoal('ostavit_zajavku', false, function(){console.log("ostavit_zajavku");});
            }
        </script>
    <?
    else:
    ?>
        <div class="wa-form app">
            <form method="post" action="" enctype='multipart/form-data'>

                <?
                foreach($arFields as $val):
                ?>

                    <? if($val['type'] == "text"): ?>

                        <div class="wa-field <?=($val['required']) ? "wa-required" : ""?>">
                            <div class="wa-name"><?=$val['label']?></div>
                            <div class="wa-value">
                                <input name="<?=$val['name']?>" type="<?=$val['type']?>" class="<?=(isset($val['error_msg'])) ? "error" : ""?>" value="<?=waRequest::post($val['name'])?>" />
                                <? if(isset($val['error_msg'])): ?>
                                    <em class="wa-error-msg"><?=$val['error_msg']?></em>
                                <? endif; ?>
                            </div>
                        </div>

                    <? elseif($val['type'] == "textarea"):?>

                        <div class="wa-field <?=($val['required']) ? "wa-required" : ""?>">
                            <div class="wa-name"><?=$val['label']?></div>
                            <div class="wa-value">
                                <textarea class="wa-error" name="<?=$val['name']?>" class="<?=(isset($val['error_msg'])) ? "error" : ""?>"> </textarea>
                                <? if(isset($val['error_msg'])): ?>
                                        <em class="wa-error-msg"><?=$val['error_msg']?></em>
                                <? endif; ?>
                            </div>
                        </div>


                    <? elseif($val['type'] == "file"):?>
                        <div class="wa-field <?=($val['required']) ? "wa-required" : ""?>">
                            <div class="wa-name"><?=$val['label']?></div>
                            <label class="file_upload">
                                <span class="button">Обзор</span>
                                <mark>Выберите файл</mark>
                                <input type="file" name="<?=$val['name']?>"/>
                            </label>
                            <? if($val['required']): ?>
                                <em class="wa-error-msg"></em>
                            <? endif; ?>
                        </div>


                    <? elseif($val['type'] == "checkbox"):;?>

                        <div class="wa-field <?=($val['required']) ? "wa-required" : ""?>">

                            <label class="at-stylize-label">
                                <input id="tm-license-agreement" name="<?=$val['name']?>" value="Y" class="agreement at-stylize-input" type="checkbox" checked="ckecked"/>
                                <span class="at-stylize-box"></span>
                            </label>
                            <span class="obr wa-required">
                                Нажимая на эту кнопку , я даю свое согласие на
                                <a href="/rules/personal.pdf">обработку персональных данных</a>
                                и соглашаюсь с условиями <a href="/rules/user_yes.pdf">политики конфиденциальности</a>
                            </span>

                        </div>

                    <? endif;?>

                <?endforeach;?>

                <div class="wa-field">
                    <div class="wa-submit">
                        <input type="submit" value="Отправить" name="send_app">
                    </div>
                </div>

            </form>
        </div>


        <?

    endif;
    }




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

