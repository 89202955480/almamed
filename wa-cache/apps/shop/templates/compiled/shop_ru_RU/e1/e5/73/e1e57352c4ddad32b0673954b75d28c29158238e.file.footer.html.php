<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:49
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:3055434085846ace5a31ff2-10699480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e57352c4ddad32b0673954b75d28c29158238e' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/footer.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3055434085846ace5a31ff2-10699480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_footer' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ace5a45691_51010069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ace5a45691_51010069')) {function content_5846ace5a45691_51010069($_smarty_tpl) {?><!-- plugin hook: 'frontend_footer' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }} ?>