<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:15:42
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductCategorySettings.html" */ ?>
<?php /*%%SmartyHeaderCode:19973934785846d61e1c8d93-95645735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac9758c41d6d3b55fdb7f1587d045a79439c4f2' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductCategorySettings.html',
      1 => 1481026220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19973934785846d61e1c8d93-95645735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'frontend_url' => 0,
    'feature' => 0,
    'k' => 0,
    'v' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'parent' => 0,
    'currency' => 0,
    'tag' => 0,
    'f' => 0,
    'v_id' => 0,
    'value' => 0,
    'wa_url' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846d61e502b54_43060089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846d61e502b54_43060089')) {function content_5846d61e502b54_43060089($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "title_text", null); ob_start(); ?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

    <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_STATIC){?>folder<?php }else{ ?>funnel<?php }?>"></i>
    <span class="hint float-right">id: <?php echo $_smarty_tpl->tpl_vars['settings']->value['id'];?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->tpl_vars['name_text'] = new Smarty_variable("Название", null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('frontend_url', null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['settings']->value['frontend_urls']){?>
<div class="field-group">
    <div class="field">
        <div class="name">
            Ссылка
        </div>
        <?php  $_smarty_tpl->tpl_vars['frontend_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frontend_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['frontend_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['frontend_url']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['frontend_url']->key => $_smarty_tpl->tpl_vars['frontend_url']->value){
$_smarty_tpl->tpl_vars['frontend_url']->_loop = true;
 $_smarty_tpl->tpl_vars['frontend_url']->index++;
 $_smarty_tpl->tpl_vars['frontend_url']->first = $_smarty_tpl->tpl_vars['frontend_url']->index === 0;
?>
            <div class="value no-shift<?php if (!$_smarty_tpl->tpl_vars['frontend_url']->first){?> small<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['frontend_url']->first){?>
                    <span class="s-frontend-base-url" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['base'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" class="s-frontend-base-url" target="_blank"><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['base'];?>
<span id="s-settings-frontend-url"><?php echo $_smarty_tpl->tpl_vars['settings']->value['url'];?>
</span><span class="slash"></span></a>
                    <input type="text" id="s-settings-frontend-url-input" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['url'];?>
" name="url" style="display:none;">
                    <a href="javascript:void(0);" class="small gray inline-link" id="s-settings-frontend-url-edit-link"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
                    <em class="errormsg"></em>
                <?php }else{ ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
</a>
                <?php }?>
            </div>
        <?php } ?>

        <div class="value no-shift">
            <label>
                <input value="1" name="hidden" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['status']){?>checked<?php }?> type="checkbox" name="hidden">
                Скрытая категория <span class="hint">Временно скрывает товар на сайте</span>
            </label>
        </div>
    </div>
</div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('frontend_display', null, null); ob_start(); ?>
<div class="field">
    <div class="name">
        Сортировка товаров
    </div>
    <div class="value no-shift">
        <select name="sort_products">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_STATIC){?>
                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['sort_products'])){?>selected="selected"<?php }?>>Вручную (как задано в бекенде)</option>
            <?php }?>
            <option value="name ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='name ASC'){?>selected="selected"<?php }?>>По названию</option>
            <option value="price DESC"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='price DESC'){?>selected="selected"<?php }?>>Самые дорогие</option>
            <option value="price ASC"   <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='price ASC'){?>selected="selected"<?php }?>>Самые дешевые</option>
            <option value="rating DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='rating DESC'){?>selected="selected"<?php }?>>С высокой оценкой</option>
            <option value="rating ASC"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='rating ASC'){?>selected="selected"<?php }?>>С низкой оценкой</option>
            <option value="total_sales DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='total_sales DESC'){?>selected="selected"<?php }?>>Хиты продаж</option>
            <option value="total_sales ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='total_sales ASC'){?>selected="selected"<?php }?>>Низкие продажи</option>
            <option value="count DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='count DESC'){?>selected="selected"<?php }?>>В наличии</option>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>
                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['sort_products'])){?>selected="selected"<?php }?>>Дата добавления</option>
            <?php }else{ ?>
                <option value="create_datetime DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='create_datetime DESC'){?>selected="selected"<?php }?>>Дата добавления</option>
            <?php }?>
            <option value="stock_worth DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='stock_worth DESC'){?>selected="selected"<?php }?>>Стоимость активов после реализации</option>
        </select>
        <label class="small">
            <input type="checkbox" name="enable_sorting" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_sorting']){?>checked="checked"<?php }?> value="1"> Посетители сайта могут выбирать порядок сортировки
        </label>
    </div>
</div>
<div class="field">
    <div class="name">
        Отображение
    </div>
    <div class="value no-shift"<?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?> style="display: none;"<?php }?>>
        <label>
            <input type="checkbox" name="include_sub_categories" <?php if ($_smarty_tpl->tpl_vars['settings']->value['include_sub_categories']){?>checked="checked"<?php }?> value="1"> Включить товары из подкатегорий
            <span class="hint">Включение этой настройки автоматически добавит в список товаров данной категории все товары из ее подкатегорий</span>
        </label>
    </div>
    <div class="value no-shift">
        <label>
            <input type="checkbox" name="allow_filter" value="1" id="s-category-allow-filter" <?php if ($_smarty_tpl->tpl_vars['settings']->value['allow_filter']){?>checked<?php }?>> Разрешить фильтрацию товаров
            <span class="hint">Фильтрация товаров позволит покупателям подбирать товары внутри этой категории по значениям характеристик, например, по цвету, производителю, цене</span>
        </label>
        <div class="block" id="s-category-filter" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['allow_filter']){?>style="display:none;"<?php }?>>
            <ul class="menu-v compact small">
                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                    <li>
                        <i class="icon16 sort"></i>
                        <label><input type="checkbox" name="filter[]" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value['id'];?>
"
                                            <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['checked'])||($_smarty_tpl->tpl_vars['feature']->value['id']=='price'&&!$_smarty_tpl->tpl_vars['settings']->value['allow_filter'])){?>checked="checked"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        </label>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('description', null, null); ob_start(); ?>
<div class="field-group">
    <div class="field">

    </div>
</div>

<div class="field-group">
    <div class="field">
        <div class="name">Заголовок</div>
        <div class="value">
            <input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
"
                        id="s-meta-title"
                        name="meta_title"
                        placeholder="<?php echo shopCategoryModel::getDefaultMetaTitle($_smarty_tpl->tpl_vars['settings']->value);?>
" class="long bold">
        </div>
    </div>
    <div class="field">
        <div class="name">META Keywords</div>
        <div class="value">
            <textarea name="meta_keywords"
                      placeholder="<?php echo shopCategoryModel::getDefaultMetaKeywords($_smarty_tpl->tpl_vars['settings']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['meta_keywords'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>
    <div class="field">
        <div class="name">META Description</div>
        <div class="value">
            <textarea name="meta_description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['meta_description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("./include.category.og.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('category_og'=>ifset($_smarty_tpl->tpl_vars['settings']->value['og'])), 0);?>


<div class="field-group">
    <div class="field description">
        <div class="name">
            <label for="description">
                Описание
            </label>
        </div>
        <div class="value">
            <div class="wa-editor-core-wrapper s-editor-core-wrapper" style="display: none">
                <ul class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
                    <li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
                    <li><a class="html" href="#">HTML</a></li>
                </ul>
                <div>
                    <textarea style="display:none" id="s-category-description-content" name="description"><?php if ($_smarty_tpl->tpl_vars['settings']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['description'];?>
<?php }?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('./include.category_visibility_setting.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('ext_fields', null, null); ob_start(); ?>
    <?php echo Smarty::$_smarty_vars['capture']['category_visibility_setting'];?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('custom_params', null, null); ob_start(); ?>
<div class="field-group">
    <div class="field">
        <div class="name">
            <label for="custom-settings">
            Дополнительные параметры
            </label>
        </div>
        <div class="value">
            <textarea name="params" rows="10" cols="5"><?php if ($_smarty_tpl->tpl_vars['settings']->value['params']){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value!='order'){?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo (htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true)).("\n");?>
<?php }?><?php } ?><?php }?></textarea><br>
            <span class="hint">Необязательный набор дополнительных параметров <em>key=value</em> (используются в шаблоне общедоступной части в виде <em>&#123;$category.params.key&#125;</em>). Каждую пару key=value указывайте с новой строки.</span>
        </div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('dynamic_settings', null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>
<div class="field-group" id="s-category-dynamic-settings">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/rate.widget.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <div class="field">
        <div class="name">
            Параметры фильтрации товаров
        </div>
        <div class="value">
            <table class="zebra">
                <tbody>
                    <?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)){?>
                        <tr>
                            <td class="min-width" style="vertical-align: top;">
                                <input type="checkbox" disabled="disabled" checked="checked">
                            </td>
                            <td colspan="3">
                                <?php echo sprintf('Только в категории «<strong>%s</strong>»',$_smarty_tpl->tpl_vars['parent']->value['name']);?>

                                <p class="hint" style="margin-bottom: 0;">Динамическая фильтрация производится только среди товаров родительской категории.</p>
                            </td>
                        </tr>
                    <?php }?>
                    <tr>
                        <td class="min-width">
                            <input id="s-condition-price-interval" type="checkbox" name="condition[price]" value="price" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price'])){?>checked<?php }?>>
                        </td>
                        <td>
                            <label for="s-condition-price-interval">Цена</label>
                        </td>
                        <td colspan="2">
                            <label>
                                от
                                <input type="text" name="price[0]" class="short" placeholder="0" value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price'][0][1])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price'][0][1];?>
<?php }?>">
                            </label>
                            <label>
                                до
                                <input type="text" name="price[1]" class="short" placeholder="&infin;" value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price'][1][1])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price'][1][1];?>
<?php }?>">
                            </label>
                            <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

                        </td>
                    </tr>
                    <tr>
                        <td class="min-width">
                            <input id="s-condition-rate" type="checkbox" name="condition[rating]" value="rating" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'])){?>checked<?php }?>>
                        </td>
                        <td>
                            <label for="s-condition-rate">Рейтинг</label>
                        </td>
                        <td>
                            <select name="rating[]">
                                <option value=">=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][0])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][0]=='>='){?>selected<?php }?>>больше или равно</option>
                                <option value="<=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][0])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][0]=='<='){?>selected<?php }?>>меньше или равно</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="rating[]" id="s-c-category-rate-value" value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][1])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][1];?>
<?php }else{ ?>0<?php }?>">
                            <a href="javascript:void(0);" class="s-rate-photo" title="Rate photo" id="s-category-rate" class="s-rate-photo" data-rate="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][1])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'][1];?>
<?php }else{ ?>0<?php }?>">
                                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml(0,16,true);?>

                            </a>
                        </td>
                    </tr>
                    <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['cloud'])){?>
                    <tr>
                        <td class="min-width">
                            <input id="s-condition-tag" type="checkbox" name="condition[tag]" value="tag" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['tag'])){?>checked<?php }?>>
                        </td>
                        <td>
                            <label for="s-condition-tag">Теги</label>
                        </td>
                        <td colspan="2">
                            <div class="block double-padded align-center">
                            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['cloud']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                <label><span class="s-tag nowrap" style="font-size: <?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
%;" data-id="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
"><input type="checkbox" name="tag[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['tag']->value['checked'])){?>checked<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></label>
                            <?php } ?>
                            </div>
                        </td>
                    </tr>
                    <?php }?>
                    <tr>
                        <td class="min-width">
                            <input id="s-condition-count" type="checkbox" name="condition[count]" value="count" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count'])){?>checked<?php }?>>
                        </td>
                        <td>
                            <label for="s-condition-count">В наличии</label>
                        </td>
                        <td>
                            <select name="count[]">
                                <option value=">=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count'][0])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['count'][0]=='>='){?>selected<?php }?>>больше или равно</option>
                                <option value="<=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count'][0])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['count'][0]=='<='){?>selected<?php }?>>меньше или равно</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="count[]" id="s-c-category-count-value" value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count'][1])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['count'][1];?>
<?php }else{ ?>0<?php }?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="min-width">
                            <input id="s-condition-compare_price" type="checkbox" name="condition[compare_price]" value="compare_price" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price'])){?>checked<?php }?>>
                        </td>
                        <td colspan="3">
                            <label for="s-condition-compare_price">Зачеркнутая цена</label>
                        </td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                        <tr>
                            <td class="min-width">
                                <input id="s-condition-feature-<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
" type="checkbox" name="condition[feature][]" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['f']->value['code']])){?>checked<?php }?>>
                            </td>
                            <td>
                                <label for="s-condition-feature-<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                            </td>
                            <td colspan="2">
                                <div style="max-width: 600px; overflow: hidden;">
                                <select name="feature_values[<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
]" class="s-feature_value" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
">
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"<?php if (is_object($_smarty_tpl->tpl_vars['value']->value)){?> style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['style'])===null||$tmp==='' ? '' : $tmp);?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['f']->value['code']][1])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['f']->value['code']][1]==$_smarty_tpl->tpl_vars['v_id']->value){?>selected<?php }?>>
                                            <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value,64), ENT_QUOTES, 'UTF-8', true);?>

                                        </option>
                                    <?php } ?>
                                </select>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- extra custom condition items -->
            <input type="hidden" name="custom_conditions" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['custom_conditions'];?>
">
        </div>
    </div>
</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('js', null, null); ob_start(); ?>

<script type="text/javascript">

    var d = $('#s-product-list-settings-dialog');
    var wa_url  = '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
';
    var wa_app  = 'shop';
    var wa_lang = '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
';

    if ($('#s-category-dynamic-settings', d).length) {
        $('#s-category-rate', d).rateWidget({
            withClearAction: false,
            onUpdate: function(rate) {
                $('#s-c-category-rate-value').val(rate);
            }
        });
        // check corresponding checkbox when change control
        $('select[name^=rating]', d).change(function() {
            $('#s-condition-rate').attr('checked', true);
        });
        $('#s-category-rate', d).click(function() {
            $('#s-condition-rate').attr('checked', true);
        });
        $('select[name^=count]', d).change(function() {
            $('#s-c-condition-count').attr('checked', true);
        });
        $('#s-category-count-value', d).click(function() {
            $('#s-condition-count').attr('checked', true);
        });
        d.on('change', 'input[name^=tag]', function() {
            $('#s-condition-tag').attr('checked', true);
        });
        d.on('keyup', 'input[name^=price]', function() {
            $('#s-condition-price-interval').attr('checked', true);
        });
        d.on('change', 'select.s-feature_value', function() {
            $('#s-c-condition-feature-' + $(this).data('featureCode')).attr('checked', true);
        });
    }
    $('#s-category-allow-filter', d).click(function() {
        if (this.checked) {
            $('#s-category-filter').show();
        } else {
            $('#s-category-filter').hide();
        }
    });

    var frontend_url = $('#s-settings-frontend-url');
    frontend_url.inlineEditable({
        editLink : '#s-settings-frontend-url-edit-link',
        editOnItself : false,
        minSize : {
            width : 100
        },
        makeReadableBy : [],
        beforeMakeEditable : function(input) {
            var self = $(this);
            var parent_div = self.parents('div:first');
            var slash = parent_div.find('span.slash');
            $(input).after(slash);

            parent_div.find('span.s-frontend-base-url').html(parent_div.find('a.s-frontend-base-url').hide().contents()).show();
        },
        beforeBackReadable : function(input, data) {
            var self = $(this);
            var parent_div = self.parents('div:first');
            var slash = parent_div.find('span.slash');
            self.after(slash);

            parent_div.find('a.s-frontend-base-url').html(parent_div.find('span.s-frontend-base-url').hide().contents()).show();
        }
    });

    // change meta title input placeholder automaticly on changing name of category
    (function() {
        var title_input = $('input[name=meta_title]', d);
        $.shop.changeListener($('input[name=name]', d), function(name_input) {
            title_input.attr('placeholder', name_input.val());
        });
    })();

    // change meta keywords input placeholder automaticly on changing name of category
    (function() {
        var keywords_input = $('[name=meta_keywords]', d);
        $.shop.changeListener($('input[name=name]', d), function(name_input) {
            keywords_input.attr('placeholder', [$.wa.decodeHTML("<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
"), name_input.val()].join(', '));
        });
    })();

    $.shop.makeFlexibleInput('s-meta-title');

    $('#s-category-filter').sortable({
        distance: 5,
        opacity: 0.75,
        items: 'li',
        handle: '.sort',
        cursor: 'move',
        tolerance: 'pointer'
    });

    d.data('uploadFields', {
        '_csrf': "<?php echo waRequest::cookie('_csrf','');?>
"
    });

</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php echo $_smarty_tpl->getSubTemplate ("./DialogProductListSettings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>