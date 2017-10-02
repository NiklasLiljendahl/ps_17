<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 00:34:00
         compiled from "/var/www/presta/admin_yabs/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150901723659cd78d8a23629-18822392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dd1e27831578575825422d4a9825878c3a2d752' => 
    array (
      0 => '/var/www/presta/admin_yabs/themes/default/template/content.tpl',
      1 => 1506607488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150901723659cd78d8a23629-18822392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cd78d8a27731_67793483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd78d8a27731_67793483')) {function content_59cd78d8a27731_67793483($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
