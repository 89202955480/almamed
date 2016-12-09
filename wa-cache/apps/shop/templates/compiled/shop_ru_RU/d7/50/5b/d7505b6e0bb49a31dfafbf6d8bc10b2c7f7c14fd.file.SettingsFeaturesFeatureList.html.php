<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:48:04
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureList.html" */ ?>
<?php /*%%SmartyHeaderCode:8994650745846c194633913-87104240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7505b6e0bb49a31dfafbf6d8bc10b2c7f7c14fd' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureList.html',
      1 => 1481026245,
      2 => 'file',
    ),
    'b4c7b4b976222c476b7f688d86793e9b8ecf3af6' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureValues.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8994650745846c194633913-87104240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'features' => 0,
    'feature' => 0,
    '_types' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846c1946c8cc5_82934487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846c1946c8cc5_82934487')) {function content_5846c1946c8cc5_82934487($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['feature']->key;
?><?php $_smarty_tpl->tpl_vars['_types'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['feature']->value['types']), null, 0);?><?php if (sort($_smarty_tpl->tpl_vars['_types']->value)){?><?php }?><tr data-types="<?php echo htmlspecialchars(implode(' ',$_smarty_tpl->tpl_vars['_types']->value), ENT_QUOTES, 'UTF-8', true);?>
" data-feature="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"data-type="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['type'])===null||$tmp==='' ? shopFeatureModel::TYPE_VARCHAR : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"data-sort="<?php echo htmlspecialchars(json_encode((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['sort'])===null||$tmp==='' ? array() : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
"data-selectable="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['selectable'], ENT_QUOTES, 'UTF-8', true);?>
"data-multiple="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['multiple'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='divider'){?> class="gray"<?php }?>><td class="min-width"><i class="icon16 sort"></i></td><td><span class="js-feature-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><br><span class="js-feature-code hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</span></td><td><span class="js-feature-type-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['type_name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php if ($_smarty_tpl->tpl_vars['feature']->value['selectable']){?><div><?php if (false){?><ul class="menu-h with-icons"><li><a href="#/features/feature/value/view/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="small inline-link js-action"><i class="icon10 view-table" title="Просмотреть"></i></a></li><li><a href="#/features/feature/value/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="small inline-link js-action"><i class="icon10 edit" title="Редактировать"></i></a></li></ul><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['values'])){?><ul class="menu-v compact with-icons small s-feature-values js-feature-values" style="max-width: 200px;"><?php /*  Call merged included template "./SettingsFeaturesFeatureValues.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsFeaturesFeatureValues.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '8994650745846c194633913-87104240');
content_5846c194682b70_57301813($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsFeaturesFeatureValues.html" */?></ul><?php }else{ ?><p class="hint">Значения характеристики не определены</p><a href="#/features/feature/value/add/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="small inline-link js-action"><i class="icon10 add"></i><b><i>Добавить значение характеристики</i></b></a><?php }?><?php }?></div><?php }?></td><td>&nbsp;</td><td class="align-center"><ul class="menu-h with-icons"><li><a href="#/features/feature/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="inline js-action" title="Настройки"><i class="icon16 settings"></i></a></li><li><a href="#/features/feature/delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="inline js-action"><i class="icon16 delete"></i></a></li></ul></td></tr><?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 16:48:04
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureValues.html" */ ?>
<?php if ($_valid && !is_callable('content_5846c194682b70_57301813')) {function content_5846c194682b70_57301813($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['more'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['values_per_feature']->value)&&(($_smarty_tpl->tpl_vars['feature']->value['count']>($_smarty_tpl->tpl_vars['values_per_feature']->value+2))||($_smarty_tpl->tpl_vars['feature']->value['count']>count($_smarty_tpl->tpl_vars['feature']->value['values']))) ? ($_smarty_tpl->tpl_vars['feature']->value['count']-count($_smarty_tpl->tpl_vars['feature']->value['values'])) : null, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <li data-value-id="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
"><?php if (is_object($_smarty_tpl->tpl_vars['value']->value)&&isset($_smarty_tpl->tpl_vars['value']->value['icon'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['icon'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['more']->value){?>
    <li class="js-more-link"><a href="#/features/feature/values/show/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="js-action inline-link"><b><i><?php echo sprintf("Показать еще %d",$_smarty_tpl->tpl_vars['more']->value);?>
</i></b></a></li>
<?php }?><?php }} ?>