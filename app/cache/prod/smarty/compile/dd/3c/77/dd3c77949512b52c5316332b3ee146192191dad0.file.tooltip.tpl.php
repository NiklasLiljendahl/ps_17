<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 00:34:00
         compiled from "/var/www/presta/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162988551459cd78d8bedd72-58465605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3c77949512b52c5316332b3ee146192191dad0' => 
    array (
      0 => '/var/www/presta/modules/welcome/views/templates/tooltip.tpl',
      1 => 1506607488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162988551459cd78d8bedd72-58465605',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cd78d8beffb9_86033653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd78d8beffb9_86033653')) {function content_59cd78d8beffb9_86033653($_smarty_tpl) {?>

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
