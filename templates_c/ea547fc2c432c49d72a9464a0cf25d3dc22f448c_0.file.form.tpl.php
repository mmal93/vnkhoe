<?php
/* Smarty version 3.1.29, created on 2016-01-02 22:13:24
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\login\form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56883d747204b0_58678095',
  'file_dependency' => 
  array (
    'ea547fc2c432c49d72a9464a0cf25d3dc22f448c' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\login\\form.tpl',
      1 => 1451702458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56883d747204b0_58678095 ($_smarty_tpl) {
?>
<section class="main-login">
	<h1>Đăng nhập</h1>
	<div class="main-login">
		<form name="login-form" id="login-form">
			<ul>
				<li><label for="username">Tên đăng nhập: </label><input name="username" type="text" value="" placeholder="Username" title="Username" required /></li>
				<li><label for="password">Mật khẩu: </label><input name="password" type="password" value="" placeholder="Mật khẩu" title="Mật khẩu" required /></li>
				<li><label for="remember">Nhớ mật khẩu: </label><input name="remember" type="checkbox" value="" title="Mật khẩu" /></li>
				<li><input name="submit" type="submit" value="Đăng nhập" title="Đăng nhập" /></li>
				
			</ul>
		</form>
	</div>
</section>
<?php }
}
