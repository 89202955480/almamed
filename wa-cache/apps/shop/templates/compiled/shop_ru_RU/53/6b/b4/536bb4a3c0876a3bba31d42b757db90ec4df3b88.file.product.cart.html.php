<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 11:59:18
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.cart.html" */ ?>
<?php /*%%SmartyHeaderCode:20054854825847cf66436918-57301131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536bb4a3c0876a3bba31d42b757db90ec4df3b88' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.cart.html',
      1 => 1465296962,
      2 => 'file',
    ),
    'a30074c714e86ba83e7731f16c4476ccc28a8dec' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.images.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20054854825847cf66436918-57301131',
  'function' => 
  array (
    'in_stock' => 
    array (
      'parameter' => 
      array (
        'n' => 0,
        'low' => 5,
        'critical' => 2,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    'product' => 0,
    'video' => 0,
    'sku' => 0,
    'theme_settings' => 0,
    'features_selectable' => 0,
    'feature_button' => 0,
    'f' => 0,
    'v_id' => 0,
    'default_sku_features' => 0,
    'v' => 0,
    'sku_available' => 0,
    'product_available' => 0,
    'services' => 0,
    's' => 0,
    'n' => 0,
    'low' => 0,
    'critical' => 0,
    'stocks' => 0,
    'stock_id' => 0,
    'stock' => 0,
    'stock_count' => 0,
    'add2cart_label' => 0,
    'frontend_product' => 0,
    'k' => 0,
    '_' => 0,
    'wa_real_theme_url' => 0,
    'wa_theme_version' => 0,
    'currency_info' => 0,
    'sku_services' => 0,
    'sku_features_selectable' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5847cf66d9ee29_24728584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847cf66d9ee29_24728584')) {function content_5847cf66d9ee29_24728584($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable('В корзину', null, 0);?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?><h2 style="padding: 0 0.75rem;"><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('preview')){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Пожалуйста выберите нужные параметры:<?php }?></h2><div class="row-grid"><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('preview')){?><?php if (method_exists($_smarty_tpl->tpl_vars['product']->value,'getVideo')){?><?php $_smarty_tpl->tpl_vars['video'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getVideo(array('96x96')), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['images']||!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?><div class="col-grid s12 l8"><?php /*  Call merged included template "product.images.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("product.images.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20054854825847cf66436918-57301131');
content_5847cf6647cc68_91703271($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "product.images.html" */?></div><?php }?><?php }else{ ?><div class="col-grid s12 l6"><div><span class="bold">Ваш товар:</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div><div class="option-item"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'200',array('class'=>'cart-product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?><div class="summary-wrapper"><?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>
</div><?php }?></div></div><?php }?><div class="col-grid s12<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('preview')){?><?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?> l4<?php }?><?php }else{ ?> l6<?php }?>"><?php }?><form id="cart-form<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>-dialog<?php }?>" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><div class="selectable-articul"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['no_sku'])){?><div <?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?>style="display:none"<?php }?> class="sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-articul"><span class="bold">Артикул: </span><span class="value-article"><?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?><?php echo $_smarty_tpl->tpl_vars['sku']->value['sku'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['no_sku'];?>
<?php }?></span></div><?php }?><?php } ?></div><!-- SELECTABLE FEATURES selling mode --><?php $_smarty_tpl->tpl_vars['default_sku_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['sku_features'], null, 0);?><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status'], null, 0);?><?php $_smarty_tpl->tpl_vars['feature_button'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['feature_button'])===null||$tmp==='' ? '' : $tmp), null, 0);?><div class="options"><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_selectable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><div class="option-item<?php if (strpos($_smarty_tpl->tpl_vars['feature_button']->value,$_smarty_tpl->tpl_vars['f']->value['code'])!==false){?> feature-button<?php }?>"><div class="bold">Выберите <span class="lowercase"><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
</span>: </div><?php if (strpos($_smarty_tpl->tpl_vars['feature_button']->value,$_smarty_tpl->tpl_vars['f']->value['code'])!==false){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><label class="at-stylize-label"><input data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature at-stylize-input" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]"<?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?> checked="checked"<?php }?>><?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?><span class="at-stylize-color" style="<?php echo $_smarty_tpl->tpl_vars['v']->value->style;?>
" title="<?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value);?>
"></span><?php }else{ ?><span class="at-stylize-button"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span><?php }?></label><?php } ?><?php }else{ ?><select data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php } ?></select><?php }?></div><?php } ?></div><!-- list all SKUs for Schema.org markup --><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?><?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
"><?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?><link itemprop="availability" href="http://schema.org/OutOfStock" /><?php }else{ ?><link itemprop="availability" href="http://schema.org/InStock" /><?php }?></div><?php } ?><?php }else{ ?><!-- FLAT SKU LIST selling mode --><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable(false, null, 0);?><?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><div class="selectable-articul"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['no_sku'])){?><div <?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?>style="display:none"<?php }?> class="sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-articul"><span class="bold">Артикул: </span><span class="value-article"><?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?><?php echo $_smarty_tpl->tpl_vars['sku']->value['sku'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['no_sku'];?>
<?php }?></span></div><?php }?><?php } ?></div><div class="bold">Варианты: </div><ul class="skus"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?><li itemprop="offers" itemscope itemtype="http://schema.org/Offer"><label<?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> class="disabled"<?php }?>><input name="sku_id" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
"<?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> disabled="true"<?php }?><?php if (!$_smarty_tpl->tpl_vars['sku_available']->value){?>data-disabled="1"<?php }?><?php if ($_smarty_tpl->tpl_vars['sku']->value['id']==$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> checked="checked"<?php }?> data-compare-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['compare_price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
" data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
"<?php if ($_smarty_tpl->tpl_vars['sku']->value['image_id']){?> data-image-id="<?php echo $_smarty_tpl->tpl_vars['sku']->value['image_id'];?>
"<?php }?>><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
"><?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?><link itemprop="availability" href="http://schema.org/OutOfStock" /><?php }else{ ?><link itemprop="availability" href="http://schema.org/InStock" /><?php }?></label></li><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_available']->value||$_smarty_tpl->tpl_vars['sku_available']->value, null, 0);?><?php } ?></ul><?php }else{ ?><div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']], null, 0);?><div class="selectable-articul"><?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['no_sku'])){?><div class="sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-articul"><span class="bold">Артикул: </span><span class="value-article"><?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['no_sku'];?>
<?php }?></span></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
"><?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?><link itemprop="availability" href="http://schema.org/Discontinued" /><?php }elseif(!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')&&!($_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0)){?><link itemprop="availability" href="http://schema.org/OutOfStock" /><?php }else{ ?><link itemprop="availability" href="http://schema.org/InStock" /><?php }?><input name="sku_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sku_id'];?>
"><?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?></div><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['services']->value){?><!-- services --><div class="bold">Дополнительные услуги: </div><div class="services"><?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><div class="service-<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><label><input data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" <?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?>disabled="disabled"<?php }?> type="checkbox" name="services[]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['s']->value['price']&&!isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?><span class="service-price">+<?php echo shop_currency_html($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
</span><?php }?></label><?php if (isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?><select data-variant-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
" class="service-variants" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" disabled><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['s']->value['variant_id']==$_smarty_tpl->tpl_vars['v']->value['id']){?>selected<?php }?> data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (+<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
)</option><?php } ?></select><?php }else{ ?><input type="hidden" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
"><?php }?></div><?php } ?></div><?php }?><!-- stock info --><?php if ($_smarty_tpl->tpl_vars['product_available']->value||count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><div class="stocks"><?php if (!function_exists('smarty_template_function_in_stock')) {
    function smarty_template_function_in_stock($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['in_stock']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if ($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['low']->value||$_smarty_tpl->tpl_vars['n']->value===null){?><span class="stock-label stock-high" data-max="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><i class="icon16 stock-green"></i>В наличии</span><?php }elseif($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['critical']->value){?><span class="stock-label stock-low" data-max="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><i class="icon16 stock-yellow"></i><?php echo _w("Only a few items left");?>
</span><?php }elseif($_smarty_tpl->tpl_vars['n']->value>0){?><span class="stock-label stock-critical" data-max="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><i class="icon16 stock-red"></i><?php echo _w("Only %d left in stock","Only %d left in stock",$_smarty_tpl->tpl_vars['n']->value);?>
</span><?php }else{ ?><span class="stock-label stock-none"><i class="icon16 stock-transparent"></i><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></span><?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><div <?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?>style="display:none"<?php }?> class="sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock" data-sku-count="<?php echo $_smarty_tpl->tpl_vars['sku']->value['count'];?>
"><?php if ($_smarty_tpl->tpl_vars['sku']->value['stock']){?><?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
?><?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable(null, null, 0);?><?php }?><?php echo $_smarty_tpl->tpl_vars['stock']->value['name'];?>
: <?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['stock_count']->value,'low'=>$_smarty_tpl->tpl_vars['stock']->value['low_count'],'critical'=>$_smarty_tpl->tpl_vars['stock']->value['critical_count']));?>
<br><?php } ?><?php }else{ ?><?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['sku']->value['count']));?>
<?php }?></div><?php } ?><?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><div class="sku-no-stock" style="display: none;"><span class="stock-label stock-none">Товар с выбранным набором характеристик недоступен для покупки</span></div><?php }?></div><?php }else{ ?><div class="stocks"><?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']], null, 0);?><?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?><p><em class="bold error">Этот товар временно недоступен для заказа</em></p><?php }elseif(!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')&&!($_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0)){?><span class="stock-label stock-none"><i class="icon16 stock-transparent"></i><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></span><?php }?></div><?php }?><div class="purchase<?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?> purchase-disabled<?php }?>"><!-- price --><div class="add2cart"><?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['sku']->value['id']==$_smarty_tpl->tpl_vars['product']->value['sku_id']){?><?php if ($_smarty_tpl->tpl_vars['sku']->value['compare_price']>0){?><?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['compare_price'] = $_smarty_tpl->tpl_vars['sku']->value['compare_price'];?><?php }?><?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['price'] = $_smarty_tpl->tpl_vars['sku']->value['price'];?><?php break 1?><?php }?><?php } ?><?php }?><div class="price-wrapper"><?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><span data-compare-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['compare_price'],null,null,0);?>
" class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
 </span><?php }?><span data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
