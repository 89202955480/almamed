<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 19:55:21
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/error.html" */ ?>
<?php /*%%SmartyHeaderCode:20472705495846ed793109f8-89491766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '20472705495846ed793109f8-89491766',
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
  'unifunc' => 'content_5846ed79325689_09545334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ed79325689_09545334')) {function content_5846ed79325689_09545334($_smarty_tpl) {?><div class="fill-background"><h1><?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?><?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?></h1>Запрашиваемый ресурс недоступен.</div><?php }} ?>