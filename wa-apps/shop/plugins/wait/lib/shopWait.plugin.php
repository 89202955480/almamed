<?php

class shopWaitPlugin extends shopPlugin
{

	/*
	 * frontend_checkout
	 */
	public function frontendCheckout($params)
	{

		if (waRequest::cookie('wait_code', '', 'string')) {
			// удаляем куки на этапе checkout
			wa()->getResponse()->setCookie('wait_code', '', time() - 3600, '/');
		} 

		return '';

	}

	/*
	 * frontend_footer
	 */
	public function frontendFooter()
	{

		$root = wa()->getRootUrl();
		$front = wa()->getRouteUrl('shop/frontend');
		$switchoff = intval($this->getSettings('switchoff'));

		/* Если купон уже выдан, то показываем только верхний блок */
		$code = waRequest::cookie('wait_code', '', 'string');
		if ($code) {

			$wait_code_expire = waRequest::cookie('wait_code_expire', '', 'string');
			//$expire = date('d.m.Y H:i:s', $wait_code_expire);
			$diffsec = $wait_code_expire - time();
			if ($diffsec > 3600) {
				$diff = ceil($diffsec / 3600);
				$diff = "(осталось {$diff} ч.)";
			} elseif ($diffsec > 0) {
				$diff = ceil($diffsec / 60);
				$diff = "(осталось {$diff} м.)";
			} else {
				$diff = '';
			}
			
			$head = "<link rel='stylesheet' href='{$root}wa-apps/shop/plugins/wait/css/style1.css'>";
			$head .= "<script type='text/javascript'>var waitGlobalFrontend = \"{$front}\"</script>";
			$head .= "<script type='text/javascript' src='{$root}wa-apps/shop/plugins/wait/js/wait1.js'></script>";
			$html = "<div class='wait-plugin-top'><div>Не забудьте получить скидку, примените код купона при оформлении заказа: <span class='coupon-code'>{$code}</span> <span>{$diff}</span> <span class='close'></span></div></div>";
			return $head . $html;

		}

		/* Только для неавторизованных пользователей. Перенести в настройки? */ 
		if ($switchoff OR wa()->getUser()->getId() > 0 OR waRequest::cookie('wait_show', '', 'string')) {
			return '';
		}

		$img = intval($this->getSettings('img'));
		$type = intval($this->getSettings('type'));
		if ($type == 3) {
			$form_id = intval($this->getSettings('t3_form_id'));
		} elseif ($type == 5) {
			$form_id = intval($this->getSettings('t5_form_id'));
		}
		$pdn = intval($this->getSettings('pdn'));
		$show = intval($this->getSettings('show'));
		$second = intval($this->getSettings('second')) * 1000; //секунд;
		$title = $this->getSettings('title');
		$text = $this->getSettings('text');
		$pdn_text = $this->getSettings('pdn_text');

		/* Для отправки почты на подписку в приложение Рассылки */
		$subscribe = '';
		if ($form_id > 0) {
			$subscribe = wa()->getRouteUrl('mailer/frontend/subscribe/');
		}

		/* Если установлен плагин Брошенные корзины, то отправляем запрос на него */
		$carts = false;
		$plugins = wa()->getConfig()->getAppConfig('shop')->getPlugins();
		if (isset($plugins['carts'])) {
			$carts = wa()->getRouteUrl('shop/frontend/save', array('plugin' => 'carts'));
		}

		$head = "<link rel='stylesheet' href='{$root}wa-apps/shop/plugins/wait/css/style.css'>";
		$head .= "<script> if (typeof(jQuery) == 'undefined') { 
			document.write('<script src=\"{$root}wa-apps/shop/plugins/wait/js/jquery-3.1.0.min.js\" type=\"text/javascript\"><\/script>'); 
		} </script>";
		$head .= "<script type='text/javascript' src='{$root}wa-apps/shop/plugins/wait/js/jquery.inputmask.bundle.min.js'></script>";
		$head .= "<script type='text/javascript'>var waitGlobalFrontend = \"{$front}\"</script>";
		$head .= "<script type='text/javascript' src='{$root}wa-apps/shop/plugins/wait/js/wait.js'></script>";

		if ($show == 1) $head .= "
		<script type='text/javascript'>
		$(function(){ 
			setTimeout(modalShowXV, {$second});
		});
		</script>\r\n";

		if ($show == 0) $head .= "
		<script type='text/javascript'>
		$(function(){ 
			var alert_flag = true; 
			$(document).mouseleave(function(e){
				if (e.clientY < 0) {
					if (alert_flag) {
						modalShowXV();
					}
				}
			});
		});
		</script>\r\n";

		$view = wa()->getView();
		$view->assign('img', $img);
		$view->assign('title', $title);
		$view->assign('text', $text);

		$popup = '';
		$extraClass = '';
		$extraClassCount = '';

