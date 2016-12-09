<?php
$to = 'sv6@list.ru, sv@prime-ltd.su';
$subject = 'Привет!';
$message = 'Ja pismo otpravlennoje po zaprosu';
$headers = 'From: test@'. $_SERVER['HTTP_HOST'] . "\r\n" .
    'Reply-To: test@'. $_SERVER['HTTP_HOST'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
if( mail($to,$subject,$message,$headers) ){
    echo 'Успешно отправлено на '.$to.'';
}else{
    echo 'отправка не удалась!';
}
?>