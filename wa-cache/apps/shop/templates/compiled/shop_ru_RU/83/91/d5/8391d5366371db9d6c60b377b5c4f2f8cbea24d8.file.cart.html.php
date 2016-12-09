<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 17:21:51
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/cart.html" */ ?>
<?php /*%%SmartyHeaderCode:86087409258481affb43585-32566622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8391d5366371db9d6c60b377b5c4f2f8cbea24d8' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/cart.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86087409258481affb43585-32566622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'cart' => 0,
    'item' => 0,
    'wa' => 0,
    's' => 0,
    'service_id' => 0,
    'variant_id' => 0,
    'v' => 0,
    'theme_settings' => 0,
    '_exclude_ids' => 0,
    'related' => 0,
    'discount' => 0,
    'coupon_code' => 0,
    'coupon_discount' => 0,
    'affiliate_bonus' => 0,
    'affiliate_discount' => 0,
    'use_affiliate' => 0,
    'used_affiliate_bonus' => 0,
    'add_affiliate_bonus' => 0,
    'frontend_cart' => 0,
    'k' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58481affcbc142_70371369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58481affcbc142_70371369')) {function content_58481affcbc142_70371369($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
cart.min.js"></script><?php if (!$_smarty_tpl->tpl_vars['cart']->value['count']){?><div class="cart your-cart-is-empty fill-background"><h1>Корзина</h1><p>Ваша корзина пуста.</p></div><?php }else{ ?><form method="post" class="fill-background"><h1>Корзина</h1><!-- sixteen-column cart layout --><div class="cart cart-summary-page"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?><!-- cart item --><div class="row" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><div class="col w1 item-thumb"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['item']->value['product'],'96x96',array('default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy48.png"));?>
</a>&nbsp;</div><div class="col w9 item-name"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
" class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['item']->value['sku_name']&&$_smarty_tpl->tpl_vars['item']->value['sku_name']!=$_smarty_tpl->tpl_vars['item']->value['product']['name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['sku_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div><div class="col w2 item-qty align-center nowrap"><span class="gray">&times;</span> <input type="text" name="quantity[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" class="qty<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['error'])){?> error<?php }?>"></div><div class="col w1 item-remove"><a class="delete" href="#" title="Удалить из корзины"><i class="material-icons mi-2x">&#xE5CD;</i></a></div><div class="col w3 align-right item-total nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['full_price'],true);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['services'])){?><!-- services --><div class="clear-both"><div class="col w1 item-thumb">&nbsp;</div><div class="col w15 services"><?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['service_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['service_id']->value = $_smarty_tpl->tpl_vars['s']->key;
?><!-- one option --><div <?php if (!empty($_smarty_tpl->tpl_vars['s']->value['id'])){?>data-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"<?php }?>><label><input <?php if (!empty($_smarty_tpl->tpl_vars['s']->value['id'])){?>checked<?php }?> type="checkbox" name="services[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
"><span class="stylize"></span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['s']->value['price']&&!isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?><span class="service-price">+<?php echo shop_currency_html($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
</span><?php }?></label><?php if (isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?><select name="service_variant[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
]" <?php if (empty($_smarty_tpl->tpl_vars['s']->value['id'])){?>disabled<?php }?>><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option <?php if ($_smarty_tpl->tpl_vars['s']->value['variant_id']==$_smarty_tpl->tpl_vars['variant_id']->value){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['variant_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (+<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
)</option><?php } ?></select><?php }?></div><?php } ?></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['cart_crossselling']=='many'){?><?php if ($_smarty_tpl->tpl_vars['item']->index<3){?><?php $_smarty_tpl->tpl_vars['_exclude_ids'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?><?php $_smarty_tpl->createLocalArrayVariable('_exclude_ids', null, 0);
$_smarty_tpl->tpl_vars['_exclude_ids']->value[] = $_smarty_tpl->tpl_vars['item']->value['product']['id'];?><?php } ?><?php $_smarty_tpl->tpl_vars['related'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->crossSelling($_smarty_tpl->tpl_vars['item']->value['product']['id'],5,true,$_smarty_tpl->tpl_vars['_exclude_ids']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['related']->value){?><!-- cross-selling --><div class="clear-both" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><div class="col w1 item-thumb">&nbsp;</div><div class="col w15 small related"><h4><strong>Рекомендуем!</strong> <?php echo sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true));?>
:</h4><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['related']->value,'ulclass'=>"shadowed expandable",'without_form'=>true), 0);?>
</div></div><?php }?><?php }?><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['error'])){?><script>alert(<?php echo json_encode($_smarty_tpl->tpl_vars['item']->value['error']);?>
);</script><?php }?><?php } ?><!-- discount --><div class="row" <?php if (!shopDiscounts::isEnabled('coupons')&&!$_smarty_tpl->tpl_vars['discount']->value){?>style="display:none"<?php }?> id="discount-row"><div class="col w10 cart-coupon no-border"><?php if (shopDiscounts::isEnabled('coupons')){?><?php if (!$_smarty_tpl->tpl_vars['coupon_code']->value){?><a href="#" class="small inline-link not-visited" id="use-coupon"><b><i>У меня есть купон</i></b></a><?php }?><div <?php if (!$_smarty_tpl->tpl_vars['coupon_code']->value){?>style="display: none;"<?php }?> id="apply-coupon-code">Код купона:<input type="text" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"> <input type="submit"  value="Применить" class="gray button"><?php if ($_smarty_tpl->tpl_vars['coupon_code']->value&&empty($_smarty_tpl->tpl_vars['coupon_discount']->value)){?><div class="errormsg">Неверный код купона</div><?php }?></div><?php }?></div><div class="col w2 align-center">Скидка</div><div class="col w3 align-right cart-discount nowrap">&minus; <?php echo shop_currency_html($_smarty_tpl->tpl_vars['discount']->value,true);?>
</div><div class="col w1"></div></div><?php if (shopAffiliate::isEnabled()&&$_smarty_tpl->tpl_vars['affiliate_bonus']->value>0){?><!-- affiliate bonus --><div class="row no-border"><div class="col w12 no-border"><?php ob_start();?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['affiliate_discount']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf('Вы можете использовать свой партнерский бонус в %s баллов для получения дополнительной скидки в размере %s',$_smarty_tpl->tpl_vars['affiliate_bonus']->value,"<span class=\"affiliate-discount-available\">".$_tmp1."</span>");?>
<?php if ($_smarty_tpl->tpl_vars['use_affiliate']->value){?><a id="cancel-affiliate" href="#">Не использовать накопленные бонусы</a><?php }else{ ?><input type="submit" name="use_affiliate" class="buton gray" value="Использовать бонусные баллы"><?php }?></div><div class="col w3 align-right affiliate-discount"<?php if ($_smarty_tpl->tpl_vars['use_affiliate']->value){?> data-use="1"<?php }?>>&minus; <?php if ($_smarty_tpl->tpl_vars['use_affiliate']->value){?><?php echo shop_currency_html(shopAffiliate::convertBonus($_smarty_tpl->tpl_vars['used_affiliate_bonus']->value));?>
<?php }else{ ?>0<?php }?></div><div class="col w1">&nbsp;</div></div><?php }?><!-- TOTAL --><div class="row large"><div class="col w12 no-border">Итого</div><div class="col w3 cart-total align-right total bold nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['cart']->value['total'],true);?>
</div><div class="col w1">&nbsp;</div></div><?php if (shopAffiliate::isEnabled()&&!empty($_smarty_tpl->tpl_vars['add_affiliate_bonus']->value)){?><div class="row no-border"><div class="col w16 no-border"><p class="affiliate"><i class="material-icons mi-lg">&#xE8DC;</i> <?php echo sprintf("Этот заказ добавит <strong>+%s бонусных баллов</strong>, которые вы затем сможете использовать для получения дополнительных скидок.",$_smarty_tpl->tpl_vars['add_affiliate_bonus']->value);?>
</p></div></div><?php }?><!-- CHECKOUT --><div class="row no-border"><div class="col w10 no-border plugin-quickorder"><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['_']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value=='quickorder-plugin'){?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['_']->value,'quickorder-button-cart','button second-type'),'quickorder-button','button');?>
<?php }?><?php } ?>&nbsp;</div><div class="col w6 align-right cart-checkout"><input name="checkout" type="submit" value="Оформить заказ &rArr;" class="button"></div></div><?php $_smarty_tpl->tpl_vars['related'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->crossSelling($_smarty_tpl->tpl_vars['cart']->value['items'],'product_id'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['cart_crossselling']=='single'&&$_smarty_tpl->tpl_vars['related']->value){?><div class="row no-border"><div class="col w16 related"><h4><strong>Рекомендуем!</strong> <?php echo sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true));?>
:</h4><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['related']->value,'ulclass'=>"shadowed expandable",'without_form'=>true), 0);?>
<div class="clear-both"></div></div></div><?php }?></div><!-- plugin hook: 'frontend_cart' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['_']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value!='quickorder-plugin'){?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php }?><?php } ?></form><?php }?><?php }} ?>