<!--detail contact-->
<section id="detail-section">
	<div class="row">
		<div class="col-sm-6 col-left relative">
			<img src="{$MEDIA_URL}images/articles/{$_contact_data[0].congty_id}/{$_contact_data[0].congty_anhvp}" title="{$_contact_data[0].congty_name}" style="max-width: 100%;" />
			<div class="title">
				<p>Xem bên trong văn phòng của</p>
				<h3 title="{$_contact_data[0].congty_name}">{$_contact_data[0].congty_name}</h3>
			</div>
		</div>
		<div class="col-sm-6 col-right">
			<p class="logo center"><img src="{$MEDIA_URL}images/articles/{$_contact_data[0].congty_id}/{$_contact_data[0].congty_logo}" title="{$_contact_data[0].congty_name}"/></p>
			<p class="sologan" style="text-overflow: ellipsis; ">{$_contact_data[0].congty_sologan}</p>
		</div>
	</div>
</section>
<!--detail contact-->