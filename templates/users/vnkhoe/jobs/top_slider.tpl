<!--top-slider-->
<section id="top-slider" class="top-jobs-slider">
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
				<img src="{$MEDIA_URL}images/companies/{$data.congty_id}/{$data.congty_anhvp}" title="{$data['vieclam_ten']}" />
				<h3 class="company-name"><a href="{$BASE_URL}contacts/id/{$data['congty_id']}">{$data['congty_name']}</a></h3>
				<h4 class="job-type"><a href="{$BASE_URL}jobs/id/{$data['vieclam_id']}">{$data['vieclam_ten']}</a></h4>
			</div>
		{/foreach}
	</div>
</section>
<!--top slider-->