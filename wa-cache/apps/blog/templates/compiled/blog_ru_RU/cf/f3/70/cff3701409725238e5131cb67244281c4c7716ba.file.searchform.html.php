<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 19:55:13
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/searchform.html" */ ?>
<?php /*%%SmartyHeaderCode:1785295505846ed71d58650-11546288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff3701409725238e5131cb67244281c4c7716ba' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/searchform.html',
      1 => 1464084398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1785295505846ed71d58650-11546288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_url' => 0,
    'blog_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ed71e9b464_16724559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ed71e9b464_16724559')) {function content_5846ed71e9b464_16724559($_smarty_tpl) {?><!-- search -->
<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">
    <div class="search-wrapper">
        <button type="submit"><i class="mdi-search mdi-2x"></i></button>
        <input type="search" name="query" <?php if (!empty($_smarty_tpl->tpl_vars['blog_query']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['blog_query']->value;?>
"<?php }?> placeholder="Найти запись">
    </div>
</form><?php }} ?>