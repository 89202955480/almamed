<?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 16:59:23
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/widgets/orders/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:17986091055849673b7f32a2-64212268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f73a7b578c8f9449f2065c27222315852119f08' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/widgets/orders/templates/Default.html',
      1 => 1481026266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17986091055849673b7f32a2-64212268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_backend_url' => 0,
    'processing_count' => 0,
    'processing_amount' => 0,
    'states' => 0,
    'id' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5849673bb17837_90579326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849673bb17837_90579326')) {function content_5849673bb17837_90579326($_smarty_tpl) {?><style>
    .s-orders-widget { font-size: 14px; }
    .s-orders-widget ul.menu-v { margin-top: 0; font-size: 1em; }
    .s-orders-widget ul.menu-v li { padding: 0; }
    .s-orders-widget ul.menu-v li a { margin: 0; padding: .35em .75em; }
    .s-orders-widget ul.menu-v li a:hover span { color: red !important; }
    .s-orders-widget ul.menu-v li.s-processing a { background: #eafada !important; padding: .75em; margin-bottom: .25em; }
    .s-count { display: none; }

    .widget-1x1 .s-amount { display: none; }
    .widget-1x1 .s-count { display: inline; }

    .tv .s-orders-widget,
    .mobile .s-orders-widget { font-size: 1rem; }
    .tv .s-orders-widget ul.menu-v li.s-processing a { background: #555 !important; }
</style>
<div class="s-orders-widget">

    <ul class="menu-v">
        <li class="s-processing">
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
shop/?action=orders#/orders/state_id=new|processing|paid/">
                В обработке
                <span class="count s-amount" title="<?php echo _w('%d order','%d orders',$_smarty_tpl->tpl_vars['processing_count']->value);?>
"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['processing_amount']->value);?>
</span>
                <span class="count s-count" title="<?php echo htmlspecialchars(shop_currency($_smarty_tpl->tpl_vars['processing_amount']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['processing_count']->value;?>
</span>
            </a>
        </li>

        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['state']->key;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
shop/?action=orders#/orders/state_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/">
                    <span style="<?php echo $_smarty_tpl->tpl_vars['state']->value['style'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <span class="count s-amount" style="<?php echo $_smarty_tpl->tpl_vars['state']->value['style'];?>
" title="<?php echo _w('%d order','%d orders',$_smarty_tpl->tpl_vars['state']->value['count']);?>
"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['state']->value['amount']);?>
</span>
                    <span class="count s-count" title="<?php echo htmlspecialchars(shop_currency($_smarty_tpl->tpl_vars['state']->value['amount']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['state']->value['count'];?>
</span>
                </a>
            </li>
        <?php } ?>
    </ul>

</div><?php }} ?>