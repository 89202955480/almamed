<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 19:55:14
         compiled from "/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/main.html" */ ?>
<?php /*%%SmartyHeaderCode:7575172285846ed72025fd1-89896226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8b41b8892d05d0f59a4fdb26c9b3dbe715f3a5' => 
    array (
      0 => '/home/almamed/web/almamed.su/public_html/wa-data/public/blog/themes/profitbuy/main.html',
      1 => 1464084398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7575172285846ed72025fd1-89896226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_action' => 0,
    'output' => 0,
    'theme_settings' => 0,
    'wa' => 0,
    'posts' => 0,
    'wa_app_url' => 0,
    'wa_backend_url' => 0,
    'is_sidebar' => 0,
    'wa_active_theme_path' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846ed72163184_15513606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846ed72163184_15513606')) {function content_5846ed72163184_15513606($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['output']->value['nav_before'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['nav_before'];?>
<?php }?><?php } ?>


<?php $_smarty_tpl->tpl_vars['is_sidebar'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar'])&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/my/')===false&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/login/')===false&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/signup/')===false&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'/forgotpassword/')===false, null, 0);?>

<div class="row-grid">

    <?php if (empty($_smarty_tpl->tpl_vars['posts']->value)&&$_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value){?>
        
        <div class="content col-grid s12">
            <div class="fill-background">
                <div class="welcome">
                    <h1>Добро пожаловать в ваш новый блог!</h1>
                    <p><?php echo sprintf('Начните с <a href="%s">создания записи</a> в бекенде блога.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('blog/'));?>
</p>
                </div>
            </div>
        </div>
    
    <?php }else{ ?>
        
        <?php if ($_smarty_tpl->tpl_vars['is_sidebar']->value){?>
            
            <nav class="sidebar col-grid s12 l3<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sidebar_pos'])){?> float-right<?php }?>">
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
            </nav>
            
        <?php }?>
    
        <div itemscope itemtype="http://schema.org/WebPage" class="content col-grid s12<?php if ($_smarty_tpl->tpl_vars['is_sidebar']->value){?> l9 without-sidebar<?php }?>">
        
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        
        </div>
        
    <?php }?>
    
</div><?php }} ?>