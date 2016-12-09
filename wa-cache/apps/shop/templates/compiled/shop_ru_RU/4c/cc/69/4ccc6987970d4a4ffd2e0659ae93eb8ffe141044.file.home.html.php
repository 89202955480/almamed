<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:21:09
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/home.html" */ ?>
<?php /*%%SmartyHeaderCode:7680721195846bb45d11686-31229816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ccc6987970d4a4ffd2e0659ae93eb8ffe141044' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/home.html',
      1 => 1465296962,
      2 => 'file',
    ),
    'd2537f37e23f5994c4bb6752ca16e05548f998b3' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.slider.html',
      1 => 1465296962,
      2 => 'file',
    ),
    'e4ec358295a95aeaa4bcd1c126e50cec8c7c063b' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.categories.html',
      1 => 1465296962,
      2 => 'file',
    ),
    '2cfcb0bc0e04dd51fd8ebbb278d8ae4b9acddbc5' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.brands.html',
      1 => 1465296962,
      2 => 'file',
    ),
    '58e617af9e95f3b62ef8beca0527b171190105de' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.lastadd.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7680721195846bb45d11686-31229816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'theme_settings' => 0,
    'promocards' => 0,
    'promoproducts' => 0,
    'bestsellers' => 0,
    'user_set' => 0,
    'wa_backend_url' => 0,
    'promo' => 0,
    'frontend_homepage' => 0,
    '_' => 0,
    'userset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846bb4606e8e0_24686406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846bb4606e8e0_24686406')) {function content_5846bb4606e8e0_24686406($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><?php $_smarty_tpl->tpl_vars['promocards'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->promos(), null, 0);?><?php $_smarty_tpl->tpl_vars['bestsellers'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'],15), null, 0);?><?php $_smarty_tpl->tpl_vars['userset'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_userset'],15), null, 0);?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=='products'){?><?php $_smarty_tpl->tpl_vars['promoproducts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_promo'],15), null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['promocards']->value)&&empty($_smarty_tpl->tpl_vars['promoproducts']->value)&&empty($_smarty_tpl->tpl_vars['bestsellers']->value)&&empty($_smarty_tpl->tpl_vars['user_set']->value)){?><article class="welcome fill-background"><h1>Добро пожаловать в ваш новый интернет-магазин!</h1><p><?php echo sprintf('Начните с <a href="%s">создания товара</a> в бекенде интернет-магазина.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('shop/?action=products#/welcome/'));?>
</p></article><?php }elseif($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']!='hidden'){?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mobile'])){?><!-- SLIDER --><?php /*  Call merged included template "homepage.slider.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("homepage.slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '7680721195846bb45d11686-31229816');
content_5846bb45d722e8_41352143($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "homepage.slider.html" */?><?php }?><?php }?><!-- PROMOS --><?php if ($_smarty_tpl->tpl_vars['promocards']->value&&$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_promocards_below_the_slider']){?><div class="promos"><ul><?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?><li id="s-promo-<?php echo $_smarty_tpl->tpl_vars['promo']->value['id'];?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
');"><div class="background-color-layer"></div><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h5 style="color: <?php echo $_smarty_tpl->tpl_vars['promo']->value['color'];?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h5><?php }?></a></li><?php } ?></ul></div><?php }?><!-- ABOUT US --><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_about_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_about_body'])){?><div class="about-us fill-background"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_about_title'])){?><h1><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_about_title'];?>
</h1><?php }?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_about_body'];?>
</div><?php }?><!-- BULLETS --><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_show'])){?><section class="bullets"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'])){?><figure class="bullet"><h4><i class="material-icons mi-2x pull-left">&#xE558;</i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'], ENT_QUOTES, 'UTF-8', true);?>
<span class="bullet-button"></span></h4><div class="bullet-body"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_1'];?>
</div></figure><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'])){?><figure class="bullet"><h4><i class="material-icons mi-2x pull-left">&#xE8A1;</i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'], ENT_QUOTES, 'UTF-8', true);?>
<span class="bullet-button"></span></h4><div class="bullet-body"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_2'];?>
</div></figure><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'])){?><figure class="bullet"><h4><i class="material-icons mi-2x pull-left">&#xE55F;</i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'], ENT_QUOTES, 'UTF-8', true);?>
<span class="bullet-button"></span></h4><div class="bullet-body"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_3'];?>
</div></figure><?php }?></section><?php }?><?php if (0){?><?php /*  Call merged included template "homepage.categories.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("homepage.categories.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '7680721195846bb45d11686-31229816');
content_5846bb45e017c4_74422725($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "homepage.categories.html" */?><?php }?><!-- plugin hook: 'frontend_homepage' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><!-- BESTSELLERS product list --><?php if ($_smarty_tpl->tpl_vars['bestsellers']->value){?><section class="sellerslist fill-background"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title']){?><h5 class="sellerslist-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title']);?>
</h5><?php }?><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['bestsellers']->value,'ulclass'=>"colored expandable carousel"), 0);?>
</section><?php }else{ ?><div class="fill-background"><p class="hint align-center"><br><em><?php echo sprintf('Перетащите несколько товаров в список <strong>%s</strong> в бекенде вашего интернет-магазина (список находится в левой колонке в разделе «Товары»), и эти товары будут автоматически опубликованы здесь на витрине вашего магазина.',(($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '()' : $tmp));?>
</em></p></div><?php }?><!-- USER SET product list --><?php if ($_smarty_tpl->tpl_vars['userset']->value){?><section class="sellerslist fill-background"><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_userset_title']){?><h5 class="sellerslist-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_userset_title']);?>
</h5> <?php }?><?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['userset']->value,'ulclass'=>"colored expandable lazyload"), 0);?>
</section><?php }?><?php if (0){?><?php /*  Call merged included template "homepage.brands.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("homepage.brands.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '7680721195846bb45d11686-31229816');
content_5846bb45eb3fc3_71167114($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "homepage.brands.html" */?><?php }?><!-- LAST POSTS & PHOTOS --><?php /*  Call merged included template "homepage.lastadd.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("homepage.lastadd.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '7680721195846bb45d11686-31229816');
content_5846bb45ee5a94_88376350($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "homepage.lastadd.html" */?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:21:09
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.slider.html" */ ?>
<?php if ($_valid && !is_callable('content_5846bb45d722e8_41352143')) {function content_5846bb45d722e8_41352143($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bxslider_mode']=='promos'){?><?php $_smarty_tpl->tpl_vars['promoOrig'] = new Smarty_variable($_smarty_tpl->tpl_vars['promocards']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/slider.promos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('promos'=>(($tmp = @$_smarty_tpl->tpl_vars['promoOrig']->value)===null||$tmp==='' ? null : $tmp),'photos'=>(($tmp = @$_smarty_tpl->tpl_vars['promoImit']->value)===null||$tmp==='' ? null : $tmp),'size'=>(($tmp = @$_smarty_tpl->tpl_vars['_size']->value)===null||$tmp==='' ? "1280x0" : $tmp),'imageBackground'=>true,'autoplay'=>true,'mode'=>"fade"), 0);?>
<?php }else{ ?><?php $_smarty_tpl->tpl_vars['_size'] = new Smarty_variable('300', null, 0);?><?php $_smarty_tpl->tpl_vars['prodOrig'] = new Smarty_variable($_smarty_tpl->tpl_vars['promoproducts']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/slider.products.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>(($tmp = @$_smarty_tpl->tpl_vars['prodOrig']->value)===null||$tmp==='' ? null : $tmp),'size'=>(($tmp = @$_smarty_tpl->tpl_vars['_size']->value)===null||$tmp==='' ? '300' : $tmp),'bgincrement'=>50,'autoplay'=>true), 0);?>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:21:09
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.categories.html" */ ?>
<?php if ($_valid && !is_callable('content_5846bb45e017c4_74422725')) {function content_5846bb45e017c4_74422725($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_type_categories'] = new Smarty_variable(2, null, 0);?><?php $_smarty_tpl->tpl_vars['_categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,1,true), null, 0);?><?php if (count($_smarty_tpl->tpl_vars['_categories']->value)){?><div class="fill-background"><?php if ($_smarty_tpl->tpl_vars['_type_categories']->value==1){?><ul class="piicsl"><?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?><li class="piicsl-item"><a href="<?php echo $_smarty_tpl->tpl_vars['sc']->value['url'];?>
"><div class="piicsl-img"><img src="<?php if (shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['sc']->value['id'],'image')){?><?php echo shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['sc']->value['id'],'image');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/dummy200.png<?php }?>" alt="" /></div><span class="piicsl-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a></li><?php } ?></ul><?php }else{ ?><ul class="piicsl2"><?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?><li class="piicsl-item"><div class="piicsl-img"><img src="<?php if (shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['sc']->value['id'],'image')){?><?php echo shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['sc']->value['id'],'image');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/dummy200.png<?php }?>" alt="" /></div><a href="<?php echo $_smarty_tpl->tpl_vars['sc']->value['url'];?>
"><span class="piicsl-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a><?php if (!empty($_smarty_tpl->tpl_vars['sc']->value['childs'])){?><?php  $_smarty_tpl->tpl_vars['ch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sc']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ch']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ch']->key => $_smarty_tpl->tpl_vars['ch']->value){
$_smarty_tpl->tpl_vars['ch']->_loop = true;
 $_smarty_tpl->tpl_vars['ch']->index++;
?><a href="<?php echo $_smarty_tpl->tpl_vars['ch']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ch']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['ch']->index==4){?><a href="<?php echo $_smarty_tpl->tpl_vars['sc']->value['url'];?>
" class="hint">Еще категории...</a><?php break 1?><?php }?><?php } ?><?php }?></li><?php } ?></ul><?php }?></div><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:21:09
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.brands.html" */ ?>
<?php if ($_valid && !is_callable('content_5846bb45eb3fc3_71167114')) {function content_5846bb45eb3fc3_71167114($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pb'] = new Smarty_variable(shopProductbrandsPlugin::getBrands(), null, 0);?><?php if (count($_smarty_tpl->tpl_vars['pb']->value)){?><div class="fill-background"><div class="plugin-productbrands"><?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?><a title="<?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['b']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['b']->value['image']){?><img alt="<?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
"><?php }else{ ?><span class="pbb-title"><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</span><?php }?></a><?php } ?></div></div><script type="text/javascript">$(".plugin-productbrands").owlCarousel({loop: true,dots: false,items: 1,nav: true,navText: ["",""],responsive: {0: {items: 1},481: {items: 2},741: {items: 3},993: {items: $('.without-sidebar').length == 0 ? 4 : 3},1281: {items: $('.without-sidebar').length == 0 ? 5 : 4}}});</script><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:21:09
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.lastadd.html" */ ?>
<?php if ($_valid && !is_callable('content_5846bb45ee5a94_88376350')) {function content_5846bb45ee5a94_88376350($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['last_photos_show'])&&$_smarty_tpl->tpl_vars['wa']->value->photos){?><?php $_smarty_tpl->tpl_vars['last_photos'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->photos('','300x150',9), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['last_posts_show'])&&$_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->tpl_vars['last_posts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts(null,3), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['last_posts']->value)||!empty($_smarty_tpl->tpl_vars['last_photos']->value)){?><div class="row-grid hide-on-small-and-down"><?php if (!empty($_smarty_tpl->tpl_vars['last_photos']->value)){?><div class="last-photos-wrapper col-grid m12 l6"><div class="fill-background"><h2 class="last-photos-header">Последние фотографии</h2><ul><?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?><li<?php if ($_smarty_tpl->tpl_vars['photo']->value['stack_count']>0){?> class="stacked"<?php }?>><?php if (empty($_smarty_tpl->tpl_vars['photo']->value['frontend_link'])){?><div class="image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['photo']->value['thumb_300x150']['url'];?>
);"<?php if ($_smarty_tpl->tpl_vars['photo']->value['description']){?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>></div><?php }else{ ?><a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['photo']->value['frontend_link'])===null||$tmp==='' ? '#' : $tmp);?>
"><div class="image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['photo']->value['thumb_300x150']['url'];?>
);"<?php if ($_smarty_tpl->tpl_vars['photo']->value['description']){?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>></div></a><?php }?></li><?php } ?></ul></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['last_posts']->value)){?><div class="last-post-wrapper col-grid m12 l6"><div class="fill-background"><h2 class="last-post-header">Наши новости</h2><?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?><div class="post"><h4 class="last-post-title"><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a><?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['post_title'])){?><?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['post_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?><?php }?></h4><?php if ($_smarty_tpl->tpl_vars['post']->value['album_id']&&$_smarty_tpl->tpl_vars['wa']->value->photos){?><?php $_smarty_tpl->tpl_vars['_post_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->photos("album/".((string)$_smarty_tpl->tpl_vars['post']->value['album_id']),"300x150",1), null, 0);?><?php $_smarty_tpl->tpl_vars['_post_image'] = new Smarty_variable(current($_smarty_tpl->tpl_vars['_post_image']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_post_image']->value){?><img class="post-image" src="<?php echo $_smarty_tpl->tpl_vars['_post_image']->value['thumb_300x150']['url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_post_image']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?><?php }?><div class="credentials"><?php if (isset($_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'])){?><?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt=""></a><?php }else{ ?><img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt=""><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
" class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</a><?php }else{ ?><span class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</span><?php }?><i class="material-icons mi-lg">&#xE192;</i><span class="small date"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</span></div><p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value['text']),200);?>
</p></div><?php } ?></div></div><?php }?></div><?php }?><?php }} ?>