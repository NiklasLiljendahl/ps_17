<?php /* Smarty version Smarty-3.1.19, created on 2017-09-20 13:08:46
         compiled from "C:\wamp64\www\themes\classic\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772159c24c3ecda176-70788901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a16ae93df6881043d322336a5215ce8dee901a5' => 
    array (
      0 => 'C:\\wamp64\\www\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1503921076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772159c24c3ecda176-70788901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c24c3ecf7278_42210503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c24c3ecf7278_42210503')) {function content_59c24c3ecf7278_42210503($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>