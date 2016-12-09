<?php /* Smarty version Smarty-3.1.14, created on 2016-12-08 17:21:16
         compiled from "/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductsDelete.html" */ ?>
<?php /*%%SmartyHeaderCode:93264940158496c5c5ba798-86079670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0112c13a84602fb3fbe88682620440aee16675' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-apps/shop/templates/actions/dialog/DialogProductsDelete.html',
      1 => 1481026221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93264940158496c5c5ba798-86079670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58496c5c5d3892_72397792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58496c5c5d3892_72397792')) {function content_58496c5c5d3892_72397792($_smarty_tpl) {?><div class="dialog width400px height200px" id="s-product-list-delete-products-dialog" data-not-allowed-string="Невозможно удалить товары (%d), к которым у вас нет доступа.">
    <div class="dialog-background"></div>
    <form method="post" action="">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Удалить</h1>
                <p>
                    <strong class="red"><?php echo _w('%d product will be deleted without the ability to restore.','%d products will be deleted without the ability to restore.',$_smarty_tpl->tpl_vars['count']->value);?>
</strong>
                    При удалении товара все отчеты о его продажах, его данные о перекрестных продажах и связи с ранее оформленными заказами будут также удалены без возможности восстановления.
                </p>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button red" type="submit" value="Удалить">
                <i class="icon16 loading"></i> 
                или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div><?php }} ?>