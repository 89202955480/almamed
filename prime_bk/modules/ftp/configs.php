<?php defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed."); ?>
<div id="information"><?php echo isset($information) ? $information : "";?></div>
<br />
<br />
<form action="" method="post" >
	<table width="100%" id="param">
		<tr class='row_2'>
			<th colspan="2"><?php echo __("Ftp config", "ftp"); ?></th>
		</tr>
		<?php if(isset($error_info) && !empty($error_info)): ?>
			<td colspan="2"><font color="ff3333"><?php echo implode("<br />", $error_info); ?></font></td>
		<?php endif;?>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Ftp host", "ftp"); ?><span><?php echo __("Ftp host:port", "ftp"); ?></span></span></td>
			<td><input class="large" type="text" name="ftphost" value="<?php echo isset($row['ftphost']) ? $row['ftphost'] : ""; ?>" /></td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Ftp login", "ftp"); ?><span><?php echo __("Ftp account login", "ftp"); ?></span></span></td>
			<td><input class="large" type="text" name="ftplogin" value="<?php echo isset($row['ftplogin']) ? $row['ftplogin'] : ""; ?>" /></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Ftp password", "ftp"); ?><span><?php echo __("Ftp account password", "ftp"); ?></span></span></td>
			<td><input class="large" type="password" name="ftppassword" value="<?php echo isset($row['ftppassword']) ? $row['ftppassword'] : ""; ?>" /></td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Ftp backup folder", "ftp"); ?><span><?php echo __("Where keep backups, must be created before running backups script.", "ftp"); ?></span></span></td>
			<td><input class="large" type="text" name="ftpfolder" value="<?php echo isset($row['ftpfolder']) ? $row['ftpfolder'] : "/"; ?>" /></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Enabled", "ftp"); ?><span><?php echo __("Check to enable", "ftp"); ?></span></span></td>
			<td>
				<input type="checkbox" name="ftpstatus" <?php echo $row['status'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_0'>
			<td></td>
			<td><input type="submit" name="edit_ftp" value="<?php echo __("Save config", "ftp"); ?>" /></td>
		</tr>
	</table>
</form>