" class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span></div><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><div class="qty-wrapper"><a href="#" class="qty-minus button gray"><i class="material-icons mi-2x">&#xE5CB;</i></a><input type="text" name="quantity" value="1"<?php if (!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')&&count($_smarty_tpl->tpl_vars['product']->value['skus'])<2){?> data-max="<?php echo $_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']]['count'];?>
"<?php }?>><a href="#" class="qty-plus button gray"><i class="material-icons mi-2x">&#xE5CC;</i></a></div><div class="submit-wrapper"><input type="submit" class="second-type" <?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?>disabled="disabled"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['add2cart_label']->value;?>
"><i class="adding2cart"></i></div><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['_']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value=='quickorder-plugin'){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_']->value['cart'],'quickorder-button','button');?>
<?php }?><?php } ?><span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'));?>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?><br><a href="#" class="dialog-close button second-type">Продолжить покупки.</a><?php }?></span></div></div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['flying_cart_item'])){?><input type="hidden" class="flying-cart-data" data-url = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
" data-img_url = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,'96x96');?>
" data-name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-price = "<?php echo htmlspecialchars(shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?></form><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('preview')){?><?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?><div style="margin-top: 1.5rem;"><?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>
</div><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
" class="button" style="margin-top: 1.5rem;">Подробнее о товаре ...</a><?php }?></div></div><?php }?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_real_theme_url']->value;?>
product.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><script type="text/javascript">$(function () {new Product('#cart-form<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>-dialog<?php }?>', {currency: <?php echo json_encode($_smarty_tpl->tpl_vars['currency_info']->value);?>
<?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||$_smarty_tpl->tpl_vars['product']->value['sku_type']){?>,services: <?php echo json_encode($_smarty_tpl->tpl_vars['sku_services']->value);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>,features: <?php echo json_encode($_smarty_tpl->tpl_vars['sku_features_selectable']->value);?>
<?php }?>});<?php if (waRequest::isXMLHttpRequest()){?>$('input[type=checkbox],input[type=radio]').stylizeInput();<?php }?>});</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 11:59:18
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.images.html" */ ?>
<?php if ($_valid && !is_callable('content_5847cf6647cc68_91703271')) {function content_5847cf6647cc68_91703271($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?><div id="video-container" class="video-container" itemprop="video" itemscope itemtype="http://schema.org/VideoObject"><div itemprop="embedHTML"><iframe src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['video']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['video']->value['height'];?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><meta itemprop="width" content="<?php echo $_smarty_tpl->tpl_vars['video']->value['width'];?>
"><meta itemprop="height" content="<?php echo $_smarty_tpl->tpl_vars['video']->value['height'];?>
"></div><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['images']||!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?><figure class="product-gallery"><?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?><!-- main image --><div class="image" id="product-core-image"<?php if (!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?> style="display:none"<?php }?>><div class="corner top left"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']);?>
</div><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,'970');?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'750',array('itemprop'=>'image','id'=>'product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>
</a><div id="switching-image" style="display: none;"></div></div><?php }?><!-- thumbs --><?php if (count($_smarty_tpl->tpl_vars['product']->value['images'])>1||(count($_smarty_tpl->tpl_vars['product']->value['images'])===1&&!empty($_smarty_tpl->tpl_vars['video']->value['url']))){?><div class="more-images" id="product-gallery"><?php if (!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?><div class="image video selected"><a id="product-image-video" href="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['video']->value['images'][0];?>
" alt=""></a></div><?php }?><?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?><div class="image<?php if ($_smarty_tpl->tpl_vars['image']->value['id']==$_smarty_tpl->tpl_vars['product']->value['image_id']&&empty($_smarty_tpl->tpl_vars['product']->value['video_url'])){?> selected<?php }?>"><a id="product-image-<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgUrl($_smarty_tpl->tpl_vars['image']->value,'970');?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgHtml($_smarty_tpl->tpl_vars['image']->value,'96x96',array('alt'=>$_smarty_tpl->tpl_vars['image']->value['description']));?>
</a></div><?php } ?></div><?php }?></figure><?php }?><?php }} ?>