<?php

class shopWaitPluginFrontendWaitsetcookieController extends waJsonController
{

    /*
     * set cookie
     */
    public function execute()
    {
        $ajax = waRequest::isXMLHttpRequest();

        if ($ajax) {
            //установка куки, на сколько? в настройках, по умолчанию 30 дней
            $plugin = wa('shop')->getPlugin('wait');
            $t0_cookie = (intval($plugin->getSettings('t0_cookie')) > 0) ? intval($plugin->getSettings('t0_cookie')) : 30;
			$inCarts = intval($plugin->getSettings('in_carts'));
			$summInCarts = floatval(str_replace(',', '.', $plugin->getSettings('summ_in_carts')));
			$show = 1;
			
			if ($inCarts) {
				$cart = new shopCart();
				$countInCarts = $cart->count();
				$totalInCarts = $cart->total();
				
				if (!$countInCarts OR $totalInCarts < $summInCarts) {
					$show = 0;
				} else {
					wa()->getResponse()->setCookie('wait_show', time(), time() + 3600 * 24 * $t0_cookie, '/');
				}
			} else {
				wa()->getResponse()->setCookie('wait_show', time(), time() + 3600 * 24 * $t0_cookie, '/');
			}
			
			$this->response = array(
				'result' => array(
					'is' => 'success',
					'show' => $show,
				)
			);
		}
    }

}