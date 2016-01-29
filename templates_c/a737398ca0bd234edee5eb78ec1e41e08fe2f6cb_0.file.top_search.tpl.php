<?php
/* Smarty version 3.1.29, created on 2016-01-28 14:56:19
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\top_search.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa1e0333b788_37108986',
  'file_dependency' => 
  array (
    'a737398ca0bd234edee5eb78ec1e41e08fe2f6cb' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\top_search.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa1e0333b788_37108986 ($_smarty_tpl) {
?>
<!--top search-->
<div id="top-search">
	<div class="inner-search container">
		<div class="col-sm-12">
			<h3>Tìm kiếm bệnh viện, phòng khám...</h3>
		</div>
		<form name="top-search" id="top-search-form" class="row" action="<?php echo BASE_URL;?>
jobs/search/">
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
<!--end top search--><?php }
}
