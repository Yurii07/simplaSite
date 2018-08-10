<?php /* Smarty version Smarty-3.0.7, created on 2018-08-09 17:14:49
         compiled from "E:\oserver\OSPanel\domains\simplaSite//design/default_1/html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94225b6c4c59283ba8-71351626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4d1f5fdb52b264cbbe51617dc80c1571368465e' => 
    array (
      0 => 'E:\\oserver\\OSPanel\\domains\\simplaSite//design/default_1/html\\page.tpl',
      1 => 1533807042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94225b6c4c59283ba8-71351626',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'E:\oserver\OSPanel\domains\simplaSite\Smarty\libs\plugins\modifier.escape.php';
?>
<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".($_smarty_tpl->getVariable('page')->value->url), null, 1);?>

<!-- Заголовок страницы -->
<h1 data-page="<?php echo $_smarty_tpl->getVariable('page')->value->id;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('page')->value->header);?>
</h1>

<!-- Тело страницы -->
<?php echo $_smarty_tpl->getVariable('page')->value->body;?>
