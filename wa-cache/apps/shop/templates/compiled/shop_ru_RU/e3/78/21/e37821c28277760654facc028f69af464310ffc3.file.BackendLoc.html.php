<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:21
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:4802742575846acc96168a1-33031183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '4802742575846acc96168a1-33031183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846acc9623a19_89389446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846acc9623a19_89389446')) {function content_5846acc9623a19_89389446($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>