<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:03:19
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1964413456584a9d8702ff46-15395531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37821c28277760654facc028f69af464310ffc3' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964413456584a9d8702ff46-15395531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9d87059f73_73667221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9d87059f73_73667221')) {function content_584a9d87059f73_73667221($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>