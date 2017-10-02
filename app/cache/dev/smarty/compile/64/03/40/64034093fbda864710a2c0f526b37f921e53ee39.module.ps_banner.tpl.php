<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 00:11:27
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195775369959cd738fc38836-52659618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_banner/ps_banner.tpl',
      1 => 1506607488,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '195775369959cd738fc38836-52659618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cd738fc3cf08_25443740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd738fc3cf08_25443740')) {function content_59cd738fc3cf08_25443740($_smarty_tpl) {?><!-- begin /var/www/presta/themes/classic/modules/ps_banner/ps_banner.tpl -->
<div class="banner" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'ISO-8859-1');?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'ISO-8859-1');?>
)<?php }?>">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBannerDescription'),$_smarty_tpl);?>

</div>
<!-- end /var/www/presta/themes/classic/modules/ps_banner/ps_banner.tpl --><?php }} ?>
