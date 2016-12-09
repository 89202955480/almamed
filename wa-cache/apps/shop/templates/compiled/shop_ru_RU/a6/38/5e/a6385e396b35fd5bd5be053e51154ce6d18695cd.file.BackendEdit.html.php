<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:20:31
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/productbrands/templates/actions/backend/BackendEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:6982930705846ad0f96dc07-36834569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6385e396b35fd5bd5be053e51154ce6d18695cd' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/productbrands/templates/actions/backend/BackendEdit.html',
      1 => 1481026341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6982930705846ad0f96dc07-36834569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'filter_features' => 0,
    'feature' => 0,
    'k' => 0,
    'v' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ad0fe50a33_99726240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ad0fe50a33_99726240')) {function content_5846ad0fe50a33_99726240($_smarty_tpl) {?>
<style>
    #brand-edit-form .fields { float: none}
    #brand-edit-form .fields .field { clear: none}
    #brand-image-delete { white-space: nowrap}
    #wa #brand-edit-form .redactor_editor { padding: 10px}
    #brand-edit-form .redactor_toolbar:after { clear: none}
    #brand-edit-form .redactor_toolbar li a:hover {color: #fff !important;}
    #brand-img_flag_country-delete {
        white-space: nowrap;
    }
    #brand-img_home_brand-delete {
        white-space: nowrap;
    }
</style>

<div class="block double-padded">
    <h1>
        <a href="#/brands/" class="back">← <?php echo _w('Back');?>
</a>
        <span class="s-brand-name"><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</span>
    </h1>

    <form id="brand-edit-form" enctype="multipart/form-data" method="post" action="?plugin=productbrands&action=save&id=<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
" target="brand-edit-iframe">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

    <div  class="fields form">
        <div class="field-group">
            <div class="field">
                <div class="name"><?php echo _w('Name');?>
</div>
                <div class="value">
                    <input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                </div>
            </div>

            <div class="field">
                <div class="name"><?php echo _w('URL');?>
</div>
                <div class="value">
                    <input type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['url'];?>
" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                </div>
                <div class="value">
                    <input type="checkbox" name="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['brand']->value['hidden']){?>checked<?php }?>>
                    Скрытый бренд <span class="hint">Включение этой настройки скроет бренд на витрине магазина</span>
                </div>
            </div>

            <div class="field">
                <div class="name"><?php echo _w('Summary');?>
</div>
                <div class="value">
                    <textarea style="height: 40px" name="summary"><?php echo $_smarty_tpl->tpl_vars['brand']->value['summary'];?>
</textarea>
                </div>
            </div>
            <div class="field">
                <div class="name">Изображение</div>
                <div class="value">
                    <?php if ($_smarty_tpl->tpl_vars['brand']->value['image']){?>
                    <input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['image'];?>
">
                    <div style="width: 50px; text-align: center; display: inline-block">
                        <img style="max-width: 50px; max-height: 50px" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value['image'];?>
"><br>
                        <a id="brand-image-delete" class="small inline-link" href="#"><i class="icon10 delete"></i><?php echo _w('delete');?>
</a>
                    </div>
                    <script type="text/javascript">
                        $("#brand-image-delete").click(function () {
                            var p = $(this).parent();
                            p.prev().val('');
                            p.remove();
                            $("#s-brand-save-button").removeClass('green').addClass('yellow');
                            return false;
                        });
                    </script>
                    <?php }?>
                    <div style="display: inline-block">
                        <input type="file" name="image_file"><br>
                        <span class="hint">*.jpg, *.jpeg, *.gif, *.png</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="field-group">
            <div class="field">
                <div class="name">Страна</div>
                <div class="value"><input type="text" name="country_brand" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['country_brand'];?>
