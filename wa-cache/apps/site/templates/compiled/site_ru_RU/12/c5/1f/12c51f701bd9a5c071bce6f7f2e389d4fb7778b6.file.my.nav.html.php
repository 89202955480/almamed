<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:04:04
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:354549350584a9db47e4f06-28327814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12c51f701bd9a5c071bce6f7f2e389d4fb7778b6' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/my.nav.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '354549350584a9db47e4f06-28327814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9db47fb8c2_08293052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9db47fb8c2_08293052')) {function content_584a9db47fb8c2_08293052($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?><li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a></li><?php }?><?php }} ?>