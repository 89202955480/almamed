<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:47
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.html" */ ?>
<?php /*%%SmartyHeaderCode:21136510385846ace3095821-00775955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81fcec939686ea6b14d44f4b4e07a4afdec986a1' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.html',
      1 => 1470042274,
      2 => 'file',
    ),
    'a30074c714e86ba83e7731f16c4476ccc28a8dec' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.images.html',
      1 => 1465296962,
      2 => 'file',
    ),
    '536bb4a3c0876a3bba31d42b757db90ec4df3b88' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.cart.html',
      1 => 1465296962,
      2 => 'file',
    ),
    '39d6c56ee978f2ad4f1a00023f0349f90e138ef9' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/review.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21136510385846ace3095821-00775955',
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
    'theme_settings' => 0,
    'wa_url' => 0,
    'wa_app_url' => 0,
    'wa' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'product' => 0,
    'compare_p' => 0,
    'bookmark_p' => 0,
    'is_sidebar_product' => 0,
    'reviews_total_count' => 0,
    'frontend_product' => 0,
    'k' => 0,
    '_' => 0,
    'video' => 0,
    'page' => 0,
    'f_code' => 0,
    'features' => 0,
    '_valid_features' => 0,
    'f_value' => 0,
    'brands' => 0,
    'f_brands' => 0,
    'rates' => 0,
    '_total_count' => 0,
    '_count' => 0,
    'i' => 0,
    'reviews' => 0,
    'review' => 0,
    'c' => 0,
    't' => 0,
    'upselling' => 0,
    'crossselling' => 0,
    'compare_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ace385a599_06148558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ace385a599_06148558')) {function content_5846ace385a599_06148558($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['compare_p'] = new Smarty_variable(waRequest::cookie('shop_compare',array(),waRequest::TYPE_ARRAY_INT), null, 0);?><?php $_smarty_tpl->tpl_vars['bookmark_p'] = new Smarty_variable(waRequest::cookie('shop_bookmark',array(),waRequest::TYPE_ARRAY_INT), null, 0);?><?php $_smarty_tpl->tpl_vars['is_sidebar_product'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_product'])&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar']), null, 0);?><div class="fill-background"><nav class="breadcrumbs" itemprop="breadcrumb"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><i class="material-icons mi-lg">&#xE88A;</i></a> <span class="rarr">&#47;</span><?php if ($_smarty_tpl->tpl_vars['wa_app_url']->value!='/'){?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</a> <span class="rarr">&#47;</span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?><?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&#47;</span><?php }?><?php } ?><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</nav></div><article itemscope itemtype="http://schema.org/Product" class="row-grid product-wrapper"><div class="col-grid s12"><div class="fill-background"><div class="addition-wrapper float-right"><a id="product-print" href="#" class="addition-button print-add" title="Печать" rel="nofollow"><i class="material-icons mi-2x">&#xE8AD;</i></a><a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#" class="addition-button compare-add<?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['compare_p']->value)){?> added<?php }?>" title="К сравнению" rel="nofollow"><i class="material-icons mi-2x">&#xE01D;</i></a><a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#" class="addition-button bookmark-add<?php if (in_array($_smarty_tpl->tpl_vars['product']->value['id'],$_smarty_tpl->tpl_vars['bookmark_p']->value)){?> added<?php }?>" title="В закладки" rel="nofollow"><i class="material-icons mi-2x">&#xE838;</i></a></div><a id="productheader"></a><h1><span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></h1></div></div><div class="col-grid s12 <?php if ($_smarty_tpl->tpl_vars['is_sidebar_product']->value){?>l5<?php }else{ ?>l4<?php }?> float-right"><!-- purchase --><div id="cart-flyer" class="product-sidebar fill-background"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['share'])){?><!-- share --><div class="share-wrapper"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['share'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['rating'])&&$_smarty_tpl->tpl_vars['product']->value['rating']>0){?><div id="product-rating-wrapper"><span class="rating nowrap" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" title="<?php echo sprintf('Средняя оценка покупателей: %s / 5',$_smarty_tpl->tpl_vars['product']->value['rating']);?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['product']->value['rating'],'24');?>
<span itemprop="ratingValue" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['product']->value['rating'];?>
</span><span itemprop="reviewCount" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</span></span></div><?php }?><div class="cart"><?php /*  Call merged included template "product.cart.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("product.cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21136510385846ace3095821-00775955');
content_5846ace31165a5_69963334($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "product.cart.html" */?><!-- plugin hook: 'frontend_product.cart' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['_']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value!=='quickorder-plugin'){?><?php echo $_smarty_tpl->tpl_vars['_']->value['cart'];?>
<?php }?><?php } ?></div><!-- plugin hook: 'frontend_product.block_aux' --><?php if (!empty($_smarty_tpl->tpl_vars['frontend_product']->value)){?><div class="aux"><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block_aux'];?>
<?php } ?></div><?php }?></div></div><?php if (method_exists($_smarty_tpl->tpl_vars['product']->value,'getVideo')){?><?php $_smarty_tpl->tpl_vars['video'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getVideo(array('96x96')), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['images']||!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?><div class="col-grid s12 <?php if ($_smarty_tpl->tpl_vars['is_sidebar_product']->value){?>l7<?php }else{ ?>l8<?php }?>"><div class="fill-background"><?php /*  Call merged included template "product.images.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("product.images.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21136510385846ace3095821-00775955');
content_5846ace31406b9_04021085($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "product.images.html" */?></div></div><?php }?><!-- product info --><div class="product-info col-grid s12 <?php if (!$_smarty_tpl->tpl_vars['is_sidebar_product']->value){?>l8<?php }?>" id="overview"><div class="fill-background"><!-- product internal nav --><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tab_product'])){?><nav><ul id="product-tabs-nav"><?php if ($_smarty_tpl->tpl_vars['product']->value['description']){?><li class="selected"><a data-name="description" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Описание</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['features']){?><li><a data-name="features" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Характеристики</a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviews'])){?><li><a data-name="reviews" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
">Отзывы</a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviews_vk'])){?><li><a data-name="reviews_vk" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Отзывы VK</a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviews_fb'])){?><li><a data-name="reviews_fb" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Отзывы Facebook</a></li><?php }?><?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?><li><a data-name="page_<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['page']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><!-- plugin hook: 'frontend_product.menu' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['menu'];?>
<?php } ?></ul></nav><?php }?><div id="product-tabs"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tab_product'])){?> class="product-tab-active"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value['description']){?><h2 class="product-tabs-nav-trigger-wrapper"><a class="product-tabs-nav-trigger" data-name="description" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Описание</a></h2><div id="product-tab-description" class="product-tab"><div id="product-description" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['features']){?><!-- product features --><?php $_smarty_tpl->tpl_vars['_valid_features'] = new Smarty_variable(array('color','weight'), null, 0);?><h2 class="product-tabs-nav-trigger-wrapper"><a class="product-tabs-nav-trigger" data-name="features" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Характеристики</a></h2><div id="product-tab-features" class="product-tab"><table class="features striped" id="product-features"><?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?><tr<?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='divider'){?> class="divider"<?php }?>><td class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td><td class="value"<?php if (in_array(htmlspecialchars($_smarty_tpl->tpl_vars['f_code']->value, ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['_valid_features']->value)){?> itemprop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='color'){?><?php echo implode('<br /> ',$_smarty_tpl->tpl_vars['f_value']->value);?>
<?php }else{ ?><?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>
<?php }?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['f_code']->value=='brend'){?><?php  $_smarty_tpl->tpl_vars['f_brands'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_brands']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_brands']->key => $_smarty_tpl->tpl_vars['f_brands']->value){
$_smarty_tpl->tpl_vars['f_brands']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['f_brands']->value['name']==$_smarty_tpl->tpl_vars['f_value']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['f_brands']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['f_brands']->value['name'];?>
</a><?php }?><?php } ?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
<?php }?><?php }?></td></tr><?php } ?></table></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviews'])){?><h2 class="product-tabs-nav-trigger-wrapper"><a class="product-tabs-nav-trigger" data-name="reviews" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
">Отзывы посетителей(<span class="reviews-count"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</span>)</a></h2><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviews'])&&$_smarty_tpl->tpl_vars['theme_settings']->value['reviews']=='webasyst'){?><!-- product reviews --><div id="product-tab-reviews" class="product-tab"><section class="reviews" id="product-reviews"><?php if (!empty($_smarty_tpl->tpl_vars['rates']->value)){?><p class="rating">Средняя оценка покупателей:<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['product']->value['rating'],16);?>
 (<a href="reviews/"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</a>)<?php if ($_smarty_tpl->tpl_vars['product']->value['rating']>0){?><span class="hint"><?php echo sprintf('%s из 5 звезд',$_smarty_tpl->tpl_vars['product']->value['rating']);?>
</span><?php }?></p><table class="rating-distribution"><?php $_smarty_tpl->tpl_vars['_total_count'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['_count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_count']->_loop = false;
 $_smarty_tpl->tpl_vars['_rate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_count']->key => $_smarty_tpl->tpl_vars['_count']->value){
$_smarty_tpl->tpl_vars['_count']->_loop = true;
 $_smarty_tpl->tpl_vars['_rate']->value = $_smarty_tpl->tpl_vars['_count']->key;
?><?php $_smarty_tpl->tpl_vars['_total_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_total_count']->value+$_smarty_tpl->tpl_vars['_count']->value, null, 0);?><?php } ?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = -1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 0+1 - (5) : 5-(0)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 5, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php if (empty($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value])||!$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]){?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable(0, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['i']->value||$_smarty_tpl->tpl_vars['_count']->value){?><tr><td class="min-width hint"><?php echo $_smarty_tpl->tpl_vars['_count']->value;?>
</td><td><div class="bar"><div class="filling" style="width: <?php if ($_smarty_tpl->tpl_vars['_total_count']->value>0){?><?php echo str_replace(',','.',100*$_smarty_tpl->tpl_vars['_count']->value/$_smarty_tpl->tpl_vars['_total_count']->value);?>
<?php }else{ ?>0<?php }?>%;<?php if (!$_smarty_tpl->tpl_vars['i']->value){?> background: #ddd;<?php }?>"></div></div></td><td><span class="rating"><?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int)ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['i']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['i']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0){
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++){
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?><i class="icon16 star"></i><?php }} else { ?><span class="hint">без оценки</span><?php }  ?></span></td></tr><?php }?><?php }} ?></table><?php }?><ul><?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?><li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="0"><?php /*  Call merged included template "review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('reply_allowed'=>false), 0, '21136510385846ace3095821-00775955');
content_5846ace370abf0_79870572($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "review.html" */?></li><?php } ?></ul><?php if (!$_smarty_tpl->tpl_vars['reviews']->value){?><p><?php echo sprintf('Оставьте <a href="%s">отзыв об этом товаре</a> первым!','reviews/');?>
</p><?php }else{ ?><?php echo sprintf(_w('Read <a href="%s">all %d review</a> on %s','Read <a href="%s">all %d reviews</a> on %s',$_smarty_tpl->tpl_vars['reviews_total_count']->value,false),'reviews/',$_smarty_tpl->tpl_vars['reviews_total_count']->value,htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
<?php }?></section></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviews_vk'])){?><h2 class="product-tabs-nav-trigger-wrapper"><a class="product-tabs-nav-trigger" data-name="reviews_vk" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Отзывы посетителей VK</a></h2><div id="product-tab-reviews_vk" class="product-tab"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['reviews_vk'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviews_fb'])){?><h2 class="product-tabs-nav-trigger-wrapper"><a class="product-tabs-nav-trigger" data-name="reviews_fb" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Отзывы посетителей Facebook</a></h2><div id="product-tab-reviews_fb" class="product-tab"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['reviews_fb'];?>
</div><?php }?><?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?><h2 class="product-tabs-nav-trigger-wrapper"><a class="product-tabs-nav-trigger" data-name="page_<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['page']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h2><?php } ?></div><!-- plugin hook: 'frontend_product.block' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block'];?>
<?php } ?><?php if (count($_smarty_tpl->tpl_vars['product']->value['categories'])>1){?><!-- categories --><ul class="sub-links" id="product-categories"><li class="gray">Категории: </li><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['c']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['c']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c']->iteration++;
 $_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration === $_smarty_tpl->tpl_vars['c']->total;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['status']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/category',array('category_url'=>$_smarty_tpl->tpl_vars['c']->value['full_url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php }?><?php } ?></ul><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['tags']){?><!-- tags --><div class="tags" id="product-tags"><?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/tag',array('tag'=>urlencode($_smarty_tpl->tpl_vars['t']->value)));?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a><?php } ?></div><?php }?></div></div></article><!-- RELATED PRODUCTS --><?php $_smarty_tpl->tpl_vars['upselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->upSelling(12), null, 0);?><?php $_smarty_tpl->tpl_vars['crossselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->crossSelling(12), null, 0);?><?php if ($_smarty_tpl->tpl_vars['upselling']->value||$_smarty_tpl->tpl_vars['crossselling']->value){?><?php if ($_smarty_tpl->tpl_vars['crossselling']->value){?><section class="related fill-background"><h3><?php echo sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h3><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['crossselling']->value,'ulclass'=>"shadowed carousel expandable",'without_micro_markup'=>true), 0);?>
</section><?php }?><?php if ($_smarty_tpl->tpl_vars['upselling']->value){?><section class="related fill-background"><h3>Рекомендуем посмотреть<?php $_smarty_tpl->tpl_vars['compare_ids'] = new Smarty_variable(array_merge(array($_smarty_tpl->tpl_vars['product']->value['id']),array_keys($_smarty_tpl->tpl_vars['upselling']->value)), null, 0);?><input type="button" onClick="javascript:window.location='<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare_ids']->value)));?>
';" value="Сравнить все" class="gray hide-on-med-and-down" /></h3><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['upselling']->value,'ulclass'=>"colored carousel expandable",'without_micro_markup'=>true), 0);?>
</section><?php }?><?php }?><script type="text/javascript">$(document).ready(function(){$('html,body').animate({ scrollTop: $('#productheader').offset().top }, 800);/*window.scrollTo(0, $('#productheader').offset().top);*/});<?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()){?>$.at.addition.addToViewed($("input[name='product_id']").val());<?php }?></script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:47
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.cart.html" */ ?>
<?php if ($_valid && !is_callable('content_5846ace31165a5_69963334')) {function content_5846ace31165a5_69963334($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable('В корзину', null, 0);?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?><h2 style="padding: 0 0.75rem;"><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('preview')){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Пожалуйста выберите нужные параметры:<?php }?></h2><div class="row-grid"><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('preview')){?><?php if (method_exists($_smarty_tpl->tpl_vars['product']->value,'getVideo')){?><?php $_smarty_tpl->tpl_vars['video'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getVideo(array('96x96')), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value['images']||!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?><div class="col-grid s12 l8"><?php /*  Call merged included template "product.images.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("product.images.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21136510385846ace3095821-00775955');
content_5846ace31406b9_04021085($_smarty_tpl);
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
<?php }?>});<?php if (waRequest::isXMLHttpRequest()){?>$('input[type=checkbox],input[type=radio]').stylizeInput();<?php }?>});</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:47
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/product.images.html" */ ?>
<?php if ($_valid && !is_callable('content_5846ace31406b9_04021085')) {function content_5846ace31406b9_04021085($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['video']->value['url'])){?><div id="video-container" class="video-container" itemprop="video" itemscope itemtype="http://schema.org/VideoObject"><div itemprop="embedHTML"><iframe src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
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
</a></div><?php } ?></div><?php }?></figure><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:47
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/review.html" */ ?>
<?php if ($_valid && !is_callable('content_5846ace370abf0_79870572')) {function content_5846ace370abf0_79870572($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['ajax_append']->value)){?><li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['parent_id'];?>
"><?php }?><figure class="review" itemprop="review" itemscope itemtype="http://schema.org/Review"><div class="summary"><h6><?php if (!$_smarty_tpl->tpl_vars['review']->value['parent_id']&&!empty($_smarty_tpl->tpl_vars['review']->value['rate'])){?><span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"><?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['review']->value['rate']), null, 0);?><meta itemprop="worstRating" content = "1"><meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
"><meta itemprop="bestRating" content = "5"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['rate']->value,16);?>
</span><?php }?><span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['review']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
<?php }?></span></h6><?php if (empty($_smarty_tpl->tpl_vars['review']->value['site'])){?><span class="username" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</span><?php }else{ ?><a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['site'];?>
" class="username" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</a><?php }?><?php if (ifempty($_smarty_tpl->tpl_vars['review']->value['author']['is_user'])>0){?><span class="staff"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</span><?php }?><meta itemprop="itemReviewed" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><meta itemprop="datePublished" content="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['datetime'],'Y-m-d');?>
"><span class="gray">&bull;</span><span class="hint date" title="<?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime']);?>
"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime'],"humandatetime");?>
</span></div><?php if ($_smarty_tpl->tpl_vars['review']->value['text']){?><p itemprop="description"><?php echo $_smarty_tpl->tpl_vars['review']->value['text'];?>
</p><?php }?><?php if ($_smarty_tpl->tpl_vars['reply_allowed']->value){?><div class="actions"><a href="<?php if (isset($_smarty_tpl->tpl_vars['reply_link']->value)){?><?php echo $_smarty_tpl->tpl_vars['reply_link']->value;?>
<?php }else{ ?>#<?php }?>" class="review-reply inline-link"><b><i>ответить</i></b></a></div><?php }?></figure><?php if (!empty($_smarty_tpl->tpl_vars['ajax_append']->value)){?><ul class="reviews-branch"></ul></li><?php }?><?php }} ?>