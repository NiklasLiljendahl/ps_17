<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 00:11:58
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190665434359cd73aeb1bfa7-30387630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1506607488,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '190665434359cd73aeb1bfa7-30387630',
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
  'unifunc' => 'content_59cd73aeb25464_40665511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd73aeb25464_40665511')) {function content_59cd73aeb25464_40665511($_smarty_tpl) {?><!-- begin /var/www/presta/themes/classic/modules/ps_contactinfo/nav.tpl -->
<div id="_desktop_contact_link">
  <div id="contact-link">
    <a href="https://yabs.se" class="yabs-link">
      <?php echo smartyTranslate(array('s'=>'Back to [1]%website%[/1]','sprintf'=>array('[1]'=>'<span class="yabs-orange">','[/1]'=>'</span>','%website%'=>'yabs.se'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    </a>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      
      <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    <?php }?>
  </div>
</div>
<!-- end /var/www/presta/themes/classic/modules/ps_contactinfo/nav.tpl --><?php }} ?>
