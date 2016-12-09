<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:15:41
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/wmimageincat/templates/CategoryFields.html" */ ?>
<?php /*%%SmartyHeaderCode:21086893785846d61dc3ead9-54252744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce528262e16dbc0b89bb3d02161fd8648be5f5b1' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/wmimageincat/templates/CategoryFields.html',
      1 => 1481024392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21086893785846d61dc3ead9-54252744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_id' => 0,
    'images_flag' => 0,
    'images' => 0,
    'sizes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846d61dccfc14_36540429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846d61dccfc14_36540429')) {function content_5846d61dccfc14_36540429($_smarty_tpl) {?><style type="text/css">
 #wmimageincat-preview-block{
  border: 5px solid #f1f1f1;
  border-radius: 5px;
  z-index: 300000;  
  background-color: white;
 }
 
 .wmimageincat-preview-close{
  cursor: pointer;
  position: absolute;
  right: 2px;
  top: 2px;
 } 
</style>


<div class="field">
 <div class="name">
  Изображения
 </div>
 
 <div class="value">
   <table class="zebra" style="width: 700px;" id="wmimageincat-image-list" data-cat_id="<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
" >
    <tr data-image_type="banner" <?php if ($_smarty_tpl->tpl_vars['images_flag']->value['banner']){?>data-id="<?php echo $_smarty_tpl->tpl_vars['images']->value['banner']['id'];?>
" data-ext="<?php echo $_smarty_tpl->tpl_vars['images']->value['banner']['ext'];?>
"<?php }?>>
	 <td>
	  Баннер <span class="hint">(<?php echo $_smarty_tpl->tpl_vars['sizes']->value['banner'];?>
)</span>
	 </td>
	 
	 <td>
	  <?php if (!$_smarty_tpl->tpl_vars['images_flag']->value['banner']){?>
	   <input type='file' name='wmimageincat_banner_file' value="Загрузить изображение">
	  <?php }else{ ?>
	   <a href="javascript: void(0);" class="preview_image"><?php echo $_smarty_tpl->tpl_vars['images']->value['banner']['file_name'];?>
</a>
	  <?php }?>
	 </td>
	 
	 <td>
	  <?php if ($_smarty_tpl->tpl_vars['images_flag']->value['banner']){?>
	   <a href="javascript: void(0);" class="wmimageincat-del_image"><i class="icon16 delete"></i>Удалить</a>
	  <?php }?>
	 </td>
	</tr>
	
	<tr data-image_type="image" <?php if ($_smarty_tpl->tpl_vars['images_flag']->value['image']){?>data-id="<?php echo $_smarty_tpl->tpl_vars['images']->value['image']['id'];?>
" data-ext="<?php echo $_smarty_tpl->tpl_vars['images']->value['image']['ext'];?>
"<?php }?>>
	 <td>
	  Изображение <span class="hint">(<?php echo $_smarty_tpl->tpl_vars['sizes']->value['image'];?>
)</span>
	 </td>
	 
	 <td>
	  <?php if (!$_smarty_tpl->tpl_vars['images_flag']->value['image']){?>
	   <input type='file' name='wmimageincat_image_file' value="Загрузить изображение">
	  <?php }else{ ?>
	   <a href="javascript: void(0);" class="preview_image"><?php echo $_smarty_tpl->tpl_vars['images']->value['image']['file_name'];?>
</a>
	  <?php }?>
	 </td>
	 
	 <td>
	  <?php if ($_smarty_tpl->tpl_vars['images_flag']->value['image']){?>
	   <a href="javascript: void(0);" class="wmimageincat-del_image"><i class="icon16 delete"></i>Удалить</a>
	  <?php }?>
	 </td>
	</tr>
	
	<tr data-image_type="icon" <?php if ($_smarty_tpl->tpl_vars['images_flag']->value['icon']){?>data-id="<?php echo $_smarty_tpl->tpl_vars['images']->value['icon']['id'];?>
" data-ext="<?php echo $_smarty_tpl->tpl_vars['images']->value['icon']['ext'];?>
"<?php }?>>
	 <td>
	  Иконка <span class="hint">(<?php echo $_smarty_tpl->tpl_vars['sizes']->value['icon'];?>
)</span>
	 </td>
	 
	 <td>
	  <?php if (!$_smarty_tpl->tpl_vars['images_flag']->value['icon']){?>
	   <input type='file' name='wmimageincat_icon_file' value="Загрузить изображение">
	  <?php }else{ ?>	  
	   <a href="javascript: void(0);" class="preview_image"><?php echo $_smarty_tpl->tpl_vars['images']->value['icon']['file_name'];?>
</a>
	  <?php }?>
	 </td>
	 
	 <td>
	  <?php if ($_smarty_tpl->tpl_vars['images_flag']->value['icon']){?>
	   <a href="javascript: void(0);" class="wmimageincat-del_image"><i class="icon16 delete"></i>Удалить</a>
	  <?php }?>
	 </td>
	</tr>
   </table>
   <p style="color: green;"><em>После внесения изменений не забудьте нажать на кнопку "Сохранить"</em></p>
   <p class="wmimageincat_error_log" style="color: red;"></p>
 </div>
</div>


<script type="text/javascript">
 $(function(){
  
    //Скрытие всплывающего окна с эскизом  
    $(document).off('click.hide_preview').on('click.hide_preview', '.wmimageincat-preview-close', function(){
        $(this).parent().remove();
    });
  
    $('#s-product-list-settings-form').click(function(){
        $('#wmimageincat-preview-block').remove();
    });
  
    $('#s-product-list-settings-form').find('div.dialog-buttons').find('a.cancel').click(function(){
        $('#wmimageincat-preview-block').remove();
    }); 
  
    $('#s-product-list-settings-form').find('div.dialog-buttons').find('input[type="submit"]').click(function(){
        $('#wmimageincat-preview-block').remove();
    });
    
    //Удаление изображения
    $('.wmimageincat-del_image').off('click.del_image').on('click.del_image', function(){
        $('#wmimageincat-preview-block').remove();
        var tr = $(this).parent().parent();
        var type = tr.data('image_type');
        var cat_id = $('#wmimageincat-image-list').data('cat_id');
        var id = tr.data('id');
        var ext = tr.data('ext');
        target = $(this);
	 
        if($('#wmimageincat-image-list').find('.loading').length == 0)
        {
            target.find('i').addClass('loading').removeClass('delete');
            $.post('?plugin=wmimageincat&module=deleteimage',{type: type, cat_id: cat_id, id: id, ext: ext},function(response){
                if(response.data.state)
                {
                    target.parent().find('.loading').remove();
                    tr.find('.preview_image').before('<input type="file" name="wmimageincat_'+type+'_file" value="Загрузить изображение">');
                    tr.find('.preview_image').remove();
                    target.remove();
		   
                }
            },'json');
        }
	
    });
    
    //Предпросмотр изображения	
    $('.preview_image').off('click.preview_image').on('click.preview_image', function(e){
        var target = $(this);
        var tr = target.parent().parent();
        var type = tr.data('image_type');
        var ext = tr.data('ext');
        var id = tr.data('id');
        var cat_id = $('#wmimageincat-image-list').data('cat_id');
	
        if($('#wmimageincat-image-list').find('.loading').length == 0)
        {
            target.after('<i class="icon16 loading"></i>');
           $.post('?plugin=wmimageincat&module=previewimage', {type: type, ext: ext, id: id, cat_id: cat_id}, function(response){
                if(response.data.path)
                { 	  
                    $('#wmimageincat-preview-block').remove();
                    $('body').append('<div id="wmimageincat-preview-block"><i class="icon16 no wmimageincat-preview-close"></i><img src="'+response.data.path+'"></div>');
                    var block = $('#wmimageincat-preview-block');
                    block.css('position','absolute');	  
                    block.css('top', e.clientY+'px');
                    block.css('left', e.clientX+'px');
                    if(type == 'icon')
                    {
                        block.css('display', 'block');
                        block.css({
                            'width' : '100px',
                            'height' : '100px',
                            'line-height': '100px',
                            'text-align': 'center'
                        });	   
                        block.find('img').css('vertical-align', 'middle');
                    }else{
                        block.css({
                            'display': 'inline-block',
                            'width': 'auto',
                            'height': 'auto',
                            'line-height': '100%'
                        });
                    }
	  
                }
                    tr.find('.loading').remove();
            },'json');	 
        }
	
    });
   
   //Обработка клика на "Сохранить"
   $('#s-product-list-settings-dialog').find('#s-product-list-settings-form').find('.dialog-buttons').find('input[type="submit"]').off('click.exception').on('click.exception', function(){
		var target = $('#s-product-list-settings-dialog');
		//Отслеживаем появлением iframe
		var intervalId = setInterval(function(){
			if(target.find('#s-product-list-settings-form-iframe').length != 0)
			{	
				clearInterval(intervalId);
				var frame = target.find('#s-product-list-settings-form-iframe');
				//Отслеживаем заполнение iframe
				var intervalId_1 = setInterval(function(){
					if(frame.contents().find('body').html() != '')
					{
					    clearInterval(intervalId_1);						
						var content = frame.contents().find('body').html();
						var pattern = "%wmimageincat_plugin%";
						var start = content.indexOf(pattern);
						if(start != -1)
						{	
							var tmp_content = '';
							var msg = '';
							var end;
							var error_log = target.find('#s-product-list-settings-form').find('.wmimageincat_error_log');
							while(start !=-1)
							{
								end = content.indexOf(pattern, start+pattern.length);
								tmp_content = content.substring(start, end);
								start = content.indexOf(pattern, end+pattern.length);
								tmp_content = tmp_content.replace(pattern,'');
					            msg += tmp_content+"<br><br>";
							}	
							
							error_log.empty();
							error_log.append(msg);
						}else{
                            target.hide();
                        }											  
						
					}
				},200);
			}
		},500);
		
	});
 });
</script><?php }} ?>