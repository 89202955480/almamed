<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:34:04
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/search.html" */ ?>
<?php /*%%SmartyHeaderCode:12056947525846da6cd5bf57-30744392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01cac3b95e7451fbed1a0eb506e924e84af842a6' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/search.html',
      1 => 1466094882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12056947525846da6cd5bf57-30744392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'addition' => 0,
    'title_addition' => 0,
    'addition_p' => 0,
    'p_q' => 0,
    'products_' => 0,
    'wa_app_url' => 0,
    'wa_parent_theme_url' => 0,
    'title' => 0,
    'frontend_search' => 0,
    '_' => 0,
    'products' => 0,
    'select_view' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846da6cf1eef3_50955548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846da6cf1eef3_50955548')) {function content_5846da6cf1eef3_50955548($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['addition'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get('addition'), null, 0);?><div class="fill-background"><?php if ($_smarty_tpl->tpl_vars['addition']->value){?><?php $_smarty_tpl->tpl_vars['title_addition'] = new Smarty_variable(array("bookmark"=>"Закладки","viewed"=>"Просмотренные товары"), null, 0);?><?php echo $_smarty_tpl->tpl_vars['wa']->value->title($_smarty_tpl->tpl_vars['title_addition']->value[$_smarty_tpl->tpl_vars['addition']->value]);?>
<?php $_smarty_tpl->tpl_vars['sorting'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['pages_count'] = new Smarty_variable(1, null, 0);?><?php $_smarty_tpl->tpl_vars['addition_p'] = new Smarty_variable(waRequest::cookie("shop_".((string)$_smarty_tpl->tpl_vars['addition']->value),'',waRequest::TYPE_STRING), null, 0);?><?php $_smarty_tpl->tpl_vars['products_'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products(('id/').($_smarty_tpl->tpl_vars['addition_p']->value)), null, 0);?><?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['addition']->value=='viewed'&&$_smarty_tpl->tpl_vars['addition_p']->value){?><?php  $_smarty_tpl->tpl_vars['p_q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_q']->_loop = false;
 $_from = explode(',',$_smarty_tpl->tpl_vars['addition_p']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_q']->key => $_smarty_tpl->tpl_vars['p_q']->value){
$_smarty_tpl->tpl_vars['p_q']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('products', null, 0);
$_smarty_tpl->tpl_vars['products']->value[$_smarty_tpl->tpl_vars['p_q']->value] = $_smarty_tpl->tpl_vars['products_']->value[$_smarty_tpl->tpl_vars['p_q']->value];?><?php } ?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['products'] = new Smarty_variable($_smarty_tpl->tpl_vars['products_']->value, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['addition_p']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
" id="addition-all-delete" data-addition="<?php echo $_smarty_tpl->tpl_vars['addition']->value;?>
" data-loading="<?php echo $_smarty_tpl->tpl_vars['wa_parent_theme_url']->value;?>
img/loading16.gif">Очистить список "<?php echo $_smarty_tpl->tpl_vars['title_addition']->value[$_smarty_tpl->tpl_vars['addition']->value];?>
"</a><?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
" class="step-back">&lArr; Вернуться в магазин</a><?php }?><?php }?><div class="title_h1"><?php if ($_smarty_tpl->tpl_vars['addition']->value){?><?php echo $_smarty_tpl->tpl_vars['title_addition']->value[$_smarty_tpl->tpl_vars['addition']->value];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></div><!-- plugin hook: 'frontend_search' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php if (!$_smarty_tpl->tpl_vars['products']->value){?><p><?php if ($_smarty_tpl->tpl_vars['addition']->value){?><?php echo sprintf('Список "%s" пуст.',$_smarty_tpl->tpl_vars['title_addition']->value[$_smarty_tpl->tpl_vars['addition']->value]);?>
<?php }else{ ?>Не найдено ни одного товара.<?php }?></p><?php }?></div><?php if ($_smarty_tpl->tpl_vars['products']->value){?><div id="product-list" class="fill-background<?php if ($_smarty_tpl->tpl_vars['addition']->value){?> <?php echo $_smarty_tpl->tpl_vars['addition']->value;?>
<?php }?>"><?php $_smarty_tpl->tpl_vars['select_view'] = new Smarty_variable(waRequest::cookie('shop_select_view','',waRequest::TYPE_STRING), null, 0);?><?php $_smarty_tpl->tpl_vars['select_view'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['select_view']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['select_view'] : $tmp), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('list-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('plp'=>true,'select_view'=>$_smarty_tpl->tpl_vars['select_view']->value), 0);?>
</div><?php }?><?php if ($_smarty_tpl->tpl_vars['addition']->value){?><script type="text/javascript">$(function(){ $("#<?php echo $_smarty_tpl->tpl_vars['addition']->value;?>
-link").parent().addClass('selected'); });</script><?php }?><?php }} ?>