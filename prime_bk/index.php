<?php

	//Access point
	define("_BOARD_VALID_", 1);

	//Settings
	require_once(dirname(__FILE__)."/settings.php");

	if(isset($_GET['quit']) && $_GET['quit'] == "yes") {
		unset($_SESSION['fxn_bfm_admin']);
	} else if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['save_parameters'])) {
		//Save settings
		$query = $db->query("SELECT settings_name FROM ".TABLES_PREFIX."_settings");
		while($row = $db->fetch($query)) {
			$val = $row['settings_type'] != "textarea" ? safe($_POST[$row['settings_name']]) : $_POST[$row['settings_name']];
			$db->query("UPDATE ".TABLES_PREFIX."_settings SET settings_value = '".$db->safe($val)."' WHERE settings_name = '".$row['settings_name']."'");
		}
		$information = __("Parameters saved!");
	}

	$tab = isset($_GET['tab']) ? safe($_GET['tab']) : "dashboard";

?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="shortcut icon" type="x-image" href="<?php echo $script_url;?>/favicon.ico" />
		<title><?php echo __("AutoBackupMaster"); ?></title>
		<link rel="stylesheet" href="<?php echo $script_url;?>css/style.css" type="text/css" media="all" />
		<script src="<?php echo $script_url;?>js/jquery.mini.js"></script>
	</head>
	<body>
		<?php if(!isset($_SESSION['fxn_bfm_admin']) && (!isset($_POST['login']) || !isset($_POST['pass']) || md5($_POST['login']) != ADMIN_NAME || md5($_POST['pass']) != ADMIN_PASSWORD)): ?>
			<div id="login_form">
				<div id="top_title"><?php echo __("AutoBackupMaster"); ?></div>
				<form action="" method="post">
					<span><?php echo __("Login"); ?>:</span> <input type="text" name="login" value="<?php echo isset($_POST['login']) ? safe($_POST['login']) : ""?>" />
					<br />
					<span><?php echo __("Password"); ?>:</span> <input type="password" name="pass" value="" />
					<br />
					<input type="submit" name="submit" value="<?php echo __("Enter"); ?>" />
					<br style="clear: both;" />
				</form>
			</div>
		<?php else:
			$_SESSION['fxn_bfm_admin'] = true;
			if(substr(substr(sprintf('%o', fileperms(dirname(__FILE__)."/backup_tmp")), -4), 1) < 777) $information = __("Set 777 permissions to folder!")." ".dirname(__FILE__)."/backup_tmp";
			$control = array();
			$configs = array();
			$logs = array();
			foreach($Mod->modules as $name => $mod) {
				$menu = $mod->onMenu();
				$configs[$name] = $menu['configs'];
			}
		?>
			<div id="stat">
				<div id="top_title"><?php echo __("Admin Panel"); ?></div>
				<div id="conteiner">
					<div align="right"><a href="?quit=yes"><?php echo __("Quit"); ?></a></div>
					<ul>
						<li <?php echo $tab == "dashboard" ? 'class="active_tab"' : "";?>><a href="?tab=dashboard"><?php echo __("DashBoard"); ?></a></li>
						<li <?php echo $tab == "configs" ? 'class="active_tab"' : "";?>>
							<span><?php echo __("Configs"); ?></span>
							<ul>
								<?php foreach($configs as $name => $val):?>
									<li><a href="?tab=configs&mod=<?php echo $name;?>&func=<?php echo $val[1];?>"><?php echo $val[0];?></a></li>
								<?php endforeach;?>
							</ul>
						</li>
						<li <?php echo $tab == "parameters" ? 'class="active_tab"' : "";?>><a href="?tab=parameters"><?php echo __("Parameters"); ?></a></li>
						<li <?php echo $tab == "modules" ? 'class="active_tab"' : "";?>><a href="?tab=modules"><?php echo __("Modules"); ?></a></li>
					</ul>
					<br style="clear: left;"/>
					<?php
						switch($tab) {
							case 'parameters':
								require_once(dirname(__FILE__)."/parameters.php");
								break;
							case 'configs':
								if(method_exists($Mod->modules[$_GET['mod']], $_GET['func'])) {
									$Mod->modules[$_GET['mod']]->$_GET['func']();
								}
								break;
							case 'modules':
								$Mod->onModules();
								break;
							case 'dashboard':
							default:
								require_once(dirname(__FILE__)."/dashboard.php");
								break;
						}
					?>
					<br />
					<div align="right"><?php echo __("Powered by"); ?> <a href="http://find-xss.net" target="_black">Find-XSS.net</a> , <?php echo __("Design by"); ?> <a href="http://kasyanov.info" target="_black">Kasyanov.info</a></div>
				</div>
			</div>
		<?php endif; ?>
	</body>
</html>

