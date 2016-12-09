<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:49
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/head.html" */ ?>
<?php /*%%SmartyHeaderCode:3945670585846ace52d3735-70223377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '456e12dc063c4f623856d5c56ff1b05c0fc1b37b' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/head.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3945670585846ace52d3735-70223377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'wa_static_url' => 0,
    'theme_settings' => 0,
    'filters' => 0,
    'nofollow' => 0,
    'frontend_head' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ace5370870_67626230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ace5370870_67626230')) {function content_5846ace5370870_67626230($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
profitbuy.shop.min.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css" /><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
owl.carousel.css?v2.0.0" rel="stylesheet" type="text/css" /><script type="text/javascript">( function ($, undefined) {$.at = $.at || { };$.at.plugins["jquery.countdowntimer"] = {is_done: function () {return !!$.fn.countdowntimer;},href: "<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.countdownTimer.css",src: "<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.countdownTimer.min.js"};})(jQuery);</script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
owl.carousel.min.js?v2.0.0"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.cookie.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
profitbuy.shop.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script type="text/javascript">$(window).load(function() {$('.promo img').retina({ force_original_dimensions: false });$('.product-list img,.product-info img,.cart img').retina();$('.bestsellers img').retina();});</script><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofit'])||!empty($_smarty_tpl->tpl_vars['filters']->value)){?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofit'])){?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.position.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.autocomplete.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.slider.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['nofollow']->value)){?><!-- "nofollow" for pages not to be indexed, e.g. customer account --><meta name="robots" content="noindex,nofollow" /><?php }?><!-- plugin hook: 'frontend_head' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }} ?>