<?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 16:59:24
         compiled from "/home/almamed/web/almamed.su/public_html/wa-widgets/metrika/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:9169014965849673c6ef885-63789569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653529d3c6500c76523475627b8303cef34a0c14' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-widgets/metrika/templates/Default.html',
      1 => 1443602002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9169014965849673c6ef885-63789569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'color' => 0,
    'message' => 0,
    'site' => 0,
    'period' => 0,
    'visits' => 0,
    'views' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5849673c77fc60_81348034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849673c77fc60_81348034')) {function content_5849673c77fc60_81348034($_smarty_tpl) {?><style>
    #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 { position: relative;  width:100%; height:100%; background-color: <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
; }
    #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 h2 { color: green; }
    #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .heading { color: #686868; }
    #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .heading sup { color:red; }
    #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .cover-block { background: #ccc; opacity: 0.6; }
    .tv #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 h1 { color:#ffa !important; }
    .tv #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 h2 { color:#7BE !important; }
    .tv #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .heading { color:#999 !important; }
    .tv #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .heading sup { color:#F96464 !important; }
	.tv #metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 { background: #181818; }

</style>
<div id="metrika-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
    <div class="block top-padded align-center">
        <?php if (empty($_smarty_tpl->tpl_vars['message']->value)){?>
        <h6 class="heading"><?php echo $_smarty_tpl->tpl_vars['site']->value;?>
 <sup><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
</sup></h6>
        <h1 title="Визитов"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visits']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
        <h2 title="Просмотров"><?php echo $_smarty_tpl->tpl_vars['views']->value;?>
</h2>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <?php }?>
    </div>
    <div class="hidden cover-block">
        <i class="icon16 loading"></i>
    </div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['wa']->value->get('ignore_js')){?>
<script>$(function() {
    var  widget_id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
",
            uniqid = '' + (new Date).getTime() + Math.random();
    var $container = $('#metrika-' + widget_id);


    setTimeout(function() {
        try {
            DashboardWidgets[widget_id].uniqid = uniqid;
            setTimeout(function() {
                try {
                    if (uniqid == DashboardWidgets[widget_id].uniqid) {
                        DashboardWidgets[widget_id].renderWidget();
                    }
                } catch (e) {}
            }, 10*60*1000);
        } catch (e) {}
    }, 0);

    $container.click(function(e) {
        e.preventDefault();
        var $cover = $('.cover-block', $container);
        console.log($cover);
        $cover.css({
            position: 'absolute',
            height: '100%',
            width: '100%',
            left: 0,
            top: 0
        }).show();
        var loading = $cover.find('.loading');
        var w = loading.width();
        var h = loading.height();
        var W = $cover.width();
        var H = $cover.height();
        loading.css({
            marginTop: (H - h) / 2,
            marginLeft: (W - w) / 2
        });

        try {
            DashboardWidgets[widget_id].renderWidget();
        } catch (e) {
            setTimeout(function() {
                $cover.hide();
            }, 500);
        }
    });

});</script>
<?php }?><?php }} ?>