<?php defined("_BOARD_VALID_") or die("Direct Access to this location is not allowed."); ?>
<form action="" method="post" >
	<br />
	<br />
	<table width="100%" id="param">
		<tr>
			<th><?php echo __("Module name"); ?></th>
		</tr>
		<?php
			$mod_stat = array();
			$tr = 1;
			foreach($Mod->modules as $name => $mod) {
				if(method_exists($mod, "onDashboard")) {
					$tr = 1 - $tr;
					$mod_stat[$name] = $mod->onDashboard();
					?>
						<tr class="row_<?php echo $tr;?>">
							<td>
								<?php echo __(ucfirst($name), $mod->name);?>
							</td>
							<td style="text-align: center;">
								<?php echo intval($mod_stat[$name]['status']);?>
							</td>
						</tr>
					<?php
				}
			}
		?>
	</table>
</form>
