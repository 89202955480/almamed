<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 15:19:22
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/product/ProductFeaturesSelectable.html" */ ?>
<?php /*%%SmartyHeaderCode:5846340745846accaf21c59-33343590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57402738ecb890f76c878f72ef77943723e64647' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/product/ProductFeaturesSelectable.html',
      1 => 1481026230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5846340745846accaf21c59-33343590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'features' => 0,
    'f' => 0,
    'code' => 0,
    'v_id' => 0,
    'v' => 0,
    'features_counts' => 0,
    'features_total_count' => 0,
    'use_product_currency' => 0,
    'product' => 0,
    'currencies' => 0,
    'primary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846accb0732e3_69474455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846accb0732e3_69474455')) {function content_5846accb0732e3_69474455($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['features']->value)){?>
    <div class="value s-product-feature-superposition" id="s-product-feature-superposition">
        <div class="sidebar left150px">
            <div class="block not-padded right-padded">
                <ul class="menu-v with-icons features">
                    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['f']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['f']->key;
 $_smarty_tpl->tpl_vars['f']->index++;
 $_smarty_tpl->tpl_vars['f']->first = $_smarty_tpl->tpl_vars['f']->index === 0;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['f']->first){?>selected<?php }?>" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" data-feature-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <a href="#">
                                <strong class="count"><?php echo sprintf('%d',$_smarty_tpl->tpl_vars['f']->value['selected']);?>
</strong>
                                <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['f']->value['selected']){?>status-blue-tiny<?php }else{ ?>status-gray-tiny<?php }?>"></i><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>

                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="content left150px bordered-left">
            <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['f']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['f']->key;
 $_smarty_tpl->tpl_vars['f']->index++;
 $_smarty_tpl->tpl_vars['f']->first = $_smarty_tpl->tpl_vars['f']->index === 0;
?>
                <div class="sidebar left150px feature-values" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['f']->first){?>style="display:none;"<?php }?>>
                    <div class="block not-padded right-padded left-padded">
                        <ul class="menu-v values">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <li style="white-space: nowrap;"><label><input type="checkbox" name="product[features_selectable][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['selected']){?>checked<?php }?>> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['html'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['v']->value['value'] : $tmp);?>
</label></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
            <div class="content left200px bordered-left s-selectable-features-box">
                <div class="block not-padded right-padded left-padded">
                    <div class="fields width100px">
                        <div class="field superposition-count" style="margin-bottom: 20px;">
                            <?php $_smarty_tpl->tpl_vars['features_total_count'] = new Smarty_variable(array_product($_smarty_tpl->tpl_vars['features_counts']->value), null, 0);?>
                            <div class="name options">
                                <?php if ($_smarty_tpl->tpl_vars['features_counts']->value){?>
                                    <?php echo implode(' x ',$_smarty_tpl->tpl_vars['features_counts']->value);?>
 <?php echo _w('option','options',$_smarty_tpl->tpl_vars['features_total_count']->value);?>

                                <?php }?>
                            </div>
                            <div class="value bold no-shift skus">
                                <?php if ($_smarty_tpl->tpl_vars['features_counts']->value){?>
                                    <span class="highlighted">
                                        <?php echo _w('%d SKU in total','%d SKUs in total',$_smarty_tpl->tpl_vars['features_total_count']->value);?>

                                    </span>
                                <?php }?>
                            </div>
                            
                            
                        </div>

                        
                        <?php if (isset($_smarty_tpl->tpl_vars['use_product_currency']->value)){?>
                            <div class="field s-price-selectable">

                                <div class="name">
                                    Цена
                                </div>
                                <div class="value">
                                    <input name="product[base_price_selectable]" type="text"
                                           class="numerical short large bold" placeholder="0"
                                           value="<?php echo (float)$_smarty_tpl->tpl_vars['product']->value['base_price_selectable'];?>
"
                                            >

                                    <?php if ($_smarty_tpl->tpl_vars['use_product_currency']->value){?>
                                        <select class="s-product-currency">
                                            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value==$_smarty_tpl->tpl_vars['product']->value['currency']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</option>
                                            <?php } ?>
                                        </select>
                                    <?php }else{ ?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['currency']!==null){?><?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>
<?php }?>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="field s-price-selectable">
                                <div class="name">
                                    Закупочная цена
                                </div>
                                <div class="value">
                                    <input name="product[purchase_price_selectable]" type="text"
                                           class="numerical short bold" placeholder="0"
                                           value="<?php echo (float)$_smarty_tpl->tpl_vars['product']->value['purchase_price_selectable'];?>
"
                                            ><span class="s-product-currency-readonly"><?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
</span>

                                </div>
                            </div>
                            <div class="field s-price-selectable">
                                <div class="name">
                                    Зачеркнутая цена
                                </div>
                                <div class="value strike">
                                    <input name="product[compare_price_selectable]" type="text"
                                           class="numerical short bold" placeholder="0"
                                           value="<?php echo (float)$_smarty_tpl->tpl_vars['product']->value['compare_price_selectable'];?>
"
                                            ><span class="s-product-currency-readonly"><?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
</span>

                                </div>
                            </div>
                            <div class="field">
                                <div class="value">
                                    <p class="small">
                                        Базовая цена будет применена к товару по умолчанию и может быть переопределена на уровне каждого артикула. Складской учет ведется на уровне каждого артикула.
                                    </p>
                                </div>
                                
                            </div>
                        <?php }?>
                        
                    </div>
                    <div class="clear-both"></div>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
    </div>

<?php }else{ ?>
    <!-- There no selectable features -->
<?php }?>
<?php }} ?>