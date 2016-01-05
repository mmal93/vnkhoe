<?php
/* Smarty version 3.1.29, created on 2016-01-03 14:33:02
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\header_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5689230eac20e0_33306729',
  'file_dependency' => 
  array (
    '5caa5eaace7af555d11806326d49f42f642305c0' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\header_login.tpl',
      1 => 1451827176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:account\\\\login\\\\top_login_form.tpl' => 1,
  ),
),false)) {
function content_5689230eac20e0_33306729 ($_smarty_tpl) {
?>
<div class="top-right-section">
	<form name="tuyendung" id="tuyen-dung-form">
		<input type="search" value="" required />
		<button class="tuyen-dung" title="Tìm kiếm nhà tuyển dụng"><span>Nhà tuyển dụng</span></button>
	</form>
	<button class="login-toggle-button" title="Đăng nhập">Đăng nhập</button>
	<a href="<?php echo BASE_URL;?>
register" class="top-register-link" title="Đăng ký"><span>Đăng ký</span></a>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:account\\login\\top_login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}
