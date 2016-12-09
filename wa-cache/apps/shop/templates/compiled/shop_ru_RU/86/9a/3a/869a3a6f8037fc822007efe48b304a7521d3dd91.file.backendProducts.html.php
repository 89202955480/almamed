<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:03:27
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/productbrands/templates/backendProducts.html" */ ?>
<?php /*%%SmartyHeaderCode:878543427584a9d8f319f05-74305380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869a3a6f8037fc822007efe48b304a7521d3dd91' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/productbrands/templates/backendProducts.html',
      1 => 1481025077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '878543427584a9d8f319f05-74305380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'b' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9d8f4abc00_37233112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9d8f4abc00_37233112')) {function content_584a9d8f4abc00_37233112($_smarty_tpl) {?><div class="block">
    <style>
        .btn_icon{
            cursor: pointer;
            z-index: 99999999;
            border: none;
            background: none;
            background-repeat: no-repeat;
            background-image: url(../../../wa-content/img/icon16.png?1503);
            background-position: -64px -16px;
            height: 16px;
            width: 16px;
            display: inline-block;
            text-indent: -9999px;
            text-decoration: none!important;
        }

        form[id=brand-edit-form-plus] {
            overflow: inherit;
        }

    </style>

    <form id="brand-edit-form-plus" method="post" action="?plugin=productbrands&action=add">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>


    <span class="count">
             <input type="submit" class="btn_icon" name="btn" value="go">
        </span>
    </form>
    <h5 class="heading">
        <i class="icon16 darr collapse-handler" id="s-brands-list-handler"></i><a href="#/brands/">Бренды
    </a>
    </h5>


    <div class="s-collection-list" id="s-brands-list">
        <ul class="menu-v">
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = shopProductbrandsPlugin::getBrands(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
            <li data-type="type" id="type-<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">
                <span class="count"><?php echo $_smarty_tpl->tpl_vars['b']->value['count'];?>
</span>
                <a href="#/products/hash=brand/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/">
                    <?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>

                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div><?php }} ?>