<?php
/* Smarty version 3.1.29, created on 2016-01-29 03:20:49
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\hiring\dang_tuyen.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aacc8157f530_68225703',
  'file_dependency' => 
  array (
    '7303fd240b248f29bd7bb002b1b0f0eff0d16a64' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\hiring\\dang_tuyen.tpl',
      1 => 1454034047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aacc8157f530_68225703 ($_smarty_tpl) {
?>
<!--Dang tuyen-->
<section id="dang-tuyen-section">
	<div class="row top-control">
		<div class="col-sm-12 relative">
			<div id="dich-vu-goi" class="control step-1<?php if (isset($_smarty_tpl->tpl_vars['_data_step1']->value) && count($_smarty_tpl->tpl_vars['_data_step1']->value) > 0) {?> active<?php }?>">Chọn gói dịch vụ</div>
			<div id="dich-vu-cong-them" class="control step-2">Dịch vụ cộng thêm</div>
			<div id="gui-don-hang" class="control step-3">Gửi đơn hàng</div>
			<div class="middle"></div>
		</div>
	</div>
	<div class="row bottom-content">
		<?php if (isset($_smarty_tpl->tpl_vars['_data_step1']->value) && count($_smarty_tpl->tpl_vars['_data_step1']->value) > 0) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['_data_step1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach__item_0_saved_item = isset($_smarty_tpl->tpl_vars['_item']) ? $_smarty_tpl->tpl_vars['_item'] : false;
$_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['_item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->value) {
$_smarty_tpl->tpl_vars['_item']->_loop = true;
$__foreach__item_0_saved_local_item = $_smarty_tpl->tpl_vars['_item'];
?>
				<form name="tuyen-dung-form-<?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_id'];?>
" id="tuyen-dung-form-<?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_id'];?>
" class="col-sm-3 item-step-1 item-<?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_id'];?>
" action="" method="post">
					<div class="inner">
						<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_name'];?>
</h3>
						<div class="description">
							<?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_description'];?>

						</div>
						<div class="review-section">
							<span class="review-star">
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</span>
							<span class="review-number"><?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_view'];?>
 lượt xem</span>
						</div>
						<div class="list-info">
							<?php if (isset($_smarty_tpl->tpl_vars['_item']->value['item'])) {?>
							<?php
$_from = $_smarty_tpl->tpl_vars['_item']->value['item'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach__goi_type_1_saved_item = isset($_smarty_tpl->tpl_vars['_goi_type']) ? $_smarty_tpl->tpl_vars['_goi_type'] : false;
$_smarty_tpl->tpl_vars['_goi_type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['_goi_type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_goi_type']->value) {
$_smarty_tpl->tpl_vars['_goi_type']->_loop = true;
$__foreach__goi_type_1_saved_local_item = $_smarty_tpl->tpl_vars['_goi_type'];
?>
								<ul class="<?php echo $_smarty_tpl->tpl_vars['_goi_type']->value['class'];?>
">
								<?php if (count($_smarty_tpl->tpl_vars['_goi_type']->value) > 3) {?>
								<?php
$_from = $_smarty_tpl->tpl_vars['_goi_type']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach__goi_item_2_saved_item = isset($_smarty_tpl->tpl_vars['_goi_item']) ? $_smarty_tpl->tpl_vars['_goi_item'] : false;
$_smarty_tpl->tpl_vars['_goi_item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['_goi_item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['_goi_item']->value) {
$_smarty_tpl->tpl_vars['_goi_item']->_loop = true;
$__foreach__goi_item_2_saved_local_item = $_smarty_tpl->tpl_vars['_goi_item'];
?>
									<?php if (isset($_smarty_tpl->tpl_vars['_goi_item']->value['is_active']) && $_smarty_tpl->tpl_vars['_goi_item']->value['is_active'] == '1') {?>
										<li><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_goi_item']->value['item'];?>
</li>
									<?php } elseif (isset($_smarty_tpl->tpl_vars['_goi_item']->value['is_active']) && $_smarty_tpl->tpl_vars['_goi_item']->value['is_active'] == '0') {?>
										<li><i class="fa fa-times"></i> <?php echo $_smarty_tpl->tpl_vars['_goi_item']->value['item'];?>
</li>
									<?php }?>
								<?php
$_smarty_tpl->tpl_vars['_goi_item'] = $__foreach__goi_item_2_saved_local_item;
}
if ($__foreach__goi_item_2_saved_item) {
$_smarty_tpl->tpl_vars['_goi_item'] = $__foreach__goi_item_2_saved_item;
}
?>
								<?php }?>
								</ul>
							<?php
$_smarty_tpl->tpl_vars['_goi_type'] = $__foreach__goi_type_1_saved_local_item;
}
if ($__foreach__goi_type_1_saved_item) {
$_smarty_tpl->tpl_vars['_goi_type'] = $__foreach__goi_type_1_saved_item;
}
?>
							<?php }?>
						</div>
						<div class="price"><strong><?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_price'];?>
<sup><?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_price_unit'];?>
</sup></strong>/Đăng tuyển</div>
						<div class="submit-box">
							<input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['_item']->value['goi_id'];?>
" />
							<input type="hidden" name="step-id" value="<?php echo $_smarty_tpl->tpl_vars['_step_id']->value;?>
" />
							<input type="submit" name="submit" class="step-1-submit submit" value="Mua ngay" />
							</div>
					</div>
				</form>
			<?php
$_smarty_tpl->tpl_vars['_item'] = $__foreach__item_0_saved_local_item;
}
if ($__foreach__item_0_saved_item) {
$_smarty_tpl->tpl_vars['_item'] = $__foreach__item_0_saved_item;
}
?>
		<?php }?>
	</div>
</section>
<!--end Dang tuyen-->

<?php }
}
