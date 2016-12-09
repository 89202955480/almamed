<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:04:04
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/main.html" */ ?>
<?php /*%%SmartyHeaderCode:865945732584a9db436ccd7-49020966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d04f61cd1afcf6fad0b1eceee797a7a9b1e5215' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/main.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '865945732584a9db436ccd7-49020966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_header' => 0,
    '_' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'theme_settings' => 0,
    'is_home_page' => 0,
    'action' => 0,
    'is_sidebar' => 0,
    'wa_active_theme_path' => 0,
    'wa_url' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'page' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9db4440a51_70851071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9db4440a51_70851071')) {function content_584a9db4440a51_70851071($_smarty_tpl) {?><!-- plugin hook: 'frontend_header' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php $_smarty_tpl->tpl_vars['is_home_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->currentUrl(false,true)==$_smarty_tpl->tpl_vars['wa_app_url']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['is_sidebar'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar'])&&!(($_smarty_tpl->tpl_vars['is_home_page']->value&&empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_home']))||(strpos($_smarty_tpl->tpl_vars['action']->value,'product')!==false&&empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_product']))||$_smarty_tpl->tpl_vars['action']->value=='cart'||$_smarty_tpl->tpl_vars['action']->value=='checkout'||$_smarty_tpl->tpl_vars['action']->value=='compare'||$_smarty_tpl->tpl_vars['wa']->value->get("addition"))&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/my/')===false&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/login/')===false&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/signup/')===false&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/forgotpassword/')===false, null, 0);?><div class="row-grid"><?php if ($_smarty_tpl->tpl_vars['is_sidebar']->value){?><nav class="sidebar col-grid s12 l3<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_pos'])){?> float-right<?php }?>"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</nav><?php }?><div id="page-content" itemscope itemtype="http://schema.org/<?php if ($_smarty_tpl->tpl_vars['is_home_page']->value){?>Store<?php }else{ ?>WebPage<?php }?>" class="content col-grid s12<?php if ($_smarty_tpl->tpl_vars['is_sidebar']->value){?> l9 without-sidebar<?php }?>"><?php if ($_smarty_tpl->tpl_vars['is_home_page']->value){?><!-- STORE INFO --><meta itemprop="name" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
"><meta itemprop="address" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('country');?>
"><meta itemprop="telephone" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone');?>
"><meta itemprop="currenciesAccepted" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
"><?php }?><?php if ($_smarty_tpl->tpl_vars['action']->value=='page'){?><!-- internal navigation breadcrumbs --><div class="fill-background"><nav class="breadcrumbs" itemprop="breadcrumb"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><i class="material-icons mi-lg">&#xE88A;</i></a> <span class="rarr">&#47;</span><?php if ($_smarty_tpl->tpl_vars['wa_app_url']->value!='/'){?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</a> <span class="rarr">&#47;</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&#47;</span><?php }?><?php } ?><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</nav></div><?php }?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php if ($_smarty_tpl->tpl_vars['is_home_page']->value&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['callme'])){?><div class="col-grid s12"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/homepage.callme.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div><?php }} ?>