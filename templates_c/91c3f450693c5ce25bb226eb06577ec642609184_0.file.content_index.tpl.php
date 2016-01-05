<?php
/* Smarty version 3.1.29, created on 2016-01-02 09:41:46
  from "E:\Xampp\Xam5_6_12\htdocs\mvc\templates\users\vnkhoe\index\content_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56878d4a960250_30493472',
  'file_dependency' => 
  array (
    '91c3f450693c5ce25bb226eb06577ec642609184' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\mvc\\templates\\users\\vnkhoe\\index\\content_index.tpl',
      1 => 1451724100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56878d4a960250_30493472 ($_smarty_tpl) {
?>
<main>
	<div class="container-fluid">
	<!--load ads...-->
	<?php if (isset($_smarty_tpl->tpl_vars['page_config']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['item_row'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_row', 0);?>
	<?php $_smarty_tpl->tpl_vars['item_col'] = new Smarty_Variable('', null);
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
							<?php if (isset($_smarty_tpl->tpl_vars['col']->value->image) && $_smarty_tpl->tpl_vars['col']->value->image != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;
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
	<!--brands-->
	<?php
$_from = $_smarty_tpl->tpl_vars['page_config']->value->brands;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_section_3_saved_item = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$__foreach_section_3_saved_local_item = $_smarty_tpl->tpl_vars['section'];
?>
		<section class="<?php echo $_smarty_tpl->tpl_vars['section']->value->class_name;?>
 row" <?php if (isset($_smarty_tpl->tpl_vars['section']->value->background) && $_smarty_tpl->tpl_vars['section']->value->background != '') {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['section']->value->background;?>
;"<?php }?>>
			<?php $_smarty_tpl->tpl_vars['item_row'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['section']->value->rows), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'item_row', 0);?>
			<?php
$_from = $_smarty_tpl->tpl_vars['section']->value->rows;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_4_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_4_saved_local_item = $_smarty_tpl->tpl_vars['row'];
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
$__foreach_col_5_saved_item = isset($_smarty_tpl->tpl_vars['col']) ? $_smarty_tpl->tpl_vars['col'] : false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$__foreach_col_5_saved_local_item = $_smarty_tpl->tpl_vars['col'];
?>
						<div class="col-sm-<?php echo 12/$_smarty_tpl->tpl_vars['item_col']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['col']->value->class_name;?>
 section-col" <?php if (isset($_smarty_tpl->tpl_vars['col']->value->background) && $_smarty_tpl->tpl_vars['col']->value->background != '') {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['col']->value->background;?>
;"<?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['col']->value->link;?>
" target="_blank">
							<?php if (isset($_smarty_tpl->tpl_vars['col']->value->image) && $_smarty_tpl->tpl_vars['col']->value->image != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;
echo $_smarty_tpl->tpl_vars['col']->value->image;?>
" title="<?php echo $_smarty_tpl->tpl_vars['col']->value->title;?>
"/><?php }?>
						</a>
						</div>
					<?php
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_5_saved_local_item;
}
if ($__foreach_col_5_saved_item) {
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_5_saved_item;
}
?>
				</div>
			<?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_local_item;
}
if ($__foreach_row_4_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_item;
}
?>
		</section>
	<?php
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_3_saved_local_item;
}
if ($__foreach_section_3_saved_item) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_3_saved_item;
}
?>
	<!--end brands-->
	<!--employer-->
	<?php
$_from = $_smarty_tpl->tpl_vars['page_config']->value->section_info;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_section_6_saved_item = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$__foreach_section_6_saved_local_item = $_smarty_tpl->tpl_vars['section'];
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
					<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;
echo $_smarty_tpl->tpl_vars['section']->value->image_href;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['section']->value->image_alt;?>
"/>
				</div>
			</div>
		</section>
	<?php
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_6_saved_local_item;
}
if ($__foreach_section_6_saved_item) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_6_saved_item;
}
?>
	<!--end employer-->
	<!--bottom_link-->
	<?php
$_from = $_smarty_tpl->tpl_vars['page_config']->value->bottom_link;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_section_7_saved_item = isset($_smarty_tpl->tpl_vars['section']) ? $_smarty_tpl->tpl_vars['section'] : false;
$_smarty_tpl->tpl_vars['section'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['section']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
$__foreach_section_7_saved_local_item = $_smarty_tpl->tpl_vars['section'];
?>
		<section class="<?php echo $_smarty_tpl->tpl_vars['section']->value->class_name;?>
" <?php if (isset($_smarty_tpl->tpl_vars['section']->value->background) && $_smarty_tpl->tpl_vars['section']->value->background != '') {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['section']->value->background;?>
;"<?php }?>>
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
$__foreach_col_8_saved_item = isset($_smarty_tpl->tpl_vars['col']) ? $_smarty_tpl->tpl_vars['col'] : false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$__foreach_col_8_saved_local_item = $_smarty_tpl->tpl_vars['col'];
?>
				<div class="section-col">
						<a href="<?php echo $_smarty_tpl->tpl_vars['col']->value->link;?>
" target="_blank">
							<?php if (isset($_smarty_tpl->tpl_vars['col']->value->image) && $_smarty_tpl->tpl_vars['col']->value->image != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;
echo $_smarty_tpl->tpl_vars['col']->value->image;?>
" title="<?php echo $_smarty_tpl->tpl_vars['col']->value->title;?>
"/><?php }?>
						</a>
				</div>
			<?php
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_8_saved_local_item;
}
if ($__foreach_col_8_saved_item) {
$_smarty_tpl->tpl_vars['col'] = $__foreach_col_8_saved_item;
}
?>
		</section>
	<?php
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_7_saved_local_item;
}
if ($__foreach_section_7_saved_item) {
$_smarty_tpl->tpl_vars['section'] = $__foreach_section_7_saved_item;
}
?>
	<!--end bottom_link-->
	<?php }?>
	<!--end load ads...-->
	</div>
</main><?php }
}
