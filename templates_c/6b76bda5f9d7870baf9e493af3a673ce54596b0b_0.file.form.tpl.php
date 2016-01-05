<?php
/* Smarty version 3.1.29, created on 2016-01-04 19:02:52
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\contacts\form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568ab3cc57be17_57592786',
  'file_dependency' => 
  array (
    '6b76bda5f9d7870baf9e493af3a673ce54596b0b' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\contacts\\form.tpl',
      1 => 1451930567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568ab3cc57be17_57592786 ($_smarty_tpl) {
?>
<main class="container-fluid">
	<!--search contact-->
	<section id="search-section">
		<h2 class="section-title">Tìm kiếm nâng cao</h2>
		<div class="row">
			<form>
				<div class="col-sm-8"><input type="text" value="" Placeholder="Nhập vào công việc" /></div>
				<div class="col-sm-4"><input type="text" value="" Placeholder="Nhập địa điểm" /></div>
				<div class="col-sm-6">
				<?php if (count($_smarty_tpl->tpl_vars['_form_data']->value) > 0) {?>
					<select name="nganhnghe">
					<?php
$_from = $_smarty_tpl->tpl_vars['_form_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_data_0_saved_item = isset($_smarty_tpl->tpl_vars['item_data']) ? $_smarty_tpl->tpl_vars['item_data'] : false;
$_smarty_tpl->tpl_vars['item_data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item_data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item_data']->value) {
$_smarty_tpl->tpl_vars['item_data']->_loop = true;
$__foreach_item_data_0_saved_local_item = $_smarty_tpl->tpl_vars['item_data'];
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['item_data']->value['nganhnghe_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item_data']->value['nganhnghe_tieude'];?>
</option>
					<?php
$_smarty_tpl->tpl_vars['item_data'] = $__foreach_item_data_0_saved_local_item;
}
if ($__foreach_item_data_0_saved_item) {
$_smarty_tpl->tpl_vars['item_data'] = $__foreach_item_data_0_saved_item;
}
?>
					</select>
				<?php } else { ?>
					<input type="text" value="" Placeholder="Nhập ngành nghề" />
				<?php }?>
				</div>
				<div class="col-sm-6"><input type="text" value="" Placeholder="Nhập vào số nhân viên" /></div>
				<div class="col-sm-12 center"><button>Tìm kiếm</button></div>
			</form>
		</div>
	</section>
	<!--search contact-->
</main><?php }
}
