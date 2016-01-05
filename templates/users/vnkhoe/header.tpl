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
					<li class="level-0"><a href="{$BASE_URL}jobs"><span>Việc làm</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}tu-van-nghe-nghiep"><span>Tư vấn nghề nghiệp</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}tu-van-suc-khoe"><span>Tư vấn sức khỏe</span></a></li>
				</nav>
				{if isset($_session)&&(!empty($_session))}
					{include file='account\\header_logout.tpl'}
				{else}
					{include file='account\\header_login.tpl'}
				{/if}
				<!-- <div class="top-right-section">
					<form name="tuyendung" id="tuyen-dung-form">
						<input type="search" value="" required />
						<button class="tuyen-dung"><span>Nhà tuyển dụng</span></button>
					</form>
					<button class="login-toggle-button">Đăng nhập</button>
					<a href="{BASE_URL}register" class="top-register-link"><span>Đăng ký</span></a>
				{include file='account\\login\\top_login_form.tpl'}
				</div> -->
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
				<li class="level-0"><a href="{$BASE_URL}tu-van-nghe-nghiep"><span>Tư vấn nghề nghiệp</span></a></li>
				<li class="level-0"><a href="{$BASE_URL}tu-van-suc-khoe"><span>Tư vấn sức khỏe</span></a></li>
			</nav>
			<form name="top-login" id="top-login">
				<input type="search" value="" required />
				<button class="tuyen-dung"><span>Nhà tuyển dụng</span></button>
				<input type="submit" value="Đăng nhập" />
				<a href="#" onclick="return false;" class="register-link"><span>Đăng ký</span></a>
			</form>
		</div>
		{/if}
	</div>
	<!--end top-header-->
	<div id="header-banner">
		<div class="header-slider">
			<ul class="bxslider">
				{foreach from=$banner_images item=image}
					<li style="background-image: url('{$image}');">
						<!--<img src="{$image}" title="Funky roots" />-->
					</li>
				{/foreach}
			</ul>
			
			<!--<ul class="slides">
				{foreach from=$banner_images item=image}
					<li>
					<img src="{$image}" alt="{$banner_alt}"/>
					</li>
				{/foreach}
			</ul>-->
		</div>
	</div>
	<!--top search-->
	<div id="top-search">
		<div class="inner-search container">
			<div class="col-sm-12">
				<h3>Tìm kiếm bệnh viện, phòng khám...</h3>
			</div>
			<form name="top-search" id="top-search-form" class="row">
				<div class="col-sm-6 left">
					<input type="search" value="" placeholder="Từ khóa cần tìm" title="Nhập từ khóa cần tìm" />
					<span><i class="fa fa-clock-o"></i></span>
				</div>
				<div class="col-sm-6 right">
					<div class="col-sm-10">
						<input type="search" value="" placeholder="Chọn khu vực" title="Chọn khu vực cần tìm" />
						<span><i class="fa fa-map-marker"></i></span>
					</div>
					<button class="col-sm-2" title="Tìm kiếm"><span><i class="fa fa-search"></i></span></button>
				</div>
			</form>
		</div>
	</div>
	<!--end top search-->
</header>