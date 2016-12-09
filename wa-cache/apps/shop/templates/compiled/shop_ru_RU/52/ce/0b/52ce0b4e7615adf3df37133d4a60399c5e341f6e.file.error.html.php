<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 02:59:20
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/error.html" */ ?>
<?php /*%%SmartyHeaderCode:2046688138584750d8bf4b15-24763919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ce0b4e7615adf3df37133d4a60399c5e341f6e' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/error.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046688138584750d8bf4b15-24763919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584750d9b27074_64683438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584750d9b27074_64683438')) {function content_584750d9b27074_64683438($_smarty_tpl) {?><div class="fill-background"><h1><?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?><?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?></h1>Запрашиваемый ресурс недоступен.</div><?php }} ?>