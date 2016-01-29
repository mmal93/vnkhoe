<?php
/* Smarty version 3.1.29, created on 2016-01-28 14:56:19
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\home_employer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa1e037fa628_29914781',
  'file_dependency' => 
  array (
    'c5085f748981e6e9fc2c6e88af2acbb25823ec27' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\home_employer.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa1e037fa628_29914781 ($_smarty_tpl) {
?>
<!--load ads...-->
<?php if (isset($_smarty_tpl->tpl_vars['page_config']->value)) {
$_smarty_tpl->tpl_vars['item_row'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_row', 0);
$_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_col', 0);?>
<!--employer-->
<?php
$_from = $_smarty_tpl->tpl_vars['page_config']->value->section_info;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_section_0_saved_item = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$__foreach_section_0_saved_local_item = $_smarty_tpl->tpl_vars['section'];
?>
	<section class="<?php echo $_smarty_tpl->tpl_vars['section']->value->class_name;?>
" <?php if (isset($_smarty_tpl->tpl_vars['section']->value->background) && $_smarty_tpl->tpl_vars['section']->value->background != '') {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['section']->value->background;?>
;"<?php }?>>
		<div class="row inner">
			<div class="col-sm-6 left">
				<h3><?php echo $_smarty_tpl->tpl_vars['section']->value->title;?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['section']->value->text;?>
</p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['section']->value->link;?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value->text_link;?>
<i class="fa fa-angle-double-right"></i></a>
			</div>
			<div class="col-sm-6 right">
				<img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['section']->value->image_href;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['section']->value->image_alt;?>
"/>
			</div>
		</div>
	</section>
<?php
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_local_item;
}
if ($__foreach_section_0_saved_item) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_item;
}
?>
<!--end employer-->
<?php }?>
<!--end load ads...--><?php }
}
