<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:44:48
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/product/ProductImage.html" */ ?>
<?php /*%%SmartyHeaderCode:11773057015846c0d0892266-30588860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57680875b029dbb72919e395f23866e947d85b96' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/product/ProductImage.html',
      1 => 1481026231,
      2 => 'file',
    ),
    '5b80144b396febcce2ea3e179772520a197042f6' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/product/include.imageUpload.html',
      1 => 1481026227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11773057015846c0d0892266-30588860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'product_id' => 0,
    'image' => 0,
    'photostream' => 0,
    'images' => 0,
    'img' => 0,
    'k' => 0,
    'offset' => 0,
    'sizes' => 0,
    'backend_product_edit' => 0,
    '_' => 0,
    'badges' => 0,
    'bid' => 0,
    'product' => 0,
    'b' => 0,
    'custom_setted' => 0,
    'image_name' => 0,
    'original_exists' => 0,
    'next' => 0,
    'placeholder' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846c0d0bbe394_57464005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846c0d0bbe394_57464005')) {function content_5846c0d0bbe394_57464005($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/photo.stream.slider.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/loupe.widget.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['image']->value['ext'];?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['image_name'] = new Smarty_variable(("Image_").($_tmp1).("_").($_tmp2).(".").($_tmp3), null, 0);?>

<div class="sidebar right200px rendered" id="s-product-image-toolbar">
    <ul class="thumbs s-mini-stream s-photostream">
        <li class="s-stream-nav rewind"><a href="javascript:void(0);"><i></i></a></li>
        <li class="s-stream-nav ff"><a href="javascript:void(0);"><i></i></a></li>
        <li class="s-stream-wrapper">
            <ul <?php if ($_smarty_tpl->tpl_vars['photostream']->value){?>style="position: absolute; left: <?php echo $_smarty_tpl->tpl_vars['photostream']->value['left'];?>
px; width: <?php echo $_smarty_tpl->tpl_vars['photostream']->value['width'];?>
px;"<?php }?>>
                <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['img']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['img']->value){?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['image']->value['id']==$_smarty_tpl->tpl_vars['img']->value['id']){?>selected<?php }?> <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['offset']->value-1||$_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['offset']->value||$_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['offset']->value+1){?>visible<?php }?>" data-image-id="<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
">
                            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
/edit/images/<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url_crop_small'];?>
<?php if ($_smarty_tpl->tpl_vars['img']->value['edit_datetime_ts']){?>?<?php echo $_smarty_tpl->tpl_vars['img']->value['edit_datetime_ts'];?>
<?php }?>" class="thumb" style="width: <?php echo (int)$_smarty_tpl->tpl_vars['sizes']->value['crop_small'];?>
px; height: <?php echo (int)$_smarty_tpl->tpl_vars['sizes']->value['crop_small'];?>
px;"></a>
                        </li>
                    <?php }else{ ?>
                        <li class="dummy <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['offset']->value-1||$_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['offset']->value||$_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['offset']->value+1){?>visible<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-not-found.png" style="width: <?php echo (int)$_smarty_tpl->tpl_vars['sizes']->value['crop_small'];?>
px; height: <?php echo (int)$_smarty_tpl->tpl_vars['sizes']->value['crop_small'];?>
px;"></li>
                    <?php }?>
                <?php } ?>
            </ul>
        </li>
    </ul>
    <div class="s-back-to-images">
        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
/edit/images" class="gray underline">К списку изображений</a>        
    </div>
    <div class="block s-product-image-actions">
        <h6 class="heading">Наклейка</h6>
        <ul class="menu-v with-icons" id="photo-organize-menu">
        
            <!-- plugin hook: 'backend_product_edit.image_toolbar_badge_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_product_edit']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['image_toolbar_badge_li']);?>
<?php } ?><?php }?>
        
            <?php $_smarty_tpl->tpl_vars['badges'] = new Smarty_variable(shopProductModel::badges(), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['bid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['badges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['bid']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <li data-action='set-badge' <?php if ($_smarty_tpl->tpl_vars['bid']->value==$_smarty_tpl->tpl_vars['product']->value['badge']){?>class="selected"<?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
">
                    <a href="#"><i class="icon16 ss <?php echo $_smarty_tpl->tpl_vars['bid']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</a>
                </li>
            <?php } ?>
            <?php $_smarty_tpl->tpl_vars['custom_setted'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['badge']!==null&&!isset($_smarty_tpl->tpl_vars['badges']->value[$_smarty_tpl->tpl_vars['product']->value['badge']]), null, 0);?>
            <li data-action='set-custom-badge' data-type="custom" <?php if ($_smarty_tpl->tpl_vars['custom_setted']->value){?>class="selected"<?php }?>>
                <a href="#"><i class="icon16 ss div"></i>Другой</a><span class="small editable"></span>
                <div id="s-product-set-custom-badge" <?php if (!$_smarty_tpl->tpl_vars['custom_setted']->value){?>style="display:none;"<?php }?>>
                    <textarea name="code" id="s-product-set-custom-badge-code" style="min-height: 100px; margin: 10px 0 5px;"><?php if ($_smarty_tpl->tpl_vars['custom_setted']->value){?><?php echo $_smarty_tpl->tpl_vars['product']->value['badge'];?>
<?php }else{ ?><div class="badge" style="background-color: #a1fcff;"><span>ВАШ ТЕКСТ</span></div><?php }?></textarea>
                    <input type="button" value="Установить наклейку">
                </div>
            </li>
            <li class="top-padded" data-action='delete-badge'><a href="#"><i class="icon16 no-bw"></i>Удалить наклейку</a></li>
        </ul>
    </div>
    <div class="block s-product-image-actions">
        <h6 class="heading">Редактировать</h6>
        <ul class="menu-v with-icons compact" id="edit-menu">
            
            <!-- plugin hook: 'backend_product_edit.image_toolbar_edit_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_product_edit']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['image_toolbar_edit_li']);?>
<?php } ?><?php }?>
                  
            <li data-action='rotate-left'><a href="#"><i class="icon16 rotate-left"></i>Налево</a></li>
            <li data-action='rotate-right'><a href="#"><i class="icon16 rotate-right"></i>Направо</a></li>
            <li data-action="delete"><a href="#"><i class="icon16 delete"></i>Удалить фотографию</a></li>
        </ul>
    </div>
    
    <!-- plugin hook: 'backend_product_edit.image_toolbar_section' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_product_edit']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['image_toolbar_section']);?>
<?php } ?><?php }?>
    
    <div class="block s-image-original">
    Полный размер:  <a href="?module=product&action=ImageDownload&id=<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><strong id="photo-name-original"><?php echo $_smarty_tpl->tpl_vars['image_name']->value;?>
</strong></a><br>
    Разрешение: <strong><?php echo $_smarty_tpl->tpl_vars['image']->value['width'];?>
x<?php echo $_smarty_tpl->tpl_vars['image']->value['height'];?>
</strong><br>
    <?php if ($_smarty_tpl->tpl_vars['image']->value['size']){?>Размер: <strong><?php echo $_smarty_tpl->tpl_vars['image']->value['size'];?>
</strong><br><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['original_exists']->value){?>
        <br>
        <ul class="menu-h original-info">
            <li>Оригинал: </li>
            <li><a href="?module=product&action=ImageDownload&id=<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
&original=1"><i class="icon10 lock-bw"></i> <?php echo $_smarty_tpl->tpl_vars['image_name']->value;?>
</a>
                <br><a href="javascript:void(0);" id="s-restore-image-original" class="hint">Восстановить</a>
            </li>
        </ul>
    <?php }?>

    </div>
</div>

<div class="content right200px">
    <div class="align-center">
        <div class="s-image" id="s-product-one-image">
            <div class="s-image-corner top left">
                <?php if (($_smarty_tpl->tpl_vars['image']->value['dimensions']['width']&&$_smarty_tpl->tpl_vars['image']->value['dimensions']['width']<$_smarty_tpl->tpl_vars['image']->value['width'])||($_smarty_tpl->tpl_vars['image']->value['dimensions']['height']&&$_smarty_tpl->tpl_vars['image']->value['dimensions']['height']<$_smarty_tpl->tpl_vars['image']->value['height'])){?>
                <a href="#" id="s-product-image-loupe">
                    <img class="maximize" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/mode-maximize.png" alt="Полный размер">
                    <img class="minimize" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/mode-minimize.png" alt="Нормальный размер" style="display:none;">
                </a>
                <?php }?>
            </div>
            <div class="s-image-corner top right">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']);?>

            </div>
            <a href="<?php if (!$_smarty_tpl->tpl_vars['next']->value){?>javascript:void(0);<?php }else{ ?>#/product/<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
/edit/images/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
/<?php }?>" class="next" title="Next →"><img id="s-product-image"src="<?php echo $_smarty_tpl->tpl_vars['image']->value['url_big'];?>
<?php if ($_smarty_tpl->tpl_vars['image']->value['edit_datetime_ts']){?>?<?php echo $_smarty_tpl->tpl_vars['image']->value['edit_datetime_ts'];?>
<?php }?>"style="<?php if ($_smarty_tpl->tpl_vars['image']->value['dimensions']['width']){?>width: <?php echo $_smarty_tpl->tpl_vars['image']->value['dimensions']['width'];?>
px<?php }?>; <?php if ($_smarty_tpl->tpl_vars['image']->value['dimensions']['height']){?>height:<?php echo $_smarty_tpl->tpl_vars['image']->value['dimensions']['height'];?>
px<?php }?>;"></a>
        </div>
    </div>
    <br>
    <div class="s-description">
        <span class="editable" id="s-product-image-description"><?php echo $_smarty_tpl->tpl_vars['image']->value['description'];?>
</span>
        <a href="javascript:void(0);" class="hint inline-link" id="s-product-image-description-edit-link"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
    </div>
</div>

<div id="s-product-image-cover" class="dialog-background" style="display: none; ">
    <i class="icon16 loading"></i>
</div>


<div class="dialog width400px height200px" id="s-product-image-delete-dialog">
    <div class="dialog-background"></div>
    <form method="post" action="?module=product&action=ImageDelete&id=<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Удалить изображение</h1>
                <?php echo sprintf('Изображение «%s» будет удалено без возможности восстановления. Удалить?',$_smarty_tpl->tpl_vars['image_name']->value);?>

            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button red" type="submit" value="Удалить"> или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div>

<?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable('добавить описание', null, 0);?>
<script type="text/javascript">
$.product_images.init({
    product_id:   <?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
,
    image: <?php echo json_encode($_smarty_tpl->tpl_vars['image']->value);?>
,
    placeholder: '<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
',
    count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
,
    enable_2x: <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>true<?php }else{ ?>false<?php }?>,
    photostream: <?php echo json_encode($_smarty_tpl->tpl_vars['photostream']->value);?>

});
</script>

<form id="fileupload" action="?module=product&amp;action=imageUpload" method="POST" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple="" style="display: none;">
    <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

    <?php /*  Call merged included template "./include.imageUpload.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.imageUpload.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '11773057015846c0d0892266-30588860');
content_5846c0d0ad8963_29832931($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.imageUpload.html" */?>
</form><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:44:48
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/product/include.imageUpload.html" */ ?>
<?php if ($_valid && !is_callable('content_5846c0d0ad8963_29832931')) {function content_5846c0d0ad8963_29832931($_smarty_tpl) {?><div class="dialog width500px height400px s-drop-files-here-zone" id="s-image-uploader">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <div id="s-upload-step1">
                    <div id="s-upload-imagelist">
                        <ul class="zebra files"></ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <div id="s-upload-step1-buttons">
                    <div class="block float-right" style="padding-top: 13px;">
                        <a href="#" class="hint cancel">Прервать</a>
                    </div>
                    <div class="block">
                        <div class="progressbar blue small width300px float-left">
                            <div class="progressbar-outer">
                                <div class="progressbar-inner fileupload-progressbar" id="s-upload-progressbar"></div>
                            </div>
                        </div>
                        <div class="float-left" style="margin-top: 5px;" id="s-upload-filescount"></div>
                        <div id="s-upload-error" style="display:none" class="block half-padded errormsg">
                            Файлы, загруженные с ошибками
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="template-upload" type="text/html">

    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload">
        <div class="s-upload-oneimage-progress">
            <div class="s-image-filename">
                {%=file.name%}
                <span class="hint">{%=o.formatFileSize(file.size)%}</span>
            </div>
            <span class="start"></span><span class="cancel"></span>
        </div>
        &nbsp;
    </li>
    {% } %}

</script>

<script id="template-download" type="text/html">

    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload {% if (file.error) { %}error{% } %}">
        {% if (file.error) { %}
            <div class="s-upload-oneimage-progress" style="width:100%">
                <div class="s-image-filename">
                    <b>{%=file.name%}</b>
                    {% if (typeof file.error === 'object' && file.error instanceof SyntaxError) { %}
                        {% if (file.responseText) { %}
                            {%#file.responseText%}
                        {% } else { %}
                            {%=$_('Failed to upload. Most probably, there were not enough memory to create thumbnails.')%}.
                        {% } %}
                    {% } else { %}
                        {%=file.error%}
                    {% } %}
                </div>
            </div>
        {% } else { %}
            <div class="s-upload-oneimage-progress" style="width:100%">
                <div class="s-image-filename">
                    {%=file.name%} <span class="hint">{%=o.formatFileSize(file.size)%}</span>
                </div>
            </div>
        {% } %}
        &nbsp;
    </li>
    {% } %}

</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/load-image.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.fileupload-wa.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
$(function() {
    var fileupload = $('#fileupload');
/*
    $('#s-upload-images-link').click(function() {
        fileupload.fileupload('option', 'fileInput').trigger('click');
        return false;
    });
*/
    // Initialize the jQuery File Upload widget:
    fileupload.fileupload({
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        onDone: function(data) {
            var counter = $('#s-product-edit-menu .images .hint');
            var cnt = parseInt(counter.text(), 10) || 0;
            var product_id = $.product_images.product_id;
            counter.text(cnt + data.result.files.length);

            var enable_2x = <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>true<?php }else{ ?>false<?php }?> && $.fn.retina;

            var files = data.result.files;

            // update images list for images tabs-product-image-crops
            $('#s-product-image-list').append(tmpl('template-product-image-list', {
                images: files,
                placeholder: '<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
',
                product_id: product_id
            }));

            enable_2x && $('#s-product-image-list img').retina();
            
            // update images for sku settings blocks
            var sku_settings_blocks = $('#shop-productprofile .js-sku-settings');
            sku_settings_blocks.each(function() {
                var self   = $(this);
                var sku_id = self.attr('data-id');

                var image_crops = self.find('.s-product-image-crops');
                image_crops.append(tmpl('template-sku-image-list', {
                    images: files,
                    sku: {
                        id: sku_id, product_id: product_id
                    }
                }));
                enable_2x && image_crops.find('img').retina();

                // wrapping container show if needed
                var wrapper = self.find('.s-product-sku-images');
                if (wrapper.is(':hidden') && image_crops.find('li').length + files.length > 1) {
                    wrapper.show();
                }
            });

            // update product profile crops
            $('#s-product-view .s-product-image-crops').append(
                tmpl('template-product-image-list', {
                    images: files,
                    product_id: product_id,
                    type: 'crop'
                })
            );

            enable_2x && $('#s-product-view .s-product-image-crops img').retina();


            // update photostream
            var photo_stream = $.product_images.photo_stream;
            if (photo_stream && photo_stream.length) {

                var sample = photo_stream.find('li.dummy:last').prev().clone();

                for (var i = 0, n = files.length, file = files[0]; i < n; file = files[++i]) {
                    // fill attrs
                    sample.attr('data-image-id', file.id);
                    sample.find('a'  ).attr('href', '#/product/' + product_id + '/edit/images/' + file.id);
                    sample.find('img').attr('src',  file.url_crop_small);

                    // insert dom
                    photo_stream.find('li.dummy:last').before(sample.clone());
                }
                // clear memory dom item
                sample.remove();

                // photostream style magic
                photo_stream.find('li.visible').removeClass('visible');
                photo_stream.
                    find('li:last').addClass('visible').
                    prev().addClass('visible').
                    prev().addClass('visible');

                // refresh photostream
                photo_stream.trigger('refresh');

                enable_2x && photo_stream.find('img').retina();

            }
        }
    });
});
</script><?php }} ?>