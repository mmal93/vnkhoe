<?php
/* Smarty version 3.1.29, created on 2016-01-28 17:33:53
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\jobs\top_slider.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa42f16c7a18_42410152',
  'file_dependency' => 
  array (
    '34ff72c66363335f7de74f1123bed6d01a0e2544' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\jobs\\top_slider.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa42f16c7a18_42410152 ($_smarty_tpl) {
?>
<!--top-slider-->
<section id="top-slider" class="top-jobs-slider">
	<div class="col-sm-6">
		<h2>Khám phá các việc làm</h2>
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
jobs/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['vieclam_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['data']->value['vieclam_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['vieclam_ten'];?>
" /></a>
				<h3 class="company-name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['congty_name'];?>
</a></h3>
				<h4 class="job-type"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['vieclam_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['vieclam_ten'];?>
</a></h4>
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
