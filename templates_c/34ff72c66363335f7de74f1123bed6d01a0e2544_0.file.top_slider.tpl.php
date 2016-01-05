<?php
/* Smarty version 3.1.29, created on 2016-01-05 05:55:54
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\jobs\top_slider.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568b4cdabdbb73_32288318',
  'file_dependency' => 
  array (
    '34ff72c66363335f7de74f1123bed6d01a0e2544' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\jobs\\top_slider.tpl',
      1 => 1451861013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568b4cdabdbb73_32288318 ($_smarty_tpl) {
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
				<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/companys/<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_name'];?>
" />
				<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['congty_name'];?>
</h3>
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
