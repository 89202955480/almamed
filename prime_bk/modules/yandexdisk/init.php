<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	$phpversion = phpversion();
	$version = explode('.', $phpversion);
	$version = ($version[0] * 10000 + $version[1] * 100 + $version[2]);
	if($version < 50500) die("PHP >= 5.5 required");

	require_once dirname(__FILE__)."/Curl.php";
	require_once dirname(__FILE__)."/DataContainer/ContainerTrait.php";
	require_once dirname(__FILE__)."/DataContainer/Container.php";
	require_once dirname(__FILE__)."/Yandex/Client.php";
	require_once dirname(__FILE__)."/Yandex/CiperTrait.php";
	require_once dirname(__FILE__)."/Yandex/Request.php";
	require_once dirname(__FILE__)."/Yandex/Disk/FilterTrait.php";
	require_once dirname(__FILE__)."/Yandex/Disk/ResourceTrash.php";
	require_once dirname(__FILE__)."/Yandex/Disk/ResourceList.php";
	require_once dirname(__FILE__)."/Yandex/Disk/Resource.php";
	require_once dirname(__FILE__)."/Yandex/Disk.php";

	/*
	 * Класс модуля
	 */
	class CYandexdisk {
		var $version = "0.1";
		var $name = "yandexdisk";
		var $yandexdiskfolder = "";
		var $yandexdisktoken = "";
		var $status = 0;
		var $client_id = "6af952ee355c4a60a41d9b85b744b327";
		var $client_secret = "284e6b3cc2bb41569325cab16a16d348";

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yandexdisk");
			if($row) {
				$this->status = $row['status'];
				$this->yandexdiskfolder = $row['yandexdiskfolder'];
				$this->yandexdisktoken = $row['yandexdisktoken'];
			}
		}

		/*
		 * Функция, вызываемая при инсталляции модуля
		 */
		function onInstall() {
			global $db;

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_yandexdisk (
						id INT NOT NULL AUTO_INCREMENT,
						yandexdiskfolder TEXT(2048) NOT NULL DEFAULT '',
						yandexdisktoken VARCHAR(255) NOT NULL DEFAULT '',
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_yandexdisk (yandexdiskfolder, yandexdisktoken, status)
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
			$db->query("DROP TABLE ".TABLES_PREFIX."_yandexdisk");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Yandexdisk", "yandexdisk"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['edit_yandexdisk'])) {
				//Add yandexdisk config
				$error_info = array();
				if(empty($error_info)) {
					if(isset($_POST['edit_yandexdisk'])) {
						//Change config
						$db->query("UPDATE ".TABLES_PREFIX."_yandexdisk SET yandexdiskfolder = '".$db->safe(safe($_POST['yandexdiskfolder']))."', status = ".intval($_POST['yandexdiskstatus'])." WHERE 1");
						$information = __("Yandexdisk config changed!", "yandexdisk");
					}
				}
			}

			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yandexdisk");
			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_yandexdisk");
			return $row;
		}

		/*
		 * Функция sendFile
		 */
		function sendFile($file) {
			global $db, $settings, $Mod;

			if(file_exists(dirname(__FILE__)."/../../backup_tmp/".$file)) {

				$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yandexdisk WHERE status = 1");
				if($row) {
					try {
						$accessToken = $row['yandexdisktoken'];
						$yaxClient = new Mackey\Yandex\Disk($accessToken);
						$yaxfile = $yaxClient->resource("/Приложения/AutoBackupMaster/".(!empty($this->yandexdiskfolder) ? $this->yandexdiskfolder."/" : "").$file);
						$yaxfile->upload(dirname(__FILE__)."/../../backup_tmp/".$file);
						if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
							if($yaxfile->has()) {
								$Mod->modules['logs']->addMessage(__("Added to", "logs")." ".__("Yandexdisk", "yandexdisk").": ".$file);
							} else {
								$Mod->modules['logs']->addMessage(__("Error while added to", "yandexdisk")." ".__("Yandexdisk", "yandexdisk").": ".$file);
							}
						}
					} catch(Exception $e) {
						if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
							$Mod->modules['logs']->addMessage(__("Error while added to", "yandexdisk")." ".__("Yandexdisk", "yandexdisk").": ".$file);
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

			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_yandexdisk WHERE status = 1");
			if($row) {
				try {
					$accessToken = $row['yandexdisktoken'];
					$yaxClient = new Mackey\Yandex\Disk($accessToken);
					$yaxfile = $yaxClient->resource("/Приложения/AutoBackupMaster/".(!empty($this->yandexdiskfolder) ? $this->yandexdiskfolder."/" : "").$file);
					if($yaxfile->has()) $yaxfile->delete();
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						if(!$yaxfile->has()) {
							$Mod->modules['logs']->addMessage(__("Deleted from", "logs")." ".__("Yandexdisk", "yandexdisk").": ".$file);
						} else {
							$Mod->modules['logs']->addMessage(__("Error while deleted from", "yandexdisk")." ".__("Yandexdisk", "yandexdisk").": ".$file);
						}
					}
				} catch(Exception $e) {
					if(isset($Mod->modules['logs']) && $Mod->modules['logs']->status == 1) {
						$Mod->modules['logs']->addMessage(__("Error while deleted from", "yandexdisk")." ".__("Yandexdisk", "yandexdisk").": ".$file);
					}
				}
			}
		}

		// отправляем запрос курлом
		function postKeys($url, $peremen, $headers) {
			$post_arr=array();
			foreach ($peremen as $key=>$value) {
				$post_arr[]=$key."=".$value;
				}
			$data=implode('&',$post_arr);

			$handle=curl_init();
			curl_setopt($handle, CURLOPT_URL, $url);
			curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($handle, CURLOPT_POST, true);
			curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
			$response=curl_exec($handle);
			$code=curl_getinfo($handle, CURLINFO_HTTP_CODE);

			return array("code"=>$code,"response"=>$response);
		}

	}
?>
