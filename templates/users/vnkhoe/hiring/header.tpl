<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		{if $root_config->head->charset}
		<meta http-equiv="Content-Type" content="text/html; charset={$root_config->head->charset}">
		{/if}
		<title>
			{if isset($page_config)}
				{if $root_config->head->title->all_page==false && $page_config->head->title!=''}
					{$page_config->head->title}
				{else}
					{$root_config->head->title->value}
				{/if}
			{else}
				{$root_config->head->title->value}
			{/if}
		</title>
		
		{if $CSS|@count > 0}
			{foreach from=$CSS item=css}
				<link rel="stylesheet" type="text/css" href="{$LIB_TEMPLATE_URL}/css/{$css}" />
			{/foreach}
		{/if}
		
		{if $root_config->head->css->items}
			{foreach from=$root_config->head->css->items item=css}
				<link rel="stylesheet" type="text/css" href="{$TEMPLATE_URL}skin/css/{$css}" />
			{/foreach}
		{/if}
		
		{if $JS|@count > 0}
			{foreach from=$JS item=js}
				<script type="text/javaScript" src="{$LIB_TEMPLATE_URL}/js/{$js}"></script>
			{/foreach}
		{/if}
		
		{if $root_config->head->js->items}
			{foreach from=$root_config->head->js->items item=js}
				<script type="text/javaScript" src="{$TEMPLATE_URL}skin/js/{$js}"></script>
			{/foreach}
		{/if}
		
	</head>
<body{if isset($body_class)} class="{$body_class}"{/if}>
<header id="header">
	<div id="top-header" class="container">
		{if $root_config->head->logo->src}
		<div class="row">
			<div class="top-logo col-sm-2">
				<a href="{$BASE_URL}index.html" title="{$root_config->head->logo->title}">
					<h2 class="logo">
						<img src="{$TEMPLATE_URL}{$root_config->head->logo->src}" alt="{$root_config->head->logo->alt}" />
					</h2>
				</a>
			</div>
			<div class="top-nav col-sm-10">
				<nav id="nav">
					{if $root_config->nav->show_home_link==true}
						<li class="level-0"><a class="home-link" href="{$BASE_URL}index.html"><span>{if $root_config->nav->text_link}{$root_config->nav->text_link}{else}Trang chủ{/if}</span></a></li>
					{/if}
					<li class="level-0"><a href="{$BASE_URL}contacts"><span>Danh bạ</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}viec-lam"><span>Việc làm</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}tu-van-nghe-nghiep"><span>Tư vấn nghề nghiệp</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}tu-van-suc-khoe"><span>Tư vấn sức khỏe</span></a></li>
				</nav>
				{if isset($_session)&&(!empty($_session))}
					{include file='account\\header_logout.tpl'}
				{else}
					{include file='account\\header_login.tpl'}
				{/if}
			</div>
		</div>
		{else}
		<div class="top-nav">
			<nav id="nav">
				{if $root_config->nav->show_home_link==true}
					<li class="level-0"><a class="home-link" href="{$BASE_URL}index.html"><span>{if $root_config->nav->text_link}{$root_config->nav->text_link}{else}Trang chủ{/if}</span></a></li>
				{/if}
				<li class="level-0"><a href="{$BASE_URL}contacts"><span>Danh bạ</span></a></li>
				<li class="level-0"><a href="{$BASE_URL}jobs"><span>Việc làm</span></a></li>
				<li class="level-0"><a href="{$BASE_URL}tu_van_nghe_nghiep"><span>Tư vấn nghề nghiệp</span></a></li>
				<li class="level-0"><a href="{$BASE_URL}tu_van_suc_khoe"><span>Tư vấn sức khỏe</span></a></li>
			</nav>
			<form name="top-login" id="top-login">
				<button class="tuyen-dung"><span>Nhà tuyển dụng</span></button>
				<input type="submit" value="Đăng nhập" />
				<a href="#" onclick="return false;" class="register-link"><span>Đăng ký</span></a>
			</form>
		</div>
		{/if}
	</div>
	<!--banner-->
	<div id="banner" class="relative">
		<div class="top">
			<h1>Trang web hàng đầu Tuyển dụng nhân sự ngành Y tế.</h1>
			<h4>Giới thiệu những hình ảnh trái tim và linh hồn của công ty bạn để thu hút các tài năng tốt nhất.</h4>
		</div>
		<div class="middle">
			<img src="{$MEDIA_URL}images/tuyendung.jpg" title="vnKhoe" alt="vnkhoe-banner" />
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
							<a href="{$BASE_URL}hiring/dang_tuyen" class="register">Đăng tuyển</a>
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
	
</header>