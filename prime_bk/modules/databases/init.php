<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	/*
	 * Класс модуля
	 */
	class CDatabases {
		var $version = "0.1";
		var $name = "databases";
		var $status = 1;

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_databases");
			if($row) {
				$this->status = $row['status'];
			}
		}

		/*
		 * Функция, вызываемая при инсталляции модуля
		 */
		function onInstall() {
			global $db;

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_databases (
						id INT NOT NULL AUTO_INCREMENT,
						databases_name TEXT(8192) NOT NULL DEFAULT '',
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_databases (databases_name, status)
						VALUES(
							'',
							0
						)");

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_databases_backup (
						id INT NOT NULL AUTO_INCREMENT,
						file_name TEXT(1024) NOT NULL DEFAULT '',
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");
		}

		/*
		 * Функция, вызываемая при удалении модуля
		 */
		function onUnInstall() {
			global $db;
			// Удаляем таблицы
			$db->query("DROP TABLE ".TABLES_PREFIX."_databases");
			$db->query("DROP TABLE ".TABLES_PREFIX."_databases_backup");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Databases", "databases"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['edit_databases'])) {
				//Add databases config
				$error_info = array();
				if(empty($error_info)) {
					if(isset($_POST['edit_databases'])) {
						//Change config
						$db->query("UPDATE ".TABLES_PREFIX."_databases SET databases_name = '".$db->safe(serialize($_POST['databases_name']))."', status = ".intval($_POST['databases_status'])." WHERE 1");
						$information = __("Databases config changed!", "databases");
					}
				}
			}
			$query = $db->query("SHOW databases");
			$databases = array();
			$exlude = array("information_schema", "mysql", "performance_schema");
			while($row2 = $db->fetch($query)) {
				if(!in_array($row2['Database'], $exlude)) $databases[] = $row2['Database'];
			}
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_databases");
			$row['databases_name'] = unserialize($row['databases_name']);
			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_databases");
			return $row;
		}

		/*
		 * Функция createBackup
		 */
		function createBackup() {
			global $db, $settings;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_databases WHERE status = 1");
			$row['databases_name'] = unserialize($row['databases_name']);
			$to_add = array();
			$count = count($row['databases_name']);
			foreach($row['databases_name'] as $database) {
				$file = "db_".$database."_".date("Y_m_d__H_i_s", time()).".sql.gz";
				exec('mysqldump --user='.DB_USER.' --password="'.addslashes(DB_PASSWORD).'" --host='.DB_HOST.' --databases '.$database.' | gzip -c > '.dirname(__FILE__)."/../../backup_tmp/".$file);
					$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_databases_backup (file_name, status)
							VALUES(
								'".$db->safe($file)."',
								1
					)");
					$to_add[] = $file;
			}
			$query = $db->query("SELECT * FROM ".TABLES_PREFIX."_databases_backup WHERE 1 ORDER BY id DESC LIMIT ".intval($settings['website_backup_number'] * $count).", 1000");
			$to_delete = array();
			while($row = $db->fetch($query)) {
				$to_delete[] = $row['id'];
			}
			$db->query("UPDATE ".TABLES_PREFIX."_databases_backup SET status = 0 WHERE id IN (".implode(",", $to_delete).")");

			return $to_add;
		}

		/*
		 * Функция deleteOldBackup
		 */
		function deleteOldBackup() {
			global $db, $settings;
			$query = $db->query("SELECT * FROM ".TABLES_PREFIX."_databases_backup WHERE status = 0");
			$to_delete = array();
			while($row = $db->fetch($query)) {
				$to_delete[] = $row['file_name'];
			}
			$db->query("DELETE FROM ".TABLES_PREFIX."_databases_backup WHERE status = 0");
			return $to_delete;
		}

	}
?>
