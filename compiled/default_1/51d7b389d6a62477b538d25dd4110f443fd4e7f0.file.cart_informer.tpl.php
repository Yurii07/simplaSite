<?php /* Smarty version Smarty-3.0.7, created on 2018-08-09 16:50:34
         compiled from "E:\oserver\OSPanel\domains\simplaSite//design/default_1/html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213935b6c46aa14e597-47080407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d7b389d6a62477b538d25dd4110f443fd4e7f0' => 
    array (
      0 => 'E:\\oserver\\OSPanel\\domains\\simplaSite//design/default_1/html\\cart_informer.tpl',
      1 => 1533807042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213935b6c46aa14e597-47080407',
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
