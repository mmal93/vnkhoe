<?php
/* Smarty version 3.1.29, created on 2016-01-02 03:41:01
  from "E:\Xampp\Xam5_6_12\htdocs\mvc\templates\users\vnkhoe\account\login\form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568738bd0037c2_16734604',
  'file_dependency' => 
  array (
    'b5eb56ea52dabe97ee59225b2b5d346479964ac4' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\mvc\\templates\\users\\vnkhoe\\account\\login\\form.tpl',
      1 => 1451702458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568738bd0037c2_16734604 ($_smarty_tpl) {
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
