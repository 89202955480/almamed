<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:04:02
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/category.html" */ ?>
<?php /*%%SmartyHeaderCode:1562478934584a9db2b0aa21-10459184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f73768d8d92ac0c302e1ca7b691f28af6dcb85' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/category.html',
      1 => 1479583429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562478934584a9db2b0aa21-10459184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa_app_url' => 0,
    'wa' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'category' => 0,
    'frontend_category' => 0,
    '_' => 0,
    'sc' => 0,
    'wa_theme_url' => 0,
    'filters' => 0,
    'theme_settings' => 0,
    'products' => 0,
    'select_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9db2bcf2d6_72475683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9db2bcf2d6_72475683')) {function content_584a9db2bcf2d6_72475683($_smarty_tpl) {?><div class="fill-background"><nav class="breadcrumbs" itemprop="breadcrumb"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><i class="material-icons mi-lg">&#xE88A;</i></a> <span class="rarr">&#47;</span><?php if ($_smarty_tpl->tpl_vars['wa_app_url']->value!='/'){?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</a> <span class="rarr">&#47;</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&#47;</span><?php }?><?php } ?><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</nav></div><div class="fill-background"><div class="title_h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php if (1&&shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['category']->value['id'],'banner')){?><div class="image"><img src="<?php echo shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['category']->value['id'],'banner');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" /></div><?php }?><!-- plugin hook: 'frontend_category' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><!-- subcategories --><?php if (1&&$_smarty_tpl->tpl_vars['category']->value['subcategories']){?><ul class="piicsl"><?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?><li class="piicsl-item"><a href="<?php echo $_smarty_tpl->tpl_vars['sc']->value['url'];?>
"><div class="piicsl-img"><img src="<?php if (shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['sc']->value['id'],'image')){?><?php echo shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['sc']->value['id'],'image');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/dummy200.png<?php }?>" alt="" /></div><span class="piicsl-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li><?php } ?></ul><?php }elseif($_smarty_tpl->tpl_vars['category']->value['subcategories']){?><ul class="sub-links"><?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['sc']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul><?php }?><!-- description --><?php if ($_smarty_tpl->tpl_vars['category']->value['description']){?><div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)&&($_smarty_tpl->tpl_vars['theme_settings']->value['filter_pos']=='content'||empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar']))){?><div class="fill-background"><?php echo $_smarty_tpl->getSubTemplate ("filter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?><div id="product-list" class="fill-background"><?php if (!$_smarty_tpl->tpl_vars['products']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>Не найдено ни одного товара.<?php }else{ ?><?php if (!$_smarty_tpl->tpl_vars['category']->value['subcategories']){?>В этой категории нет ни одного товара.<?php }?><?php }?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['select_view'] = new Smarty_variable(waRequest::cookie('shop_select_view','',waRequest::TYPE_STRING), null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['category']->value['params']['select_view'])){?><?php $_smarty_tpl->tpl_vars['select_view'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['select_view']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['category']->value['params']['select_view'] : $tmp), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['select_view'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['select_view']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['theme_settings']->value['select_view'] : $tmp), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('list-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sorting'=>!empty($_smarty_tpl->tpl_vars['category']->value['params']['enable_sorting']),'plp'=>true,'select_view'=>$_smarty_tpl->tpl_vars['select_view']->value), 0);?>
<?php }?></div><?php }} ?>