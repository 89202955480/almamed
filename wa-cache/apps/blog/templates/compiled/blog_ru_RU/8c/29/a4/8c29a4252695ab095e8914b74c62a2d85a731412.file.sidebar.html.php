<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 19:55:14
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:11362917525846ed72168bd2-84834298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c29a4252695ab095e8914b74c62a2d85a731412' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/sidebar.html',
      1 => 1464084398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11362917525846ed72168bd2-84834298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'rss' => 0,
    'blogs' => 0,
    'blog' => 0,
    'is_search' => 0,
    'timeline' => 0,
    'year' => 0,
    'item' => 0,
    'frontend_action' => 0,
    'output' => 0,
    'plugin' => 0,
    'theme_settings' => 0,
    'wa_parent_theme_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ed723b6d37_66428373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ed723b6d37_66428373')) {function content_5846ed723b6d37_66428373($_smarty_tpl) {?><div class="sidebar-group fill-background">
    <div class="sidebar-title second-type">Ссылки блога<button class="toggle-menu"><i class="mdi-menu mdi-2x"></i></button></div>
    <div class="sidebar-box">
        <ul class="base-menu type1">
            <!-- SUBSCRIBE -->
        	<?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?>
        	<?php if ($_smarty_tpl->tpl_vars['rss']->value){?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['rss']->value;?>
" title="RSS"><i class="icon16 rss"></i>RSS</a></li>
        		
        	<?php }?>
        	
        	<!-- BLOGS -->
            <?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->blogs(), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id')==$_smarty_tpl->tpl_vars['blog']->value['id']&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>selected<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a>
                </li>
            <?php }
if (!$_smarty_tpl->tpl_vars['blog']->_loop) {
?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
">Все записи</a>
                </li>
            <?php } ?>
            
            <!-- TIMELINE navigation -->
            <?php $_smarty_tpl->tpl_vars['timeline'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->timeline(), null, 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['timeline']->value)){?>
                <li class="parent">
                    <a href="#">Календарь</a>
                    <ul class="timeline">
            		<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable(null, null, 0);?>
            		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['year_month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timeline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['year_month']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
            			<?php if ($_smarty_tpl->tpl_vars['year']->value!=$_smarty_tpl->tpl_vars['item']->value['year']){?>
            				<?php if (!$_smarty_tpl->tpl_vars['item']->first){?>
                                    </ul>
                                </li>
                            <?php }?>
                            <li class="parent<?php if ($_smarty_tpl->tpl_vars['item']->value['year_selected']){?> selected<?php }?>">
            	            <?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['year'], null, 0);?>
                	        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['year_link'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['year'])===null||$tmp==='' ? 'NULL' : $tmp);?>
</a>
            				<ul>
                        <?php }?>
                        <li <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']){?>class="selected"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo _w("%d post","%d posts",$_smarty_tpl->tpl_vars['item']->value['count']);?>
"><?php echo _ws(date("F",gmmktime(0,0,0,$_smarty_tpl->tpl_vars['item']->value['month'],1)));?>
</a>
                        </li>
            		    <?php if ($_smarty_tpl->tpl_vars['item']->last){?>
            		            </ul>
            	    	    </li>
                        <?php }?>
                    <?php } ?>
                    </ul>
                </li>
            <?php }?>
            
            <!-- PLUGIN CATEGORIES -->
            <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
        	    <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])&&$_smarty_tpl->tpl_vars['plugin']->value=='category-plugin'){?>
        	        <li class="parent">
        	            <a href="#">Категории</a>
                        <?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>

                    </li>
                <?php }?>
            <?php } ?>
        </ul>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['category_tree_sidebar_show'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/links.categories.sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['pages_sidebar'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/links.pages.sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>

<!-- PLUGIN TAG -->
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tags'])&&!$_smarty_tpl->tpl_vars['wa']->value->isMobile()){?>
    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])&&$_smarty_tpl->tpl_vars['plugin']->value=='tag-plugin'){?>
            <div class="sidebar-group fill-background tag-plugin hide-on-med-and-down">
                <?php echo substr_replace($_smarty_tpl->tpl_vars['output']->value['sidebar'],'sidebar-box tags',strpos($_smarty_tpl->tpl_vars['output']->value['sidebar'],'tags'),4);?>

            </div>
        <?php }?>
    <?php } ?>
<?php }?>

<!-- PLUGINS -->
<?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()){?>
    
    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])&&$_smarty_tpl->tpl_vars['plugin']->value!='category-plugin'&&$_smarty_tpl->tpl_vars['plugin']->value!='tag-plugin'){?>
            <div class="sidebar-group fill-background <?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
">
                <div class="sidebar-title">
                    <?php if (substr($_smarty_tpl->tpl_vars['plugin']->value,-7)=='-plugin'){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->pluginName(substr($_smarty_tpl->tpl_vars['plugin']->value,0,-7));?>
<?php }else{ ?>Еще<?php }?>
                    <button class="toggle-menu"><i class="mdi-menu mdi-2x"></i></button>
                </div>
                <div class="sidebar-box">
                    <?php if (strpos($_smarty_tpl->tpl_vars['output']->value['sidebar'],'menu-v')!==false){?>
                        <?php echo substr_replace($_smarty_tpl->tpl_vars['output']->value['sidebar'],'base-menu type1',strpos($_smarty_tpl->tpl_vars['output']->value['sidebar'],'menu-v'),6);?>

                    <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>

                    <?php }?>
                </div>
            </div>
        <?php }?>
    <?php } ?>
<?php }?>

<!-- FOLLOW -->
<?php if (!$_smarty_tpl->tpl_vars['wa']->value->isMobile()){?>
    <aside class="connect">
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
            <div class="sidebar-group fill-background hide-on-med-and-down likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
            <div class="sidebar-group fill-background hide-on-med-and-down likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
            <div class="sidebar-group fill-background hide-on-med-and-down likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['ok_widget_code'])){?>
            <div class="sidebar-group fill-background hide-on-med-and-down likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['ok_widget_code'];?>

            </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['instagramm_widget_code'])){?>
            <div class="sidebar-group fill-background hide-on-med-and-down likebox">
                <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['instagramm_widget_code'];?>

            </div>
        <?php }?>
    </aside>
<?php }?><?php }} ?>