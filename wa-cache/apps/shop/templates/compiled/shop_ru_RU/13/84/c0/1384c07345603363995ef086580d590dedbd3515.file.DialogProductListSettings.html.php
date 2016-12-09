<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:15:42
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductListSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:1405855235846d61e5d2f09-41964972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1384c07345603363995ef086580d590dedbd3515' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductListSettings.html',
      1 => 1481026220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405855235846d61e5d2f09-41964972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hash' => 0,
    'title_text' => 0,
    'name_text' => 0,
    'settings' => 0,
    'event_dialog' => 0,
    'plugin_html' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846d61e619492_99618416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846d61e619492_99618416')) {function content_5846d61e619492_99618416($_smarty_tpl) {?><div class="dialog <?php if ($_smarty_tpl->tpl_vars['hash']->value[0]=='set'){?>width650px height300px<?php }else{ ?>large<?php }?>" id="s-product-list-settings-dialog">
    <div class="dialog-background"></div>
    <form id="s-product-list-settings-form" method="post"
          action="?module=products&action=saveListSettings&<?php echo implode('_id=',$_smarty_tpl->tpl_vars['hash']->value);?>
"
          enctype="multipart/form-data"
    >
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1><?php echo $_smarty_tpl->tpl_vars['title_text']->value;?>
</h1>
                <div class="fields form s-dialog-form">
                    <div class="field-group">
                        <div class="field">
                            <div class="name"><?php echo $_smarty_tpl->tpl_vars['name_text']->value;?>
</div>
                            <div class="value">
                                
                                <input type="text" name="name" 
                                                       class="large long s-full-width-input" 
                                                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" 
                                                       id="s-product-list-name"
                                                   >
                            </div>
                        </div>
                        <?php echo Smarty::$_smarty_vars['capture']['frontend_url'];?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['event_dialog']->value)){?><?php  $_smarty_tpl->tpl_vars['plugin_html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin_html']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['event_dialog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_html']->key => $_smarty_tpl->tpl_vars['plugin_html']->value){
$_smarty_tpl->tpl_vars['plugin_html']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['plugin_html']->key;
?><?php echo $_smarty_tpl->tpl_vars['plugin_html']->value;?>
<?php } ?><?php }?>
                        <?php echo Smarty::$_smarty_vars['capture']['dynamic_settings'];?>

                        <?php echo Smarty::$_smarty_vars['capture']['frontend_display'];?>

                    </div>
                    <?php echo Smarty::$_smarty_vars['capture']['ext_fields'];?>

                    <?php echo Smarty::$_smarty_vars['capture']['description'];?>

                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['type'];?>
">
                    <?php echo Smarty::$_smarty_vars['capture']['custom_params'];?>

                </div>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <input type="submit" value="Сохранить" class="button green">
                или <a class="cancel" href="#">отмена</a>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

    </div>
    </form>
</div>
<?php echo Smarty::$_smarty_vars['capture']['js'];?>

<?php }} ?>