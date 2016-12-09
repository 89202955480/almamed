<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:49
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/searchform.html" */ ?>
<?php /*%%SmartyHeaderCode:3194372615846ace539cd89-00951851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1a649efe485c0d89eb99b44f4591c951bfff47' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/shop/themes/profitbuy/searchform.html',
      1 => 1465296962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3194372615846ace539cd89-00951851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'mobile_search' => 0,
    'query' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ace53ca0b6_42272261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ace53ca0b6_42272261')) {function content_5846ace53ca0b6_42272261($_smarty_tpl) {?><!-- product search --><form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/search');?>
"><div class="search-wrapper"><button type="submit"><i class="material-icons mi-2x">&#xE8B6;</i></button><input<?php if (empty($_smarty_tpl->tpl_vars['mobile_search']->value)){?> id="search"<?php }?> type="search" name="query" <?php if (!empty($_smarty_tpl->tpl_vars['query']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
"<?php }?> placeholder="Найти товары"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofit'])){?> class="autofit"<?php }?>></div></form><?php }} ?>