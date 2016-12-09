<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:04:04
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/links.categories.sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:480365576584a9db4562919-95267684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a458912525e9dc106cc87ee3c78b437062fe3e50' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/links.categories.sidebar.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '480365576584a9db4562919-95267684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'at' => 0,
    'menu' => 0,
    'theme_settings' => 0,
    'type' => 0,
    'branch' => 0,
    'icon' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9db45d5879_48008843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9db45d5879_48008843')) {function content_584a9db45d5879_48008843($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['shop']['categories'])===null||$tmp==='' ? array() : $tmp), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)){?><?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['shop']['plugins']['wmimageincat'])===null||$tmp==='' ? array() : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['shop']['selected_category'])===null||$tmp==='' ? null : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['category_tree_sidebar_type'])===null||$tmp==='' ? 'type1' : $tmp), null, 0);?><div class="sidebar-group fill-background hide-on-med-and-down"><div class="sidebar-title">Категории<button class="toggle-menu"><i class="material-icons mi-2x">&#xE5D2;</i></button></div><div class="sidebar-box"><ul class="base-menu <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php  $_smarty_tpl->tpl_vars['branch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['branch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['branch']->key => $_smarty_tpl->tpl_vars['branch']->value){
$_smarty_tpl->tpl_vars['branch']->_loop = true;
?><?php smarty_template_function_renderMenuItem($_smarty_tpl,array('menu'=>$_smarty_tpl->tpl_vars['branch']->value,'icon'=>$_smarty_tpl->tpl_vars['icon']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value,'exclude'=>'not_sidebar'));?>
<?php } ?></ul></div></div><?php }?><?php }} ?>