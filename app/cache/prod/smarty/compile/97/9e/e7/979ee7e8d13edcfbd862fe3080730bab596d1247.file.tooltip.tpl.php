<?php /* Smarty version Smarty-3.1.19, created on 2017-09-20 14:58:41
         compiled from "C:\wamp64\www\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1262459c26601a47475-19187402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979ee7e8d13edcfbd862fe3080730bab596d1247' => 
    array (
      0 => 'C:\\wamp64\\www\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1503921198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1262459c26601a47475-19187402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c26601a583b1_78653295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c26601a583b1_78653295')) {function content_59c26601a583b1_78653295($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
