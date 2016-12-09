<?php defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed."); ?>
<div id="information"><?php echo isset($information) ? $information : "";?></div>
<br />
<br />
<form action="" method="post" >
	<table width="100%" id="param">
		<tr class='row_2'>
			<th colspan="2"><?php echo __("Logs", "logs"); ?></th>
		</tr>
		<?php $tr = 1; while($row = $db->fetch($query)) { $tr = 1 - $tr;?>
			<tr class='row_<?php echo $tr; ?>'>
				<td><?php echo date("Y-m-d H:i:s", $row['message_time']); ?></td>
				<td><?php echo $row['message']; ?></td>
			</tr>
		<?php } ?>
	</table>
</form>

