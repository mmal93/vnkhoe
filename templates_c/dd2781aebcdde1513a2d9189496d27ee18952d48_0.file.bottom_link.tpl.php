<?php
/* Smarty version 3.1.29, created on 2016-01-28 14:56:19
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\bottom_link.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa1e03c4bea6_02118529',
  'file_dependency' => 
  array (
    'dd2781aebcdde1513a2d9189496d27ee18952d48' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\bottom_link.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa1e03c4bea6_02118529 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['page_config']->value)) {
$_smarty_tpl->tpl_vars['item_row'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_row', 0);
$_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_col', 0);?>
<!--bottom link-->
<?php
$_from = $_smarty_tpl->tpl_vars['page_config']->value->bottom_link;
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
		<?php if (isset($_smarty_tpl->tpl_vars['section']->value->title) && $_smarty_tpl->tpl_vars['section']->value->title != '') {?>
			<div class="section-title">
				<h2><?php echo $_smarty_tpl->tpl_vars['section']->value->title;?>
</h2>
			</div>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['section']->value->cols), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_col', 0);?>
		<?php $_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable(12/$_smarty_tpl->tpl_vars['item_col']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_col', 0);?>
		<?php $_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable((int)$_smarty_tpl->tpl_vars['item_col']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_col', 0);?>
		<?php
$_from = $_smarty_tpl->tpl_vars['section']->value->cols;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_col_1_saved_item = isset($_smarty_tpl->tpl_vars['col']) ? $_smarty_tpl->tpl_vars['col'] : false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$__foreach_col_1_saved_local_item = $_smarty_tpl->tpl_vars['col'];
?>
			<div class="section-col">
					<a href="<?php echo $_smarty_tpl->tpl_vars['col']->value->link;?>
" target="_blank">
						<?php if (isset($_smarty_tpl->tpl_vars['col']->value->image) && $_smarty_tpl->tpl_vars['col']->value->image != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['col']->value->image;?>
" title="<?php echo $_smarty_tpl->tpl_vars['col']->value->title;?>
"/><?php }?>
					</a>
			</div>
		<?php
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_1_saved_local_item;
}
if ($__foreach_col_1_saved_item) {
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_1_saved_item;
}
?>
	</section>
<?php
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_local_item;
}
if ($__foreach_section_0_saved_item) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_0_saved_item;
}
?>
<!--end bottom link-->
<?php }
}
}
