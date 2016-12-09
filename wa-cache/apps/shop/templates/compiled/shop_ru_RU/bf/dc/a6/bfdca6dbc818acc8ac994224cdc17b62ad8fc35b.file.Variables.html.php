<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:15:42
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/seo/templates/Variables.html" */ ?>
<?php /*%%SmartyHeaderCode:19112175725846d61e0dbde8-37004150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfdca6dbc818acc8ac994224cdc17b62ad8fc35b' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/seo/templates/Variables.html',
      1 => 1472820599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19112175725846d61e0dbde8-37004150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories_variables' => 0,
    'products_variables' => 0,
    'static_variables' => 0,
    'tags_variables' => 0,
    'brands_variables' => 0,
    'base_variables' => 0,
    'seo_settings_fields' => 0,
    'id' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846d61e191985_96745477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846d61e191985_96745477')) {function content_5846d61e191985_96745477($_smarty_tpl) {?><div class="helper">
    <h5 class="helper__header">Переменные</h5>
    <div class="helper__content">
        <?php if (isset($_smarty_tpl->tpl_vars['categories_variables']->value)&&$_smarty_tpl->tpl_vars['categories_variables']->value){?>
        
            <p class="variable"><span class="variable__name">{category_name}</span> - название категории</p>
            <p class="variable"><span class="variable__name">{category_seo_name}</span> - SEO название категории</p>
            <p class="variable"><span class="variable__name">{parent_category_name}</span> - название родительской категории</p>
            <p class="variable"><span class="variable__name">{root_category_name}</span> - название корневой категории</p>
            <p class="variable"><span class="variable__name">{parent_categories}</span> - путь до категории</p>
            <p class="variable"><span class="variable__name">{products_count}</span> - количество товаров</p>
            <p class="variable"><span class="variable__name">{page_number}</span> - номер страницы</p>
            <p class="variable"><span class="variable__name">{min_price}</span> - минимальная цена в категории</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['products_variables']->value)&&$_smarty_tpl->tpl_vars['products_variables']->value){?>
        
            <p class="variable"><span class="variable__name">{product_name}</span> - название товара</p>
            <p class="variable"><span class="variable__name">{product_seo_name}</span> - SEO название товара</p>
            <p class="variable"><span class="variable__name">{product_price}</span> - цена товара</p>
            <p class="variable"><span class="variable__name">{product_sku}</span> - артикул товара</p>
            <p class="variable"><span class="variable__name">{page_name}</span> - название страницы</p>
            <p class="variable"><span class="variable__name">{category_name}</span> - название категории</p>
            <p class="variable"><span class="variable__name">{category_seo_name}</span> - SEO название категории</p>
            <p class="variable"><span class="variable__name">{root_category_name}</span> - название корневой категории</p>
            <p class="variable"><span class="variable__name">{root_category_seo_name}</span> - SEO название корневой категории</p>
            <p class="variable"><span class="variable__name">{categories}</span> - путь до категории</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['static_variables']->value)&&$_smarty_tpl->tpl_vars['static_variables']->value){?>
        
            <p class="variable"><span class="variable__name">{page_name}</span> - название страницы</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['tags_variables']->value)&&$_smarty_tpl->tpl_vars['tags_variables']->value){?>
        
            <p class="variable"><span class="variable__name">{tag_name}</span> - название тега</p>
            <p class="variable"><span class="variable__name">{page_number}</span> - номер страницы</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['brands_variables']->value)&&$_smarty_tpl->tpl_vars['brands_variables']->value){?>
        
            <p class="variable"><span class="variable__name">{brand_name}</span> - название бренда</p>
            <p class="variable"><span class="variable__name">{category_name}</span> - category name, if exists</p>
            <p class="variable"><span class="variable__name">{page_number}</span> - номер страницы</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['base_variables']->value)&&$_smarty_tpl->tpl_vars['base_variables']->value){?>
        
            <p class="variable"><span class="variable__name">{store_name}</span> - название магазина</p>
            <p class="variable"><span class="variable__name">{store_phone}</span> - телефон магазина</p>
            <p class="variable"><span class="variable__name">{storefront_name}</span> - название витрины</p>
        
            <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seo_settings_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                <p class="variable"><span class="variable__name">{storefront_field_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
}</span> - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
            <?php } ?>
        <?php }?>
    </div>
    <h5 class="helper__header">Модификаторы</h5>
    <div class="helper__content">
        <?php if (isset($_smarty_tpl->tpl_vars['base_variables']->value)&&$_smarty_tpl->tpl_vars['base_variables']->value){?>
        
            <p class="variable"><span class="variable__name">|lower</span> - преобразует в нижний регистр</p>
        
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['categories_variables']->value)&&$_smarty_tpl->tpl_vars['categories_variables']->value)||(isset($_smarty_tpl->tpl_vars['tags_variables']->value)&&$_smarty_tpl->tpl_vars['tags_variables']->value)||(isset($_smarty_tpl->tpl_vars['brands_variables']->value)&&$_smarty_tpl->tpl_vars['brands_variables']->value)){?>
        
            <p class="variable"><span class="variable__name">|if_page_not_first</span> - преобразует в пустую строку если страница первая</p>
        
        
            <p class="variable"><span class="variable__name">|if_page_first</span> - преобразует в пустую строку если страница не первая</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['products_variables']->value)&&$_smarty_tpl->tpl_vars['products_variables']->value){?>
        
            <p class="variable"><span class="variable__name">|if_product_page_is_open</span> - преобразует в пустую строку если не открыта страница товара</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['brands_variables']->value)&&$_smarty_tpl->tpl_vars['brands_variables']->value){?>
        
            <p class="variable"><span class="variable__name">|if_brand_category_is_open</span> - преобразует в пустую строку если не открыта категория бренда</p>
        
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['products_variables']->value)&&$_smarty_tpl->tpl_vars['products_variables']->value){?>
        
            <p class="variable"><span class="variable__name">|currency</span> - преобразует число в денежный формат</p>
        
        <?php }?>
    </div>
</div><?php }} ?>