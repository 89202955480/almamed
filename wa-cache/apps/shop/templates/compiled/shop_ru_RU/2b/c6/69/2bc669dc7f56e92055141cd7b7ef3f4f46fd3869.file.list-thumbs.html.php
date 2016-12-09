<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:54
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/list-thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:16197210405846acea1bbba6-00238973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc669dc7f56e92055141cd7b7ef3f4f46fd3869' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/list-thumbs.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16197210405846acea1bbba6-00238973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plp' => 0,
    'sorting' => 0,
    'active_sort' => 0,
    'wa' => 0,
    'theme_settings' => 0,
    'category' => 0,
    'sort_fields' => 0,
    'sort' => 0,
    'name' => 0,
    's_u' => 0,
    'addition' => 0,
    'pppc' => 0,
    'x' => 0,
    'pppc_url' => 0,
    'select_view' => 0,
    'ulclass' => 0,
    'products' => 0,
    'p' => 0,
    'without_micro_markup' => 0,
    '_images' => 0,
    '_i' => 0,
    '_images_url' => 0,
    'badge_html' => 0,
    'wa_theme_url' => 0,
    'available' => 0,
    'f_code' => 0,
    'features' => 0,
    'f_value' => 0,
    'without_form' => 0,
    'add2cart_label' => 0,
    'compare_p' => 0,
    'bookmark_p' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846acea5d4cf5_77730287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846acea5d4cf5_77730287')) {function content_5846acea5d4cf5_77730287($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_function_wa_pagination')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty-plugins/function.wa_pagination.php';
