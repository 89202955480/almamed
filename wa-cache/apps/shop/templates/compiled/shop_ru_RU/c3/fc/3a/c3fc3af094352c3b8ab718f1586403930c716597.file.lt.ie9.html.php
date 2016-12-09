<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 07:45:18
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/lt.ie9.html" */ ?>
<?php /*%%SmartyHeaderCode:1490153037584793de39fb72-36625923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3fc3af094352c3b8ab718f1586403930c716597' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/site/themes/profitbuy/lt.ie9.html',
      1 => 1465296963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490153037584793de39fb72-36625923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'wa_url' => 0,
    'theme_settings' => 0,
    'wa_theme_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584793dee6e688_61588823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584793dee6e688_61588823')) {function content_584793dee6e688_61588823($_smarty_tpl) {?><style type="text/css">a img { border: 0; }.container { width: 900px; margin: 0 auto; }.align-center { text-align: center; }.align-right { text-align: right; }.align-middle { vertical-align:middle; }a#logo { text-decoration: none; display: inline-block; overflow: hidden; max-height: 120px; line-height: 1; vertical-align: middle; width: 100%; }a#logo img { vertical-align: middle; }a#logo #logo-image { max-width: 100%; max-height: 120px; }a#logo .logo-text { display: inline-block; line-height: 1.4; vertical-align: middle; padding-left: 1.5rem; }a#logo .account-name { font-size: 1.5rem; color: #353535; }.hint{ color:#aaa;font-size:.9em; }table { width:100%;margin:0 auto; }.browser-icon td { width:20%; }a { display:block; }.browser-icon a span { background-image:url("<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/browser.jpg"); background-repeat: no-repeat; display:block; width:50px; height:50px; margin:0 auto 10px; cursor:pointer; }.explorer { background-position:0 0; }.chrome { background-position:-160px 0; }.safari { background-position:-325px 0; }.opera { background-position:-488px 0; }.firefox { background-position:-653px 0; }p { margin-top: 5px; }h1 { font-size: 24px; font-weight: bold; line-height: normal; margin:90px 0 0 0; }.wrapper-lt-ie8 p.hello { color: #353535; line-height: normal; font-size:16px; }p.help-text { margin:0 0 90px; }ul.phones-wrapper { margin: 0; padding: 0; }ul.phones-wrapper li .hint { display: none; }ul.phones-wrapper { display: inline-block; vertical-align: middle; line-height: 1.4; }ul.phones-wrapper li { display: inline-block; padding: 5px 0 5px 30px; text-align: right; vertical-align: top; list-style: none; }ul.phones-wrapper li > a { text-decoration: none; display: block; font-size: 1.55rem; line-height: normal; color: rgba(0, 0, 0, 0.87); }ul.phones-wrapper li .hint { display: initial; }</style><div class="container"><div class="row-grid"><div class="col-grid s12"><table><tr><td colspan="3" class="align-left align-middle"><a id="logo" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['logo'];?>
?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['logo_title'])===null||$tmp==='' ? '' : $tmp);?>
" id="logo-image" /><?php }else{ ?><img src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/wm_site.png" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['theme_settings']->value['logo_title'])===null||$tmp==='' ? '' : $tmp);?>
"/><?php }?><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo_image_only'])&&(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo_title'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo_tagline']))){?><div class="logo-text"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo_title'])){?><div class="account-name"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['logo_title'];?>
</div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['logo_tagline'])){?><span class="hint"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['logo_tagline'];?>
</span><?php }?></div><?php }?></a></td><td colspan="2" class="align-right align-middle"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['phone_1'])||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['phone_2'])){?><ul class="phones-wrapper"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['phone_1'])){?><li><a href="tel:<?php echo str_replace(array('(',')','-',' '),'',$_smarty_tpl->tpl_vars['theme_settings']->value['phone_1']);?>
"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['phone_1'];?>
</a></li><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['phone_2'])){?><li><a href="tel:<?php echo str_replace(array('(',')','-',' '),'',$_smarty_tpl->tpl_vars['theme_settings']->value['phone_2']);?>
"><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['phone_2'];?>
</a></li><?php }?></ul><?php }?></td></tr><tr><td colspan="5"><h1>Дорогие друзья!</h1><p class="hello">К сожалению, Ваш браузер не поддерживает современные технологии используемые на нашем сайте.</p></td></tr><tr><td colspan="5"><p class="hint help-text">Пожалуйста, обновите браузер, скачав его по ссылкам ниже, или обратитесь к системному администратору, обслуживающему Ваш компьютер.</p></td></tr><tr class="browser-icon align-center"><td><a rel="nofollow" href="//www.microsoft.com/rus/windows/internet-explorer/worldwide-sites.aspx" title="Internet Explorer"><span class="explorer"></span>Internet Explorer</a><p class="hint">Microsoft</p></td><td><a rel="nofollow" href="//www.google.com/chrome/" title="Chrome"><span class="chrome"></span>Chrome</a><p class="hint">Google</p></td><td><a rel="nofollow" href="//www.apple.com/ru/safari/" title="Safari"><span class="safari"></span>Safari</a><p class="hint">Apple</p></td><td><a rel="nofollow" href="//www.opera.com/" title="Opera"><span class="opera"></span>Opera</a><p class="hint">Opera Software</p></td><td><a rel="nofollow" href="//www.mozilla-europe.org/ru/firefox/" title="Firefox"><span class="firefox"></span>Firefox</a><p class="hint">Mozilla</p></td></tr></table></div></div></div><?php }} ?>