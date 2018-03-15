<?php

class shopWaitPluginFrontendWaitcouponController extends waJsonController
{
	
    /*
     * return result create coupon
     * @return array
     */
    public function execute()
    {
        $ajax = waRequest::isXMLHttpRequest();

        if ($ajax) {
			$code = htmlspecialchars(waRequest::post('code'), ENT_QUOTES);
			
            //установка куки, по умолчанию 30 дней
            $plugin = wa('shop')->getPlugin('wait');
            $t0_cookie = (intval($plugin->getSettings('t0_cookie')) > 0) ? intval($plugin->getSettings('t0_cookie')) : 30;
            $t1_hours = (intval($plugin->getSettings('t1_hours')) > 0) ? intval($plugin->getSettings('t1_hours')) : 24;
			$expire = time() + ($t1_hours * 3600);
			
			wa()->getResponse()->setCookie('wait_show', time(), time() + 3600 * 24 * $t0_cookie, '/');
			wa()->getResponse()->setCookie('wait_code', $code, time() + 3600 * $t1_hours, '/');
			wa()->getResponse()->setCookie('wait_code_expire', $expire, time() + 3600 * $t1_hours, '/');
			
            $this->response = array(
                'result' => array(
					'is' => 'success',
				)
            );
        }
    }
    
}