<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 11:15:45
         compiled from "/var/www/presta/themes/classic/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95817107959ce0f41a46b58-77141868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6204f4678994a9a9da7727cb84405bfa7ae98d1c' => 
    array (
      0 => '/var/www/presta/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1506607489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95817107959ce0f41a46b58-77141868',
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
  'unifunc' => 'content_59ce0f41a4b414_92582718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ce0f41a4b414_92582718')) {function content_59ce0f41a4b414_92582718($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'ISO-8859-1');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'ISO-8859-1');?>

    </h1>
  </section>

<?php }} ?>
