<?php /* Smarty version Smarty-3.1.19, created on 2017-09-25 14:26:16
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:721159c8f5e8938916-79078201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_banner/ps_banner.tpl',
      1 => 1505889364,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '721159c8f5e8938916-79078201',
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
  'unifunc' => 'content_59c8f5e895bd29_81749613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c8f5e895bd29_81749613')) {function content_59c8f5e895bd29_81749613($_smarty_tpl) {?>
<div class="banner" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" style="<?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?>">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBannerDescription'),$_smarty_tpl);?>

</div>
<?php }} ?>
