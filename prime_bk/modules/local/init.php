<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	/*
	 * Класс модуля
	 */
	class CLocal {
		var $version = "0.1";
		var $name = "local";
		var $db_to_email = 0;
		var $localfolder = "";
		var $status = 1;

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_local");
			if($row) {
				$this->status = $row['status'];
				$this->db_to_email = $row['db_to_email'];
				$this->localfolder = $row['localfolder'];
			}
		}

		/*
		 * Функция, вызываемая при инсталляции модуля
		 */
		function onInstall() {
			global $db;

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_local (
						id INT NOT NULL AUTO_INCREMENT,
						localfolder TEXT(2048) NOT NULL DEFAULT '',
						db_to_email TINYINT NOT NULL DEFAULT 0,
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_local (localfolder, db_to_email, status)
						VALUES(
							'".dirname(dirname(dirname(__FILE__)))."/abm_backup',
							0,
							0
						)");
		}

		/*
		 * Функция, вызываемая при удалении модуля
		 */
		function onUnInstall() {
			global $db;
			// Удаляем таблицы
			$db->query("DROP TABLE ".TABLES_PREFIX."_local");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Local", "local"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['edit_local'])) {
				//Add local config
				$error_info = array();
				if(!isset($_POST['localfolder']) || $_POST['localfolder'] == "") {
					$error_info[] = __("Local folder can't be empty", "local");
				}
				if(empty($error_info)) {
					if(isset($_POST['edit_local'])) {
						//Change config
						$db->query("UPDATE ".TABLES_PREFIX."_local SET localfolder = '".$db->safe(safe($_POST['localfolder']))."', db_to_email = ".(isset($_POST['db_to_email']) ? intval($_POST['db_to_email']) : 0).", status = ".intval($_POST['localstatus'])." WHERE 1");
						$information = __("Local config changed!", "local");
					}
				}
			}
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_local");

			if(substr(substr(sprintf('%o', fileperms($row['localfolder'])), -4), 1) < 777) $information = __("Set 777 permissions to folder!")." ".safe($row['localfolder']);

			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_local");
			return $row;
		}

		/*
		 * Функция sendFile
		 */
		function sendFile($file) {
			global $db, $settings, $Mod;

			if(file_exists(dirname(__FILE__)."/../../backup_tmp/".$file)) {
				if(copy(dirname(__FILE__)."/../../backup_tmp/".$file, $this->localfolder."/".$file)) {
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Added to", "logs")." ".__("Local", "local").": ".$file);
					}
				} else {
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Error while store on", "local")." ".__("Local", "local").": ".$file);
					}
				}
				if($this->db_to_email && substr($file, 0, 3) == "db_") {
					fxn_send($settings['website_email'], __("DB backup", "local"), __("DB backup:", "local")." ".date("Y-m-d h:i:s", time()), $settings['website_email'], dirname(__FILE__)."/../../backup_tmp/".$file);
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Sent to email", "local").": ".$file);
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
				if(file_exists($this->localfolder."/".$file)) {
					unlink($this->localfolder."/".$file);
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Deleted from", "logs")." ".__("Local", "local").": ".$file);
					}
				}
			}
		}

	}
?>
