<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:15:42
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/include.category.og.html" */ ?>
<?php /*%%SmartyHeaderCode:21315771465846d61e50dc41-49324084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e470e9886d4e1b8188e4158b0dfa9e8684c786' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/include.category.og.html',
      1 => 1481026222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21315771465846d61e50dc41-49324084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_og' => 0,
    'editable_ogs_list' => 0,
    'editable_ogs' => 0,
    'uniqid' => 0,
    'og' => 0,
    'other_ogs' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846d61e579e83_31858141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846d61e579e83_31858141')) {function content_5846d61e579e83_31858141($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['uniqid'] = new Smarty_variable(uniqid(true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['category_og'] = new Smarty_variable(ifempty($_smarty_tpl->tpl_vars['category_og']->value,array()), null, 0);?>
<?php $_smarty_tpl->tpl_vars['editable_ogs_list'] = new Smarty_variable(explode(',','title,image,video,description,type'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['editable_ogs'] = new Smarty_variable(array_intersect_key($_smarty_tpl->tpl_vars['category_og']->value,array_fill_keys($_smarty_tpl->tpl_vars['editable_ogs_list']->value,1)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['other_ogs'] = new Smarty_variable(array_diff_key($_smarty_tpl->tpl_vars['category_og']->value,$_smarty_tpl->tpl_vars['editable_ogs']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['og'] = new Smarty_variable($_smarty_tpl->tpl_vars['editable_ogs']->value, null, 0);?>

<div class="field-group" style="display: none;">

    <div class="field">
        <div class="name">Соцсети</div>
        <div class="value no-shift">
            <label><input type="checkbox" id="checkbox-<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['editable_ogs']->value){?> checked<?php }?>> Для соцсетей использовать эти же заголовки</label>
        </div>
    </div>

    <div class="field">
        <div class="name">Заголовок для соцсетей <span class="hint">og:title</span></div>
        <div class="value">
            <input name="og[title]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
" class="long bold">
        </div>
    </div>
    <div class="field">
        <div class="name">URL изображения для соцсетей <span class="hint">og:image</span></div>
        <div class="value">
            <input name="og[image]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['image']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="" class="long">
            <br>
            <span class="hint">Если адрес не указан явно, соцсеть автоматически выберет одно из изображений на странице</span>
        </div>
    </div>
    <div class="field">
        <div class="name">URL видео для соцсетей <span class="hint">og:video</span></div>
        <div class="value">
            <input name="og[video]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['video']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="" class="long">
        </div>
    </div>
    <div class="field">
        <div class="name">Описание для соцсетей <span class="hint">og:description</span></div>
        <div class="value">
            <textarea name="og[description]"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['description']), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
        </div>
    </div>
    <div class="field">
        <div class="name">Тип страницы для соцсетей <span class="hint">og:type</span></div>
        <div class="value">
            <input name="og[type]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['type']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="article">
        </div>
    </div>

    <div class="field">
        <div class="value">
            <p class="hint">Подробная информация о параметрах для соцсетей и их возможных значениях опубликована на сайте протокола <a href="http://ogp.me" target="_blank">Open Graph</a>.</p>
        </div>
    </div>

    
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other_ogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <input type="hidden" name="og[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    <?php } ?>

    
    <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editable_ogs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
        <input type="hidden" name="og[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="" class="editable-og-disabler"<?php if ($_smarty_tpl->tpl_vars['editable_ogs']->value){?> disabled<?php }?>>
    <?php } ?>

</div>

<script>(function() { "use strict";

    var $checkbox = $('#checkbox-<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
');
    var $fieldgroup = $checkbox.closest('.field-group');
    var $disablers = $fieldgroup.find('.editable-og-disabler');

    $checkbox.closest('.field').appendTo($fieldgroup.closest('form').find('[name="meta_title"]').closest('.field-group'));
    $checkbox.prop('checked') || $fieldgroup.show();

    $checkbox.change(function() {
        if ($checkbox.prop('checked')) {
            $fieldgroup.slideUp(200);
            $disablers.prop('disabled', false);
        } else {
            $fieldgroup.slideDown(200);
            $disablers.prop('disabled', true);
        }
    });

})();</script><?php }} ?>