<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:21:10
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/slider.promos.html" */ ?>
<?php /*%%SmartyHeaderCode:17312806195846bb460aca88-37441766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44808646a4bb3916d4fba3e5980a4ea50d2c5a48' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/slider.promos.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17312806195846bb460aca88-37441766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'promos' => 0,
    'imageBackground' => 0,
    'mode' => 0,
    'loop' => 0,
    'autoHideControl' => 0,
    'speed' => 0,
    'adaptiveHeight' => 0,
    'pager' => 0,
    'autoplay' => 0,
    'pause' => 0,
    'options' => 0,
    'promo' => 0,
    'photos' => 0,
    'photo' => 0,
    'size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846bb4621d897_05108098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846bb4621d897_05108098')) {function content_5846bb4621d897_05108098($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['promos']->value)){?><?php if (count($_smarty_tpl->tpl_vars['promos']->value)<2){?><?php $_smarty_tpl->tpl_vars['pager'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['autoplay'] = new Smarty_variable(false, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['imageBackground']->value)){?><?php $_smarty_tpl->tpl_vars['adaptiveHeight'] = new Smarty_variable(true, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['options'] = new Smarty_variable(array('mode'=>(($tmp = @$_smarty_tpl->tpl_vars['mode']->value)===null||$tmp==='' ? 'horizontal' : $tmp),'infiniteLoop'=>(($tmp = @$_smarty_tpl->tpl_vars['loop']->value)===null||$tmp==='' ? true : $tmp),'hideControlOnEnd'=>(($tmp = @$_smarty_tpl->tpl_vars['autoHideControl']->value)===null||$tmp==='' ? false : $tmp),'speed'=>(($tmp = @$_smarty_tpl->tpl_vars['speed']->value)===null||$tmp==='' ? 500 : $tmp),'adaptiveHeight'=>(($tmp = @$_smarty_tpl->tpl_vars['adaptiveHeight']->value)===null||$tmp==='' ? false : $tmp),'pager'=>(($tmp = @$_smarty_tpl->tpl_vars['pager']->value)===null||$tmp==='' ? true : $tmp),'auto'=>(($tmp = @$_smarty_tpl->tpl_vars['autoplay']->value)===null||$tmp==='' ? false : $tmp),'pause'=>(($tmp = @$_smarty_tpl->tpl_vars['pause']->value)===null||$tmp==='' ? 4000 : $tmp),'autoHover'=>false,'imageBackground'=>(($tmp = @$_smarty_tpl->tpl_vars['imageBackground']->value)===null||$tmp==='' ? false : $tmp)), null, 0);?><article class="global-promo-slider"><ul class="gps-bxslider" data-options='<?php echo json_encode($_smarty_tpl->tpl_vars['options']->value);?>
' style="position:relative;list-style:none;"><?php if (empty($_smarty_tpl->tpl_vars['imageBackground']->value)){?><?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?><li class="gps-user-image-tag"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="gps-user-caption"><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3><br /><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['body'])){?><div class="gps-user-body"><?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['promo']->value['body']);?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'])&&time()<=strtotime($_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'])){?><div class="countdown"><span class="js-promo-countdown"data-start="<?php echo date('Y-m-d H:i:s');?>
"data-end="<?php echo $_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'];?>
"></span></div><?php }?></div></a></li><?php } ?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['promo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['promo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['promo']->key => $_smarty_tpl->tpl_vars['promo']->value){
$_smarty_tpl->tpl_vars['promo']->_loop = true;
?><li class="gps-user-image-background" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['promo']->value['image'];?>
);"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="gps-user-caption"><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['title'])){?><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['promo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h3><br /><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['body'])){?><div class="gps-user-body"><?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['promo']->value['body']);?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'])&&time()<=strtotime($_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'])){?><div class="countdown"><span class="js-promo-countdown"data-start="<?php echo date('Y-m-d H:i:s');?>
"data-end="<?php echo $_smarty_tpl->tpl_vars['promo']->value['countdown_datetime'];?>
"></span></div><?php }?></div></a></li><?php } ?><?php }?></ul></article><?php }elseif($_smarty_tpl->tpl_vars['photos']->value){?><?php if (count($_smarty_tpl->tpl_vars['photos']->value)<2){?><?php $_smarty_tpl->tpl_vars['pager'] = new Smarty_variable(false, null, 0);?><?php $_smarty_tpl->tpl_vars['autoplay'] = new Smarty_variable(false, null, 0);?><?php }?><?php if (empty($_smarty_tpl->tpl_vars['imageBackground']->value)){?><?php $_smarty_tpl->tpl_vars['adaptiveHeight'] = new Smarty_variable(true, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['options'] = new Smarty_variable(array("mode"=>(($tmp = @$_smarty_tpl->tpl_vars['mode']->value)===null||$tmp==='' ? "horizontal" : $tmp),"infiniteLoop"=>(($tmp = @$_smarty_tpl->tpl_vars['loop']->value)===null||$tmp==='' ? true : $tmp),"hideControlOnEnd"=>(($tmp = @$_smarty_tpl->tpl_vars['autoHideControl']->value)===null||$tmp==='' ? false : $tmp),"speed"=>(($tmp = @$_smarty_tpl->tpl_vars['speed']->value)===null||$tmp==='' ? 500 : $tmp),"adaptiveHeight"=>(($tmp = @$_smarty_tpl->tpl_vars['adaptiveHeight']->value)===null||$tmp==='' ? false : $tmp),"pager"=>(($tmp = @$_smarty_tpl->tpl_vars['pager']->value)===null||$tmp==='' ? true : $tmp),"auto"=>(($tmp = @$_smarty_tpl->tpl_vars['autoplay']->value)===null||$tmp==='' ? false : $tmp),"pause"=>(($tmp = @$_smarty_tpl->tpl_vars['pause']->value)===null||$tmp==='' ? 4000 : $tmp),"autoHover"=>false,"imageBackground"=>(($tmp = @$_smarty_tpl->tpl_vars['imageBackground']->value)===null||$tmp==='' ? false : $tmp)), null, 0);?><article class="global-promo-slider"><ul class="gps-bxslider" data-options='<?php echo json_encode($_smarty_tpl->tpl_vars['options']->value);?>
'><?php if (empty($_smarty_tpl->tpl_vars['imageBackground']->value)){?><?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['url'] = '';?><?php if (strpos($_smarty_tpl->tpl_vars['photo']->value['description'],'<!--mark-->')!==false){?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['description'] = explode('<!--mark-->',$_smarty_tpl->tpl_vars['photo']->value['description'],2);?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['url'] = $_smarty_tpl->tpl_vars['photo']->value['description'][0];?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['description'] = (($tmp = @$_smarty_tpl->tpl_vars['photo']->value['description'][1])===null||$tmp==='' ? '' : $tmp);?><?php }?><li class="gps-user-image-tag"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[('thumb_').($_smarty_tpl->tpl_vars['size']->value)]['url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="gps-user-caption"><?php if (!empty($_smarty_tpl->tpl_vars['photo']->value['name'])){?><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3><br /><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['photo']->value['description'])){?><div class="gps-user-body"><?php echo $_smarty_tpl->tpl_vars['photo']->value['description'];?>
</div><?php }?></div></a></li><?php } ?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['url'] = '';?><?php if (strpos($_smarty_tpl->tpl_vars['photo']->value['description'],'<!--mark-->')!==false){?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['description'] = explode('<!--mark-->',$_smarty_tpl->tpl_vars['photo']->value['description'],2);?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['url'] = $_smarty_tpl->tpl_vars['photo']->value['description'][0];?><?php $_smarty_tpl->createLocalArrayVariable('photo', null, 0);
$_smarty_tpl->tpl_vars['photo']->value['description'] = (($tmp = @$_smarty_tpl->tpl_vars['photo']->value['description'][1])===null||$tmp==='' ? '' : $tmp);?><?php }?><li class="gps-user-image-background" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['photo']->value[('thumb_').($_smarty_tpl->tpl_vars['size']->value)]['url'];?>
);"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><div class="gps-user-caption"><?php if (!empty($_smarty_tpl->tpl_vars['photo']->value['name'])){?><h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['photo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3><br /><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['photo']->value['description'])){?><div class="gps-user-body"><?php echo $_smarty_tpl->tpl_vars['photo']->value['description'];?>
</div><?php }?></div></a></li><?php } ?><?php }?></ul></article><?php }?><?php }} ?>