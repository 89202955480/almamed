<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 15:00:58
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductListCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:9265880235847f9fa3b4f54-20473393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67477365da5efcafb3303e962aaf060c8483a1a' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductListCreate.html',
      1 => 1481026220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9265880235847f9fa3b4f54-20473393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'parent' => 0,
    'title_text' => 0,
    'name_text' => 0,
    'type_text' => 0,
    'static_type_text' => 0,
    'dynamic_type_text' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5847f9fa405718_40703403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847f9fa405718_40703403')) {function content_5847f9fa405718_40703403($_smarty_tpl) {?><div class="dialog <?php if ($_smarty_tpl->tpl_vars['type']->value=='set'){?>width650px height350px<?php }else{ ?>large<?php }?>" id="s-product-list-create-dialog">
    <div class="dialog-background"></div>
    <form id="s-product-list-create-form" method="post"
          action="?module=products&action=saveListSettings&<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_id=0&parent_id=<?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
<?php }else{ ?>0<?php }?>"
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
                                <input type="text" name="name" class="large long s-full-width-input" value="" id="s-c-product-list-name">
                            </div>
                        </div>
                        <?php echo Smarty::$_smarty_vars['capture']['frontend_url'];?>

                    </div>
                    <?php echo Smarty::$_smarty_vars['capture']['ext_fields'];?>

                    <div class="field-group">
                        <div class="field">
                            <div class="name">
                                <?php echo $_smarty_tpl->tpl_vars['type_text']->value;?>

                            </div>
                            <div class="value no-shift">
                                <ul class="thumbs li150px s-list-type-selector">
                                    <li style="margin-bottom: 0;">
                                        <label>
                                            <input id="s-type-static" type="radio" name="type" value="0" checked="checked">
                                            <strong><?php if ($_smarty_tpl->tpl_vars['type']->value=='category'){?>Категория<?php }else{ ?>Список<?php }?></strong>
                                            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['type']->value=='category'){?>folder<?php }else{ ?>ss set<?php }?>"></i>
                                            <br><br>
                                            <span class="hint"><?php echo $_smarty_tpl->tpl_vars['static_type_text']->value;?>
</span>
                                        </label>
                                    </li>
                                    <li style="margin-bottom: 0;">
                                        <label>
                                            <input id="s-type-dynamic" type="radio" name="type" value="1">
                                            <strong>Фильтр</strong>
                                            <i class="icon16 funnel"></i>
                                            <br><br>
                                            <span class="hint"><?php echo $_smarty_tpl->tpl_vars['dynamic_type_text']->value;?>
</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="field-group" id="s-dynamic-field-group" style="display:none;">
                        <?php echo Smarty::$_smarty_vars['capture']['dynamic_settings'];?>

                    </div>
                    <?php echo Smarty::$_smarty_vars['capture']['description'];?>

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
<script type="text/javascript">
    $(function() {
        var d = $('#s-product-list-create-dialog');
        $('#s-product-list-create-dialog input[name=type]').click(function() {
            if ($(this).val() == '0') {
                $('#s-dynamic-field-group').hide();
            } else {
                $('#s-dynamic-field-group').show();
                d.trigger('dynamic_settings');
            }
        });
    });
</script>
<?php echo Smarty::$_smarty_vars['capture']['js'];?>

<?php }} ?>