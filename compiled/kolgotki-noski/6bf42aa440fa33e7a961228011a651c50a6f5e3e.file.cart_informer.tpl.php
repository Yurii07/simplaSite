<?php /* Smarty version Smarty-3.0.7, created on 2018-08-10 12:11:45
         compiled from "E:\oserver\OSPanel\domains\simplaSite//design/kolgotki-noski/html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100795b6d56d14d26b0-93386550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bf42aa440fa33e7a961228011a651c50a6f5e3e' => 
    array (
      0 => 'E:\\oserver\\OSPanel\\domains\\simplaSite//design/kolgotki-noski/html\\cart_informer.tpl',
      1 => 1533807042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100795b6d56d14d26b0-93386550',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'E:\oserver\OSPanel\domains\simplaSite\Smarty\libs\plugins\modifier.escape.php';
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
