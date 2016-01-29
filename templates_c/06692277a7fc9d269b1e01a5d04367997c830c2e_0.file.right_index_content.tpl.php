<?php
/* Smarty version 3.1.29, created on 2016-01-29 01:31:59
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\dashboard\right_index_content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aab2ff9c96c8_40412453',
  'file_dependency' => 
  array (
    '06692277a7fc9d269b1e01a5d04367997c830c2e' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\dashboard\\right_index_content.tpl',
      1 => 1453392412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aab2ff9c96c8_40412453 ($_smarty_tpl) {
?>
<div class="right_index">
	<form class="update-info" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
account/dashboard.html">
		<h3 class="title center"> Cập nhật thông tin </h3>
		<ul>
			<li><label>Họ</label><input name="firstname" type="text" value="" placeholder="Nhập họ" title="Nhập họ" required /></li> 
			<li><label>Tên</label><input name="lastname" type="text" value="" placeholder="Nhập tên" title="Nhập vào họ" required /></li>
			<li><label>Email đăng nhập</label><input name="email" type="email" value="" placeholder="Nhập email" title="Email đăng nhập" required /></li>
			<li><label>Số điện thoại</label><input name="tel" type="tel" value="" placeholder="Nhập số điện thoại" title="Nhập số điện thoại" /></li>
			<li><label>Nhập password hiện tại</label><input name="password" type="password" value="" placeholder="Mật khẩu hiện tại" title="Nhập vào mật khẩu hiện tại" required /></li>
			<li><label></label><button name="submit" class="info-update">Cập nhật</button></li>
		</ul>
	</form>
	<form class="update-password" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
account/dashboard.html">
		<h3 class="title center">Thay đổi mật khẩu </h3>
		<ul>
			<li><label>Nhập mật khẩu mới</label><input name="newpassword" type="password" placeholder="Nhập mật khẩu mới" title="Nhập mật khẩu mới" required /></li>
			<li><label>Nhập lại mật khẩu mới</label><input name="repassword" type="password" placeholder="Nhập lại mật khẩu mới" title="Nhập lại mật khẩu mới" required /></li>
			<li><label>Nhập mật khẩu hiện tại</label><input name="password" type="password" placeholder="Nhập mật khẩu hiện tại" title="Nhập mật khẩu hiện tại" required /></li>
			<li><label></label><button>Cập nhật</button></li>
		</ul>
	</form>
</div>










<?php }
}
