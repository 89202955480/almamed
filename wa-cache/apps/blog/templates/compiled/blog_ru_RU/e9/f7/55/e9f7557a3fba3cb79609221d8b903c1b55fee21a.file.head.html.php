<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 19:55:13
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/head.html" */ ?>
<?php /*%%SmartyHeaderCode:20718131685846ed71c62b78-58432076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f7557a3fba3cb79609221d8b903c1b55fee21a' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/head.html',
      1 => 1464084398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20718131685846ed71c62b78-58432076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'links' => 0,
    'role' => 0,
    'link' => 0,
    'frontend_action' => 0,
    'output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ed71d418a3_81952872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ed71d418a3_81952872')) {function content_5846ed71d418a3_81952872($_smarty_tpl) {?>
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
profitbuy.blog.min.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css">


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
profitbuy.blog.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>

<!-- next & prev links -->
<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['role']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
<link rel="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
">
<?php } ?>


<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['output']->value['head'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['head'];?>
<?php }?><?php } ?><?php }} ?>