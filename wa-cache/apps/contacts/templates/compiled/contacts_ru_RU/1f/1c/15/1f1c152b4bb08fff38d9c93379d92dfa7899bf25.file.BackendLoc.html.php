<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 10:54:38
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/contacts/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1390198415584a633e3904d8-74692468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1c152b4bb08fff38d9c93379d92dfa7899bf25' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/contacts/templates/actions/backend/BackendLoc.html',
      1 => 1442260591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1390198415584a633e3904d8-74692468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a633e6eb604_82511373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a633e6eb604_82511373')) {function content_584a633e6eb604_82511373($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>