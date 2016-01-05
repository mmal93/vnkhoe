<?php
/* Smarty version 3.1.29, created on 2016-01-03 14:27:16
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\header_logout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568921b488d7c4_72477423',
  'file_dependency' => 
  array (
    'b8020c8da01c0c15744a6a151ab65e51f01e41b1' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\header_logout.tpl',
      1 => 1451827143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568921b488d7c4_72477423 ($_smarty_tpl) {
?>
<div class="top-right-section">
	<form name="tuyendung" id="tuyen-dung-form">
		<input type="search" value="" required />
		<button class="tuyen-dung" title="Tìm kiếm nhà tuyển dụng"><span>Nhà tuyển dụng</span></button>
	</form>
	<button class="top-logout-button" title="Đăng xuất" rel="<?php echo $_smarty_tpl->tpl_vars['_session']->value['tv_id'];?>
">Đăng xuất</button>
	<a href="<?php echo BASE_URL;?>
account/dashboard.html?id=<?php echo $_smarty_tpl->tpl_vars['_session']->value['tv_id'];?>
" class="top-account-link" title="Tài khoản của tôi"><span><?php echo $_smarty_tpl->tpl_vars['_session']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_session']->value['lastname'];?>
</span></a>
</div><?php }
}
