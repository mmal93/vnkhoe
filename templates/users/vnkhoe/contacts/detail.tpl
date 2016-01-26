<!--detail contact-->
<section id="detail-section">
	<div class="row">
		<div class="col-sm-6 col-left relative">
			<img src="{$MEDIA_URL}images/companies/{$_contact_data[0].congty_id}/{$_contact_data[0].congty_anhvp}" title="{$_contact_data[0].congty_name}" style="max-width: 100%;" />
			<div class="title">
				<p>Xem bên trong văn phòng của</p>
				<h3 title="{$_contact_data[0].congty_name}">{$_contact_data[0].congty_name}</h3>
			</div>
		</div>
		<div class="col-sm-6 col-right">
			<p class="logo center"><a href="{$BASE_URL}contacts/id/{$contact_data[0].congty_id}"><img src="{$MEDIA_URL}images/companies/{$_contact_data[0].congty_id}/{$_contact_data[0].congty_logo}" title="{$_contact_data[0].congty_name}"/></a></p>
			<p class="sologan" style="text-overflow: ellipsis; ">{$_contact_data[0].congty_sologan}</p>
		</div>
	</div>
	<ul class="row detail-info">
		<li class="col-sm-6 company-name"><label>Tên công ty:</label> <strong><span>{$_contact_data[0].congty_name}</span></strong></li>
		<li class="col-sm-6 company-view"><label>Số lượt xem:</label> <strong><span>{$_contact_data[0].congty_view}</span></strong></li>
		<li class="col-sm-6 company-email"><label>Email:</label> <span><a href="#">{$_contact_data[0].congty_email}</a></span></li>
		<li class="col-sm-6 recive-mail"><label>Email nhận hồ sơ tuyển dụng:</label> <span><a href="#">{$_contact_data[0].congty_emailnhanhoso}</a></span></li>
		<li class="col-sm-6 tel"><label>Điện thoại:</label> <span><a href="tel">{$_contact_data[0].congty_phone}</a></span></li>
		<li class="col-sm-6 address"><label>Địa chỉ:</label> <span><a href="#">{$_contact_data[0].congty_diachi}</a></span></li>
		<li class="col-sm-6 member-number"><label>Số lượng nhân viên:</label> <span><a href="#">{$_contact_data[0].congty_size}</a></span></li>
		<li class="col-sm-6 type"><label>Thuộc ngành/Lĩnh vực:</label> <span><a href="#">{$_contact_data[0].nganh_name}</a></span></li>
		<li class="col-sm-12 social-title">Xem nhiều hơn {$_contact_data[0].congty_name} tại:</li>
		<li class="col-sm-12 social">
			<div class="facebook"><a href="https://www.facebook.com/{$_contact_data[0].congty_facebook}" title="Thăm trang facebook của {$_contact_data[0].congty_name}" target="_blank"><i class="fa fa-facebook"></i></a></div>
			<div class="twitter"><a href="https://twitter.com/{$_contact_data[0].congty_twitter}" title="Thăm trang twitter của {$_contact_data[0].congty_name}" target="_blank"><i class="fa fa-twitter"></i></a></div>
		</li>
	</ul>
</section>
<!--detail contact-->