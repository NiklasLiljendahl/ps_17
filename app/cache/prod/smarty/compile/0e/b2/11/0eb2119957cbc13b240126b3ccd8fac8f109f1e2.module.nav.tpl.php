<?php /* Smarty version Smarty-3.1.19, created on 2017-09-20 10:36:52
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1897859c228a46c6445-97769893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1505821185,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1897859c228a46c6445-97769893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c228a4711ae0_47708176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c228a4711ae0_47708176')) {function content_59c228a4711ae0_47708176($_smarty_tpl) {?>
<div id="_desktop_contact_link">
  <div id="contact-link">
    <a href="https://yabs.se" class="yabs-link">
      <?php echo smartyTranslate(array('s'=>'Back to [1]%website%[/1]','sprintf'=>array('[1]'=>'<span class="yabs-orange">','[/1]'=>'</span>','%website%'=>'yabs.se'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    </a>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      
      <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    <?php }?>
  </div>
</div>
<?php }} ?>
