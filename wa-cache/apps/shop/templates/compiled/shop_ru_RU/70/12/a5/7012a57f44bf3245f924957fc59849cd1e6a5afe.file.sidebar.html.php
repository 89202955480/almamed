<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:49
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:17523998525846ace562de81-51245216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7012a57f44bf3245f924957fc59849cd1e6a5afe' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/sidebar.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17523998525846ace562de81-51245216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filters' => 0,
    'theme_settings' => 0,
    'wa_active_theme_path' => 0,
    'wa' => 0,
    'wa_parent_theme_path' => 0,
    'frontend_nav' => 0,
    '_' => 0,
    '_key' => 0,
    'frontend_nav_aux' => 0,
    'tagcloud' => 0,
    'wa_app_url' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ace57bc792_87066323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ace57bc792_87066323')) {function content_5846ace57bc792_87066323($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)&&$_smarty_tpl->tpl_vars['theme_settings']->value['filter_pos']=='sidebar'){?><div class="sidebar-group fill-background"><div class="sidebar-title second-type">Фильтр<button class="toggle-menu"><i class="material-icons mi-2x">&#xE5D2;</i></button></div><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/filter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('filter_controls'=>true), 0);?>
</div><?php }?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['category_tree_sidebar_show'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/links.categories.sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['pages_sidebar'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/links.pages.sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><!-- 'frontend_nav' plugins --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['_key']->value = $_smarty_tpl->tpl_vars['_']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['_']->value)){?><div class="sidebar-group fill-background"><div class="sidebar-title"><?php if (substr($_smarty_tpl->tpl_vars['_key']->value,-7)=='-plugin'){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->pluginName(substr($_smarty_tpl->tpl_vars['_key']->value,0,-7));?>
<?php }else{ ?>Еще<?php }?><button class="toggle-menu"><i class="material-icons mi-2x">&#xE5D2;</i></button></div><div class="sidebar-box"><?php if (strpos($_smarty_tpl->tpl_vars['_']->value,'menu-v')!==false){?><?php echo substr_replace($_smarty_tpl->tpl_vars['_']->value,'base-menu type1',strpos($_smarty_tpl->tpl_vars['_']->value,'menu-v'),6);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php }?></div></div><?php }?><?php } ?><!-- 'frontend_nav_aux' plugins --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_nav_aux']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['_key']->value = $_smarty_tpl->tpl_vars['_']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['_']->value)){?><div class="sidebar-group fill-background"><div class="sidebar-title"><?php if (substr($_smarty_tpl->tpl_vars['_key']->value,-7)=='-plugin'){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->pluginName(substr($_smarty_tpl->tpl_vars['_key']->value,0,-7));?>
<?php }else{ ?>Еще<?php }?><button class="toggle-menu"><i class="material-icons mi-2x">&#xE5D2;</i></button></div><div class="sidebar-box"><?php if (strpos($_smarty_tpl->tpl_vars['_']->value,'menu-v')!==false){?><?php echo substr_replace($_smarty_tpl->tpl_vars['_']->value,'base-menu type1',strpos($_smarty_tpl->tpl_vars['_']->value,'menu-v'),6);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php }?></div></div><?php }?><?php } ?><?php $_smarty_tpl->tpl_vars['tagcloud'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->tags(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tags'])&&!$_smarty_tpl->tpl_vars['wa']->value->isMobile()&&$_smarty_tpl->tpl_vars['tagcloud']->value){?><?php $_smarty_tpl->tpl_vars['tagclouds'] = new Smarty_variable(shuffle($_smarty_tpl->tpl_vars['tagcloud']->value), null, 0);?><!-- tags --><div class="sidebar-group fill-background tag-plugin hide-on-med-and-down"><div class="sidebar-box tags"><?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tagcloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
tag/<?php echo $_smarty_tpl->tpl_vars['tag']->value['uri_name'];?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php } ?></div></div><?php }?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()){?><!-- FOLLOW --><aside class="connect"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?><div class="sidebar-group fill-background hide-on-med-and-down likebox"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?><div class="sidebar-group fill-background hide-on-med-and-down likebox"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?><div class="sidebar-group fill-background hide-on-med-and-down likebox"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['ok_widget_code'])){?><div class="sidebar-group fill-background hide-on-med-and-down likebox"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['ok_widget_code'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['instagramm_widget_code'])){?><div class="sidebar-group fill-background hide-on-med-and-down likebox"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['instagramm_widget_code'];?>
</div><?php }?></aside><?php }?><?php }} ?>