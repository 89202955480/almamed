<?php

class shopWaitPluginFrontendWaitsendemailController extends waJsonController
{

    /*
     * send email
     */
    public function execute()
    {
        $ajax = waRequest::isXMLHttpRequest();

        if ($ajax) {
            $name = trim(waRequest::post('name'));
			$email = trim(waRequest::post('email'));
			$phone = trim(waRequest::post('phone'));
		
            $shopName = wa('shop')->getConfig()->getGeneralSettings('name');
            $shopEmail = wa('shop')->getConfig()->getGeneralSettings('email');
			
			$plugin = wa('shop')->getPlugin('wait');
			$emailTo = ($plugin->getSettings('email')) ? trim($plugin->getSettings('email')) : trim($shopEmail);
            $email_subject = $plugin->getSettings('email_subject');
			
			$body = "<p>Заполнено всплывающее окно при уходе с сайта</p>";
			if ($name) {
				$body .= "<p>Имя: <strong>{$name}</strong></p>";
			}
			if ($email) {
				$body .= "<p>E-mail: <strong>{$email}</strong></p>";
			} 
			if ($phone) {
				$body .= "<p>Телефон: <strong>{$phone}</strong></p>";
			} 
			
			if ($name OR $email OR $phone) {
                $body .= "<br/>---<br/>" . $shopName;
				$to = array($emailTo => $shopName);
				$from = array($emailTo => $shopName);	
				
                $mail = new waMailMessage($email_subject, $body);
                $mail->setTo($to);
                $mail->setFrom($from);
                $send = $mail->send();

                $this->response = array(
                    'status' => $send,
                );
			}
		}
    }

}