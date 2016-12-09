<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	/*
	 * Класс модуля
	 */
	class CFtp {
		var $version = "0.1";
		var $name = "ftp";
		var $ftplogin = "";
		var $ftppassword = "";
		var $ftphost = "";
		var $ftpfolder = "";
		var $status = 1;

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_ftp");
			if($row) {
				$this->status = $row['status'];
				$this->ftplogin = $row['ftplogin'];
				$this->ftppassword = $row['ftppassword'];
				$this->ftphost = $row['ftphost'];
				$this->ftpfolder = $row['ftpfolder'];
			}
		}

		/*
		 * Функция, вызываемая при инсталляции модуля
		 */
		function onInstall() {
			global $db;

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_ftp (
						id INT NOT NULL AUTO_INCREMENT,
						ftplogin VARCHAR(255) NOT NULL DEFAULT '',
						ftppassword VARCHAR(255) NOT NULL DEFAULT '',
						ftphost VARCHAR(255) NOT NULL DEFAULT '',
						ftpfolder TEXT(2048) NOT NULL DEFAULT '',
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_ftp (ftplogin, ftppassword, ftpfolder, status)
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
			$db->query("DROP TABLE ".TABLES_PREFIX."_ftp");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Ftp", "ftp"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['edit_ftp'])) {
				//Add ftp config
				$error_info = array();
				if(!isset($_POST['ftplogin']) || $_POST['ftplogin'] == "") {
					$error_info[] = __("Ftp login can't be empty", "ftp");
				}
				if(!isset($_POST['ftppassword']) || $_POST['ftppassword'] == "") {
					$error_info[] = __("Ftp password can't be empty", "ftp");
				}
				if(!isset($_POST['ftphost']) || $_POST['ftphost'] == "") {
					$error_info[] = __("Ftp host can't be empty", "ftp");
				}
				if(!isset($_POST['ftpfolder']) || $_POST['ftpfolder'] == "") {
					$error_info[] = __("Ftp folder can't be empty", "ftp");
				}
				if(empty($error_info)) {
					if(isset($_POST['edit_ftp'])) {
						//Change config
						$db->query("UPDATE ".TABLES_PREFIX."_ftp SET ftplogin = '".$db->safe(safe($_POST['ftplogin']))."', ftppassword = '".$db->safe($_POST['ftppassword'])."', ftphost = '".$db->safe($_POST['ftphost'])."', ftpfolder = '".$db->safe(safe($_POST['ftpfolder']))."', status = ".intval($_POST['ftpstatus'])." WHERE 1");
						$information = __("Ftp config changed!", "ftp");
					}
				}
			}
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_ftp");
			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_ftp");
			return $row;
		}

		/*
		 * Функция sendFile
		 */
		function sendFile($file) {
			global $db, $settings, $Mod;

			if(file_exists(dirname(__FILE__)."/../../backup_tmp/".$file)) {

				if($this->status) {
					$host = explode(":", $this->ftphost);
					$port = isset($host[1]) ? $host[1] : 21;
					$host = $host[0];

					if($conn_id = ftp_ssl_connect($host, $port)) {
						if(ftp_login($conn_id, $this->ftplogin, $this->ftppassword)) {
							if(ftp_pasv($conn_id, true) && ftp_put($conn_id, $this->ftpfolder."/".$file, dirname(__FILE__)."/../../backup_tmp/".$file, FTP_BINARY)) {
								if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
									$Mod->modules['logs']->addMessage(__("Added to", "logs")." ".__("Ftp", "ftp").": ".$file);
								}
							}
						} else {
							if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
								$Mod->modules['logs']->addMessage(__("Wrong login or password of Ftp", "ftp").": ".$file);
							}
						}
					} else {
						if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
							$Mod->modules['logs']->addMessage(__("Error while connect to Ftp", "ftp").": ".$file);
						}
					}
				}
			}
		}

		/*
		 * Функция sendFile
		 */
		function deleteFile($file) {
			global $db, $settings, $Mod;

			if($this->status) {
				$host = explode(":", $this->ftphost);
				$port = isset($host[1]) ? $host[1] : 21;
				$host = $host[0];

				if($conn_id = ftp_ssl_connect($host, $port)) {
					if(ftp_login($conn_id, $this->ftplogin, $this->ftppassword)) {
						if(ftp_pasv($conn_id, true) && @ftp_delete($conn_id, $this->ftpfolder."/".$file)) {
							if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
								$Mod->modules['logs']->addMessage(__("Deleted from", "logs")." ".__("Ftp", "ftp").": ".$file);
							}
						}
					} else {
						if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
							$Mod->modules['logs']->addMessage(__("Wrong login or password of Ftp", "ftp").": ".$file);
						}
					}
				} else {
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Error while connect to Ftp", "ftp").": ".$file);
					}
				}
			}
		}

	}
?>
