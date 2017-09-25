<?php /* Smarty version Smarty-3.1.19, created on 2017-09-25 10:03:16
         compiled from "C:\wamp64\www\themes\classic\templates\checkout\checkout-process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2568959c8b8449ebbd3-92991945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e40754b5c9cc8f8f28b615a4ac78d3e1c51e815' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\checkout\\checkout-process.tpl',
      1 => 1503921076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2568959c8b8449ebbd3-92991945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'step' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c8b844a1b781_29366872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c8b844a1b781_29366872')) {function content_59c8b844a1b781_29366872($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["step"]->key;
?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl);?>

<?php } ?>
<?php }} ?>
