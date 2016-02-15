<!--Dang tuyen-->
<section id="dang-tuyen-section">
	<div class="row top-control">
		<div class="col-sm-12 relative">
			<div id="dich-vu-goi" class="control step-1{if $_step_id==1 && isset($_data_step1) && $_data_step1|@count > 0} active{/if}">Chọn gói dịch vụ</div>
			<div id="dich-vu-cong-them" class="control step-2{if $_step_id==2 && isset($_data_step2) && $_data_step2|@count > 0} active{/if}">Dịch vụ cộng thêm</div>
			<div id="gui-don-hang" class="control step-3{if $_step_id==3} active{/if}">Gửi đơn hàng</div>
			<div class="middle"></div>
		</div>
	</div>
	<div class="row bottom-content">
		{if $_step_id==1}
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
		{else if $_step_id==2}
		{if isset($_data_step2) && $_data_step2|@count > 0}
			<form name="tuyen-dung-form-step-2" id="tuyen-dung-form-step-2" class="col-sm-12" action="" method="post">
				<div class="step-2">
				{foreach from=$_data_step2.item item=$_item}
					<ul class="{$_item.class} item-title">
					<li><span class="item-title">{$_item.name}</span>
					{foreach from=$_item item=$_sub_item}
						{if isset($_sub_item.item_id) && !empty($_sub_item.item_id)}
						<li><input id="{$_item.class}-{$_sub_item.item_id}" name="{$_item.class}-{$_sub_item.item_id}" type="checkbox" value="{$_sub_item.item_id}" /> <label class="item-title" for="{$_item.class}-{$_sub_item.item_id}">{$_sub_item.item_value}</label></li>
						{/if}
					{/foreach}
					</li>
					</ul>
				{/foreach}
					<ul class="submit-box">
						<li>
							<button name="step-2-submit btn" class="btn-step2-submit">Gửi đơn hàng</button>
						</li>
					</ul>
				</div>
				<div class="step-3">
					<ul class="{$_item.class} item-title">
						<li><label>Tên công ty</label><input name="company-name" type="text" value="" placeholder="Nhập tên công ty" required /></li>
						<li><label>Email công ty</label><input name="email" type="email" value="" placeholder="Nhập vào Email" required /></li>
						<li><label>Nhập mật khẩu</label><input name="password" type="password" value="" placeholder="Nhập mật khẩu" required /></li>
						<li><label>Nhập lại mật khẩu</label><input name="re-password" type="password" value="" placeholder="Nhập lại mật khẩu" required /></li>
						<li><label>Số điện thoại</label><input name="tel" type="tel" value="" placeholder="Số điện thoại" required /></li>	
						<li><label>Địa chỉ</label><input name="address" type="text" value="" placeholder="Nhập địa chỉ" required /></li>	
						{if $_form_data|count >0}
						<li>
							<label>Địa điểm</label>
							<select name="position" placeholder="Chọn địa điểm..." required>
							{foreach from=$_form_data item=item_data}
								<option value="{$item_data.id}">{$item_data.diadiem}</option>
							{/foreach}
							</select>
						</li>
						{/if}
						<li>
							<label>Bạn biết đến vnkhoe.com bằng phương tiện nào</label>
							<select name="anser">
								<option value="Qua Facebook">Qua Facebook</option>
								<option value="Qua bạn bè giới thiệu">Qua bạn bè giới thiệu</option>
								<option value="Qua báo chí">Qua báo chí</option>
								<option value="Qua quảng cáo">Qua quảng cáo</option>
								<option value="Qua Internet">Qua Internet</option>
							</select>
						</li>
					</ul>
					<ul class="submit-box">
						<li>
							<input type="hidden" name="gid" value="{$gid}" />
							<input type="hidden" name="step-id" value="{$_step_id}" />
							<input name="submit" type="submit" value="Gửi đơn hàng" class="btn" />
						</li>
					</ul>
				</div>
			</form>
		{/if}
		{else if $_step_id==3}
		Step 4
		{else}
		{/if}
	</div>
</section>
<!--end Dang tuyen-->

