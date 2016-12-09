<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:40:25
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/page.html" */ ?>
<?php /*%%SmartyHeaderCode:17842332755846bfc9c14c89-42355149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19af536cee24a9b1070d7ff59efbec71a5eaa832' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/page.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17842332755846bfc9c14c89-42355149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'wa' => 0,
    'subpages' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846bfc9c35f42_06421706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846bfc9c35f42_06421706')) {function content_5846bfc9c35f42_06421706($_smarty_tpl) {?><div class="fill-background"><h1><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</h1><?php $_smarty_tpl->tpl_vars['subpages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages($_smarty_tpl->tpl_vars['page']->value['id']), null, 0);?><?php if ($_smarty_tpl->tpl_vars['subpages']->value){?><ul class="sub-links"><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li><?php } ?></ul><?php }?><div id="page" role="main"><?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['page']->value['content']);?>
</div></div><?php }} ?>