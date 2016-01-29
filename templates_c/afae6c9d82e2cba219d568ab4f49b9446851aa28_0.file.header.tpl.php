<?php
/* Smarty version 3.1.29, created on 2016-01-28 16:38:16
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\hiring\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa35e8752c99_40047042',
  'file_dependency' => 
  array (
    'afae6c9d82e2cba219d568ab4f49b9446851aa28' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\hiring\\header.tpl',
      1 => 1452837387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:account\\\\header_logout.tpl' => 1,
    'file:account\\\\header_login.tpl' => 1,
  ),
),false)) {
function content_56aa35e8752c99_40047042 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		<?php if ($_smarty_tpl->tpl_vars['root_config']->value->head->charset) {?>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['root_config']->value->head->charset;?>
">
		<?php }?>
		<title>
			<?php if (isset($_smarty_tpl->tpl_vars['page_config']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['root_config']->value->head->title->all_page == false && $_smarty_tpl->tpl_vars['page_config']->value->head->title != '') {?>
					<?php echo $_smarty_tpl->tpl_vars['page_config']->value->head->title;?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['root_config']->value->head->title->value;?>

				<?php }?>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['root_config']->value->head->title->value;?>

			<?php }?>
		</title>
		
		<?php if (count($_smarty_tpl->tpl_vars['CSS']->value) > 0) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['CSS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_css_0_saved_item = isset($_smarty_tpl->tpl_vars['css']) ? $_smarty_tpl->tpl_vars['css'] : false;
$_smarty_tpl->tpl_vars['css'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['css']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
$__foreach_css_0_saved_local_item = $_smarty_tpl->tpl_vars['css'];
?>
				<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['LIB_TEMPLATE_URL']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" />
			<?php
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_0_saved_local_item;
}
if ($__foreach_css_0_saved_item) {
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_0_saved_item;
}
?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['root_config']->value->head->css->items) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['root_config']->value->head->css->items;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_css_1_saved_item = isset($_smarty_tpl->tpl_vars['css']) ? $_smarty_tpl->tpl_vars['css'] : false;
$_smarty_tpl->tpl_vars['css'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['css']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
$__foreach_css_1_saved_local_item = $_smarty_tpl->tpl_vars['css'];
?>
				<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
skin/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" />
			<?php
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_1_saved_local_item;
}
if ($__foreach_css_1_saved_item) {
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_1_saved_item;
}
?>
		<?php }?>
		
		<?php if (count($_smarty_tpl->tpl_vars['JS']->value) > 0) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['JS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_js_2_saved_item = isset($_smarty_tpl->tpl_vars['js']) ? $_smarty_tpl->tpl_vars['js'] : false;
$_smarty_tpl->tpl_vars['js'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['js']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
$__foreach_js_2_saved_local_item = $_smarty_tpl->tpl_vars['js'];
?>
				<?php echo '<script'; ?>
 type="text/javaScript" src="<?php echo $_smarty_tpl->tpl_vars['LIB_TEMPLATE_URL']->value;?>
/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
			<?php
$_smarty_tpl->tpl_vars['js'] = $__foreach_js_2_saved_local_item;
}
if ($__foreach_js_2_saved_item) {
$_smarty_tpl->tpl_vars['js'] = $__foreach_js_2_saved_item;
}
?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['root_config']->value->head->js->items) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['root_config']->value->head->js->items;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_js_3_saved_item = isset($_smarty_tpl->tpl_vars['js']) ? $_smarty_tpl->tpl_vars['js'] : false;
$_smarty_tpl->tpl_vars['js'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['js']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
$__foreach_js_3_saved_local_item = $_smarty_tpl->tpl_vars['js'];
?>
				<?php echo '<script'; ?>
 type="text/javaScript" src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
skin/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
			<?php
$_smarty_tpl->tpl_vars['js'] = $__foreach_js_3_saved_local_item;
}
if ($__foreach_js_3_saved_item) {
$_smarty_tpl->tpl_vars['js'] = $__foreach_js_3_saved_item;
}
?>
		<?php }?>
		
	</head>
<body<?php if (isset($_smarty_tpl->tpl_vars['body_class']->value)) {?> class="<?php echo $_smarty_tpl->tpl_vars['body_class']->value;?>
"<?php }?>>
<header id="header">
	<div id="top-header" class="container">
		<?php if ($_smarty_tpl->tpl_vars['root_config']->value->head->logo->src) {?>
		<div class="row">
			<div class="top-logo col-sm-2">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.html" title="<?php echo $_smarty_tpl->tpl_vars['root_config']->value->head->logo->title;?>
">
					<h2 class="logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;
echo $_smarty_tpl->tpl_vars['root_config']->value->head->logo->src;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['root_config']->value->head->logo->alt;?>
" />
					</h2>
				</a>
			</div>
			<div class="top-nav col-sm-10">
				<nav id="nav">
					<?php if ($_smarty_tpl->tpl_vars['root_config']->value->nav->show_home_link == true) {?>
						<li class="level-0"><a class="home-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.html"><span><?php if ($_smarty_tpl->tpl_vars['root_config']->value->nav->text_link) {
echo $_smarty_tpl->tpl_vars['root_config']->value->nav->text_link;
} else { ?>Trang chủ<?php }?></span></a></li>
					<?php }?>
					<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts"><span>Danh bạ</span></a></li>
					<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
viec-lam"><span>Việc làm</span></a></li>
					<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu-van-nghe-nghiep"><span>Tư vấn nghề nghiệp</span></a></li>
					<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu-van-suc-khoe"><span>Tư vấn sức khỏe</span></a></li>
				</nav>
				<?php if (isset($_smarty_tpl->tpl_vars['_session']->value) && (!empty($_smarty_tpl->tpl_vars['_session']->value))) {?>
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:account\\header_logout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:account\\header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php }?>
			</div>
		</div>
		<?php } else { ?>
		<div class="top-nav">
			<nav id="nav">
				<?php if ($_smarty_tpl->tpl_vars['root_config']->value->nav->show_home_link == true) {?>
					<li class="level-0"><a class="home-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.html"><span><?php if ($_smarty_tpl->tpl_vars['root_config']->value->nav->text_link) {
echo $_smarty_tpl->tpl_vars['root_config']->value->nav->text_link;
} else { ?>Trang chủ<?php }?></span></a></li>
				<?php }?>
				<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts"><span>Danh bạ</span></a></li>
				<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs"><span>Việc làm</span></a></li>
				<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu_van_nghe_nghiep"><span>Tư vấn nghề nghiệp</span></a></li>
				<li class="level-0"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
tu_van_suc_khoe"><span>Tư vấn sức khỏe</span></a></li>
			</nav>
			<form name="top-login" id="top-login">
				<button class="tuyen-dung"><span>Nhà tuyển dụng</span></button>
				<input type="submit" value="Đăng nhập" />
				<a href="#" onclick="return false;" class="register-link"><span>Đăng ký</span></a>
			</form>
		</div>
		<?php }?>
	</div>
	<!--banner-->
	<div id="banner" class="relative">
		<div class="top">
			<h1>Trang web hàng đầu Tuyển dụng nhân sự ngành Y tế.</h1>
			<h4>Giới thiệu những hình ảnh trái tim và linh hồn của công ty bạn để thu hút các tài năng tốt nhất.</h4>
		</div>
		<div class="middle">
			<img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/tuyendung.jpg" title="vnKhoe" alt="vnkhoe-banner" />
		</div>
		<div class="bottom container">
			<div class="inner row relative">
				<div class="relative">
					<div class="col-sm-6">
						<div class="top-price"></div>
						<h2>Đăng tuyển</h2>
						<h6>Trang web tuyển dụng hàng đầu Việt Nam</h6>
						<ul>
							<li>Đảm bảo chất lượng 100%</li>
							<li>Đăng tuyển <strong>nhanh chóng</strong> và nhận hồ sơ <strong>ngay lập tức</strong></li>
							<li>Nhận <em>lời khuyên về mức lương</em> <strong>miễn phí</strong> cho tin tuyển dụng</li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
hiring/dang_tuyen" class="register">Đăng tuyển</a>
						</ul>
					</div>
					<div class="col-sm-6">
						<div class="top-price"></div>
						<h2>Tìm hồ sơ</h2>
						<h6>Tìm ứng viên mới nhất</h6>
						<ul>
							<li>Đảm bảo chất lượng 100%</li>
							<li>Đăng tuyển <strong>nhanh chóng</strong> và nhận hồ sơ <strong>ngay lập tức</strong></li>
							<li>Nhận <em>lời khuyên về mức lương</em> <strong>miễn phí</strong> cho tin tuyển dụng</li>
							<a href="#" class="order-now">Tìm hồ sơ</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end banner-->
	
</header><?php }
}