?><!-- products thumbnail list view --><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable('В корзину', null, 0);?><?php $_smarty_tpl->tpl_vars['compare_p'] = new Smarty_variable(waRequest::cookie('shop_compare',array(),waRequest::TYPE_ARRAY_INT), null, 0);?><?php $_smarty_tpl->tpl_vars['bookmark_p'] = new Smarty_variable(waRequest::cookie('shop_bookmark',array(),waRequest::TYPE_ARRAY_INT), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['plp']->value)){?><div class="row-grid plp"><div class="table-grid"><?php if (!empty($_smarty_tpl->tpl_vars['sorting']->value)){?><!-- sorting --><?php $_smarty_tpl->tpl_vars['sort_fields'] = new Smarty_variable(array('name'=>'Название','price'=>'Цена','total_sales'=>'Хиты продаж','rating'=>'Оценка покупателей','create_datetime'=>'Дата добавления','stock'=>'В наличии'), null, 0);?><?php if (!isset($_smarty_tpl->tpl_vars['active_sort']->value)){?><?php $_smarty_tpl->tpl_vars['active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get('sort','create_datetime'), null, 0);?><?php }?><div class="col-grid <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=='paging'){?>s12<?php }else{ ?>s6<?php }?>"><span id="sort-name">Сортировать:</span><select id="sorting"><?php if (!empty($_smarty_tpl->tpl_vars['category']->value)&&!$_smarty_tpl->tpl_vars['category']->value['sort_products']){?><option value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
"<?php if (!$_smarty_tpl->tpl_vars['active_sort']->value){?> selected="selected"<?php }?>>Новые и популярные</option><?php }?><?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?><?php $_smarty_tpl->tpl_vars['s_u'] = new Smarty_variable(explode('"',smarty_modifier_replace($_smarty_tpl->tpl_vars['wa']->value->shop->sortUrl($_smarty_tpl->tpl_vars['sort']->value,$_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['active_sort']->value),'&','&amp;')), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['s_u']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php if ($_smarty_tpl->tpl_vars['active_sort']->value==$_smarty_tpl->tpl_vars['sort']->value){?><?php if (strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'asc')!==false){?> &uarr;<?php }elseif(strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'desc')!==false){?> &darr;<?php }?><?php }?></option><?php if ($_smarty_tpl->tpl_vars['active_sort']->value==$_smarty_tpl->tpl_vars['sort']->value){?><?php if (strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'asc')!==false){?><option value="<?php echo str_replace('asc','desc',$_smarty_tpl->tpl_vars['s_u']->value[1]);?>
" selected="selected" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 &darr;</option><?php }elseif(strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'desc')!==false){?><option value="<?php echo str_replace('desc','asc',$_smarty_tpl->tpl_vars['s_u']->value[1]);?>
" selected="selected" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 &uarr;</option><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')==$_smarty_tpl->tpl_vars['sort']->value){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->title((($_smarty_tpl->tpl_vars['wa']->value->title()).(' — ')).($_smarty_tpl->tpl_vars['name']->value));?>
<?php }?><?php } ?></select></div><?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=='paging'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['products_per_page'])&&empty($_smarty_tpl->tpl_vars['addition']->value)){?><?php $_smarty_tpl->tpl_vars['pppc'] = new Smarty_variable(waRequest::cookie('products_per_page',30,'TYPE_INT'), null, 0);?><div class="col-grid s6"><span id="pagination-count-name">Отображать:</span><?php $_smarty_tpl->tpl_vars['pppc_url'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),"/&*page=([0-9]*)&*/i",''), null, 0);?><select id="products-per-page"><?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = explode(',',$_smarty_tpl->tpl_vars['theme_settings']->value['products_per_page']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value){
$_smarty_tpl->tpl_vars['x']->_loop = true;
?><option<?php if ($_smarty_tpl->tpl_vars['pppc']->value==$_smarty_tpl->tpl_vars['x']->value){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['pppc_url']->value;?>
" data-pppc="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
"><?php echo sprintf('По %s товаров',$_smarty_tpl->tpl_vars['x']->value);?>
</option><?php } ?></select></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['select_view']->value)){?><div class="col-grid s6<?php if (empty($_smarty_tpl->tpl_vars['sorting']->value)&&$_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=='lazyloading'){?> offset-s6<?php }?> align-right"><ul id="select-view"><li class="thumbs<?php if ($_smarty_tpl->tpl_vars['select_view']->value=='thumbs'){?> selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
"><i class="material-icons">&#xE8F0;</i></a></li><li class="list<?php if ($_smarty_tpl->tpl_vars['select_view']->value=='list'){?> selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
"><i class="material-icons">&#xE8EF;</i></a></li><li class="short-list<?php if ($_smarty_tpl->tpl_vars['select_view']->value=='short-list'){?> selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
"><i class="material-icons">&#xE8F2;</i></a></li></ul></div><?php }?></div></div><?php }?><ul class="product-list<?php if (!empty($_smarty_tpl->tpl_vars['ulclass']->value)){?> <?php echo $_smarty_tpl->tpl_vars['ulclass']->value;?>
<?php }else{ ?> expandable colored<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['select_view']->value)){?> <?php echo $_smarty_tpl->tpl_vars['select_view']->value;?>
<?php }else{ ?> thumbs<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['list_features'])){?><?php $_smarty_tpl->tpl_vars['features'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->features($_smarty_tpl->tpl_vars['products']->value), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['scroll_image'])){?><?php $_smarty_tpl->tpl_vars['_images'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->images(array_keys($_smarty_tpl->tpl_vars['products']->value),'200'), null, 0);?><?php }?><?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0, null, 0);?><li<?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?> itemscope itemtype ="http://schema.org/Product"<?php }?>><div class="pl-item-wrapper"><div class="pl-item-image"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
"><div class="image"><?php $_smarty_tpl->tpl_vars['_images_url'] = new Smarty_variable(array(), null, 0);?><div class="image-setting-wrapper"<?php if (!empty($_smarty_tpl->tpl_vars['_images']->value[$_smarty_tpl->tpl_vars['p']->value['id']])){?><?php  $_smarty_tpl->tpl_vars['_i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_images']->value[$_smarty_tpl->tpl_vars['p']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_i']->key => $_smarty_tpl->tpl_vars['_i']->value){
$_smarty_tpl->tpl_vars['_i']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('_images_url', null, 0);
$_smarty_tpl->tpl_vars['_images_url']->value[] = $_smarty_tpl->tpl_vars['_i']->value['url_200'];?><?php } ?> data-images='<?php echo json_encode($_smarty_tpl->tpl_vars['_images_url']->value);?>
'<?php }?>><?php if (count($_smarty_tpl->tpl_vars['_images_url']->value)>1){?><span title="Предыдущее изображение" class="image-setting-btn image-setting-prev"><i class="material-icons mi-2x">&#xE5CB;</i></span><span title="Следующее изображение" class="image-setting-btn image-setting-next"><i class="material-icons mi-2x">&#xE5CC;</i></span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['product_preview'])){?><span title="Предпросмотр" class="image-setting-btn image-setting-product-preview" data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1&amp;preview=1"><i class="material-icons mi-2x">&#xE85B;</i></span><?php }?></div><div class="badge-wrapper"><?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['p']->value['badge']), null, 0);?><?php if ($_smarty_tpl->tpl_vars['badge_html']->value){?><div class="corner top left"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div><?php }?><?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'200',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy200.png"));?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'200',array('alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy200.png"));?>
<?php }?></div></div></a></div><div class="pl-item-info"><div class="pl-item-info-expandable"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
"><h5><span<?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?> itemprop="name"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</span></h5></a><div class="stock-and-rating"><?php if ($_smarty_tpl->tpl_vars['p']->value['rating']>0){?><span class="rating nowrap"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['p']->value['rating'],'24');?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['available']->value){?><?php if ($_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0){?><div class="stock-label stock-high"><i class="icon16 stock-green"></i>В наличии</div><?php }else{ ?><div class="stock-label stock-none"><i class="icon16 stock-transparent"></i>Под заказ</div><?php }?><?php }?></div><?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?><div<?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?> itemprop="description"<?php }?> class="summary"><?php echo $_smarty_tpl->tpl_vars['p']->value['summary'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['p']->value['features'])){?><table class="features"><?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?><tr<?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='divider'){?> class="divider"<?php }?>><td class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</td><td class="value"><?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?><?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='color'){?><?php echo implode('<br /> ',$_smarty_tpl->tpl_vars['f_value']->value);?>
<?php }else{ ?><?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
<?php }?></td></tr><?php } ?></table><?php }?></div><div class="offers"<?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?> itemprop="offers" itemscope itemtype="http://schema.org/Offer"<?php }?>><?php if ($_smarty_tpl->tpl_vars['available']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['without_form']->value)){?><div class="purchase addtocart" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?>><div class="price-wrapper"><?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
 </span><?php }?><span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span></div><?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
