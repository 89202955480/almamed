<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:03:38
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/seo/templates/Product.html" */ ?>
<?php /*%%SmartyHeaderCode:1397571624584a9d9a8f4336-91549991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '913d7aac2b6a5e776c2c3d2fab93827813c49e99' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/seo/templates/Product.html',
      1 => 1472820599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1397571624584a9d9a8f4336-91549991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_js' => 0,
    '_src' => 0,
    'plugin_version' => 0,
    'seo_css' => 0,
    '_href' => 0,
    'seo_data' => 0,
    'product' => 0,
    'seo_storefronts' => 0,
    'key' => 0,
    'storefront' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9d9ac98940_56153802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9d9ac98940_56153802')) {function content_584a9d9ac98940_56153802($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['_src'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_src']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seo_js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_src']->key => $_smarty_tpl->tpl_vars['_src']->value){
$_smarty_tpl->tpl_vars['_src']->_loop = true;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_src']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['plugin_version']->value;?>
"></script>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['_href'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_href']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seo_css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_href']->key => $_smarty_tpl->tpl_vars['_href']->value){
$_smarty_tpl->tpl_vars['_href']->_loop = true;
?>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
?v=<?php echo $_smarty_tpl->tpl_vars['plugin_version']->value;?>
" />
<?php } ?>
<div class="seo-product-settings">
    <div class="field-group">
        <div class="field-group__fields">
            <div class="field-box">
                <label class="field-box__label">
                    SEO Название
                </label>
                <div class="field-box__field">
                    <input type="text" name="seo_settings[general][product_name]" class="large field-box__input-text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_data']->value['general']['product_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                           placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                </div>
            </div>
        </div>
    </div>
    <div class="select-tabs">
        <div class="field-box">
            <label class="field-box__label">
                SEO Настройки
            </label>
            <div class="field-box__field select-box select-tabs__select">
                <select class="select-box__input">
                    <?php  $_smarty_tpl->tpl_vars['storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->key => $_smarty_tpl->tpl_vars['storefront']->value){
$_smarty_tpl->tpl_vars['storefront']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['storefront']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value!=''&&implode('',$_smarty_tpl->tpl_vars['seo_data']->value[$_smarty_tpl->tpl_vars['storefront']->value])!=''){?>style="color: red;"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=='0'){?>
                                - Выберите витрину -
                            <?php }else{ ?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>

                            <?php }?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <?php  $_smarty_tpl->tpl_vars['storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->key => $_smarty_tpl->tpl_vars['storefront']->value){
$_smarty_tpl->tpl_vars['storefront']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['storefront']->key;
?>
            <div class="select-tabs__tab select-tabs__tab_value_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['storefront']->value!='general'){?>
                <div class="field-group">
                    <div class="field-group__fields">
                        <div class="field-box">
                            <label class="field-box__label">
                                Описание товара
                            </label>
                            <div class="field-box__field">
                                <textarea class="text-area_wysiwyg" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][product_description]"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_data']->value[$_smarty_tpl->tpl_vars['storefront']->value]['product_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="clear-both"></div>
        <?php } ?>
    </div>
</div><?php }} ?>