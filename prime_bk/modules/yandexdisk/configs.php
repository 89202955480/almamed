<?php
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	$authorizeUrl = "https://oauth.yandex.ru/authorize?response_type=code&client_id=".$this->client_id;

	$isToken = true;
	try {
		if(isset($_POST['yandexdiskauthcode']) && !empty($_POST['yandexdiskauthcode'])) {
			$result = $this->postKeys("https://oauth.yandex.ru/token",
					array(
							'grant_type'=> 'authorization_code', // тип авторизации
							'code'=> $_POST["yandexdiskauthcode"], // наш полученный код
							'client_id'=>$this->client_id,
							'client_secret'=>$this->client_secret
						),
					array('Content-type: application/x-www-form-urlencoded')
				);
			if($result["code"]==200) {
				$result["response"]= json_decode($result["response"], true);
				$accessToken = $result["response"]["access_token"];
				$db->query("UPDATE ".TABLES_PREFIX."_yandexdisk SET yandexdisktoken = '".$db->safe($accessToken)."' WHERE 1");
			} else {
				$isToken = false;
			}
		} else {
			$accessToken = $row['yandexdisktoken'];
		}
		$yaxClient = new Mackey\Yandex\Disk($accessToken);
		if(!$yaxClient->getContents()) {
			$isToken = false;
		}
		//$accountInfo = $yaxClient->getAccountInfo();
	} catch(Exception $e) {
		$isToken = false;
	}

?>
<div id="information"><?php echo isset($information) ? $information : "";?></div>
<br />
<br />
<form action="" method="post" >
	<table width="100%" id="param">
		<tr class='row_2'>
			<th colspan="2"><?php echo __("Yandexdisk config", "yandexdisk"); ?></th>
		</tr>
		<?php if(isset($error_info) && !empty($error_info)): ?>
			<td colspan="2"><font color="ff3333"><?php echo implode("<br />", $error_info); ?></font></td>
		<?php endif;?>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Yandexdisk authorization code", "yandexdisk"); ?> <b><?php if($isToken) { echo "<font color='#00aa00'>".__("no needed", "yandexdisk")."</font>"; } else { echo "<font color='#aa0000'>".__("You need authorization", "yandexdisk")."</font>"; }; ?></b><span><?php echo __("Copy and past it here", "yandexdisk"); ?></span></span></td>
			<td><input class="large" type="text" name="yandexdiskauthcode" value=""/> <a target="_blank" href="<?php echo $authorizeUrl;?>"><?php if($isToken) { echo __("Re-authorization", "yandexdisk"); } else { echo __("Get authorization code", "yandexdisk"); }; ?></a></td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Yandexdisk backup folder", "yandexdisk"); ?><span><?php echo __("Where keep backups, must be created on Yandexdisk before running backups script", "yandexdisk"); ?></span></span></td>
			<td>/Приложения/AutoBackupMaster/<input class="large" type="text" name="yandexdiskfolder" value="<?php echo isset($row['yandexdiskfolder']) ? $row['yandexdiskfolder'] : ""; ?>" /></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Enabled", "yandexdisk"); ?><span><?php echo __("Check to enable", "yandexdisk"); ?></span></span></td>
			<td>
				<input type="checkbox" name="yandexdiskstatus" <?php echo $row['status'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_0'>
			<td></td>
			<td><input type="submit" name="edit_yandexdisk" value="<?php echo __("Save config", "yandexdisk"); ?>" /></td>
		</tr>
	</table>
</form>

