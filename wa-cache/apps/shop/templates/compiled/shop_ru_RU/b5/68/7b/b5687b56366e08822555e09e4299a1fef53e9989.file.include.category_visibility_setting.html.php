<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:15:42
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/include.category_visibility_setting.html" */ ?>
<?php /*%%SmartyHeaderCode:14811766745846d61e580ca4-88990913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5687b56366e08822555e09e4299a1fef53e9989' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/include.category_visibility_setting.html',
      1 => 1481026222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14811766745846d61e580ca4-88990913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field_block_id' => 0,
    'settings' => 0,
    'routes' => 0,
    'domain_routes' => 0,
    'domain' => 0,
    'route' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846d61e5c9b24_31255267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846d61e5c9b24_31255267')) {function content_5846d61e5c9b24_31255267($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('category_visibility_setting', null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['field_block_id'] = new Smarty_variable(uniqid('s-product-category-visibility-block-'), null, 0);?>
    <div class="field" id="<?php echo $_smarty_tpl->tpl_vars['field_block_id']->value;?>
">
        <div class="name">
            Видимость категории
        </div>
        <div class="value no-shift">
            <label><input type="radio" name="storefront" value="" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['routes']){?>checked="checked"<?php }?>>
                Все витрины
            </label>
        </div>
        <div class="value no-shift">
            <label><input type="radio" name="storefront" value="route" <?php if ($_smarty_tpl->tpl_vars['settings']->value['routes']){?>checked="checked"<?php }?>>
                Только выбранные витрины
            </label>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['routes']->value)){?>
            <div class="value">

                <?php  $_smarty_tpl->tpl_vars['domain_routes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain_routes']->_loop = false;
 $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain_routes']->key => $_smarty_tpl->tpl_vars['domain_routes']->value){
$_smarty_tpl->tpl_vars['domain_routes']->_loop = true;
 $_smarty_tpl->tpl_vars['domain']->value = $_smarty_tpl->tpl_vars['domain_routes']->key;
?>
                    <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domain_routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
?>
                        <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(($_smarty_tpl->tpl_vars['domain']->value).("/").($_smarty_tpl->tpl_vars['route']->value['url']), null, 0);?>
                        <label>
                            <input <?php if (in_array($_smarty_tpl->tpl_vars['url']->value,$_smarty_tpl->tpl_vars['settings']->value['routes'])){?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['settings']->value['routes']){?>disabled<?php }?> type="checkbox" name="routes[]" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['url']->value;?>

                        </label><br>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['has_children']){?>
            <div class="value" style="margin-top: 20px">
                <label class="italic">
                    <input type="checkbox" name="propagate_visibility" value="1" checked="checked"> Применить новые настройки видимости к подкатегориям
                </label>
            </div>
        <?php }?>
    </div>
    <script>
        $(function () {
            var block = $('#<?php echo $_smarty_tpl->tpl_vars['field_block_id']->value;?>
');
            $('input[name=storefront]', block).change(function() {
                if (this.value == 'route') {
                    $('input[name="routes[]"]', block).attr('disabled', false);
                } else {
                    $('input[name="routes[]"]', block).attr('disabled', true);
                }
            });
        });
    </script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }} ?>