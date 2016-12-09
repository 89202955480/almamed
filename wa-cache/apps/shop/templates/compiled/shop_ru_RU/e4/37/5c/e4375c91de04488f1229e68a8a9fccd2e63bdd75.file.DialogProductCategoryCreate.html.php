<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 15:00:58
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductCategoryCreate.html" */ ?>
<?php /*%%SmartyHeaderCode:19303235905847f9fa0c9312-32001982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4375c91de04488f1229e68a8a9fccd2e63bdd75' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductCategoryCreate.html',
      1 => 1481026219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19303235905847f9fa0c9312-32001982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_base_url' => 0,
    'parent' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'currency' => 0,
    'cloud' => 0,
    'tag' => 0,
    'features' => 0,
    'f' => 0,
    'v_id' => 0,
    'value' => 0,
    'wa_url' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5847f9fa37be67_87838182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847f9fa37be67_87838182')) {function content_5847f9fa37be67_87838182($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['title_text'] = new Smarty_variable("Новая категория", null, 0);?>
<?php $_smarty_tpl->tpl_vars['name_text'] = new Smarty_variable("Название", null, 0);?>
<?php $_smarty_tpl->tpl_vars['type_text'] = new Smarty_variable("Тип", null, 0);?>
<?php $_smarty_tpl->tpl_vars['static_type_text'] = new Smarty_variable("Статическая категория, в которой товары добавляются и упорядочиваются вручную.", null, 0);?>
<?php $_smarty_tpl->tpl_vars['dynamic_type_text'] = new Smarty_variable("Динамическая категория, формируемая в соответствии с параметрами поиска.", null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('./include.category_visibility_setting.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('ext_fields', null, null); ob_start(); ?>
    <?php echo Smarty::$_smarty_vars['capture']['category_visibility_setting'];?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('frontend_url', null, null); ob_start(); ?>
<div class="field">
    <div class="name">
        Ссылка
    </div>
    <div class="value">
        <?php echo $_smarty_tpl->tpl_vars['frontend_base_url']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['full_url'];?>
/<?php }?><input type="text" name="url" value="" id="s-product-list-url">/
    </div>
</div>
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
            <textarea name="params" rows="10" cols="5"></textarea><br>
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

<?php $_smarty_tpl->_capture_stack[0][] = array('description', null, null); ob_start(); ?>
<div class="field-group">

    <div class="field">
        <div class="name">Заголовок страницы <span class="hint">&lt;title&gt;</span></div>
        <div class="value">
            <input value="" name="meta_title" class="long bold" placeholder="" id="s-c-meta-title">
        </div>
    </div>
    <div class="field">
        <div class="name">META Keywords</div>
        <div class="value">
            <textarea name="meta_keywords"></textarea>
        </div>
    </div>
    <div class="field">
        <div class="name">META Description</div>
        <div class="value">
            <textarea name="meta_description"></textarea>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("./include.category.og.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="field-group">
    <div class="field description">
        <div class="name">
            <label for="description">
                Описание
            </label>
        </div>
        <div class="value">
            <i class="icon16 loading"></i>
            <div class="s-editor-core-wrapper wa-editor-core-wrapper" style="display:none;">
                <ul class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
                    <li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
                    <li><a class="html" href="#">HTML</a></li>
                </ul>
                <div>
                    <textarea style="display:none" id="s-category-description-content" name="description"></textarea>
                    <div class="ace">
                        <div id="wa-ace-editor-container"></div>
                    </div>
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

<?php $_smarty_tpl->_capture_stack[0][] = array('dynamic_settings', null, null); ob_start(); ?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/rate.widget.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<div class="field">
    <div class="name">
        Фильтр товаров
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
                            <?php echo sprintf('Только в категории «<strong>%s</strong>»',htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value['name'], ENT_QUOTES, 'UTF-8', true));?>

                            <p class="hint" style="margin-bottom: 0;">Динамическая фильтрация производится только среди товаров родительской категории.</p>
                        </td>
                    </tr>
                <?php }?>
                <tr>
                    <td class="min-width">
                        <input id="s-c-condition-price-interval" type="checkbox" name="condition[price]" value="price">
                    </td>
                    <td>
                        <label for="s-c-condition-price-interval">Цена</label>
                    </td>
                    <td colspan="2">
                        <label>
                            от <input type="text" name="price[0]" class="short" placeholder="0" value="">
                        </label>
                        <label>
                            до <input type="text" name="price[1]" class="short" placeholder="&infin;" value="">
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

                    </td>
                </tr>
                <tr>
                    <td class="min-width">
                        <input id="s-c-condition-rate" type="checkbox" name="condition[rating]" value="rating">
                    </td>
                    <td>
                        <label for="s-c-condition-rate">Рейтинг</label>
                    </td>
                    <td>
                        <select name="rating[]">
                            <option value=">=">больше или равно</option>
                            <option value="<=">меньше или равно</option>
                        </select>
                    </td>
                    <td>
                        <input type="hidden" name="rating[]" value="0" id="s-c-category-rate-value">
                        <a href="javascript:void(0);" class="s-rate-photo" title="Rate photo" id="s-c-category-rate" class="s-rate-photo" data-rate="0">
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml(0,16,true);?>

                        </a>
                    </td>
                </tr>
                <?php if (!empty($_smarty_tpl->tpl_vars['cloud']->value)){?>
                <tr>
                    <td class="min-width">
                        <input id="s-c-condition-tag" type="checkbox" name="condition[tag]" value="tag">
                    </td>
                    <td>
                        <label for="s-c-condition-tag">Теги</label>
                    </td>
                    <td colspan="2">
                        <div class="block double-padded align-center">
                        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        <input id="s-c-condition-count" type="checkbox" name="condition[count]" value="count">
                    </td>
                    <td>
                        <label for="s-c-condition-count">В наличии</label>
                    </td>
                    <td>
                        <select name="count[]">
                            <option value=">=">больше или равно</option>
                            <option value="<=">меньше или равно</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="count[]" value="" id="s-c-category-count-value">
                    </td>
                </tr>
                <tr>
                    <td class="min-width">
                        <input id="s-c-condition-compare_price" type="checkbox" name="condition[compare_price]" value="compare_price">
                    </td>
                    <td colspan="3">
                        <label for="s-c-condition-compare_price">Зачеркнутая цена</label>
                    </td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                    <tr>
                        <td class="min-width">
                            <input id="s-c-condition-feature-<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
" type="checkbox" name="condition[feature][]" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
">
                        </td>
                        <td>
                            <label for="s-c-condition-feature-<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                        </td>
                        <td>
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
"<?php }?>><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value,64), ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('js', null, null); ob_start(); ?>
<script type="text/javascript">

    var wa_url  = '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
';
    var wa_app  = 'shop';
    var wa_lang = '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
';

    $(function() {

        var d = $('#s-product-list-create-dialog');

        var product_list_name = $("#s-c-product-list-name");
        var product_list_url  = $("#s-product-list-url");

        var state = { name: '', url: '', timer_id: null };
        product_list_name.unbind('.create_product_list').
            bind('change.create_product_list, keyup.create_product_list', function() {
                if (state.time_id) {
                    clearTimeout(state.time_id);
                }

                if (product_list_url.val() != state.url) {
                    product_list_name.unbind('.create_product_list');
                    return;
                }

                var name = product_list_name.val();
                if (name != state.name) {
                    state.time_id = setTimeout(function() {
                        $.getJSON('?action=transliterate', { str: name }, function(r) {
                            if (r.status == 'ok') {
                                product_list_url.val(r.data);
                                state = { name: name, url: r.data, time_id: null }
                            } else if (console) {
                                if (r.errors) {
                                    console.error(r.errors);
                                } else if (r) {
                                    console.error(r);
                                }
                            }
                        });
                    }, 300);
                }
            });

        d.bind('dynamic_settings', function() {
            $('#s-c-category-rate', $(this)).rateWidget({
                withClearAction: false,
                onUpdate: function(rate) {
                    $('#s-c-category-rate-value').val(rate);
                }
            });
        });

        // check corresponding checkbox when change control
        $('select[name^=rating]', d).change(function() {
            $('#s-c-condition-rate').attr('checked', true);
        });
        $('#s-c-category-rate', d).click(function() {
            $('#s-c-condition-rate').attr('checked', true);
        });
        $('select[name^=count]', d).change(function() {
            $('#s-c-condition-count').attr('checked', true);
        });
        $('#s-c-category-count-value', d).click(function() {
            $('#s-c-condition-count').attr('checked', true);
        });
        d.on('change', 'input[name^=tag]', function() {
            $('#s-c-condition-tag').attr('checked', true);
        });
        d.on('keyup', 'input[name^=price]', function() {
            $('#s-c-condition-price-interval').attr('checked', true);
        });
        d.on('change', 'select.s-feature_value', function() {
            $('#s-c-condition-feature-' + $(this).data('featureCode')).attr('checked', true);
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
                keywords_input.attr('placeholder', ["<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
", name_input.val()].join(', '));
            });
        })();

        $.shop.makeFlexibleInput('s-c-meta-title');

        d.data('uploadFields', {
            '_csrf': "<?php echo waRequest::cookie('_csrf','');?>
"
        });

    });
</script>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php echo $_smarty_tpl->getSubTemplate ("./DialogProductListCreate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>