<?php

class shopWaitPluginFrontendWaitautocouponController extends waJsonController
{
	public $table = 'shop_coupon';
	
    /*
     * return result create coupon
     * @return array
     */
    public function execute()
    {
        $ajax = waRequest::isXMLHttpRequest();

        if ($ajax) {
			//автоудаление купонов
			$couponm = new shopCouponModel();
			$resultDel = $couponm->query("DELETE FROM " . $this->table . " WHERE `used` = 0 AND `expire_datetime` < NOW()");
			
			//добавление купона
            $resultAdd = $this->create_coupon();
			
            //установка куки, на сколько? в настройках, по умолчанию 30 дней
            $plugin = wa('shop')->getPlugin('wait');
            $t0_cookie = (intval($plugin->getSettings('t0_cookie')) > 0) ? intval($plugin->getSettings('t0_cookie')) : 30;
            $t0_hours = (intval($plugin->getSettings('t0_hours')) > 0) ? intval($plugin->getSettings('t0_hours')) : 24;
			$expire = time() + ($t0_hours * 3600);
			
			wa()->getResponse()->setCookie('wait_show', time(), time() + 3600 * 24 * $t0_cookie, '/');
			wa()->getResponse()->setCookie('wait_code', $resultAdd['code'], time() + 3600 * $t0_hours, '/');
			wa()->getResponse()->setCookie('wait_code_expire', $expire, time() + 3600 * $t0_hours, '/');

            //{"status":"ok","data":{"result":{"is":"success","code":"WAIT0B40U2N7L2","type":"%","value":5.5,"hours":24}}}
            $this->response = array(
                'result' => $resultAdd
            );
        }
    }

    /*
     * return coupon code
     * @return string
     */
    private function generate_coupon_code()
    {
        $alphabet = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890";
        $result = '';
        while (strlen($result) < 10) {
            $result .= $alphabet{mt_rand(0, strlen($alphabet)-1)};
        }

        return 'WAIT' . $result;
    }

    /*
     * add coupon in shop
     * @return array
     */
    private function create_coupon()
    {
        $plugin = wa('shop')->getPlugin('wait');

		$t0_hours = (intval($plugin->getSettings('t0_hours')) > 0) ? intval($plugin->getSettings('t0_hours')) : 24;
        $t0_type = intval($plugin->getSettings('t0_type'));
		$t0_type = str_replace(array(0, 1, 2), array('%', 'RUB', '$FS'), $t0_type);
        $t0_value = $plugin->getSettings('t0_value');
        $t0_value = floatval(str_replace(',', '.', $t0_value));
        $t0_comment = htmlspecialchars($plugin->getSettings('t0_comment'), ENT_QUOTES);

        if ($t0_value > 0) {
		
            $code = $this->generate_coupon_code();
            $time = $t0_hours * 3600 + time();
            $expire_datetime = date('Y-m-d H:i:s', $time);
            $create_datetime = date('Y-m-d H:i:s', time());
            $create_contact_id = wa()->getUser()->getId();

            $coupon_data = array(
                'code' => $code,
                'type' => $t0_type,
                'limit' => 1,
                'value' => $t0_value,
                'comment' => $t0_comment,
                'expire_datetime' => $expire_datetime,
                'create_datetime' => $create_datetime,
                'create_contact_id' => 0,
            );

            $couponm = new shopCouponModel();
            $new_coupon_id = $couponm->insert($coupon_data);

            if ($new_coupon_id > 0) {
                $return = array(
                    'is' => 'success',
                    'code' => $code,
                    'type' => $t0_type,
                    'value' => $t0_value,
                    'hours' =>  $t0_hours,
                );
                return $return;
            } else {
                return array(
                    'is' => 'error',
                    'text' => 'При добавлении купона возникла ошибка, свяжитесь с администратором магазина.',
                );
            }            

        } else {
            return array(
				'is' => 'error',
				'text' => 'При добавлении купона возникла ошибка, свяжитесь с администратором магазина.',
			);
        }
    }    
    
}
