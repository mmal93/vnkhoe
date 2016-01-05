<?php
/* Smarty version 3.1.29, created on 2016-01-04 18:11:03
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\contacts\category_unit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568aa7a7dba106_07725130',
  'file_dependency' => 
  array (
    'e8dd86b0b16a989f43e7b2b5944135db04ea1432' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\contacts\\category_unit.tpl',
      1 => 1451927456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568aa7a7dba106_07725130 ($_smarty_tpl) {
?>
<!--category contact-->
<section id="category-section">
	<h2 class="section-title">Các đơn vị theo phân loại <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/search" class="read-more">Xem tất cả</a></h2>
	<?php if (count($_smarty_tpl->tpl_vars['_categories']->value) > 1) {?>
		<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count', 0);?>
		<div class="row">
		<?php
$_from = $_smarty_tpl->tpl_vars['_categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
			<?php if ($_smarty_tpl->tpl_vars['count']->value == 1 || $_smarty_tpl->tpl_vars['count']->value == 7) {?>
				<div class="col-sm-8 relative">
				<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/types/<?php echo $_smarty_tpl->tpl_vars['category']->value['type_image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['nganhnghe_tieude'];?>
" style="max-width: 100%;" />
				<h4><?php echo $_smarty_tpl->tpl_vars['category']->value['nganhnghe_tieude'];?>
</h4>
				</div>
			<?php } else { ?>
				<div class="col-sm-4 relative">
				<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/types/<?php echo $_smarty_tpl->tpl_vars['category']->value['type_image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['nganhnghe_tieude'];?>
" style="max-width: 100%;" />
				<h4><?php echo $_smarty_tpl->tpl_vars['category']->value['nganhnghe_tieude'];?>
</h4>
				</div>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable($_smarty_tpl->tpl_vars['count']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count', 0);?>
		<?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
?>
	<?php }?>
</section>
<!--category contact--><?php }
}
