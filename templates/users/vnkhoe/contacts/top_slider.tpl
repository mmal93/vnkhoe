<!--top-slider-->
<section id="top-slider">
	<div class="col-sm-6">
		<h2>Khám phá các đơn vị</h2>
		<p>Xem trước nơi <em>bạn muốn làm việc</em></p>
	</div>
	<div class="col-sm-6">
		<p>Bằng những hình ảnh và video, chúng tôi sẽ mang đến cho bạn nơi bạn cần đến một cách chân thực nhất.</p>
	</div>
	<div class="inner-slider">
		{foreach from=$_data item=data}
			<div class="slide">
				<a href="{$BASE_URL}contacts/id/{$data.congty_id}" title="{$data.congty_name}"><img src="{$MEDIA_URL}images/companies/{$data.congty_id}/{$data.congty_anhvp}" title="{$data['congty_name']}" /></a>
				<h3><a href="{$BASE_URL}contacts/id/{$data.congty_id}">{$data.congty_name}</a></h3>
			</div>
		{/foreach}
	</div>
</section>
<!--top slider-->