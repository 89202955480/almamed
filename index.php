<?php
$prefix_delite = substr($_SERVER['REQUEST_URI'], 0, -3);
$prefix = substr($_SERVER['REQUEST_URI'], -3);
if($prefix == '-r/'){
	header( 'Location: http://'.$_SERVER['HTTP_HOST'].$prefix_delite.'/', true, 301 );
}else {
	$path = dirname(__FILE__) . '/wa-config/SystemConfig.class.php';
	if (file_exists($path)) {
		require_once($path);
		waSystem::getInstance(null, new SystemConfig())->dispatch();
	} else {
		$path = dirname(__FILE__) . '/wa-installer/install.php';
		if (file_exists($path)) {
			require_once($path);
		} else {
			//404
		}
	}
}
