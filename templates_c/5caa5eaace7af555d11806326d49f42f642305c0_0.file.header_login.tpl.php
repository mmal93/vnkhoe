<?php
/* Smarty version 3.1.29, created on 2016-01-28 14:56:19
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\header_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa1e031c08b6_81501263',
  'file_dependency' => 
  array (
    '5caa5eaace7af555d11806326d49f42f642305c0' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\header_login.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa1e031c08b6_81501263 ($_smarty_tpl) {
?>
<div class="top-right-section">
	<a href="<?php echo BASE_URL;?>
hiring" class="hiring"><span>Nhà tuyển dụng</span></a>
	<button class="top-account-button-toggle">Tài khoản của tôi</button>
	<div class="account-toggle">
		<!--<button class="login-toggle-button" title="Đăng nhập">Đăng nhập</button>-->
		<a href="<?php echo BASE_URL;?>
account/login.html<?php if (!isset($_smarty_tpl->tpl_vars['repos']->value)) {?>?repos=<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;
} else { ?>?repos=<?php echo $_smarty_tpl->tpl_vars['repos']->value;
}?>" class="top-login-link btn login-button" title="Đăng nhập"><span>Đăng nhập</span></a>
		<a href="<?php echo BASE_URL;?>
account/register.html" class="top-register-link" title="Đăng ký"><button><span>Đăng ký</span></button></a>
	</div>
</div><?php }
}
