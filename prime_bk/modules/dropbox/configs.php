<?php
	defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed.");

	require_once dirname(__FILE__)."/lib/Dropbox/autoload.php";
	use \Dropbox as dbx;

	$appInfo = dbx\AppInfo::loadFromJsonFile(dirname(__FILE__)."/keys.json");
	$webAuth = new dbx\WebAuthNoRedirect($appInfo, "AutoBackupMaster");

	$authorizeUrl = $webAuth->start();

	$isToken = true;
	try {
		if(isset($_POST['dropboxauthcode']) && !empty($_POST['dropboxauthcode'])) {
			list($accessToken, $dropboxUserId) = $webAuth->finish($_POST['dropboxauthcode']);
			$db->query("UPDATE ".TABLES_PREFIX."_dropbox SET dropboxtoken = '".$db->safe($accessToken)."' WHERE 1");
		} else {
			$accessToken = $row['dropboxtoken'];
		}
		$dbxClient = new dbx\Client($accessToken, "AutoBackupMaster");
		//$accountInfo = $dbxClient->getAccountInfo();
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
			<th colspan="2"><?php echo __("Dropbox config", "dropbox"); ?></th>
		</tr>
		<?php if(isset($error_info) && !empty($error_info)): ?>
			<td colspan="2"><font color="ff3333"><?php echo implode("<br />", $error_info); ?></font></td>
		<?php endif;?>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Dropbox authorization code", "dropbox"); ?> <b><?php if($isToken) { echo "<font color='#00aa00'>".__("no needed", "dropbox")."</font>"; } else { echo "<font color='#aa0000'>".__("You need authorization", "dropbox")."</font>"; }; ?></b><span><?php echo __("Copy and past it here", "dropbox"); ?></span></span></td>
			<td><input class="large" type="text" name="dropboxauthcode" value=""/> <a target="_blank" href="<?php echo $authorizeUrl;?>"><?php if($isToken) { echo __("Re-authorization", "dropbox"); } else { echo __("Get authorization code", "dropbox"); }; ?></a></td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Dropbox backup folder", "dropbox"); ?><span><?php echo __("Where keep backups, must be created on Dropbox before running backups script", "dropbox"); ?></span></span></td>
			<td>/Apps/AutoBackupMaster/<input class="large" type="text" name="dropboxfolder" value="<?php echo isset($row['dropboxfolder']) ? $row['dropboxfolder'] : ""; ?>" /></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Enabled", "dropbox"); ?><span><?php echo __("Check to enable", "dropbox"); ?></span></span></td>
			<td>
				<input type="checkbox" name="dropboxstatus" <?php echo $row['status'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_0'>
			<td></td>
			<td><input type="submit" name="edit_dropbox" value="<?php echo __("Save config", "dropbox"); ?>" /></td>
		</tr>
	</table>
</form>

