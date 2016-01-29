<?php
/* Smarty version 3.1.29, created on 2016-01-28 17:33:40
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\contacts\hot_unit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa42e436d359_45781211',
  'file_dependency' => 
  array (
    'a23d16ff217f5b19778a6fdd82aa441dafe0d6de' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\contacts\\hot_unit.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa42e436d359_45781211 ($_smarty_tpl) {
?>
<!--hot contact-->
<section id="hot-section">
	<h2 class="section-title">Các đơn vị hot nhất <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/search" class="read-more">Xem thêm</a></h2>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
	<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['_hot_data']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count', 0);?>
	<?php
while ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['count']->value) {?>
		<?php if ((($_smarty_tpl->tpl_vars['i']->value)%4) == 0) {?>
		<div class="row">
			<div class="col-sm-3">
				<div class="relative">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
					<div class="information">
						<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['nganh_name'];?>
</div>
						<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_size'];?>
 người</div>
						<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['dia_diem'];?>
</div>
					</div>
				</div>
				<div class="col-sm-9 col-left">
					<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; "><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_sologan'];?>
</p>
				</div>
				<div class="col-sm-3 col-right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
				</div>
			</div>
		<?php } elseif ((($_smarty_tpl->tpl_vars['i']->value%4 == 3) || $_smarty_tpl->tpl_vars['i']->value+1 == $_smarty_tpl->tpl_vars['count']->value)) {?>
			<div class="col-sm-3">
				<div class="relative">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
					<div class="information">
						<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['nganh_name'];?>
</div>
						<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_size'];?>
 người</div>
						<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['dia_diem'];?>
</div>
					</div>
				</div>
				<div class="col-sm-9 col-left">
					<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; "><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_sologan'];?>
</p>
				</div>
				<div class="col-sm-3 col-right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
				</div>
			</div>
		</div>
		<?php } else { ?>
			<div class="col-sm-3 col-left">
				<div class="relative">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
					<div class="information">
						<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['nganh_name'];?>
</div>
						<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_size'];?>
 người</div>
						<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['dia_diem'];?>
</div>
					</div>
				</div>
				<div class="col-sm-9 left">
					<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; "><?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_sologan'];?>
</p>
				</div>
				<div class="col-sm-3 col-right">
					<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_hot_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
				</div>
			</div>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
	<?php }?>

</section>
<!--hot contact--><?php }
}
