<?php defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed."); ?>
<div id="information"><?php echo isset($information) ? $information : "";?></div>
<br />
<br />
<form action="" method="post" >
	<table width="100%" id="param">
		<tr class='row_2'>
			<th colspan="2"><?php echo __("Local config", "local"); ?></th>
		</tr>
		<?php if(isset($error_info) && !empty($error_info)): ?>
			<td colspan="2"><font color="ff3333"><?php echo implode("<br />", $error_info); ?></font></td>
		<?php endif;?>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Local backup folder", "local"); ?><span><?php echo __("Where keep backups, must be created before running backups script.", "local"); ?></span></span></td>
			<td><input style="width: 500px;" class="large" type="text" name="localfolder" value="<?php echo isset($row['localfolder']) ? $row['localfolder'] : dirname(dirname(dirname(__FILE__)))."/abm_backup"; ?>" /></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Send DB to email", "local"); ?><span><?php echo __("Send DB backup to admin email", "local"); ?></span></span></td>
			<td>
				<input type="checkbox" name="db_to_email" <?php echo $row['db_to_email'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Enabled", "local"); ?><span><?php echo __("Check to enable", "local"); ?></span></span></td>
			<td>
				<input type="checkbox" name="localstatus" <?php echo $row['status'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_1'>
			<td></td>
			<td><input type="submit" name="edit_local" value="<?php echo __("Save config", "local"); ?>" /></td>
		</tr>
	</table>
</form>