		if ($type == 0) {

			/* Автогенерация купонов */
			$pdn = 0;
			$extraClass = 'wait-autocoupon';

			$t0_hours = (intval($this->getSettings('t0_hours')) > 0) ? intval($this->getSettings('t0_hours')) : 24;
			$t0_type = intval($this->getSettings('t0_type'));
			$t0_type = str_replace(array(0, 1, 2), array('%', ' рублей', '$FS'), $t0_type);
			$t0_value = $this->getSettings('t0_value');
			$t0_value = floatval(str_replace(',', '.', $t0_value));

			if ($t0_value > 0) {
				if ($t0_type == '$FS') $popup .= '<div class="type">Бесплатная доставка</div>';
				else $popup .= "<div class='type'>Скидка {$t0_value}{$t0_type} </div>";
				
				$popup .= "<div class='hours'>Действует {$t0_hours} ч.</div><br>";
				$popup .= "<input type='button' class='autocoupon' value='Получить купон' onclick='autocouponClick()'>
					<input type='text' class='autocoupon-value' value=''>";
			} else {
				return '';
			}

		} elseif ($type == 1) {

			/* Свой код купона */
			$pdn = 0;
			$extraClass = 'wait-autocoupon';
			
			$t1_hours = (intval($this->getSettings('t1_hours')) > 0) ? intval($this->getSettings('t1_hours')) : 24;
			$t1_code = $this->getSettings('t1_code');
			$t1_value = $this->getSettings('t1_value');
			
			if ($t1_code) {
				$popup .= "<div class='type'>Скидка {$t1_value} </div>";
				$popup .= "<div class='hours'>Действует {$t1_hours} ч.</div><br>";
				$popup .= "<input type='text' class='autocoupon-value coupon-value' value='{$t1_code}'>";
			} else {
				return '';
			}

		} elseif ($type == 5) {

			/* Поля для ввода имени/e-mail/телефона */
			$t5_field_name = intval($this->getSettings('t5_field_name'));
			$t5_field_email = intval($this->getSettings('t5_field_email'));
			$t5_field_phone = intval($this->getSettings('t5_field_phone'));
			$t5_name = ($this->getSettings('t5_name')) ? $this->getSettings('t5_name') : 'Отправить';
			
			if ($t5_field_name > 0) {
				$class = ($t5_field_name == 2) ? 'wait-required' : '';
				$popup .= "<input placeholder='Имя' type='text' class='wait-name-value {$class}' value=''>";
			}
			if ($t5_field_email > 0) {
				$class = ($t5_field_email == 2) ? 'wait-required' : '';
				$popup .= "<input placeholder='E-mail' type='text' class='wait-email-value {$class}' value=''>";
			}
			if ($t5_field_phone > 0) {
				$class = ($t5_field_phone == 2) ? 'wait-required' : '';
				$popup .= "<input placeholder='Телефон' type='text' class='wait-phone-value {$class}' value=''>";
			}
			$popup .= "<input type='button' class='adaptive-button' value='{$t5_name}' onclick='sendEmailClick(\"{$carts}\", \"{$subscribe}\", \"{$form_id}\")'>";

			if ($t5_field_name > 0 AND $t5_field_email > 0 AND $t5_field_phone > 0)
				$extraClassCount = 'count3';
			
		} elseif ($type == 2) {

			/* Поле для ввода телефона */
			$t2_name = ($this->getSettings('t2_name')) ? $this->getSettings('t2_name') : 'Отправить';
			$popup .= "<input placeholder='Телефон' type='text' class='wait-phone-value wait-required' value=''>
				<input type='button' value='{$t2_name}' onclick='sendEmailClick(\"{$carts}\", \"\", \"\")'>";

		} elseif ($type == 3) {

			/* Поле для ввода email */
			$t3_name = ($this->getSettings('t3_name')) ? $this->getSettings('t3_name') : 'Отправить';
			$popup .= "<input placeholder='E-mail' type='text' class='wait-email-value wait-required' value=''>
				<input type='button' value='{$t3_name}' onclick='sendEmailClick(\"{$carts}\", \"{$subscribe}\", \"{$form_id}\")'>";

		} elseif ($type == 4) {

			/* Ссылка на отдельную страницу */
			$pdn = 0;
			
			$t4_name = ($this->getSettings('t4_name')) ? $this->getSettings('t4_name') : 'Открыть';
			$t4_url = $this->getSettings('t4_url');

			if ($t4_url) {
				$popup .= "<form action='{$t4_url}'><input type='submit' class='gift-url' data-url='' value='{$t4_name}'></form>";
			} else {
				return '';
			}

		}

		$view->assign('pdn', $pdn);
		$view->assign('pdn_text', $pdn_text);
		$view->assign('extraClass', $extraClass);
		$view->assign('extraClassCount', $extraClassCount);
		$view->assign('popup', $popup);
		$path = wa()->getAppPath('plugins/wait/templates/popup.html', 'shop');
		$html = $view->fetch($path);		

		return $head . $html;

	}
	
}
