<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 11:19:13
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/stream.html" */ ?>
<?php /*%%SmartyHeaderCode:1214566090584a690153ede5-98243257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '730b4275bcce1a32c4cd3c708efe57261201bb3d' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/stream.html',
      1 => 1464084398,
      2 => 'file',
    ),
    '1b8ad0f8f7d6eb9f1428b85f6884c9da5ed95d9e' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/stream_search.html',
      1 => 1464084398,
      2 => 'file',
    ),
    '67f1b0929bdce921004772ecda6dfe4227da983f' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/stream_posts.html',
      1 => 1464084398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214566090584a690153ede5-98243257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_lazyloading' => 0,
    'wa' => 0,
    'stream_title' => 0,
    'page' => 0,
    'is_search' => 0,
    'pages' => 0,
    'posts' => 0,
    'posts_per_page' => 0,
    'loaded_post_count' => 0,
    'post_count' => 0,
    'p' => 0,
    'blog_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584a69017a3d75_56847271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584a69017a3d75_56847271')) {function content_584a69017a3d75_56847271($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?>
<div id="post-stream" role="main" class="lazyloading" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemscope itemtype="http://schema.org/Blog"<?php }?>> 
<?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value&&!empty($_smarty_tpl->tpl_vars['stream_title']->value)){?><div class="fill-background"><h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stream_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1></div><?php }?>
    
    <a name="page_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"></a>

        <?php if ($_smarty_tpl->tpl_vars['is_search']->value){?>
            <?php /*  Call merged included template "stream_search.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("stream_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1214566090584a690153ede5-98243257');
content_584a69015690c1_08011136($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "stream_search.html" */?>
        <?php }else{ ?>
            <?php /*  Call merged included template "stream_posts.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("stream_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1214566090584a690153ede5-98243257');
content_584a6901622a48_67487044($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "stream_posts.html" */?>
        <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_lazyloading']->value||($_smarty_tpl->tpl_vars['page']->value==1)){?>
        <div class="pageless-wrapper"<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?> style="display:none;"<?php }?>>

        <?php if ($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['pages']->value){?>
            <?php $_smarty_tpl->tpl_vars['loaded_post_count'] = new Smarty_variable((count($_smarty_tpl->tpl_vars['posts']->value)+$_smarty_tpl->tpl_vars['posts_per_page']->value*($_smarty_tpl->tpl_vars['page']->value-1)), null, 0);?>
            <div class="pageless-card"><?php echo _w('%d post','%d posts',$_smarty_tpl->tpl_vars['loaded_post_count']->value);?>
&nbsp;<?php echo _w('of %d post','of %d posts',$_smarty_tpl->tpl_vars['post_count']->value);?>
</div>
            <div class="pageless-progress" style="display:none;"><i class="icon16 loading"></i>Loading...</div>
            <a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="pageless-link button">Show older posts</a>
        <?php }elseif(isset($_smarty_tpl->tpl_vars['page']->value)&&$_smarty_tpl->tpl_vars['pages']->value){?>
            <div class="pageless-card"><?php echo _w('%d post','%d posts',$_smarty_tpl->tpl_vars['post_count']->value);?>
</div>
        <?php }?>

        </div>
    <?php }?>

<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?>
</div>
<ul class="menu-h" id="stream-paging">
    <?php $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int)ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0){
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++){
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration == 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration == $_smarty_tpl->tpl_vars['p']->total;?>
        <li<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page']->value){?> class="selected"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page']->value){?>#page_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }else{ ?>?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></li>
    <?php }} ?>
</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value==1&&!$_smarty_tpl->tpl_vars['wa']->value->globals('disable_pageless')){?>
<script type="text/javascript">
$.pageless({
        auto: true, // auto load next pages
        url: '?layout=lazyloading<?php if ($_smarty_tpl->tpl_vars['blog_query']->value){?>&query=<?php echo urlencode($_smarty_tpl->tpl_vars['blog_query']->value);?>
<?php }?>',
        times: 2,
        target: '.lazyloading:first',
        scroll: function(response){
            var progress = '';
            if (response) {
                progress = '<i class="icon16 loading"><'+'/i> <em>Loading...<'+'/em>';
            }
        },
        count: <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
,
        paging_selector:'#stream-paging'
        
        <?php if ($_smarty_tpl->tpl_vars['blog_query']->value){?>
            
            ,prepareContent: function(html) {
                // hightlight search query in content text after lazyloading
                var tmp = $('<div></div>').append(html);
                $.blog_utils.highlight(tmp);
                var html = tmp.html();
                tmp.remove();
                return html;
            }
            
        <?php }?>
});
</script>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 11:19:13
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/stream_search.html" */ ?>
<?php if ($_valid && !is_callable('content_584a69015690c1_08011136')) {function content_584a69015690c1_08011136($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
<div class="fill-background hoverable">

    <section class="post search-match" id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemprop="blogPosts"<?php }?> itemscope itemtype="http://schema.org/BlogPosting">
        
        <div class="row-grid">
            
            <div class="col-grid s7 l9">
            
                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" itemprop="url"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h3>        
                
            </div>
            <div class="col-grid s5 l3">
            
                <div class="credentials align-right">
                    <?php if (isset($_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'])){?>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt="">
                            </a>
                        <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt="">
                        <?php }?>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
" class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</a>
                    <?php }else{ ?>
                        <span class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</span>
                    <?php }?>    
                </div>
                
            </div>
            <div class="col-grid s12">
                
                <div class="credentials">
                    <i class="mdi-access_time mdi-lg"></i><span class="small date"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['show_comments']->value&&$_smarty_tpl->tpl_vars['post']->value['comments_allowed']){?>
                        <i class="mdi-chat_bubble_outline mdi-lg"></i>
                        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['comment_count'])){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
#comments" class="small">
                                <?php echo _w('%d comment','%d comments',$_smarty_tpl->tpl_vars['post']->value['comment_count']);?>

                            </a>
                        <?php }else{ ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
#comments" class="small">
                                no comments
                            </a>
                        <?php }?>
                    <?php }?>
                </div>
                
            </div>
        
        </div>
        <p>
            <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value['text']),400);?>

        </p>
    </section>
    
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
    <?php if (!isset($_smarty_tpl->tpl_vars['page']->value)||$_smarty_tpl->tpl_vars['page']->value<2){?>
        <div class="pageless-card"><?php echo _w('%d post','%d posts',0);?>
</div>
    <?php }?>
