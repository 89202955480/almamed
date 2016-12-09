<?php

	// Прямой доступ закрыт
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	/*
	 * Класс модуля
	 */
	class CLogs {
		var $version = "0.1";
		var $name = "logs";
		var $status = 0;

		/*
		 * Конструктор
		 */
		function __construct() {
			global $db;
			$row = $db->query_fetch_row("SELECT * FROM ".TABLES_PREFIX."_logs");
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
			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_logs (
						id INT NOT NULL AUTO_INCREMENT,
						status TINYINT NOT NULL DEFAULT 0,
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("CREATE TABLE IF NOT EXISTS ".TABLES_PREFIX."_logs_messages (
						id INT NOT NULL AUTO_INCREMENT,
						message_time INT NOT NULL DEFAULT 0,
						message TEXT(2048) NOT NULL DEFAULT '',
						PRIMARY KEY (id)
					) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_logs (status)
						VALUES(1)");
		}

		/*
		 * Функция, вызываемая при удалении модуля
		 */
		function onUnInstall() {
			global $db;
			// Удаляем таблицы
			$db->query("DROP TABLE ".TABLES_PREFIX."_logs");
			$db->query("DROP TABLE ".TABLES_PREFIX."_logs_messages");
		}

		/*
		 * Функция меню модуля
		 */
		function onMenu() {
			return array(
				"configs" => array(__("Logs", "logs"), "onConfigs")
			);
		}

		/*
		 * Функция мест под рекламу
		 */
		function onConfigs() {
			global $db, $images_url, $script_url;
			$query = $db->query("SELECT * FROM ".TABLES_PREFIX."_logs_messages ORDER BY id DESC LIMIT 30");
			require_once(dirname(__FILE__)."/configs.php");
		}

		/*
		 * Функция dashboard
		 */
		function onDashboard() {
			global $db;
			$row = $db->query_fetch_row("SELECT status FROM ".TABLES_PREFIX."_logs");
			return $row;
		}

		/*
		 * Функция sendFile
		 */
		function addMessage($message) {
			global $db, $settings;
			$db->query("INSERT IGNORE INTO ".TABLES_PREFIX."_logs_messages(message_time, message)
						VALUES(".time().", '".$db->safe($message)."')");
			$db->query("DELETE FROM ".TABLES_PREFIX."_logs_messages WHERE id IN (SELECT id FROM ".TABLES_PREFIX."_logs_messages ORDER BY id DESC LIMIT 30, 100)");
		}
	}
?>
