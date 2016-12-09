<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:49
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/links.pages.sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:8466054075846ace594c349-65632505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc25e13ba3657a839daa58e368f35c94e2b8acb2' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/links.pages.sidebar.html',
      1 => 1465296964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8466054075846ace594c349-65632505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'source' => 0,
    'at' => 0,
    'menu' => 0,
    'branch' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ace5a16dc4_20952341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ace5a16dc4_20952341')) {function content_5846ace5a16dc4_20952341($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['source'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['pages_sidebar'])===null||$tmp==='' ? '' : $tmp), null, 0);?><?php if ($_smarty_tpl->tpl_vars['source']->value=='site'){?><?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['site']['pages'])===null||$tmp==='' ? array() : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['site']['selected_page'])===null||$tmp==='' ? null : $tmp), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['source']->value=='shop'){?><?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['shop']['pages'])===null||$tmp==='' ? array() : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['shop']['selected_page'])===null||$tmp==='' ? null : $tmp), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['source']->value=='blog'){?><?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['blog']['pages'])===null||$tmp==='' ? array() : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['blog']['selected_page'])===null||$tmp==='' ? null : $tmp), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['source']->value=='photos'){?><?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['photos']['pages'])===null||$tmp==='' ? array() : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['photos']['selected_page'])===null||$tmp==='' ? null : $tmp), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['source']->value=='apps'){?><?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['apps'])===null||$tmp==='' ? array() : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['at']->value['selected_app'])===null||$tmp==='' ? null : $tmp), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['menu']->value)){?><div class="sidebar-group fill-background hide-on-med-and-down"><div class="sidebar-title">Информация<button class="toggle-menu"><i class="material-icons mi-2x">&#xE5D2;</i></button></div><div class="sidebar-box"><ul class="base-menu type1"><?php  $_smarty_tpl->tpl_vars['branch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['branch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['branch']->key => $_smarty_tpl->tpl_vars['branch']->value){
$_smarty_tpl->tpl_vars['branch']->_loop = true;
?><?php smarty_template_function_renderMenuItem($_smarty_tpl,array('menu'=>$_smarty_tpl->tpl_vars['branch']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value,'exclude'=>'not_sidebar'));?>
<?php } ?></ul></div></div><?php }?><?php }} ?>