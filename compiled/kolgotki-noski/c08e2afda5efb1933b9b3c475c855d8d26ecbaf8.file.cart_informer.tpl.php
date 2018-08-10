<?php /* Smarty version Smarty-3.0.7, created on 2018-08-10 11:59:11
         compiled from "/var/www/xn7sbbighlkm9ahj2air/simpla.xn----7sbbighlkm9ahj2air.xn--j1amh//design/kolgotki-noski/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11399584425b6d53dfef96b4-87885567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08e2afda5efb1933b9b3c475c855d8d26ecbaf8' => 
    array (
      0 => '/var/www/xn7sbbighlkm9ahj2air/simpla.xn----7sbbighlkm9ahj2air.xn--j1amh//design/kolgotki-noski/html/cart_informer.tpl',
      1 => 1533891371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11399584425b6d53dfef96b4-87885567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/xn7sbbighlkm9ahj2air/simpla.xn----7sbbighlkm9ahj2air.xn--j1amh/Smarty/libs/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->getVariable('cart')->value->total_products>0){?>
	В <a href="./cart/">корзине</a>
	<?php echo $_smarty_tpl->getVariable('cart')->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->getVariable('cart')->value->total_products,'товар','товаров','товара');?>

	на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->getVariable('cart')->value->total_price);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('currency')->value->sign);?>

<?php }else{ ?>
	Корзина пуста
<?php }?>
