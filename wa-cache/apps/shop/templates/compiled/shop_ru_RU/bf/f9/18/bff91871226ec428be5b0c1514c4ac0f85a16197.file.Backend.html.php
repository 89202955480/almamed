<?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 17:07:15
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/productbrands/templates/actions/backend/Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:1865010359584969132ad1f1-73380768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff91871226ec428be5b0c1514c4ac0f85a16197' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/plugins/productbrands/templates/actions/backend/Backend.html',
      1 => 1481025086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865010359584969132ad1f1-73380768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'brands' => 0,
    'b' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584969132fb193_71996618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584969132fb193_71996618')) {function content_584969132fb193_71996618($_smarty_tpl) {?><div class="block double-padded">
    <h1>Бренды</h1>
    <br>


    <table class="zebra">
        <thead>
            <tr class="header">
                <th><?php echo _w('Name');?>
</th>
                <th>Изображение</th>
                <th><?php echo _w('Summary');?>
</th>
                <th><?php echo _w('title');?>
</th>
                <th class="min-width">
                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('settings')){?>
                    <a href="javascript:void(0)" id="product-list-table-settings"><i class="icon16 settings"></i></a>
                    <?php }?>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>

            <tr>
                <td>
                    <a href="#/brand/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['image']){?>
                        <img style="max-width: 200px" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['b']->value['image'];?>
">
                    <?php }?>
                </td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['summary'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<script>

$(function(){

    var features_initialized = false;
    var $dialog = $('#product-list-settings-dialog');
 $('#product-list-table-settings').click(function() {
    // Initialize features list (or autocomplete) if not initialized yet
    if (!features_initialized) {
        features_initialized = true;
        var $template = $dialog.find('.feature-checkbox-wrapper.template');
        var new_elements = $.map(additional_columns, function(col) {
            var $wr = $template.clone().removeClass('hidden template');
            var $cb = $wr.find('input:checkbox');
            $cb[0].name = $cb[0].name.replace('%ID%', col.id);
            $cb[0].checked = col.enabled;
            $wr.find('.column-name').text(col.name);
            return $wr[0];
        });
        $template.before($(new_elements));

        $dialog.find(':input.js-autocomplete-feature').autocomplete({
            source: '?action=autocomplete&type=feature&options[single]=1',
            minLength: 2,
            delay: 300,
            select: function (event, ui) {
                /**
                 * @this {HTMLInputElement}
                 */
                $.shop.trace('autocomplete', ui.item);
                var $element = $dialog.find(':input[name="columns\[feature_'+ui.item.id+'\]"]');

                if($element.length) {
                    $element.parents('div.value').addClass('highlighted');
                    setTimeout(function () {
                        $element.parents('div.value').removeClass('highlighted')
                    }, 3000);
                } else {
                    $element = $template.clone().removeClass('hidden template');
                    var $cb = $element.find('input:checkbox');
                    $cb[0].name = $cb[0].name.replace('%ID%', 'feature_' + ui.item.id);
                    $cb[0].checked = true;
                    $element.find('.column-name').text(ui.item.name).attr('title', ui.item.value);

                    $template.before($($element[0]));
                }
                $(this).val('').change();
                return false;
            }
        });
    }

    $dialog.waDialog({
        disableButtonsOnSubmit: true,
        onSubmit: function () {
            var $form = $dialog.find('form');
            var $loading = $('<i class="icon16 loading"></i>').insertAfter($form.find(':submit:first'));
            $.post($form.attr('action'), $form.serialize(), function() {
                $.products.dispatch();
                $dialog.trigger('close');
                $loading.remove();
            });
            return false;
        },
        onCancel: function() {
            //TODO uncheck not saved items
        }
    });
});

});



</script><?php }} ?>