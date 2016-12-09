<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 17:21:54
         compiled from "bc736aaecfbc4c7578d11db4c60df79625ce325c" */ ?>
<?php /*%%SmartyHeaderCode:26502771358481b0292f0c1-85479231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc736aaecfbc4c7578d11db4c60df79625ce325c' => 
    array (
      0 => 'bc736aaecfbc4c7578d11db4c60df79625ce325c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '26502771358481b0292f0c1-85479231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'b' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58481b029788f7_46886312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58481b029788f7_46886312')) {function content_58481b029788f7_46886312($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = shopProductbrandsPlugin::getBrands(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
<a style="padding:20px" title="<?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['b']->value['url'];?>
">
   
   <?php if ($_smarty_tpl->tpl_vars['b']->value['image']){?>
      <img alt="<?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
" width="150" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
">
   <?php }else{ ?>
      <?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>

   <?php }?> 
</a>
<?php } ?><?php }} ?>