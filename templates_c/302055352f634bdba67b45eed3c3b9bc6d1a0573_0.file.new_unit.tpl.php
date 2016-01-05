<?php
/* Smarty version 3.1.29, created on 2016-01-04 15:56:55
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\contacts\new_unit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568a8837da5f13_41275183',
  'file_dependency' => 
  array (
    '302055352f634bdba67b45eed3c3b9bc6d1a0573' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\contacts\\new_unit.tpl',
      1 => 1451919406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568a8837da5f13_41275183 ($_smarty_tpl) {
?>
<!--new contact-->
<section id="new-section">
	<h2 class="section-title">Các đơn vị mới nhất <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/search" class="read-more">Xem thêm</a></h2>
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
	<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['_new_data']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'count', 0);?>
	<?php
while ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['count']->value) {?>
		<?php if ((($_smarty_tpl->tpl_vars['i']->value)%4) == 0) {?>
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/companys/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" />
				<div class="col-sm-9">
					<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; "><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_sologan'];?>
</p>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/companys/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" />
				</div>
			</div>
		<?php } elseif ((($_smarty_tpl->tpl_vars['i']->value%4 == 3) || $_smarty_tpl->tpl_vars['i']->value+1 == $_smarty_tpl->tpl_vars['count']->value)) {?>
			<div class="col-sm-3">
				<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/companys/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" />
				<div class="col-sm-9">
					<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; "><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_sologan'];?>
</p>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/companys/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" />
				</div>
			</div>
		</div>
		<?php } else { ?>
			<div class="col-sm-3">
				<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/companys/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_anhvp'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" />
				<div class="col-sm-9">
					<h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contacts/id/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; "><?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_sologan'];?>
</p>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
images/contacts/companys/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_new_data']->value[$_smarty_tpl->tpl_vars['i']->value]['congty_name'];?>
" style="max-width: 100%;" />
				</div>
			</div>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
	<?php }?>

</section>
<!--new contact--><?php }
}
