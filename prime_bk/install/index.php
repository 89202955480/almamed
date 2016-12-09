<?php
	//Access point
	define("_BOARD_VALID_", 1);

	// Проверка установки
	if(file_exists(dirname(__FILE__)."/../config.php")) {
		require_once(dirname(__FILE__)."/../config.php");
	}
	if(defined("INSTALLED") && INSTALLED) {
		die("To install or reinstall change config.php to define(\"INSTALLED\", 0);");
	}

	if(session_id() == "") session_start();

	$step = isset($_POST['step'])?intval($_POST['step']):1;

	if($step == 2 && isset($_POST['lang_submit'])) {
		$_SESSION['language'] = isset($_POST['language'])?safe($_POST['language']):"russian";
	}

	$language = get_from_session('language');
	if(file_exists(dirname(__FILE__)."/languages/".$language.".php"))
		require_once(dirname(__FILE__)."/languages/".$language.".php");
	else {
		$step = 1;
	}

	if($step == 1) {
		$content = "<form action='' method='post'>";
		$content .= "<span class='question'>".(defined('APB_INSTALL_LANGUAGE')?APB_INSTALL_LANGUAGE:"Choise the installation language").": </span>";
		$content .= "<select name='language'>";
		$options = '';
		if($handle = opendir(dirname(__FILE__)."/languages")) {
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != ".." && $file != ".svn") {
				$opt = substr($file, 0, -4);
				$options .= "<option value='".$opt."' ".($opt==$language?"selected":"").">".$opt."</option>";
				}
			}
			closedir($handle);
		}
		$content .= $options."</select>";
		$content .= "<input type='hidden' name='step' value='".($step+1)."' />";
		$content .= " <input class='button' type='submit' name='lang_submit' value='".(defined('APB_INSTALL_CONTINUE')?APB_INSTALL_CONTINUE:"Continue")."' />";
		$content .= "</form>";
	} else if($step == 2) {
		if(substr(substr(sprintf('%o', fileperms(dirname(__FILE__)."/../config.php")), -4), 1) < 666) {
			$content = "<form action='' method='post'>";
			$content .= "<span class='failure'>".APB_INSTALL_CONFIG_IS_NOT_WRITABLE."</span>";
			$content .= "<input type='hidden' name='step' value='".$step."' />";
			$content .= " <input class='button' type='submit' name='recheck_submit' value='".APB_INSTALL_RECHECK."' />";
			$content .= "</form>";
		} else {
			$content = "<form action='' method='post'>";
			$content .= "<div class='question'>".APB_INSTALL_DATABASE_CONFIG.":</div>";
			$content .= "<br /><div class='config' align='center'><table><tr>";
			$content .= "<td><span class='title-text'>".APB_INSTALL_DATABASE."</span></td><td><input class='input-text' type='text' name='database' value='".(isset($_POST['database'])?safe($_POST['database']):"mysql")."' />";
			$content .= "</td></tr><tr><td><span class='title-text'>".APB_INSTALL_DB_HOST."</span></td><td><input class='input-text' type='text' name='db_host' value='".(isset($_POST['db_host'])?safe($_POST['db_host']):"localhost")."' />";
			$content .= "</td></tr><tr><td><span class='title-text'>".APB_INSTALL_DB_NAME."</span></td><td><input class='input-text' type='text' name='db_name' value='".(isset($_POST['db_name'])?safe($_POST['db_name']):"")."' /></td></tr><tr><td><span class='title-text'>".APB_INSTALL_DB_USER."</span></td><td><input class='input-text' type='text' name='db_user' value='".(isset($_POST['db_user'])?safe($_POST['db_user']):"")."' />";
			$content .= "</td></tr><tr><td><span class='title-text'>".APB_INSTALL_DB_PASSWORD."</span></td><td><input class='input-text' type='password' name='db_password' value='' />";
			$content .= "</td></tr>";
			$content .= "<tr><td><span class='title-text'>".APB_INSTALL_DB_TABLES_PREFIX."</span></td><td><input class='input-text' type='text' name='tables_prefix' value='".(isset($_POST['tables_prefix'])?safe($_POST['tables_prefix']):"")."' />";
			$content .= "</td></tr><tr><td><span class='title-text'>".APB_INSTALL_ADMIN_NAME."</span></td><td><input class='input-text' type='text' name='admin_name' value='".(isset($_POST['admin_name'])?safe($_POST['admin_name']):"admin")."' />";
			$content .= "</td></tr><tr><td><span class='title-text'>".APB_INSTALL_ADMIN_PASSWORD."</span></td><td><input class='input-text' type='password' name='admin_password' value='' />";
			$content .= "</td></tr><tr><td><span class='title-text'>".APB_INSTALL_ADMIN_PASSWORD_CONFIRM."</span></td><td><input class='input-text' type='password' name='admin_password_conf' value='' />";
			$content .= "</td></tr><tr><td><span class='title-text'>".APB_INSTALL_URL."</span></td><td><input class='input-text' type='text' name='url' value='".(isset($_POST['url'])?safe($_POST['url']):"http://".$_SERVER['HTTP_HOST'].(dirname($_SERVER['PHP_SELF']) == "/"?"":str_replace("/install", "", dirname($_SERVER['PHP_SELF']))))."' />";
			$content .= "</td></tr><tr><td></td><td><input type='hidden' name='step' value='".($step+1)."' />";
			$content .= "</td></tr><tr><td></td><td><input class='button' type='submit' name='install_submit' value='".APB_INSTALL_INSTALL."' />";
			$content .= "</td></tr></table></div>";
			$content .= "</form>";
		}
	} else if($step == 3) {
		if(!($handler = @mysql_pconnect($_POST['db_host'], $_POST['db_user'], $_POST['db_password']))) {
			$content = "<form action='' method='post'>";
			$content .= "<span class='failure'>".APB_INSTALL_CONNECTION_ERROR.": </span>";
			$content .= "<input type='hidden' name='database' value='".(isset($_POST['database'])?safe($_POST['database']):"mysql")."' />";
			$content .= "<input type='hidden' name='db_host' value='".(isset($_POST['db_host'])?safe($_POST['db_host']):"localhost")."' />";
			$content .= "<input type='hidden' name='db_user' value='".(isset($_POST['db_user'])?safe($_POST['db_user']):"")."' />";
			$content .= "<input type='hidden' name='db_name' value='".(isset($_POST['db_name'])?safe($_POST['db_name']):"")."' />";
			$content .= "<input type='hidden' name='tables_prefix' value='".(isset($_POST['tables_prefix'])?safe($_POST['tables_prefix']):"")."' />";
			$content .= "<input type='hidden' name='admin_name' value='".(isset($_POST['admin_name'])?safe($_POST['admin_name']):"admin")."' />";
			$content .= "<input type='hidden' name='url' value='".(isset($_POST['url'])?safe($_POST['url']):"http://".$_SERVER['HTTP_HOST'].(dirname($_SERVER['PHP_SELF']) == "/"?"":str_replace("/install", "", dirname($_SERVER['PHP_SELF']))))."' />";
			$content .= "<input type='hidden' name='step' value='2' />";
			$content .= "<input class='button' type='submit' name='back_submit' value='".APB_INSTALL_BACK."' />";
			$content .= "</form>";
		} else if(!mysql_select_db(mysql_real_escape_string($_POST['db_name'], $handler), $handler)) {
			$content = "<form action='' method='post'>";
			$content .= "<span class='failure'>".APB_INSTALL_DB_NAME_ERROR.": </span>";
			$content .= "<input type='hidden' name='database' value='".(isset($_POST['database'])?safe($_POST['database']):"mysql")."' />";
			$content .= "<input type='hidden' name='db_host' value='".(isset($_POST['db_host'])?safe($_POST['db_host']):"localhost")."' />";
			$content .= "<input type='hidden' name='db_user' value='".(isset($_POST['db_user'])?safe($_POST['db_user']):"")."' />";
			$content .= "<input type='hidden' name='db_name' value='".(isset($_POST['db_name'])?safe($_POST['db_name']):"")."' />";
			$content .= "<input type='hidden' name='tables_prefix' value='".(isset($_POST['tables_prefix'])?safe($_POST['tables_prefix']):"")."' />";
			$content .= "<input type='hidden' name='admin_name' value='".(isset($_POST['admin_name'])?safe($_POST['admin_name']):"admin")."' />";
			$content .= "<input type='hidden' name='url' value='".(isset($_POST['url'])?safe($_POST['url']):"http://".$_SERVER['HTTP_HOST'].(dirname($_SERVER['PHP_SELF']) == "/"?"":str_replace("/install", "", dirname($_SERVER['PHP_SELF']))))."' />";
			$content .= "<input type='hidden' name='step' value='2' />";
			$content .= "<input class='button' type='submit' name='back_submit' value='".APB_INSTALL_BACK."' />";
			$content .= "</form>";
		} else if(!(isset($_POST['admin_name']) && $_POST['admin_name'] != '' && isset($_POST['admin_password']) && $_POST['admin_password'] != '' && $_POST['admin_password'] == $_POST['admin_password_conf'])){
			$content = "<form action='' method='post'>";
			$content .= "<span class='failure'>".APB_INSTALL_ADMIN_DATA_ERROR.": </span>";
			$content .= "<input type='hidden' name='database' value='".(isset($_POST['database'])?safe($_POST['database']):"mysql")."' />";
			$content .= "<input type='hidden' name='db_host' value='".(isset($_POST['db_host'])?safe($_POST['db_host']):"localhost")."' />";
			$content .= "<input type='hidden' name='db_user' value='".(isset($_POST['db_user'])?safe($_POST['db_user']):"")."' />";
			$content .= "<input type='hidden' name='db_name' value='".(isset($_POST['db_name'])?safe($_POST['db_name']):"")."' />";
			$content .= "<input type='hidden' name='tables_prefix' value='".(isset($_POST['tables_prefix'])?safe($_POST['tables_prefix']):"")."' />";
			$content .= "<input type='hidden' name='admin_name' value='".(isset($_POST['admin_name'])?safe($_POST['admin_name']):"admin")."' />";
			$content .= "<input type='hidden' name='url' value='".(isset($_POST['url'])?safe($_POST['url']):"http://".$_SERVER['HTTP_HOST'].(dirname($_SERVER['PHP_SELF']) == "/"?"":str_replace("/install", "", dirname($_SERVER['PHP_SELF']))))."' />";
			$content .= "<input type='hidden' name='step' value='2' />";
			$content .= "<input class='button' type='submit' name='back_submit' value='".APB_INSTALL_BACK."' />";
			$content .= "</form>";
		} else {
			if(file_exists(dirname(__FILE__)."/dump.sql"))
				$dump = file_get_contents(dirname(__FILE__)."/dump.sql");
			else {
				$content = "<div class='failure'>".APB_INSTALL_FATAL_ERROR_DUMP_NOT_FOUND."</div>";
			}
			$tables_prefix = mysql_safe($_POST['tables_prefix'], $handler);
			$dump = str_replace("#PREFIX#", $tables_prefix."_", $dump);
			$queries = preg_split("/;+(?=([^'|^\\\']*['|\\\'][^'|^\\\']*['|\\\'])*[^'|^\\\']*[^'|^\\\']$)/", $dump);
			foreach($queries as $query) {
				if (strlen(trim($query)) > 0) mysql_query($query, $handler);
			}

			mysql_query("UPDATE ".$tables_prefix."_settings SET settings_value = '".mysql_safe($language, $handler)."' WHERE settings_name = 'admin_panel_language'", $handler);
			mysql_query("UPDATE ".$tables_prefix."_settings SET settings_value = '".mysql_safe($language, $handler)."' WHERE settings_name = 'website_language'", $handler);

			$url = $_POST['url'];
			$url = substr($url, -1) == "/" ? $url : $url."/";
			$config = '<?php
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	define("DATABASE", "'.safe($_POST['database']).'");
	define("DB_HOST", "'.safe($_POST['db_host']).'");
	define("DB_NAME", "'.safe($_POST['db_name']).'");
	define("DB_USER", "'.safe($_POST['db_user']).'");
	define("DB_PASSWORD", "'.safe($_POST['db_password']).'");
	define("TABLES_PREFIX", "'.safe($_POST['tables_prefix']).'");
	define("ADMIN_NAME", "'.md5($_POST['admin_name']).'");
	define("ADMIN_PASSWORD", "'.md5($_POST['admin_password']).'");
	define("ROOT_URL", "'.safe($url).'");
	define("INSTALLED", 1);
?>';
			if(@file_put_contents(dirname(__FILE__)."/../config.php", $config)) {
				$content = "<div class='question'>".APB_INSTALL_SUCCESS."<br /><br />".APB_INSTALL_PLEASE_CLICK.":</div><br /><a href='".$url."'>".APB_INSTALL_TO_ADMIN."</a>";
			} else {
				$content = "<div class='failure'>".APB_INSTALL_FATAL_ERROR_CANNOT_WRITE_TO_CONFIG."</div>";
			}
		}
	}

	function get_from_session($name = '') {
		return isset($_SESSION[$name])?$_SESSION[$name]:null;
	}

	function safe($var = '') {
		return addslashes(htmlentities($var));
	}

	function mysql_safe(&$arg, $handler) {
		if(is_array($arg)) {
			foreach($arg as &$a) {
				$a = mysql_real_escape_string($a, $handler);
			}
		} else {
			$arg = mysql_real_escape_string($arg, $handler);
			return $arg;
		}
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>AutoBackupMaster 1.0 installation.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
	<center>
		<div class="wraper">
			<h1><?php echo defined('APB_INSTALL_TITLE')?APB_INSTALL_TITLE:"AutoBackupMaster installation"; ?></h1>
			<h2><?php echo defined('APB_INSTALL_DESCRIPTION')?APB_INSTALL_DESCRIPTION:"AutoBackupMaster installation. Open your maind on the best and newly features."; ?></h2>
		</div>
		<div class="content">
			<?php echo $content;?>
		</div>
	</center>
</body>
</html>
