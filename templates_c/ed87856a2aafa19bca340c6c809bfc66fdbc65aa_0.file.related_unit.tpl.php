<?php
/* Smarty version 3.1.29, created on 2016-01-29 01:45:00
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\tu_van_suc_khoe\related_unit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aab60ca71797_24184264',
  'file_dependency' => 
  array (
    'ed87856a2aafa19bca340c6c809bfc66fdbc65aa' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\tu_van_suc_khoe\\related_unit.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aab60ca71797_24184264 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['_related']->value) && (count($_smarty_tpl->tpl_vars['_related']->value) > 0)) {?>
<section id="related-article-section">
	<div class="section-title">
		<h2>Tư vấn hữu ích khác</h2>
	</div>
	<div class="row">
		<div class="inner-slider">
			<?php
$_from = $_smarty_tpl->tpl_vars['_related']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_related_0_saved_item = isset($_smarty_tpl->tpl_vars['related']) ? $_smarty_tpl->tpl_vars['related'] : false;
$_smarty_tpl->tpl_vars['related'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['related']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['related']->value) {
$_smarty_tpl->tpl_vars['related']->_loop = true;
$__foreach_related_0_saved_local_item = $_smarty_tpl->tpl_vars['related'];
?>
				<div class="slide relative">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu_van_suc_khoe/id/<?php echo $_smarty_tpl->tpl_vars['related']->value['tvsk_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['related']->value['tvsk_hinhanh'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['related']->value['tvsk_tieude'];?>
" /></a>
					<h4><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu_van_suc_khoe/id/<?php echo $_smarty_tpl->tpl_vars['related']->value['tvsk_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['related']->value['tvsk_tieude'];?>
</a></h4>
				</div>
			<?php
$_smarty_tpl->tpl_vars['related'] = $__foreach_related_0_saved_local_item;
}
if ($__foreach_related_0_saved_item) {
$_smarty_tpl->tpl_vars['related'] = $__foreach_related_0_saved_item;
}
?>
		</div>
	</div>
</section>
<?php }
}
}
