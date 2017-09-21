<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 14:37:05
         compiled from "C:\wamp64\www\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:933659c3b2716bbe03-14176867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbbce4220ec38a3bbf61db089d89b35bb5ca35a' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1503921076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '933659c3b2716bbe03-14176867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c3b2716d8c63_75208906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c3b2716d8c63_75208906')) {function content_59c3b2716d8c63_75208906($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
