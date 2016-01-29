<?php
/* Smarty version 3.1.29, created on 2016-01-29 01:31:53
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\login_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aab2f98b7791_15518156',
  'file_dependency' => 
  array (
    'd84fec7741cadf4c48e57339a4a25cd9a696f8be' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\login_form.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aab2f98b7791_15518156 ($_smarty_tpl) {
?>
<section class="main-login" id="main-login">
	<div class="main-login col-sm-12">
		<div class="section-title">
			<h1>Đăng nhập vnkhoe</h1>
		</div>
		<div class="main-login">
			<form name="login-form" id="login-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
account/login.html<?php if (isset($_smarty_tpl->tpl_vars['repos']->value) && $_smarty_tpl->tpl_vars['repos']->value != $_smarty_tpl->tpl_vars['CURRENT_PAGE_URL']->value) {?>?repos=<?php echo $_smarty_tpl->tpl_vars['repos']->value;
}?>">
				<ul>
					<li class="message">
						<?php if (isset($_smarty_tpl->tpl_vars['error_message']->value) && (!empty($_smarty_tpl->tpl_vars['error_message']->value))) {?>
							<ul class="hllm-error-box">
							<?php
$_from = $_smarty_tpl->tpl_vars['error_message']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach__error_0_saved_item = isset($_smarty_tpl->tpl_vars['_error']) ? $_smarty_tpl->tpl_vars['_error'] : false;
$_smarty_tpl->tpl_vars['_error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['_error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_error']->value) {
$_smarty_tpl->tpl_vars['_error']->_loop = true;
$__foreach__error_0_saved_local_item = $_smarty_tpl->tpl_vars['_error'];
?>
								<li class="item"><i class="fa fa-exclamation-circle"></i><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</li>
							<?php
$_smarty_tpl->tpl_vars['_error'] = $__foreach__error_0_saved_local_item;
}
if ($__foreach__error_0_saved_item) {
$_smarty_tpl->tpl_vars['_error'] = $__foreach__error_0_saved_item;
}
?>
							</ul>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['success_message']->value) && (!empty($_smarty_tpl->tpl_vars['success_message']->value))) {?>
							<ul class="hllm-success-box">
							<?php
$_from = $_smarty_tpl->tpl_vars['success_message']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach__success_1_saved_item = isset($_smarty_tpl->tpl_vars['_success']) ? $_smarty_tpl->tpl_vars['_success'] : false;
$_smarty_tpl->tpl_vars['_success'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['_success']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_success']->value) {
$_smarty_tpl->tpl_vars['_success']->_loop = true;
$__foreach__success_1_saved_local_item = $_smarty_tpl->tpl_vars['_success'];
?>
								<li class="item"><i class="fa fa-check-square-o"></i><?php echo $_smarty_tpl->tpl_vars['_success']->value;?>
</li>
							<?php
$_smarty_tpl->tpl_vars['_success'] = $__foreach__success_1_saved_local_item;
}
if ($__foreach__success_1_saved_item) {
$_smarty_tpl->tpl_vars['_success'] = $__foreach__success_1_saved_item;
}
?>
							</ul>
						<?php }?>
					</li>
					<li><label for="username">Tên đăng nhập: </label><input name="username" type="email" value="" placeholder="Email" title="Nhập địa chỉ email" required /></li>
					<li><label for="password">Mật khẩu: </label><input name="password" type="password" value="" placeholder="Mật khẩu" title="Nhập mật khẩu" required /></li>
					<li><label for="remember">Nhớ mật khẩu: </label><input name="remember" type="checkbox" value="" title="Mật khẩu" /></li>
					<li><input name="submit" type="submit" value="Đăng nhập" title="Đăng nhập" class="btn login-button" /> hoặc <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
account/register.html" class="register-button btn">Đăng ký</a> nếu bạn chưa có tài khoản tại vnkhoe</li></li>
				</ul>
			</form>
		</div>
	</div>
</section>
<?php }
}
