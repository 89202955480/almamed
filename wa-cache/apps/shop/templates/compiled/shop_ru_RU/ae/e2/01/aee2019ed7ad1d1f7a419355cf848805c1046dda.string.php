<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:46
         compiled from "aee2019ed7ad1d1f7a419355cf848805c1046dda" */ ?>
<?php /*%%SmartyHeaderCode:3859123195846ace2e41a49-40650621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aee2019ed7ad1d1f7a419355cf848805c1046dda' => 
    array (
      0 => 'aee2019ed7ad1d1f7a419355cf848805c1046dda',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3859123195846ace2e41a49-40650621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
    'b' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ace2e68337_83136744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ace2e68337_83136744')) {function content_5846ace2e68337_83136744($_smarty_tpl) {?><ul class="menu-v brands">
<?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
    <li <?php if ($_smarty_tpl->tpl_vars['b']->value['name']==$_smarty_tpl->tpl_vars['wa']->value->param('brand')){?>class="selected"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['b']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
    </li>
<?php } ?>
</ul>
<?php }} ?>