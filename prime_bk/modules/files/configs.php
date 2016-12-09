<?php defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed."); ?>
<div id="information"><?php echo isset($information) ? $information : "";?></div>
<br />
<br />
<form action="" method="post" >
	<table width="100%" id="param">
		<tr class='row_2'>
			<th colspan="2"><?php echo __("Files for backup", "files"); ?></th>
		</tr>
		<?php if(isset($error_info) && !empty($error_info)): echo $row['files_include'];?>
			<td colspan="2"><font color="ff3333"><?php echo implode("<br />", $error_info); ?></font></td>
		<?php endif;?>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Folders for backup", "files"); ?><span><?php echo __("Folders for backup new line separated", "files"); ?></span></span></td>
			<td><textarea name="files_include"><?php echo !empty($row['files_include']) ? implode("\n", $row['files_include']) : dirname(dirname(dirname(dirname(__FILE__)))); ?></textarea></td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Folders to exclude", "files"); ?><span><?php echo __("Folders to exclude new line separated", "files"); ?></span></span></td>
			<td><textarea name="files_exclude"><?php echo !empty($row['files_exclude']) ? implode("\n", $row['files_exclude']) : dirname(dirname(dirname(__FILE__)))."/backup_tmp\n".dirname(dirname(dirname(__FILE__)))."/abm_backup";?></textarea></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Enabled", "files"); ?><span><?php echo __("Check to enable", "files"); ?></span></span></td>
			<td>
				<input type="checkbox" name="files_status" <?php echo $row['status'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_0'>
			<td></td>
			<td><input type="submit" name="edit_files" value="<?php echo __("Save config", "files"); ?>" /></td>
		</tr>
	</table>
</form>

