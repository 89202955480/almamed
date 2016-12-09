<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 17:08:39
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/filter.html" */ ?>
<?php /*%%SmartyHeaderCode:842819338584817e740ed17-46514077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647b3bc906859af9e31cda23acf5916743d65e2d' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/filter.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842819338584817e740ed17-46514077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'filters_expand' => 0,
    'wa_static_url' => 0,
    'wa' => 0,
    'wa_parent_theme_url' => 0,
    'filters' => 0,
    'fid' => 0,
    'c' => 0,
    'filter' => 0,
    'feature_button' => 0,
    '_v' => 0,
    'v_id' => 0,
    'v' => 0,
    'filter_controls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584817e780a5f3_48621202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584817e780a5f3_48621202')) {function content_584817e780a5f3_48621202($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['feature_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['feature_button'])===null||$tmp==='' ? '' : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['filters_expand'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['default_filters_expand'])===null||$tmp==='' ? '' : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['filters_expand'] = new Smarty_variable(($_smarty_tpl->tpl_vars['filters_expand']->value).(waRequest::cookie('shop_filters_expand','',waRequest::TYPE_STRING)), null, 0);?><?php if (waRequest::isXMLHttpRequest()&&waRequest::get('page',1)==1){?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.slider.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?><div class="filters sidebar-box<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['ajax_filters'])){?> ajax<?php }?>"><form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
" data-loading="<?php echo $_smarty_tpl->tpl_vars['wa_parent_theme_url']->value;?>
img/loading16.gif" data-title="Фильтр: "><?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['filter']->key;
?><div class="filter-param"><?php if ($_smarty_tpl->tpl_vars['fid']->value=='price'){?><?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(true), null, 0);?><h5 class="collapsible <?php if (strpos($_smarty_tpl->tpl_vars['filters_expand']->value,'price')!==false){?> expand<?php }?>" data-feature="price">Цена<span class="hint">(<?php echo $_smarty_tpl->tpl_vars['c']->value['sign'];?>
)</span></h5><div class="filter-content"><div class="filter-slider-wrapper"><input type="text" class="min" name="price_min" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_min')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_min');?>
"<?php }?> placeholder="<?php echo floor($_smarty_tpl->tpl_vars['filter']->value['min']);?>
">&mdash; <input type="text" class="max" name="price_max" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_max')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_max');?>
"<?php }?> placeholder="<?php echo ceil($_smarty_tpl->tpl_vars['filter']->value['max']);?>
"></div></div><?php }else{ ?><h5 class="collapsible<?php if (strpos($_smarty_tpl->tpl_vars['filters_expand']->value,$_smarty_tpl->tpl_vars['filter']->value['code'])!==false){?> expand<?php }?>" data-feature="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['min'])&&!empty($_smarty_tpl->tpl_vars['filter']->value['unit'])){?><span class="hint">(<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['title'];?>
)</span><?php }?><span class="fiwex-feat" data-feat_id="<?php echo $_smarty_tpl->tpl_vars['filter']->value['id'];?>
"></span></h5><div class="filter-content<?php if (strpos($_smarty_tpl->tpl_vars['feature_button']->value,$_smarty_tpl->tpl_vars['filter']->value['code'])!==false){?> feature-button<?php }?>"><?php if ($_smarty_tpl->tpl_vars['filter']->value['type']=='boolean'){?><label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])){?> checked<?php }?> value="1">Да</label><label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])==='0'){?> checked<?php }?> value="0">Нет</label><label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],'')===''){?> checked<?php }?> value="">Неважно</label><?php }elseif(isset($_smarty_tpl->tpl_vars['filter']->value['min'])){?><?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code']), null, 0);?><div class="filter-slider-wrapper"><input type="text" class="min" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[min]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['min'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['min'];?>
"<?php }?>>&mdash; <input type="text" class="max" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[max]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['max'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['max'];?>
"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['filter']->value['unit'])){?><?php if ($_smarty_tpl->tpl_vars['filter']->value['unit']['value']!=$_smarty_tpl->tpl_vars['filter']->value['base_unit']['value']){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[unit]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['value'];?>
"><?php }?><?php }?></div><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><label<?php if (strpos($_smarty_tpl->tpl_vars['feature_button']->value,$_smarty_tpl->tpl_vars['filter']->value['code'])!==false){?> class="at-stylize-label"<?php }?>><input<?php if (strpos($_smarty_tpl->tpl_vars['feature_button']->value,$_smarty_tpl->tpl_vars['filter']->value['code'])!==false){?> class="at-stylize-input"<?php }?> type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[]" <?php if (in_array($_smarty_tpl->tpl_vars['v_id']->value,(array)$_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],array()))){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"><?php if (strpos($_smarty_tpl->tpl_vars['feature_button']->value,$_smarty_tpl->tpl_vars['filter']->value['code'])!==false){?><?php if ($_smarty_tpl->tpl_vars['filter']->value['type']=='color'){?><span class="at-stylize-color" style="<?php echo $_smarty_tpl->tpl_vars['v']->value->style;?>
" title="<?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value);?>
"></span><?php }else{ ?><span class="at-stylize-button"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<span class="fiwex-feat-val" data-feat_val_id="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" data-fiwex-parent_id="<?php echo $_smarty_tpl->tpl_vars['filter']->value['id'];?>
"></span><?php }?></label><?php } ?><?php }?></div><?php }?></div><?php } ?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')){?><input type="hidden" name="sort" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('sort'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('order')){?><input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('order'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['filter_controls']->value)||empty($_smarty_tpl->tpl_vars['theme_settings']->value['ajax_filters'])){?><div class="filter-param controls"><input type="submit" value="Показать"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
" id="clear-filters-expand" class="button third-type">Сброс</a></div><?php }?></form></div><?php }} ?>