"></div>
            </div>

            <div class="field">
                <div class="name">изображение страна</div>
                <div class="value">
                    <?php if ($_smarty_tpl->tpl_vars['brand']->value['img_flag_country']){?>
                    <input type="hidden" name="img_flag_country" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['img_flag_country'];?>
">
                    <div style="width: 50px; text-align: center; display: inline-block">
                        <img style="max-width: 50px; max-height: 50px" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
/flag/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value['img_flag_country'];?>
"><br>
                        <a id="brand-img_flag_country-delete" class="small inline-link" href="#"><i class="icon10 delete"></i><?php echo _w('delete');?>
</a>
                    </div>
                    <script type="text/javascript">
                        $("#brand-img_flag_country-delete").click(function () {
                            var p = $(this).parent();
                            p.prev().val('');
                            p.remove();
                            $("#s-brand-save-button").removeClass('green').addClass('yellow');
                            return false;
                        });
                    </script>
                    <?php }?>
                    <div style="display: inline-block">
                        <input type="file" name="img_flag_country_file"><br>
                        <span class="hint">*.jpg, *.jpeg, *.gif, *.png</span>
                    </div>

                </div>
            </div>


            <div class="field">
                <div class="name">изображение здание/выставка</div>
                <div class="value">
                    <?php if ($_smarty_tpl->tpl_vars['brand']->value['img_home_brand']){?>
                    <input type="hidden" name="img_home_brand" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['img_home_brand'];?>
">
                    <div style="width: 50px; text-align: center; display: inline-block">
                        <img style="max-width: 50px; max-height: 50px" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
/home/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value['img_home_brand'];?>
"><br>
                        <a id="brand-img_home_brand-delete" class="small inline-link" href="#"><i class="icon10 delete"></i><?php echo _w('delete');?>
</a>
                    </div>
                    <script type="text/javascript">
                        $("#brand-img_home_brand-delete").click(function () {
                            var p = $(this).parent();
                            p.prev().val('');
                            p.remove();
                            $("#s-brand-save-button").removeClass('green').addClass('yellow');
                            return false;
                        });
                    </script>
                    <?php }?>
                    <div style="display: inline-block">
                        <input type="file" name="img_home_brand_file"><br>
                        <span class="hint">*.jpg, *.jpeg, *.gif, *.png</span>
                    </div>

                </div>
            </div>


            <div class="field">
                <div class="name"><strong class="title">Заголовок</strong> <span class="hint">&lt;title&gt;</span></div>
                <div class="value"><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['title'];?>
"></div>
            </div>
            <div class="field">
                <div class="name">META Keywords</div>
                <div class="value"><input type="text" name="meta_keywords" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['meta_keywords'];?>
"></div>
            </div>
            <div class="field">
                <div class="name">META Description</div>
                <div class="value">
                    <textarea name="meta_description"><?php echo $_smarty_tpl->tpl_vars['brand']->value['meta_description'];?>
</textarea>
                </div>
            </div>
        </div>
        <div class="field-group">
            <div class="field">
                <div class="name"><?php echo _w('Description');?>

                    <br><span class="hint">HTML</span>
                </div>
                <div class="value">
                    <div class="wa-editor-core-wrapper s-editor-core-wrapper" style="display: none">
                        <ul class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
                            <li class="selected"><a class="wysiwyg" href="#"><?php echo _w('WYSIWYG');?>
</a></li>
                            <li><a class="html" href="#">HTML</a></li>
                        </ul>
                        <div>
                            <textarea style="display:none" id="s-brand-description" name="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-group">
            <div class="field">
                <div class="name">Дополнительное описание</div>
                <div class="value">
                    <textarea name="seo_description"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['brand']->value['seo_description']), ENT_QUOTES, 'UTF-8', true);?>
</textarea><br>
                    <p>
                        Чтобы вывести дополнительное описание добавьте в нужном месте (например, в самом конце) в шаблон <b>search.html</b> код:<br>
                        <b>
                            &#123;if !empty($brand.seo_description) and $wa-&gt;get('page', 1) == 1&#125;&#123;$brand.seo_description&#125;&#123;/if&#125;
                        </b>
                    </p>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="name"><?php echo _w('Frontend display');?>
:</div>
            <div class="value">
                <?php echo _w('Default product sort order');?>
:
                <select name="sort_products">
                    <option value="name ASC" <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='name ASC'){?>selected="selected"<?php }?>><?php echo _w('By name');?>
</option>
                    <option value="price DESC"  <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='price DESC'){?>selected="selected"<?php }?>><?php echo _w('Most expensive');?>
</option>
                    <option value="price ASC"   <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='price ASC'){?>selected="selected"<?php }?>><?php echo _w('Least expensive');?>
</option>
                    <option value="rating DESC" <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='rating DESC'){?>selected="selected"<?php }?>><?php echo _w('Highest rated');?>
</option>
                    <option value="rating ASC"  <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='rating ASC'){?>selected="selected"<?php }?>><?php echo _w('Lowest rated');?>
