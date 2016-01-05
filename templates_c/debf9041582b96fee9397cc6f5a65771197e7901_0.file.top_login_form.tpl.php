<?php
/* Smarty version 3.1.29, created on 2016-01-03 11:48:08
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\login\top_login_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5688fc6895a082_54001350',
  'file_dependency' => 
  array (
    'debf9041582b96fee9397cc6f5a65771197e7901' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\login\\top_login_form.tpl',
      1 => 1451818086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5688fc6895a082_54001350 ($_smarty_tpl) {
?>
<div class="top-login-section" style="display: none;">
	<form id="top-login-form" action="http://localhost/vnkhoe/controllers/ajax/index.php" method="post">
		<ul class="login-list">
			<li>
				<div class="message" style="display:none"></div>
			</li>
			<li>
				<input class="top-login-email" name="email" placeholder="Email" type="email" required validated />
			</li>
			<li>
				<input class="top-login-password" name="password" placeholder="Mật khẩu" type="password" value="" />
			</li>
			<li>
				<input id="top-login-remember" name="remember" type="checkbox" /> <label for="remember" class="top-login-remember" title="Nhớ mật khẩu">Nhớ mật khẩu</label>
			</li>
			<li>
				<button name="btn-login" class="top-login-button" title="Đăng nhập thành viên">Đăng nhập</button>
			</li>
			<li>
				<a href="<?php echo BASE_URL;?>
remember" class="forgot-password" title="Khôi phục mật khẩu thành viên">Quên mật khẩu?</a>
			</li>
		</ul>
	</form>
</div><?php }
}
