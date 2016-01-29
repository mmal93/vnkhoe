<?php
/* Smarty version 3.1.29, created on 2016-01-28 14:56:19
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\home_advertisments.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa1e0356a182_61872183',
  'file_dependency' => 
  array (
    '48bbf8b7888f3355daa57c61113c5ad3e69545a5' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\home_advertisments.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa1e0356a182_61872183 ($_smarty_tpl) {
?>
<!--load ads...-->
<?php if (isset($_smarty_tpl->tpl_vars['page_config']->value)) {
$_smarty_tpl->tpl_vars['item_row'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_row', 0);
$_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_col', 0);?>
<!--advertisments-->
<?php
$_from = $_smarty_tpl->tpl_vars['page_config']->value->section;
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
 row" <?php if (isset($_smarty_tpl->tpl_vars['section']->value->background) && $_smarty_tpl->tpl_vars['section']->value->background != '') {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['section']->value->background;?>
;"<?php }?>>
		<?php $_smarty_tpl->tpl_vars['item_row'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['section']->value->rows), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_row', 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['section']->value->title) && $_smarty_tpl->tpl_vars['section']->value->title != '') {?>
			<div class="section-title">
				<h2><?php echo $_smarty_tpl->tpl_vars['section']->value->title;?>
</h2>
			</div>
		<?php }?>
		<?php
$_from = $_smarty_tpl->tpl_vars['section']->value->rows;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
			<div class="<?php echo $_smarty_tpl->tpl_vars['row']->value->class_name;?>
 row-<?php echo $_smarty_tpl->tpl_vars['item_row']->value;?>
 section-row">
				<?php $_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['row']->value->cols), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_col', 0);?>
				<?php
$_from = $_smarty_tpl->tpl_vars['row']->value->cols;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_col_2_saved_item = isset($_smarty_tpl->tpl_vars['col']) ? $_smarty_tpl->tpl_vars['col'] : false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$__foreach_col_2_saved_local_item = $_smarty_tpl->tpl_vars['col'];
?>
					<div class="col-sm-<?php echo 12/$_smarty_tpl->tpl_vars['item_col']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['col']->value->class_name;?>
 section-col" <?php if (isset($_smarty_tpl->tpl_vars['col']->value->background) && $_smarty_tpl->tpl_vars['col']->value->background != '') {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['col']->value->background;?>
;"<?php }?>>
						<?php if (isset($_smarty_tpl->tpl_vars['col']->value->image) && $_smarty_tpl->tpl_vars['col']->value->image != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['col']->value->image;?>
"/><?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['col']->value->header) && $_smarty_tpl->tpl_vars['col']->value->header) {?>
							<h3>
								<?php if (isset($_smarty_tpl->tpl_vars['col']->value->link) && $_smarty_tpl->tpl_vars['col']->value->link) {?><a href="<?php echo $_smarty_tpl->tpl_vars['col']->value->link;?>
"><?php echo $_smarty_tpl->tpl_vars['col']->value->header;?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['col']->value->link;
}?>
							</h3>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['col']->value->text) && $_smarty_tpl->tpl_vars['col']->value->text) {?><p><?php echo $_smarty_tpl->tpl_vars['col']->value->text;?>
</p><?php }?>
					</div>
				<?php
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_2_saved_local_item;
}
if ($__foreach_col_2_saved_item) {
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_2_saved_item;
}
?>
			</div>
		<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
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
<!-- end advertisments-->
<?php }?>
<!--end load ads...--><?php }
}
