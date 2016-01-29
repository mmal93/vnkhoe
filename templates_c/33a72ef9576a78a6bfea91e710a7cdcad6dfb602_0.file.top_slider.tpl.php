<?php
/* Smarty version 3.1.29, created on 2016-01-28 17:33:39
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\contacts\top_slider.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa42e3ccf772_10120189',
  'file_dependency' => 
  array (
    '33a72ef9576a78a6bfea91e710a7cdcad6dfb602' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\contacts\\top_slider.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa42e3ccf772_10120189 ($_smarty_tpl) {
?>
<!--top-slider-->
<section id="top-slider">
	<div class="col-sm-6">
		<h2>Khám phá các đơn vị</h2>
		<p>Xem trước nơi <em>bạn muốn làm việc</em></p>
	</div>
	<div class="col-sm-6">
		<p>Bằng những hình ảnh và video, chúng tôi sẽ mang đến cho bạn nơi bạn cần đến một cách chân thực nhất.</p>
	</div>
	<div class="inner-slider">
		<?php
$_from = $_smarty_tpl->tpl_vars['_data']->value;
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
			<div class="slide">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_name'];?>
" /></a>
				<h3><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['congty_name'];?>
</a></h3>
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
<!--top slider--><?php }
}
