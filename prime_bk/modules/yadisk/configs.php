<?php defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed."); ?>
<div id="information"><?php echo isset($information) ? $information : "";?></div>
<br />
<br />
<form action="" method="post" >
	<table width="100%" id="param">
		<tr class='row_2'>
			<th colspan="2"><?php echo __("Yandex Disk config", "yadisk"); ?></th>
		</tr>
		<?php if(isset($error_info) && !empty($error_info)): ?>
			<td colspan="2"><font color="ff3333"><?php echo implode("<br />", $error_info); ?></font></td>
		<?php endif;?>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Yandex Disk login", "yadisk"); ?><span><?php echo __("Yandex Disk account login", "yadisk"); ?></span></span></td>
			<td><input class="large" type="text" name="yalogin" value="<?php echo isset($row['yalogin']) ? $row['yalogin'] : ""; ?>" /></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Yandex Disk password", "yadisk"); ?><span><?php echo __("Yandex Disk account password", "yadisk"); ?></span></span></td>
			<td><input class="large" type="password" name="yapassword" value="<?php echo isset($row['yapassword']) ? $row['yapassword'] : ""; ?>" /></td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Yandex Disk backup folder", "yadisk"); ?><span><?php echo __("Where keep backups, must be created on Yandex.disk before running backups script", "yadisk"); ?></span></span></td>
			<td>https://disk.yandex.ru/client/disk<input class="large" type="text" name="yafolder" value="<?php echo isset($row['yafolder']) ? $row['yafolder'] : "/"; ?>" /></td>
		</tr>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Enabled", "yadisk"); ?><span><?php echo __("Check to enable", "yadisk"); ?></span></span></td>
			<td>
				<input type="checkbox" name="yastatus" <?php echo $row['status'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_0'>
			<td></td>
			<td><input type="submit" name="edit_yadisk" value="<?php echo __("Save config", "yadisk"); ?>" /></td>
		</tr>
	</table>
</form>

