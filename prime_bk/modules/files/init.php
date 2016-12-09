<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	/*
	 * Класс модуля
	 */
	class CFiles {
		var $version = "0.1";
		var $name = "files";
		var $status = 1;

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_files");
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
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_files (
						id INT NOT NULL AUTO_INCREMENT,
						files_include TEXT NOT NULL DEFAULT '',
						files_exclude TEXT NOT NULL DEFAULT '',
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_files (files_include, files_exclude, status)
						VALUES(
							'',
							'',
							0
						)");

			// Таблицы модуля
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_files_backup (
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
			$db->query("DROP TABLE ".TABLES_PREFIX."_files");
			$db->query("DROP TABLE ".TABLES_PREFIX."_files_backup");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Files", "files"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			if(isset($_SESSION['fxn_bfm_admin']) && isset($_POST['edit_files'])) {
				//Add Files config
				$error_info = array();
				if(empty($error_info)) {
					if(isset($_POST['edit_files'])) {
						//Change config
						$files_include = serialize(array_unique(explode("\r\n", trim($_POST['files_include']))));
						$files_exclude = serialize(array_unique(explode("\r\n", trim($_POST['files_exclude']))));
						$db->query("UPDATE ".TABLES_PREFIX."_files SET files_include = '".$db->safe($files_include)."', files_exclude = '".$db->safe($files_exclude)."', status = ".intval($_POST['files_status'])." WHERE 1");
						$information = __("Files config changed!", "files");
					}
				}
			}
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_files");
			if($row) {
				$row['files_include'] = unserialize($row['files_include']);
				$row['files_exclude'] = unserialize($row['files_exclude']);
			} else {
				$row = array();
				$row['files_include'] = array();
				$row['files_exclude'] = array();
			}
			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_files");
			return $row;
		}

		/*
		 * Функция createBackup
		 */
		function createBackup() {
			global $db, $settings;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_files WHERE status = 1");
			$row['files_include'] = unserialize($row['files_include']);
			$row['files_exclude'] = unserialize($row['files_exclude']);
			$to_add = array();
			$count = count($row['files_include']);
			$exclude_cmd = "";
			foreach($row['files_exclude'] as $exclude) {
				if(!empty($exclude)) $exclude_cmd .= ' --exclude "'.$exclude.'"';
			}
			foreach($row['files_include'] as $include) {
				$name = explode("/", $include);
				$file = "files_".end($name)."_".date("Y_m_d__H_i_s", time()).".tar.gz";
				exec('tar -cPzvf '.dirname(dirname(dirname(__FILE__)))."/backup_tmp/".$file.' '.$include.$exclude_cmd);
				$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_files_backup (file_name, status)
								VALUES(
									'".$db->safe($file)."',
									1
							)");
				$to_add[] = $file;
			}
			$query = $db->query("SELECT * FROM ".TABLES_PREFIX."_files_backup WHERE 1 ORDER BY id DESC LIMIT ".intval($settings['website_backup_number'] * $count).", 1000");
			$to_delete = array();
			while($row = $db->fetch($query)) {
				$to_delete[] = $row['id'];
			}
			$db->query("UPDATE ".TABLES_PREFIX."_files_backup SET status = 0 WHERE id IN (".implode(",", $to_delete).")");

			return $to_add;
		}

		/*
		 * Функция deleteOldBackup
		 */
		function deleteOldBackup() {
			global $db, $settings;
			$query = $db->query("SELECT * FROM ".TABLES_PREFIX."_files_backup WHERE status = 0");
			$to_delete = array();
			while($row = $db->fetch($query)) {
				$to_delete[] = $row['file_name'];
			}
			$db->query("DELETE FROM ".TABLES_PREFIX."_files_backup WHERE status = 0");
			return $to_delete;
		}

	}
?>
