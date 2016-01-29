<?php
/* Smarty version 3.1.29, created on 2016-01-29 01:44:56
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\tu_van_suc_khoe\new_unit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aab6081ecc55_02439635',
  'file_dependency' => 
  array (
    'd26c66e559f5abb6fa667b0f1d38f752742086d6' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\tu_van_suc_khoe\\new_unit.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aab6081ecc55_02439635 ($_smarty_tpl) {
?>
<section id="new-job-article-section">
	<div class="row">
		<?php
$_from = $_smarty_tpl->tpl_vars['_new_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
			<div class="col-sm-4 col-new">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu_van_suc_khoe/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['tvsk_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['data']->value['tvsk_hinhanh'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['tvsk_tieude'];?>
" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu_van_suc_khoe/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['tvsk_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['tvsk_tieude'];?>
</a></h3>
				<div class="bottom row">
					<div class="col-sm-6"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu_van_suc_khoe/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['tvsk_id'];?>
" class="detail">Xem chi tiết</a></div>
					<div class="col-sm-6 author">Bởi <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
authors/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['author_id'];?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['data']->value['author_name'];?>
</a></div>
				</div>
			</div>
		<?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_item;
}
?>
	</div>
</section>
<?php }
}
