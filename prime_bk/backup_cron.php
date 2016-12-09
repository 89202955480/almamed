<?php

	//Access point
	define("_BOARD_VALID_", 1);

	//Settings
	require_once(dirname(__FILE__)."/settings.php");

	$new_files = array();
	foreach($Mod->modules as $name => $mod) {
		if($mod->status == 1 && method_exists($mod, "createBackup")) {
			$new = $mod->createBackup();
			$new_files = array_merge($new_files, $new);
		}
	}

	$old_files = array();
	foreach($Mod->modules as $name => $mod) {
		if($mod->status == 1 && method_exists($mod, "deleteOldBackup")) {
			$old = $mod->deleteOldBackup();
			$old_files = array_merge($old_files, $old);
		}
	}

	foreach($Mod->modules as $name => $mod) {
		if($mod->status == 1 && method_exists($mod, "deleteFile")) {
			foreach($old_files as $file) {
				$mod->deleteFile($file);
			}
		}
	}

	sort($new_files);

	foreach($new_files as $file) {
		foreach($Mod->modules as $name => $mod) {
			if($mod->status == 1 && method_exists($mod, "sendFile")) {
				$delay = 1200;
				while($delay > 0 && !file_exists(dirname(__FILE__)."/backup_tmp/".$file)) {
					$delay--;
					sleep(1);
					echo dirname(__FILE__)."/backup_tmp/".$file."\n";
				}
				$mod->sendFile($file);
			}
		}
		unlink(dirname(__FILE__)."/backup_tmp/".$file);
	}
	if($handle = opendir(dirname(__FILE__)."/backup_tmp")) {
		$backup_errors = array();
		while(false !== ($file = readdir($handle))) {
			if($file != "." && $file != ".." && $file != "index.html" && $file != ".htaccess" && (strpos($file, "db_") === 0 || strpos($file, "files_") === 0)) {
				$backup_errors[] = $file;
			}
		}
		if(!empty($backup_errors)) {
			sort($backup_errors);
			fxn_send($settings['website_email'], __("Backup errors").": ".$script_url, __("Preview backup errors, report from:")." ".date("Y-m-d h:i:s", time())."<br /><br />".implode("<br />", $backup_errors)."<br /><br />".__("To clear ./backup_tmp folder")." <a href='".$script_url."clear.php?hash=".md5(implode(":", $backup_errors))."'>".__("click here")."</a>", $settings['website_email']);
		}
	}

?>
