<?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 17:06:55
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/installer/templates/actions/plugins/Plugins.html" */ ?>
<?php /*%%SmartyHeaderCode:1757231364584968ff854c75-56268424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eecef867d6c952f0c4f52fc10c82ffaabec8d71' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/installer/templates/actions/plugins/Plugins.html',
      1 => 1463046447,
      2 => 'file',
    ),
    '28ddc1a7291b73d1aeb55401a73732a1b6640412' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/installer/templates/includes/message.html',
      1 => 1452774829,
      2 => 'file',
    ),
    '8987666d68d15e75f5b6c9db36ce1c2838d71400' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/installer/templates/actions/plugins/Plugins.include.html',
      1 => 1452774829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757231364584968ff854c75-56268424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_name' => 0,
    'apps' => 0,
    'app' => 0,
    'slug' => 0,
    'vendor' => 0,
    'wa_url' => 0,
    'tags' => 0,
    'tag' => 0,
    'tag_name' => 0,
    'key' => 0,
    'plugin' => 0,
    'sort' => 0,
    '_sort' => 0,
    '_plugin' => 0,
    '_plugins' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584968ffac4274_49821648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584968ffac4274_49821648')) {function content_584968ffac4274_49821648($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php /*  Call merged included template "../../includes/message.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../includes/message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1757231364584968ff854c75-56268424');
content_584968ff86ddd8_84544398($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../includes/message.html" */?>

<!-- plugin filters -->
<div class="i-filters js-filters">

    <!-- price|updated -->
    <div class="float-right">
        <ul class="menu-h i-filter-price js-filter" data-filter="commercial|sort">
            <li class="selected"><a href="#/plugins/" data-href="#/plugins%filter%/%query%/" class="inline-link"><b><i>Все</i></b></a></li>
            <li><a href="#/plugins&commercial=true/" data-href="#/plugins&commercial=true%filter%/%query%/" class="inline-link"><b><i>Платные</i></b></a></li>
            <li><a href="#/plugins&commercial=false/" data-href="#/plugins&commercial=false%filter%/%query%/" class="inline-link"><b><i>Бесплатно</i></b></a></li>
            <li><a href="#/plugins&sort=new/" data-href="#/plugins&sort=new%filter%/%query%/" class="inline-link"><b><i>Новые</i></b></a></li>
        </ul>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?>
        <div class="float-right">
            <ul class="menu-h i-filter-price js-filter" data-filter="vendor">
                <li><a href="#/plugins/" data-href="#/plugins%filter%/%query%/"><i class="icon16 no"></i><?php echo htmlspecialchars(sprintf('%s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            </ul>
        </div>
    <?php }?>

    <div class="float-right">
        <input type="search" placeholder="Поиск" class="js-inline-search">
    </div>


    <!-- app -->
    <div class="float-left">
        <ul class="menu-h with-icons dropdown js-query">
            <li>
                <a href="#/plugins:top/" class="inline-link"><i class="icon16 star"></i><b><i><strong>Плагины</strong></i></b><span class="hint"></span> <i class="icon10 darr"></i></a>

                <ul class="menu-v with-icons">
                    <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value)){?>
                    <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['installed'])){?>
                            <?php $_smarty_tpl->tpl_vars['app_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['slug'], null, 0);?>
                            <li <?php if (!empty($_smarty_tpl->tpl_vars['slug']->value)&&(in_array($_smarty_tpl->tpl_vars['app']->value['slug'],$_smarty_tpl->tpl_vars['slug']->value))&&(!isset($_smarty_tpl->tpl_vars['vendor']->value)||$_smarty_tpl->tpl_vars['vendor']->value==$_smarty_tpl->tpl_vars['app']->value['vendor'])){?>class="selected"<?php }?>>
                                <a href="#/plugins/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/" data-href="#/plugins%filter%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/" data-filter="tag">
                                    <?php if (strpos($_smarty_tpl->tpl_vars['app']->value['icons'][16],'.')){?><img src="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['app']->value['icons'][16],'@^/@',$_smarty_tpl->tpl_vars['wa_url']->value);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/><?php }else{ ?><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['app']->value['icons'][16];?>
"></i><?php }?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_modifier_truncate(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['app']->value['name'])===null||$tmp==='' ? $_tmp1 : $tmp), ENT_QUOTES, 'UTF-8', true),27);?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?><span class="hint"> <?php echo htmlspecialchars(sprintf('%s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                                </a>
                            </li>
                        <?php }?>
                    <?php } ?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['tags']->value)){?>
                    <li style="padding-left: 5px;" class="top-padded"><br><h5 class="heading">Категории</h5></li>
                    <?php  $_smarty_tpl->tpl_vars['tag_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag_name']->_loop = false;
 $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag_name']->key => $_smarty_tpl->tpl_vars['tag_name']->value){
$_smarty_tpl->tpl_vars['tag_name']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->value = $_smarty_tpl->tpl_vars['tag_name']->key;
?>
                        <li style="padding-left: 5px;">
                            <a href="#/plugins&tag=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
/all/" data-href="#/plugins&tag=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
%filter%/all/" data-filter="tag">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['vendor_name']->value)){?><span class="hint"> <?php echo htmlspecialchars(sprintf('%s',$_smarty_tpl->tpl_vars['vendor_name']->value), ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                            </a>
                        </li>
                    <?php } ?>
                    <?php }?>
                    <?php }else{ ?>
                        <li>
                            <br /><br />
                            <p class="hint align-center">Не установлено ни одного приложения с поддержкой плагинов.</p>
                        </li>
                    <?php }?>
                </ul>

            </li>
        </ul>
    </div>