</option>
                    <option value="total_sales DESC" <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='total_sales DESC'){?>selected="selected"<?php }?>><?php echo _w('Best sellers');?>
</option>
                    <option value="total_sales ASC" <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='total_sales ASC'){?>selected="selected"<?php }?>><?php echo _w('Worst sellers');?>
</option>
                    <option value="count DESC" <?php if ($_smarty_tpl->tpl_vars['brand']->value['sort_products']=='count DESC'){?>selected="selected"<?php }?>><?php echo _w('In stock');?>
</option>
                    <option value="create_datetime DESC" <?php if (!$_smarty_tpl->tpl_vars['brand']->value['sort_products']||$_smarty_tpl->tpl_vars['brand']->value['sort_products']=='create_datetime DESC'){?>selected="selected"<?php }?>><?php echo _w('Date added');?>
</option>
                </select>
                <label class="small">
                    <input type="checkbox" name="enable_sorting" <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value['enable_sorting'])){?>checked="checked"<?php }?> value="1"> <?php echo _w('Customers can select preferable product sort order');?>

                </label>
            </div>
        </div>

        <div class="field-group">
            <div class="field">
                <div class="value">
                    <label>
                        <input type="checkbox" name="allow_filter" value="1" id="brand-allow-filter" <?php if ($_smarty_tpl->tpl_vars['brand']->value['filter']){?>checked<?php }?>> Разрешить фильтрацию товаров
                        <span class="hint">Фильтрация товаров позволит покупателям подбирать товары этого бренда по значениям характеристик, например, по цвету, размеру, цене</span><br>
                        <b>Не все темы дизайна поддерживают эту возможность!</b>
                    </label>
                    <div class="block" id="brand-filter" <?php if (!$_smarty_tpl->tpl_vars['brand']->value['filter']){?>style="display:none;"<?php }?>>
                    <ul class="menu-v compact small">
                        <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                        <li>
                            <i class="icon16 sort"></i>
                            <label><input type="checkbox" name="filter[]" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value['id'];?>
"
                                <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['checked'])||($_smarty_tpl->tpl_vars['feature']->value['id']=='price'&&!$_smarty_tpl->tpl_vars['brand']->value['filter'])){?>checked="checked"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            </label>
                        </li>
                        <?php } ?>
                    </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="field-group">
            <div class="field">
                <div class="name"><?php echo _w('Custom parameters');?>
</div>
                <div class="value">
                    <textarea name="params"><?php if ($_smarty_tpl->tpl_vars['brand']->value['params']){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['brand']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo (htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true)).("\n");?>
<?php } ?><?php }?></textarea>
                    <br>
                    <span class="hint">
                        Дополнительные параметры key=value. Каждое значение key=value должно быть на отдельной строке.
                    </span>
                </div>
            </div>
        </div>

        <div class="field-group">
            <div class="field">
                <div class="value">
                    <input id="s-brand-save-button" type="submit" class="button green" value="<?php echo _w('Save');?>
" /> <?php echo _w('or');?>

                    <a href="#/brands/"><?php echo _w('cancel');?>
</a>

                    <span id="brand-form-status" style="display:none; padding-left: 20px">
                        <i style="vertical-align:middle" class="icon16 yes"></i> <?php echo _w('Saved');?>

                    </span>
                </div>
            </div>
        </div>
    </div>
    </form>
    <iframe id="brand-edit-iframe" name="brand-edit-iframe" style="display: none"></iframe>
</div>

<?php $_smarty_tpl->tpl_vars['lang'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2), null, 0);?>
<script type="text/javascript">
    $.wa.locale["delete"] = "<?php echo _w('delete');?>
";
    var wa_url = '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
