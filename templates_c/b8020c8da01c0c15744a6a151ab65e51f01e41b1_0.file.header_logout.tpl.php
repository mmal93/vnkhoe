<?php
/* Smarty version 3.1.29, created on 2016-01-29 01:31:58
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\account\header_logout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aab2feda9719_02355672',
  'file_dependency' => 
  array (
    'b8020c8da01c0c15744a6a151ab65e51f01e41b1' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\account\\header_logout.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aab2feda9719_02355672 ($_smarty_tpl) {
?>
<div class="top-right-section">
	<a href="<?php echo BASE_URL;?>
hiring" class="hiring"><span>Nhà tuyển dụng</span></a>
	<button class="top-account-button-toggle">Tài khoản của tôi</button>
	<div class="account-toggle">
		<button class="top-logout-button" title="Đăng xuất" rel="<?php echo $_smarty_tpl->tpl_vars['_session']->value['member_id'];?>
">Đăng xuất</button>
		<a href="<?php echo BASE_URL;?>
account/dashboard.html?id=<?php echo $_SESSION['member_id'];?>
" class="top-account-link account-link-button btn" title="Tài khoản của tôi"><span><?php echo $_SESSION['member_firstname'];?>
 <?php echo $_SESSION['member_lastname'];?>
</span></a>
	</div>
</div><?php }
}