</div>



    <?php if (!empty($_smarty_tpl->tpl_vars['slug']->value)){?>
    <?php $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable(1000, null, 0);?><?php $_smarty_tpl->tpl_vars['_plugins'] = new Smarty_variable(array(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slug']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value])&&!empty($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value]['plugins'])){?>
        <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value]['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
        <?php if (!isset($_smarty_tpl->tpl_vars['plugin']->value['sort'])){?><?php $_smarty_tpl->tpl_vars['sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['sort']->value+1, null, 0);?><?php $_smarty_tpl->createLocalArrayVariable('plugin', null, 0);
$_smarty_tpl->tpl_vars['plugin']->value['sort'] = $_smarty_tpl->tpl_vars['sort']->value;?><?php }?>
        <?php $_smarty_tpl->tpl_vars['_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['plugin']->value['sort'], null, 0);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_plugin", null); ob_start(); ?>
        <li<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?> class="i-installed"<?php }?>
                data-sort="-<?php echo $_smarty_tpl->tpl_vars['_sort']->value;?>
"
                data-sort-new="<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['publish_datetime'])){?><?php echo strtotime($_smarty_tpl->tpl_vars['plugin']->value['publish_datetime']);?>
<?php }else{ ?>0<?php }?>"
                data-filter-commercial="<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['commercial'])){?>false<?php }else{ ?>true<?php }?>"
                data-hide="<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['tags'])&&(in_array('dislike',$_smarty_tpl->tpl_vars['plugin']->value['tags'])||in_array('unlisted',$_smarty_tpl->tpl_vars['plugin']->value['tags']))){?>true<?php }else{ ?>false<?php }?>"
                data-search="<?php echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['plugin']->value['name'])." ".((string)$_smarty_tpl->tpl_vars['plugin']->value['vendor_name'])." ".((string)$_smarty_tpl->tpl_vars['plugin']->value['vendor'])." ".((string)$_smarty_tpl->tpl_vars['plugin']->value['description']), ENT_QUOTES, 'UTF-8', true);?>
"
        >
            <?php /*  Call merged included template "./Plugins.include.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Plugins.include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1757231364584968ff854c75-56268424');
content_584968ffa13017_16641631($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Plugins.include.html" */?>
        </li>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php $_smarty_tpl->createLocalArrayVariable('_plugins', null, 0);
$_smarty_tpl->tpl_vars['_plugins']->value[-$_smarty_tpl->tpl_vars['_sort']->value] = $_smarty_tpl->tpl_vars['_plugin']->value;?>
      <?php } ?>
        <?php }?>
    <?php } ?>
     <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['_plugins']->value)){?>
        <ul class="thumbs js-list-items">

            <!-- <?php echo ksort($_smarty_tpl->tpl_vars['_plugins']->value);?>
 -->

            <?php echo implode('',$_smarty_tpl->tpl_vars['_plugins']->value);?>


         </ul>
    <?php }else{ ?>
        <p class="align-center gray"><br>Не найдено ни одного плагина.</p>
    <?php }?>
    <div class="clear"></div>

