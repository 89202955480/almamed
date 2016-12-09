<?php defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed."); ?>
<div id="information"><?php echo isset($information) ? $information : "";?></div>
<br />
<br />
<form action="" method="post" >
	<table width="100%" id="param">
		<tr class='row_2'>
			<th colspan="2"><?php echo __("Databases", "databases"); ?></th>
		</tr>
		<?php if(isset($error_info) && !empty($error_info)): ?>
			<td colspan="2"><font color="ff3333"><?php echo implode("<br />", $error_info); ?></font></td>
		<?php endif;?>
		<tr class='row_1'>
			<td><span class="tooltip"><?php echo __("Databases", "databases"); ?><span><?php echo __("Databases for backup", "databases"); ?></span></span></td>
			<td>
				<?php foreach($databases as $database): ?>
					<?php if($row && is_array($row['databases_name']) && in_array($database, $row['databases_name'])):?>
						<input type="checkbox" name="databases_name[]" checked='checked' value="<?php echo $database;?>" />
					<?php else: ?>
						<input type="checkbox" name="databases_name[]" value="<?php echo $database;?>" />
					<?php endif; ?>
					<?php echo $database;?>
					<br />
				<?php endforeach; ?>
			</td>
		</tr>
		<tr class='row_0'>
			<td><span class="tooltip"><?php echo __("Enabled", "databases"); ?><span><?php echo __("Check to enable", "databases"); ?></span></span></td>
			<td>
				<input type="checkbox" name="databases_status" <?php echo $row['status'] ? "checked='checked'" : "" ?> value="1" />
			</td>
		</tr>
		<tr class='row_1'>
			<td></td>
			<td><input type="submit" name="edit_databases" value="<?php echo __("Save config", "databases"); ?>" /></td>
		</tr>
	</table>
</form>

