<?php /* Smarty version Smarty-3.1.19, created on 2017-09-29 00:34:23
         compiled from "module:ps_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20322600859cd78ef2d2dc7-98844313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1506607488,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '20322600859cd78ef2d2dc7-98844313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59cd78ef2ed1e3_84988753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cd78ef2ed1e3_84988753')) {function content_59cd78ef2ed1e3_84988753($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=="index") {?>
	<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
	  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'ISO-8859-1');?>
" data-wrap="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['homeslider']->value['wrap'], ENT_QUOTES, 'ISO-8859-1');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['pause'], ENT_QUOTES, 'ISO-8859-1');?>
">
	    <ul class="carousel-inner" role="listbox">
	      <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->index++;
 $_smarty_tpl->tpl_vars['slide']->first = $_smarty_tpl->tpl_vars['slide']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeslider']['first'] = $_smarty_tpl->tpl_vars['slide']->first;
?>
	        <li class="carousel-item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslider']['first']) {?>active<?php }?>" role="option" aria-hidden="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslider']['first']) {?>false<?php } else { ?>true<?php }?>">
	          <?php if ($_smarty_tpl->tpl_vars['slide']->value['url']!="http://#") {?>
	          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
">
	          <?php }?>
	            <figure>
	              <!--<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['legend']), ENT_QUOTES, 'ISO-8859-1');?>
">-->
	              <div style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'ISO-8859-1');?>
);position: relative;background-attachment: fixed;background-size: cover;background-repeat: no-repeat;background-position: center;padding: 430px 0;margin-bottom: 0px;display: block;"></div>
	              <?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']) {?>
	                <figcaption class="caption">
	                  <h2 class="display-1 text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</h2>
	                  <div class="caption-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
	                </figcaption>
	              <?php }?>
	            </figure>
	          <?php if ($_smarty_tpl->tpl_vars['slide']->value['url']!="http://#") {?>
	          </a>
	          <?php }?>
	        </li>
	      <?php } ?>
	    </ul>
	    <div class="direction" aria-label="<?php echo smartyTranslate(array('s'=>'Carousel buttons','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
">
	      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
	        <span class="icon-prev hidden-xs" aria-hidden="true">
	          <i class="material-icons">&#xE5CB;</i>
	        </span>
	        <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Previous','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
	      </a>
	      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
	        <span class="icon-next" aria-hidden="true">
	          <i class="material-icons">&#xE5CC;</i>
	        </span>
	        <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
	      </a>
	    </div>
	  </div>
	<?php }?>
<?php }?><?php }} ?>
