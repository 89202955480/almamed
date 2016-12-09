<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:15:41
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/seo/templates/CategoryDialog.html" */ ?>
<?php /*%%SmartyHeaderCode:6792040535846d61dd78112-42211907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3feca52aa5743dddf6f0474c0476f1c79c7f0b97' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/seo/templates/CategoryDialog.html',
      1 => 1472820599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6792040535846d61dd78112-42211907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'lang' => 0,
    'seo_css' => 0,
    '_href' => 0,
    'plugin_version' => 0,
    'seo_js' => 0,
    '_src' => 0,
    'seo_settings' => 0,
    'category' => 0,
    'seo_storefronts' => 0,
    'key' => 0,
    'storefront' => 0,
    'seo_global_settings' => 0,
    'variables_template_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846d61e0d1b57_37536645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846d61e0d1b57_37536645')) {function content_5846d61e0d1b57_37536645($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/redactor.css">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/redactor.min.js"></script>
<?php $_smarty_tpl->tpl_vars['lang'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['lang']->value!='en'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js"></script><?php }?>

<?php  $_smarty_tpl->tpl_vars['_href'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_href']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seo_css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_href']->key => $_smarty_tpl->tpl_vars['_href']->value){
$_smarty_tpl->tpl_vars['_href']->_loop = true;
?>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_href']->value;?>
?v<?php echo $_smarty_tpl->tpl_vars['plugin_version']->value;?>
" />
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['_src'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_src']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seo_js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_src']->key => $_smarty_tpl->tpl_vars['_src']->value){
$_smarty_tpl->tpl_vars['_src']->_loop = true;
?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_src']->value;?>
?v<?php echo $_smarty_tpl->tpl_vars['plugin_version']->value;?>
"></script>
<?php } ?>
<div class="seo-category-settings">
    <div class="field-group">
        <div class="field-group__fields">
            <div class="field-box">
                <label class="field-box__label">
                    SEO Название
                </label>
                <div class="field-box__field">
                    <input type="text" name="seo_settings[general][category_name]" class="large field-box__input-text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value['general']['category_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                </div>
            </div>
        </div>
    </div>
    <div class="select-tabs">
        <div class="field-group">
            <div class="field-group__fields">
                <div class="field-box">
                    <label class="field-box__label">
                        SEO Настройки
                    </label>
                    <div class="field-box__field select-tabs__select select-box">
                        <select class="select-box__input" id="seo-settings-storefront-select">
                            <?php  $_smarty_tpl->tpl_vars['storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->key => $_smarty_tpl->tpl_vars['storefront']->value){
$_smarty_tpl->tpl_vars['storefront']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['storefront']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value!=''&&implode('',$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value])!=''){?>style="color: red;"<?php }?>>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value=='0'){?>
                                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_global_settings']->value['general']['category_subcategories_enable'])===null||$tmp==='' ? '' : $tmp)=='1'||(($tmp = @$_smarty_tpl->tpl_vars['seo_global_settings']->value['general']['category_products_enable'])===null||$tmp==='' ? '' : $tmp)=='1'){?>
                                        Все витрины (Общий шаблон для всех витрин)
                                        <?php }else{ ?>
                                        - Выберите витрину -
                                        <?php }?>
                                    <?php }else{ ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
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
                                    Описание категории
                                </label>
                                <div class="field-box__field">
                                    <textarea class="text-area_wysiwyg" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][category_description]" rows="5"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['category_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_global_settings']->value['general']['category_additional_description_enable'])===null||$tmp==='' ? '' : $tmp)=='1'){?>
                            <div class="field-box">
                                <label class="field-box__label">
                                    Дополнительное описание категории
                                </label>
                                <div class="field-box__field">
                                    <textarea class="text-area_wysiwyg" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][category_additional_description]" rows="5"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['category_additional_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_global_settings']->value['general']['category_subcategories_enable'])===null||$tmp==='' ? '' : $tmp)=='1'){?>
                    <div class="field-group field-group_extensible field-group_enable-helper">
                        <h3 class="field-group__header field-box">
                            <label class="check-box field-box__field field-group__trigger">
                                <input class="check-box__input" type="checkbox" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][subcategories_enable]" value="1" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['subcategories_enable'])===null||$tmp==='' ? '' : $tmp)=='1'){?>checked="checked"<?php }?>>
                                <span class="check-box__description">
                                    Страницы подкатегорий
                                </span>
                            </label>
                        </h3>
                        <div class="field-group__helper">
                            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['variables_template_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('base_variables'=>true,'categories_variables'=>true), 0);?>

                        </div>
                        <div class="field-group__fields">
                            <div class="field-box">
                                <label class="field-box__label">
                                    Заголовок
                                </label>
                                <div class="field-box__field">
                                    <input value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['subcategories_meta_title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][subcategories_meta_title]" class="field-box__input-text large" placeholder="{category_seo_name} купить в интернет-магазине {store_name} {'| Страница {page_number}'|if_page_not_first}">
                                </div>
                            </div>
                            <div class="field-box">
                                <label class="field-box__label">
                                    META Description
                                </label>
                                <div class="field-box__field">
                                    <textarea class="field-box__text-area" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][subcategories_meta_description]" placeholder="{category_seo_name} купить в интернет-магазине {store_name}" rows="5"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['subcategories_meta_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field-box">
                                <label class="field-box__label">
                                    META Keywords
                                </label>
                                <div class="field-box__field">
                                    <textarea class="field-box__text-area" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][subcategories_meta_keywords]" placeholder="{category_name|lower}, {category_seo_name|lower}" rows="5"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['subcategories_meta_keywords'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field-box">
                                <label class="field-box__label">
                                    Описание
                                </label>
                                <div class="field-box__field">
                                    <textarea class="text-area_wysiwyg" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][subcategories_description]" placeholder="Описание категории, если оно не заполнено. Можно использовать синонимы, например: {'продукт','товар','изделие'}, они будут показываться рандомно, обновите страницу и увидите новое значение." rows="5"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['subcategories_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field-box">
                                <div class="field-box__field">
                                    <label class="check-box">
                                        <input class="check-box__input" type="checkbox" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][subcategories_meta_overwrite]" value="1" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['subcategories_meta_overwrite'])===null||$tmp==='' ? '' : $tmp)=='1'){?>checked="checked"<?php }?>/>
                                        <span class="check-box__description">
                                            <span class="check-box__header">Игнорировать персональные заголовки</span>
                                            Персональные значения Title, META Keywords, META Description будут перекрыты настройками указанными в настройках плагина
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_global_settings']->value['general']['category_products_enable'])===null||$tmp==='' ? '' : $tmp)=='1'){?>
                    <div class="field-group field-group_extensible field-group_enable-helper">
                        <h3 class="field-group__header field-box">
                            <label class="field-group__trigger field-box__field check-box">
                                <input class="check-box__input" type="checkbox" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][products_enable]" value="1" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['products_enable'])===null||$tmp==='' ? '' : $tmp)=='1'){?>checked="checked"<?php }?>>
                                <span class="check-box__description">
                                    Страницы товаров
                                </span>
                            </label>
                        </h3>
                        <div class="field-group__helper">
                            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['variables_template_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('base_variables'=>true,'products_variables'=>true), 0);?>

                        </div>
                        <div class="field-group__fields">
                            <div class="field-box">
                                <label class="field-box__label">
                                    Заголовок
                                </label>
                                <div class="field-box__field">
                                    <input value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['products_meta_title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][products_meta_title]" class="field-box__input-text large" placeholder="{product_seo_name}, {product_sku} купить по цене {product_price|currency} в интернет-магазине {store_name}">
                                </div>
                            </div>
                            <div class="field-box">
                                <label class="field-box__label">
                                    META Description
                                </label>
                                <div class="field-box__field">
                                    <textarea class="field-box__text-area" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][products_meta_description]" placeholder="{product_seo_name} купить в интернет-магазине {store_name}" rows="5"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['products_meta_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field-box">
                                <label class="field-box__label">
                                    META Keywords
                                </label>
                                <div class="field-box__field">
                                    <textarea class="field-box__text-area" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][products_meta_keywords]" placeholder="{product_name|lower}, {product_seo_name|lower}" rows="5"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['products_meta_keywords'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field-box">
                                <label class="field-box__label">
                                    Описание
                                </label>
                                <div class="field-box__field">
                                    <textarea class="text-area_wysiwyg seo-product-page-description" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][products_description]" placeholder="Описание продукта, если оно не заполнено. Можно использовать синонимы, например: {'продукт','товар','изделие'}, они будут показываться рандомно, обновите страницу и увидите новое значение."><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['products_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field-box">
                                <div class="field-box__field">
                                    <label class="check-box">
                                        <input class="check-box__input" type="checkbox" name="seo_settings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storefront']->value, ENT_QUOTES, 'UTF-8', true);?>
][products_meta_overwrite]" value="1" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value[$_smarty_tpl->tpl_vars['storefront']->value]['products_meta_overwrite'])===null||$tmp==='' ? '' : $tmp)=='1'){?>checked="checked"<?php }?>/>
                                        <span class="check-box__description">
                                            <span class="check-box__header">
                                            Игнорировать персональные заголовки
                                            </span>
                                            Персональные значения Title, META Keywords, META Description будут перекрыты настройками указанными в настройках плагина
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="clear-both"></div>
        <?php } ?>
    </div>
</div>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['seo_global_settings']->value['general']['category_additional_description_enable'])===null||$tmp==='' ? '' : $tmp)=='1'){?>
<div class="field-group" >
    <div class="field-group__fields">
        <div class="field-box" id="category-additional-description">
            <label class="field-box__label">
                Дополнительное описание
            </label>
            <div class="field-box__field">
                <textarea class="text-area_wysiwyg" name="seo_settings[general][category_additional_description]" placeholder=""><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['seo_settings']->value['general']['category_additional_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>
        </div>
    </div>
</div>
<?php }?><?php }} ?>