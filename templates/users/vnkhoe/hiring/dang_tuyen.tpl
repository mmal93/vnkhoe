<!--Dang tuyen-->
<section id="dang-tuyen-section">
	<div class="row top-control">
		<div class="col-sm-12 relative">
			<div id="dich-vu-goi" class="control step-1{if isset($_data_step1) && $_data_step1|@count > 0} active{/if}">Chọn gói dịch vụ</div>
			<div id="dich-vu-cong-them" class="control step-2">Dịch vụ cộng thêm</div>
			<div id="gui-don-hang" class="control step-3">Gửi đơn hàng</div>
			<div class="middle"></div>
		</div>
	</div>
	<div class="row bottom-content">
		{if isset($_data_step1) && $_data_step1|@count > 0}
			{foreach from=$_data_step1 item=$_item}
				<form name="tuyen-dung-form-{$_item.goi_id}" id="tuyen-dung-form-{$_item.goi_id}" class="col-sm-3 item-step-1 item-{$_item.goi_id}" action="" method="post">
					<div class="inner">
						<h3 class="title">{$_item.goi_name}</h3>
						<div class="description">
							{$_item.goi_description}
						</div>
						<div class="review-section">
							<span class="review-star">
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</span>
							<span class="review-number">{$_item.goi_view} lượt xem</span>
						</div>
						<div class="list-info">
							{if isset($_item.item)}
							{foreach from=$_item.item item=$_goi_type}
								<ul class="{$_goi_type.class}">
								{if $_goi_type|@count >3}
								{foreach from=$_goi_type item=$_goi_item}
									{if isset($_goi_item.is_active) && $_goi_item.is_active=='1'}
										<li><i class="fa fa-check"></i> {$_goi_item.item}</li>
									{else if isset($_goi_item.is_active) && $_goi_item.is_active=='0'}
										<li><i class="fa fa-times"></i> {$_goi_item.item}</li>
									{/if}
								{/foreach}
								{/if}
								</ul>
							{/foreach}
							{/if}
						</div>
						<div class="price"><strong>{$_item.goi_price}<sup>{$_item.goi_price_unit}</sup></strong>/Đăng tuyển</div>
						<div class="submit-box">
							<input type="hidden" name="gid" value="{$_item.goi_id}" />
							<input type="hidden" name="step-id" value="{$_step_id}" />
							<input type="submit" name="submit" class="step-1-submit submit" value="Mua ngay" />
							</div>
					</div>
				</form>
			{/foreach}
		{/if}
	</div>
</section>
<!--end Dang tuyen-->