"><?php }?><div class="submit-wrapper"><input type="button" class="button second-type" data-product_id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendCart/add');?>
" value="<?php echo $_smarty_tpl->tpl_vars['add2cart_label']->value;?>
"><i class="adding2cart"></i></div><div class="addition-wrapper"><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="#" class="addition-button compare-add<?php if (in_array($_smarty_tpl->tpl_vars['p']->value['id'],$_smarty_tpl->tpl_vars['compare_p']->value)){?> added<?php }?>" title="К сравнению" rel="nofollow"><i class="material-icons mi-2x">&#xE01D;</i></a><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="#" class="addition-button bookmark-add<?php if (in_array($_smarty_tpl->tpl_vars['p']->value['id'],$_smarty_tpl->tpl_vars['bookmark_p']->value)){?> added<?php }?>" title="В закладки" rel="nofollow"><i class="material-icons mi-2x">&#xE838;</i></a></div><span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',$_smarty_tpl->tpl_vars['p']->value['name'],$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'));?>
</span></div><?php }else{ ?><form class="purchase addtocart" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontendCart/add');?>
"><div class="price-wrapper"><?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
 </span><?php }?><span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span></div><?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
"><?php }?><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><div class="submit-wrapper"><input type="submit" class="second-type" value="<?php echo $_smarty_tpl->tpl_vars['add2cart_label']->value;?>
"><i class="adding2cart"></i></div><div class="addition-wrapper"><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="#" class="addition-button compare-add<?php if (in_array($_smarty_tpl->tpl_vars['p']->value['id'],$_smarty_tpl->tpl_vars['compare_p']->value)){?> added<?php }?>" title="К сравнению" rel="nofollow"><i class="material-icons mi-2x">&#xE01D;</i></a><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="#" class="addition-button bookmark-add<?php if (in_array($_smarty_tpl->tpl_vars['p']->value['id'],$_smarty_tpl->tpl_vars['bookmark_p']->value)){?> added<?php }?>" title="В закладки" rel="nofollow"><i class="material-icons mi-2x">&#xE838;</i></a></div><span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',$_smarty_tpl->tpl_vars['p']->value['name'],$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'));?>
</span></form><?php }?><?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?><link itemprop="availability" href="http://schema.org/InStock" /><?php }?><?php }else{ ?><div class="price-wrapper"><span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span></div><?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?><meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
"><meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
"><?php }?><div class="out-of-stock"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></div><div class="addition-wrapper"><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="#" class="addition-button compare-add<?php if (in_array($_smarty_tpl->tpl_vars['p']->value['id'],$_smarty_tpl->tpl_vars['compare_p']->value)){?> added<?php }?>" title="К сравнению" rel="nofollow"><i class="material-icons mi-2x">&#xE01D;</i></a><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" href="#" class="addition-button bookmark-add<?php if (in_array($_smarty_tpl->tpl_vars['p']->value['id'],$_smarty_tpl->tpl_vars['bookmark_p']->value)){?> added<?php }?>" title="В закладки" rel="nofollow"><i class="material-icons mi-2x">&#xE838;</i></a></div><?php if (empty($_smarty_tpl->tpl_vars['without_micro_markup']->value)){?><link itemprop="availability" href="http://schema.org/OutOfStock" /><?php }?><?php }?></div></div></div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['flying_cart_item'])&&$_smarty_tpl->tpl_vars['p']->value['sku_count']<2){?><input type="hidden" class="flying-cart-data" data-url = "<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" data-img_url = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['p']->value,'96x96');?>
" data-name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-price = "<?php echo htmlspecialchars(shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']), ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?></li><?php } ?></ul><?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?><div class="block <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=='lazyloading'){?>lazyloading-paging<?php }else{ ?>paging-nav<?php }?>"  data-times="2" data-link-text="Загрузить еще" data-loading-str="Загрузка..."><?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"menu-h")),$_smarty_tpl);?>
</div><?php }?><?php }} ?>