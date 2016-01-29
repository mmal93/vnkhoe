<?php
/* Smarty version 3.1.29, created on 2016-01-28 17:33:54
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\jobs\new_unit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aa42f2712148_58550865',
  'file_dependency' => 
  array (
    '3cc7e196cf878c0040d3403fbecef04e91475407' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\jobs\\new_unit.tpl',
      1 => 1453356244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aa42f2712148_58550865 ($_smarty_tpl) {
?>
<section id="new-section" class="new-job">
	<h2 class="section-title">Các đơn vị mới nhất <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/search" class="read-more">Xem thêm</a></h2>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
	<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['_new_data']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count', 0);?>
	<?php
while ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['count']->value) {?>
		<?php if ((($_smarty_tpl->tpl_vars['i']->value)%4) == 0) {?>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['vieclam_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['vieclam_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
				<div class="bottom row">
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['capbac_name'];?>
</div>
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['chucvu_name'];?>
</div>
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['diadiem'];?>
</div>
				</div>
			</div>
		<?php } elseif ((($_smarty_tpl->tpl_vars['i']->value%4 == 3) || $_smarty_tpl->tpl_vars['i']->value+1 == $_smarty_tpl->tpl_vars['count']->value)) {?>
			<div class="col-sm-3">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['vieclam_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['vieclam_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
				<div class="bottom row">
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['capbac_name'];?>
</div>
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['chucvu_name'];?>
</div>
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['diadiem'];?>
</div>
				</div>
			</div>
		</div>
		<?php } else { ?>
			<div class="col-sm-3">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['vieclam_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;?>
images/companies/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
jobs/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['vieclam_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
				<div class="bottom row">
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['capbac_name'];?>
</div>
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['chucvu_name'];?>
</div>
					<div class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['diadiem'];?>
</div>
				</div>
			</div>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
	<?php }?>

</section><?php }
}
