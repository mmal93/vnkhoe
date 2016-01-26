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
		<meta property="og:description" content="vnkhoe.com - Tư vấn nghề nghiệp, tìm kiếm công việc, tư vấn sức khoẻ chuyên nghiệp" />
		<meta name="description" content="vnkhoe.com - Tư vấn nghề nghiệp, tìm kiếm công việc, tư vấn sức khoẻ chuyên nghiệp" />
		<meta name="keywords" content="vnkhoe.com - Tư vấn nghề nghiệp, tìm kiếm công việc, tư vấn sức khoẻ chuyên nghiệp">
		
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
		{if $root_config->head->favorite_icon}
			<link rel="shortcut icon" type="image/icon" href="{$MEDIA_URL}{$root_config->head->favorite_icon}" />  
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
					<li class="level-0"><a href="{$BASE_URL}contacts.html"><span>Danh bạ</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}jobs.html"><span>Việc làm</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}tu_van_nghe_nghiep.html"><span>Tư vấn nghề nghiệp</span></a></li>
					<li class="level-0"><a href="{$BASE_URL}tu_van_suc_khoe.html"><span>Tư vấn sức khỏe</span></a></li>
				</nav>
				{if isset($smarty.session.member_id)&&(!empty($smarty.session.member_id))}
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
				<li class="level-0"><a href="{$BASE_URL}contacts.html"><span>Danh bạ</span></a></li>
				<li class="level-0"><a href="{$BASE_URL}jobs.html"><span>Việc làm</span></a></li>
				<li class="level-0"><a href="{$BASE_URL}tu-van-nghe-nghiep.html"><span>Tư vấn nghề nghiệp</span></a></li>
				<li class="level-0"><a href="{$BASE_URL}tu-van-suc-khoe.html"><span>Tư vấn sức khỏe</span></a></li>
			</nav>
			{if isset($_session)&&(!empty($_session))}
				{include file='account\\header_logout.tpl'}
			{else}
				{include file='account\\header_login.tpl'}
			{/if}
		</div>
		{/if}
	</div>
	<!--end top-header-->
	{if isset($banner_images) && (!empty($banner_images))}
	<div id="header-banner">
		<div class="header-slider">
			<ul class="bxslider">
				{foreach from=$banner_images item=image}
					<li style="background-image: url('{$image}');">
						<!--<img src="{$image}" title="Funky roots" />-->
					</li>
				{/foreach}
			</ul>
		</div>
	</div>
	{/if}
	{if isset($_top_search) && ($_top_search == true)}
		{include file='top_search.tpl'}
	{/if}
</header>