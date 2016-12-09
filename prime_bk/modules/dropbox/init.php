<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	require_once dirname(__FILE__)."/lib/Dropbox/autoload.php";
	use \Dropbox as dbx;

	/*
	 * Класс модуля
	 */
	class CDropbox {
		var $version = "0.1";
		var $name = "dropbox";
		var $dropboxfolder = "";
		var $dropboxtoken = "";
		var $status = 0;

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_dropbox");
			if($row) {
				$this->status = $row['status'];
				$this->dropboxfolder = $row['dropboxfolder'];
				$this->dropboxtoken = $row['dropboxtoken'];
			}
		}

		/*
		 * Функция, вызываемая при инсталляции модуля
		 */
		function onInstall() {
			global $db;

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_dropbox (
						id INT NOT NULL AUTO_INCREMENT,
						dropboxfolder TEXT(2048) NOT NULL DEFAULT '',
						dropboxtoken VARCHAR(255) NOT NULL DEFAULT '',
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_dropbox (dropboxfolder, dropboxtoken, status)
						VALUES(
							'',
							'',
							0
						)");
		}

		/*
		 * Функция, вызываемая при удалении модуля
		 */
		function onUnInstall() {
			global $db;
			// Удаляем таблицы
			$db->query("DROP TABLE ".TABLES_PREFIX."_dropbox");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Dropbox", "dropbox"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['edit_dropbox'])) {
				//Add dropbox config
				$error_info = array();
				if(empty($error_info)) {
					if(isset($_POST['edit_dropbox'])) {
						//Change config
						$db->query("UPDATE ".TABLES_PREFIX."_dropbox SET dropboxfolder = '".$db->safe(safe($_POST['dropboxfolder']))."', status = ".intval($_POST['dropboxstatus'])." WHERE 1");
						$information = __("Dropbox config changed!", "dropbox");
					}
				}
			}

			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_dropbox");
			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_dropbox");
			return $row;
		}

		/*
		 * Функция sendFile
		 */
		function sendFile($file) {
			global $db, $settings, $Mod;

			if(file_exists(dirname(__FILE__)."/../../backup_tmp/".$file)) {

				$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_dropbox WHERE status = 1");
				if($row) {
					try {
						$accessToken = $row['dropboxtoken'];
						$dbxClient = new dbx\Client($accessToken, "AutoBackupMaster");

						$f = fopen(dirname(__FILE__)."/../../backup_tmp/".$file, "rb");
						$result = $dbxClient->uploadFile("/".(!empty($row['dropboxfolder']) ? $row['dropboxfolder']."/" : "").$file, dbx\WriteMode::add(), $f);
						fclose($f);

						if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
							$Mod->modules['logs']->addMessage(__("Added to", "logs")." ".__("Dropbox", "dropbox").": ".$file);
						}
					} catch(Exception $e) {
						if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
							$Mod->modules['logs']->addMessage(__("Error while added to", "dropbox")." ".__("Dropbox", "dropbox").": ".$file);
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

			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_dropbox WHERE status = 1");
			if($row) {
				try {
					$accessToken = $row['dropboxtoken'];
					$dbxClient = new dbx\Client($accessToken, "AutoBackupMaster");
					$result = $dbxClient->getMetadata("/".(!empty($row['dropboxfolder']) ? $row['dropboxfolder']."/" : "").$file);
					if(!empty($result)) {
						$result = $dbxClient->delete("/".(!empty($row['dropboxfolder']) ? $row['dropboxfolder']."/" : "").$file);
						if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
							$Mod->modules['logs']->addMessage(__("Deleted from", "logs")." ".__("Dropbox", "dropbox").": ".$file);
						}
					}
				} catch(Exception $e) {
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Error while deleted from", "dropbox")." ".__("Dropbox", "dropbox").": ".$file);
					}
				}
			}
		}
	}
?>