<?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 11:19:13
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/stream_posts.html" */ ?>
<?php if ($_valid && !is_callable('content_584a6901622a48_67487044')) {function content_584a6901622a48_67487044($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/almamed/web/almamed.su/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
<div class="fill-background hoverable">

    <section class="post" id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemprop="blogPosts" <?php }?>itemscope itemtype="http://schema.org/BlogPosting">
        
        <div class="row-grid">
            
            <div class="col-grid s7 l9">
            
                <h3>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" itemprop="url"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
        
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['post_title'])){?>
                        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['post_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
                    <?php }?>
        
                </h3>
                
            </div>
            <div class="col-grid s5 l3">
            
                <div class="credentials align-right">
                    <?php if (isset($_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'])){?>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt="">
                            </a>
                        <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt="">
                        <?php }?>
                    <?php }?>
        
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
" class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</a>
                    <?php }else{ ?>
                        <span class="username"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</span>
                    <?php }?>
                </div>
                
            </div>
            <div class="col-grid s12">
            
                <div class="credentials">
                    
                    <i class="mdi-access_time mdi-lg"></i><span class="small date"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['show_comments']->value&&$_smarty_tpl->tpl_vars['post']->value['comments_allowed']){?>
                        <i class="mdi-chat_bubble_outline mdi-lg"></i>
                        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['comment_count'])){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
#comments" class="small">
                                <?php echo _w('%d comment','%d comments',$_smarty_tpl->tpl_vars['post']->value['comment_count']);?>

                            </a>
                        <?php }else{ ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
#comments" class="small">
                                no comments
                            </a>
                        <?php }?>
                    <?php }?>
                    
                </div>
                
            </div>
        
        </div>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['before'])){?>
            <div class="text_before">
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['before']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
            </div>
        <?php }?>

        <div class="text">
            <?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>

            <div class="row-grid">
                <?php if ($_smarty_tpl->tpl_vars['post']->value['cutted']){?>
                    <div class="col-grid s12 m5 l4 align-right align-left-on-small-and-down float-right">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" class="button post-cut"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value['cut_link_label'])===null||$tmp==='' ? 'Continue reading →' : $tmp);?>
</a>
                    </div>
                <?php }?>
                <div class="col-grid s12<?php if ($_smarty_tpl->tpl_vars['post']->value['cutted']){?> m7 l8<?php }?>">
                    <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['after'])){?>
                        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['after']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['plugin']->value=='tag'){?>
                                <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                            <?php }?>
                        <?php } ?>
                    <?php }?>
                </div>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['post']->value['album_id']&&$_smarty_tpl->tpl_vars['post']->value['album']['id']&&$_smarty_tpl->tpl_vars['post']->value['album']['photos']){?>
                <?php $_smarty_tpl->tpl_vars['photos_loaded'] = new Smarty_variable(1, null, 0);?> 
                <div class="photo-album-attachment">
                    <ul class="thumbs">
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['album']['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
#photo<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['thumb_crop']['url'];?>
" class="retinify" width="96" height="96" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }?>
        </div>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['after'])){?>
            <div class="text_after">
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['after']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php if ($_smarty_tpl->tpl_vars['plugin']->value!='tag'){?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php }?><?php } ?>
            </div>
        <?php }?>

    </section>
    
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value<2){?>
        <div class="pageless-card"><?php echo _w('%d post','%d posts',0);?>
</div>
    <?php }?>
<?php } ?>

<?php if (!empty($_smarty_tpl->tpl_vars['photos_loaded']->value)&&blogPhotosBridge::is2xEnabled()){?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js"></script>
    <script>$(function() { "use strict";
        $.Retina && $('img.retinify').retina();
    });</script>
<?php }?>
<?php }} ?>