';
    var wa_app = 'shop';


    $('#brand-edit-form .s-editor-core-wrapper').show();
    $('#s-brand-description').waEditor({
        lang: "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
",
        saveButton: '#s-brand-save-button',
        toolbarFixedBox: false,
        uploadFields: {
            '_csrf': "<?php echo waRequest::cookie('_csrf','');?>
"
        }
    });

    $('#brand-allow-filter').change(function () {
       if ($(this).is(':checked')) {
           $('#brand-filter').show();
       } else {
           $('#brand-filter').hide();
       }
    });

    $('#brand-filter ul').sortable({
        distance: 5,
        opacity: 0.75,
        items: 'li',
        handle: '.sort',
        cursor: 'move',
        tolerance: 'pointer'
    });


    $("#brand-edit-form").submit(function () {
        $('#s-brand-description').waEditor('sync');
        $("#brand-edit-iframe").one('load', function () {
            try {
                var data = $(this).contents().find('body').html();
                var response = $.parseJSON(data);
            } catch (e) {
                alert('Error');
                return;
            }


            if (response.status == 'ok') {
                console.log(response.data);
                if (response.data.image) {
                    $("#brand-edit-form input[name=image_file]").replaceWith('<input type="file" name="image_file">');
                    if ($("#brand-image-delete").length) {
                        $("#brand-image-delete").parent().find('img').attr('src', response.data.image_url);
                        $("#brand-edit-form input[name=image]").val(response.data.image);
                    } else {
                        $('<input type="hidden" name="image" value="' + response.data.image + '">' +
                        '<div style="width: 50px; text-align: center; display: inline-block">' +
                        '<img style="max-width: 50px; max-height: 50px" src="' + response.data.image_url + '"><br>' +
                        '<a id="brand-image-delete" class="small inline-link" href="#"><i class="icon10 delete"></i>' + $_('delete') + '</a>' +
                        '</div> ').insertBefore($("#brand-edit-form input[name=image_file]").parent());
                        $("#brand-image-delete").click(function () {
                            var p = $(this).parent();
                            p.prev().val('');
                            p.remove();
                            $("#s-brand-save-button").removeClass('green').addClass('yellow');
                            return false;
                        });
                    }
                }

                if (response.data.img_flag_country) {
                    $("#brand-edit-form input[name=img_flag_country_file]").replaceWith('<input type="file" name="img_flag_country_file">');
                    if ($("#brand-img_flag_country-delete").length) {
                        $("#brand-img_flag_country-delete").parent().find('img').attr('src', response.data.image_url);
                        $("#brand-edit-form input[name=img_flag_country]").val(response.data.img_flag_country);
                    } else {
                        $('<input type="hidden" name="img_flag_country" value="' + response.data.img_flag_country + '">' +
                                '<div style="width: 50px; text-align: center; display: inline-block">' +
                                '<img style="max-width: 50px; max-height: 50px" src="' + response.data.image_url + '"><br>' +
                                '<a id="brand-img_flag_country-delete" class="small inline-link" href="#"><i class="icon10 delete"></i>' + $_('delete') + '</a>' +
                                '</div> ').insertBefore($("#brand-edit-form input[name=img_flag_country_file]").parent());
                        $("#brand-img_flag_country-delete").click(function () {
                            var p = $(this).parent();
                            p.prev().val('');
                            p.remove();
                            $("#s-brand-save-button").removeClass('green').addClass('yellow');
                            return false;
                        });
                    }
                }

                if (response.data.img_home_brand) {
                    $("#brand-edit-form input[name=img_home_brand_file]").replaceWith('<input type="file" name="img_home_brand_file">');
                    if ($("#brand-img_home_brand-delete").length) {
                        $("#brand-img_home_brand-delete").parent().find('img').attr('src', response.data.image_url);
                        $("#brand-edit-form input[name=img_home_brand]").val(response.data.img_home_brand);
                    } else {
                        $('<input type="hidden" name="img_home_brand" value="' + response.data.img_home_brand + '">' +
                                '<div style="width: 50px; text-align: center; display: inline-block">' +
                                '<img style="max-width: 50px; max-height: 50px" src="' + response.data.image_url + '"><br>' +
                                '<a id="brand-img_home_brand-delete" class="small inline-link" href="#"><i class="icon10 delete"></i>' + $_('delete') + '</a>' +
                                '</div> ').insertBefore($("#brand-edit-form input[name=img_home_brand_file]").parent());
                        $("#brand-img_home_brand-delete").click(function () {
                            var p = $(this).parent();
                            p.prev().val('');
                            p.remove();
                            $("#s-brand-save-button").removeClass('green').addClass('yellow');
                            return false;
                        });
                    }
                }

                $("#s-brand-save-button").removeClass('yellow').addClass('green');
                $("#brand-form-status").fadeIn('slow', function () {
                    $(this).fadeOut(1000);
                });
            }


        });
    });

</script><?php }} ?>