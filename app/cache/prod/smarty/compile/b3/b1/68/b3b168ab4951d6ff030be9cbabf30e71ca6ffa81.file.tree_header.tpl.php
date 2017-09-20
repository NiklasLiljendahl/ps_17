<?php /* Smarty version Smarty-3.1.19, created on 2017-09-20 12:47:58
         compiled from "C:\wamp64\www\admin_yabs\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:641759c2475e94fab5-67534935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3b168ab4951d6ff030be9cbabf30e71ca6ffa81' => 
    array (
      0 => 'C:\\wamp64\\www\\admin_yabs\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1503921074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '641759c2475e94fab5-67534935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c2475e98a9c1_72851397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2475e98a9c1_72851397')) {function content_59c2475e98a9c1_72851397($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