<script type="text/javascript">
<!--
$.layout.window.setTitle('<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp2=ob_get_clean();?><?php echo strtr(("Плагины").(" — ").($_tmp2), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
//-->
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 17:06:55
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/installer/templates/includes/message.html" */ ?>
<?php if ($_valid && !is_callable('content_584968ff86ddd8_84544398')) {function content_584968ff86ddd8_84544398($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
        <div class="block double-padded i-message-<?php echo $_smarty_tpl->tpl_vars['message']->value['result'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['message']->value['result']=='success'){?>
                <i class="icon16 yes"></i>
            <?php }elseif($_smarty_tpl->tpl_vars['message']->value['result']=='fail'){?>
                <i class="icon16 no"></i>
            <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['text'], ENT_QUOTES, 'UTF-8', true);?>

        </div>
    <?php } ?>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 17:06:55
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/installer/templates/actions/plugins/Plugins.include.html" */ ?>
<?php if ($_valid && !is_callable('content_584968ffa13017_16641631')) {function content_584968ffa13017_16641631($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['app'] = new Smarty_variable($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
<a href="#/plugins/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
/" data-href="#/plugins%filter%/<?php echo $_smarty_tpl->tpl_vars['app']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['plugin_id']->value;?>
/" class="js-item-link">
  <div class="i-image-wrapper">
    <!-- cover -->
    <img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['icon'])===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-apps/installer/img/dummy-plugin.png" : $tmp);?>
">

    <!-- name & author -->
    <h5><?php echo smarty_modifier_truncate(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['plugin_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true),29);?>
</h5>

    <?php if (empty($_smarty_tpl->tpl_vars['hide_product_badge']->value)){?>
    <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['publish_datetime'])&&strtotime($_smarty_tpl->tpl_vars['plugin']->value['publish_datetime'])>time()-86400*14){?>
      <!-- NEW -->
      <div class="i-badge new"><span>New</span></div>
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['tags'])){?>
      <?php if (in_array('featured',$_smarty_tpl->tpl_vars['plugin']->value['tags'])){?>
        <!-- FEATURED -->
        <div class="i-badge featured"><i class="thumb-up"></i></div>
      <?php }elseif(in_array('updated',$_smarty_tpl->tpl_vars['plugin']->value['tags'])){?>
        <!-- UPDATED -->
        <div class="i-badge updated two-lines"><span>Новая версия</span></div>
      <?php }?>
    <?php }?>
    <?php }?>

  </div>
</a>

<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['description'])){?>
  <p><?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>
</p>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])&&!empty($_smarty_tpl->tpl_vars['plugin']->value['installed']['description'])){?>
  <p><?php echo $_smarty_tpl->tpl_vars['plugin']->value['installed']['description'];?>
</p>
<?php }?>

<!-- plugin price and status -->
<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
  <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['commercial'])){?>
    <?php if (ifset($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])=='free'){?>
      
      <span class="black bold">Бесплатно</span>
    <?php }else{ ?>
      <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['compare_price'])){?>
        <strike class="gray"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['compare_price'];?>
</strike>&nbsp;
        <strong class="discounted black"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['price'];?>
</strong>
      <?php }else{ ?>
        <span class="black bold">
                                <?php echo $_smarty_tpl->tpl_vars['plugin']->value['price'];?>

          <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['lease_price'])){?>
            или <?php echo sprintf('%s/мес.',$_smarty_tpl->tpl_vars['plugin']->value['lease_price']);?>

          <?php }?>
                            </span>
      <?php }?>
    <?php }?>
  <?php }else{ ?>
    <span class="black bold">Бесплатно</span>
  <?php }?>
<?php }else{ ?>
  <em class="i-installed-label"><i class="icon10 yes"></i> Установлено</em>
<?php }?>
<?php }} ?>