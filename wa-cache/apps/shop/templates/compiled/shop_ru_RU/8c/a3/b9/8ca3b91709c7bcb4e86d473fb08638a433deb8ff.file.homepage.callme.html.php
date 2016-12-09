<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:21:10
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.callme.html" */ ?>
<?php /*%%SmartyHeaderCode:2295208985846bb465a65b4-11527450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca3b91709c7bcb4e86d473fb08638a433deb8ff' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/homepage.callme.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2295208985846bb465a65b4-11527450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846bb465cba32_13661534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846bb465cba32_13661534')) {function content_5846bb465cba32_13661534($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['callme_phone'])){?><?php $_smarty_tpl->createLocalArrayVariable('theme_settings', null, 0);
$_smarty_tpl->tpl_vars['theme_settings']->value['callme_phone'] = $_smarty_tpl->tpl_vars['wa']->value->shop->settings("phone");?><?php }?><aside class="call-me-wrapper women"><div class="call-me-block align-center"><div class="call-me-text"><h2>У вас остались вопросы?</h2><p>Позвоните нам и наши менеджеры с огромным удовольствием ответят на все вопросы и посоветуют лучшие решения.</p><ul class="phones-wrapper"><li><a href="tel:<?php echo str_replace(array('(',')','-',' '),'',$_smarty_tpl->tpl_vars['theme_settings']->value['callme_phone']);?>
"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['callme_phone'];?>
</a></li></ul><p>или</p></div><?php if (0){?><a href="#" class="button second-type wm-recallback-plugin-button" onclick="return false;">Заказать обратный звонок</a><?php }else{ ?><a href="#" class="button second-type">Заказать обратный звонок</a><?php }?></div></aside><?php }} ?>