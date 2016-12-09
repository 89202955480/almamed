<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:04:02
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/yoss/templates/Frontend.html" */ ?>
<?php /*%%SmartyHeaderCode:365779404584a9db2c0ec11-00093528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3498524b3193b4355fb11b7a60558d9ca5402f3f' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/yoss/templates/Frontend.html',
      1 => 1471337869,
      2 => 'file',
    ),
    '23f1753e65727641078a68cf06243b0d02b8cbd3' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/yoss/css/yoss.css',
      1 => 1471337869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '365779404584a9db2c0ec11-00093528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yoss_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a9db2c21f71_57793981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a9db2c21f71_57793981')) {function content_584a9db2c21f71_57793981($_smarty_tpl) {?><style type="text/css">
	<?php /*  Call merged included template "../css/yoss.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/yoss.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '365779404584a9db2c0ec11-00093528');
content_584a9db2c14283_09191471($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/yoss.css" */?> 
	<?php echo $_smarty_tpl->tpl_vars['yoss_settings']->value['result_css'];?>

</style>

<script type="text/javascript">
	<?php echo $_smarty_tpl->getSubTemplate ("../js/yoss.frontend.js", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</script>

<script type="text/javascript">
	(function ($) {
	    yossFrontend.initModule();
	})(jQuery);
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:04:02
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/yoss/css/yoss.css" */ ?>
<?php if ($_valid && !is_callable('content_584a9db2c14283_09191471')) {function content_584a9db2c14283_09191471($_smarty_tpl) {?>.yoss-result.loading { background: url("<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/plugins/yoss/img/loading-blue.gif") no-repeat scroll center 15px #fff; }
.yoss-result .loading { background: url("<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/plugins/yoss/img/loading-blue.gif") no-repeat scroll center 15px #fff; height: 35px; width: 100%; }<?php }} ?>