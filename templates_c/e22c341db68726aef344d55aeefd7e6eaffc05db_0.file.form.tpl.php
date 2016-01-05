<?php
/* Smarty version 3.1.29, created on 2016-01-03 16:18:55
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\register\form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56893bdfafa8f6_53171355',
  'file_dependency' => 
  array (
    'e22c341db68726aef344d55aeefd7e6eaffc05db' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\register\\form.tpl',
      1 => 1451834323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56893bdfafa8f6_53171355 ($_smarty_tpl) {
?>
<section class="main-login row">
	<h1>Đăng ký tài khoản vnkhoe</h1>
	<div class="main-register col-sm-6">
		<form name="register-form" id="register-form">
			<ul>
				<li><label for="username">Tên đăng nhập: </label><input name="username" type="text" value="" placeholder="Username" title="Username" required validated /></li>
				<li><label for="password">Mật khẩu: </label><input name="password" type="password" value="" placeholder="Mật khẩu" title="Mật khẩu" required validated /></li>
				<li><label for="repassword">Nhập lại mật khẩu: </label><input name="repassword" type="password" value="" placeholder="Nhập lại mật khẩu" title="Mật khẩu" required validated/></li>
				<li><label for="firstname">Họ và tên đệm: </label><input name="firstname" type="text" value="" placeholder="Họ" title="Họ và tên đệm" required validated/></li>
				<li><label for="firstname">Tên: </label><input name="lastname" type="text" value="" placeholder="Tên" title="Tên" required validated/></li>
				<li><label for="tel">Số điện thoại: </label><input name="tel" type="tel" value="" title="Số điện thoại" validated/></li>
				<li><label for="job">Công việc: </label><input name="job" type="text" value="" placeholder="Công việc" title="Công việc" required validated/></li>
				<li><label for="gender">giới tính: </label><input name="remember" type="checkbox" value="" title="Nam" /></li>
				<li><input name="submit" type="submit" value="Đăng nhập" title="Đăng nhập" /></li>
				
			</ul>
		</form>
	</div>
</section>
<?php }
}
