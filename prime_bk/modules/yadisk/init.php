<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	/*
	 * Класс модуля
	 */
	class CYadisk {
		var $version = "0.1";
		var $name = "yadisk";
		var $yalogin = "";
		var $yapassword = "";
		var $yafolder = "";
		var $status = 1;

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yadisk");
			if($row) {
				$this->status = $row['status'];
				$this->yalogin = $row['yalogin'];
				$this->yapassword = $row['yapassword'];
				$this->yafolder = $row['yafolder'];
			}
		}

		/*
		 * Функция, вызываемая при инсталляции модуля
		 */
		function onInstall() {
			global $db;

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_yadisk (
						id INT NOT NULL AUTO_INCREMENT,
						yalogin VARCHAR(255) NOT NULL DEFAULT '',
						yapassword VARCHAR(255) NOT NULL DEFAULT '',
						yafolder TEXT(2048) NOT NULL DEFAULT '',
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_yadisk (yalogin, yapassword, yafolder, status)
						VALUES(
							'',
							'',
							'/',
							0
						)");
		}

		/*
		 * Функция, вызываемая при удалении модуля
		 */
		function onUnInstall() {
			global $db;
			// Удаляем таблицы
			$db->query("DROP TABLE ".TABLES_PREFIX."_yadisk");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Yadisk", "yadisk"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['edit_yadisk'])) {
				//Add yadisk config
				$error_info = array();
				if(!isset($_POST['yalogin']) || $_POST['yalogin'] == "") {
					$error_info[] = __("Yandex login can't be empty", "yadisk");
				}
				if(!isset($_POST['yapassword']) || $_POST['yapassword'] == "") {
					$error_info[] = __("Yandex password can't be empty", "yadisk");
				}
				if(!isset($_POST['yafolder']) || $_POST['yafolder'] == "") {
					$error_info[] = __("Yandex folder can't be empty", "yadisk");
				}
				if(empty($error_info)) {
					if(isset($_POST['edit_yadisk'])) {
						//Change config
						$db->query("UPDATE ".TABLES_PREFIX."_yadisk SET yalogin = '".$db->safe(safe($_POST['yalogin']))."', yapassword = '".$db->safe($_POST['yapassword'])."', yafolder = '".$db->safe(safe($_POST['yafolder']))."', status = ".intval($_POST['yastatus'])." WHERE 1");
						$information = __("Yadisk config changed!", "yadisk");
					}
				}
			}
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yadisk");
			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_yadisk");
			return $row;
		}

		/*
		 * Функция sendFile
		 */
		function sendFile($file) {
			global $db, $settings, $Mod;
			if(!class_exists('webdav_client') && file_exists(dirname(__FILE__)."/../../backup_tmp/".$file)) {
				require_once(dirname(__FILE__).'/Yandex.Disk_client.php');
			}
			if(file_exists(dirname(__FILE__)."/../../backup_tmp/".$file)) {

				$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yadisk WHERE status = 1");
				if($row) {
					$wdc = new webdav_client();
					$wdc->set_server('ssl://webdav.yandex.ru');
					$wdc->set_port(443);
					$wdc->set_user($row['yalogin']);
					$wdc->set_pass($row['yapassword']);
					// use HTTP/1.1
					$wdc->set_protocol(1);
					// enable debugging
					$wdc->set_debug(false);

					$error = "";
					if (!$wdc->open()) {
						$error = __("Wrong login or password of Yandex.Disk", "yadisk");
					}

					// check if server supports webdav rfc 2518
					if (!$wdc->check_webdav()) {
						$error = __("WebDav not found, cannot connect to Yandex.Disk", "yadisk");
					}

					if($error != "" && isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage($error);
					}

					if($error != "") {
						return;
					}

					$http_status = $wdc->put_file($row['yafolder']."/".$file, dirname(__FILE__)."/../../backup_tmp/".$file);

					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Added to", "logs")." ".__("Yadisk", "yadisk").": ".$file);
					}

					$wdc->close();
				}
			}
		}

		/*
		 * Функция sendFile
		 */
		function deleteFile($file) {
			global $db, $settings, $Mod;
			if(!class_exists('webdav_client')) {
				require_once(dirname(__FILE__).'/Yandex.Disk_client.php');
			}

			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yadisk WHERE status = 1");

			if($row) {
				$wdc = new webdav_client();
				$wdc->set_server('ssl://webdav.yandex.ru');
				$wdc->set_port(443);
				$wdc->set_user($row['yalogin']);
				$wdc->set_pass($row['yapassword']);
				// use HTTP/1.1
				$wdc->set_protocol(1);
				// enable debugging
				$wdc->set_debug(false);


				$error = "";
				if (!$wdc->open()) {
					$error = __("Wrong login or password of Yandex.Disk", "yadisk");
				}

				// check if server supports webdav rfc 2518
				if (!$wdc->check_webdav()) {
					$error = __("WebDav not found, cannot connect to Yandex.Disk", "yadisk");
				}

				if($error != "" && isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
					$Mod->modules['logs']->addMessage($error);
				}

				if($error != "") {
					return;
				}

				$http_status =  $wdc->delete($row['yafolder']."/".$file);

				if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
					$Mod->modules['logs']->addMessage(__("Deleted from", "logs")." ".__("Yadisk", "yadisk").": ".$file);
				}

				$wdc->close();
			}
		}
	}
?>
