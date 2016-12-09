<?php /* Smarty version Smarty-3.1.14, created on 2016-12-06 18:34:04
         compiled from "0e53cf8fa9436438fbc04e6f832a14f2084cc825" */ ?>
<?php /*%%SmartyHeaderCode:14957115645846da6cbc3e62-39054817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e53cf8fa9436438fbc04e6f832a14f2084cc825' => 
    array (
      0 => '0e53cf8fa9436438fbc04e6f832a14f2084cc825',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '14957115645846da6cbc3e62-39054817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand' => 0,
    'wa_url' => 0,
    'categories' => 0,
    'sc' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5846da6cd0cc02_40165575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5846da6cd0cc02_40165575')) {function content_5846da6cd0cc02_40165575($_smarty_tpl) {?><div class="brand">
  
   <div class="col-grid s12 l7">
     
  <?php if ($_smarty_tpl->tpl_vars['brand']->value['img_home_brand']){?>
  <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
/home/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value['img_home_brand'];?>
" style="max-width: 500px;padding: 7px;box-shadow: 0px 2px 5px rgba(0, 0, 0, .2);" align="left">
    <?php }?>
     
      </div>
  
  
  <div class="col-grid s12 l5 float-right" style="padding: 0px 15px;">
    
  
      <?php if ($_smarty_tpl->tpl_vars['brand']->value['image']){?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value['image'];?>
" style="margin: 25px 30px;max-width: 180px;" align="center">
    <?php }?>
  
    <?php if ($_smarty_tpl->tpl_vars['brand']->value['img_flag_country']){?>
  <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-data/public/shop/brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
/flag/<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['brand']->value['img_flag_country'];?>
" style="max-width: 85px;margin: 0px 74px;" align="center">
    <?php }?>
  

    
  </div>
  <script>
    
      $(function() {
        $(window).resize(function() {
     
          if(window.innerWidth < '1030'){
      $('.col-grid[style^=padding]').removeClass('l5');
            $('.col-grid[style^=padding]').addClass('l3');
    	}else{
      $('.col-grid[style^=padding]').removeClass('l3');
            $('.col-grid[style^=padding]').addClass('l5');
    	}
          
        });
        
        
        
         
    if(window.innerWidth < '1030'){
      $('.col-grid[style^=padding]').removeClass('l5');
            $('.col-grid[style^=padding]').addClass('l3');
    }else{
      $('.col-grid[style^=padding]').removeClass('l3');
            $('.col-grid[style^=padding]').addClass('l5');
    }
    });
   
  </script>
     
 
  
  <div class="product-info col-grid s12 " style="margin: 30px 0px;">
 	
    <?php echo $_smarty_tpl->tpl_vars['brand']->value['description'];?>

    
  </div>
</div>




<!-- categories -->
<?php if ($_smarty_tpl->tpl_vars['categories']->value){?>
<ul class="piicsl">
  <?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['sc']->key;
?>
  <li class="piicsl-item">
    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['sc']->value['full_url'];?>
/">
      <div class="piicsl-img">
        <img src="
<?php if (shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['k']->value,'image')){?><?php echo shopWmimageincatPlugin::getCategoryImage($_smarty_tpl->tpl_vars['k']->value,'image');?>

<?php }else{ ?>
/wa-data/public/shop/themes/profitbuy/img/dummy200.png
<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
"></div>
      <span class="piicsl-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
    </a>
  </li>
  <?php } ?>
</ul>
<?php }?>



<br clear="left"><?php }} ?>