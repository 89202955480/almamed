<?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 16:59:40
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:20617728165849674c9915f8-64617219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50fa144390f9c33cde468608e404bf1bab509155' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1452519803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20617728165849674c9915f8-64617219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5849674c9a04c7_54489549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849674c9a04c7_54489549')) {function content_5849674c9a04c7_54489549($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>