<?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 16:59:25
         compiled from "/home/almamed/web/almamed.su/public_html/wa-widgets/kmapometr/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:14226977215849673d4f1bb6-47288414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7182ef4d5d6b02b9928c7c838958d15769daf45e' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-widgets/kmapometr/templates/Default.html',
      1 => 1443101907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14226977215849673d4f1bb6-47288414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'se' => 0,
    'city' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5849673d514aa2_84865855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5849673d514aa2_84865855')) {function content_5849673d514aa2_84865855($_smarty_tpl) {?><div class="block" id="km-apometr-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
    <div id="topvisor_QGC-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"></div>
    <script type="text/javascript" src="https://topvisor.ru/js/widget/apometr/apometr.php?region_action=-1&searcher=<?php echo $_smarty_tpl->tpl_vars['se']->value;?>
&region_key=<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
&div_id=topvisor_QGC-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
&charset=utf-8&lang=ru"></script>
</div>

<style>
    #topvisor_apometr {
        width: 100%;
    }
    #topvisor_apometr .topvisor-header {
        height: 20px;
    }
    #topvisor_apometr .topvisor-searcher {
        font-size: 12px;
        line-height: 30px;
    }
    #topvisor_apometr .topvisor-update {
        top: 10px;
    }
    #topvisor_apometr .topvisor-footer {
        line-height: 26px;
    }
    #topvisor_apometr a.topvisor-logo {
        margin-top: 3px;
    }
    #topvisor_apometr .topvisor-graph {
        width: 100px;
    }
    .widget-1x1 #topvisor_apometr .topvisor-searcher {
        margin-left: 5px;
    }
    .widget-1x1 #topvisor_apometr .topvisor-update {
        top: -10px;
        right: -8px;
    }
    .widget-1x1 #topvisor_apometr .topvisor-graph {
        display: none;
    }
    .widget-1x1 #topvisor_apometr a.topvisor-calendar {
        display: none;
    }
</style>
<?php }} ?>