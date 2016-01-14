<!--article healthy detail-->
<section id="detail-healthy-section">
	<div class="rows">
		<div class="col-sm-11 content">
			<img class="feature-image" src="{$MEDIA_URL}{$_healthy_data[0].tvsk_hinhanh}" title="{$_healthy_data[0].tvsk_tieude}" style="max-width: 100%;" />
			<h1 class="title center" title="{$_healthy_data[0].tvsk_tieude}">{$_healthy_data[0].tvsk_tieude}</h1>
			<p class="content">{$_healthy_data[0].tvsk_noidung}</p>
			<h3 class="title">Giới thiệu tác giả</h3>
			<div class="logo col-sm-2">
				<img src="{$MEDIA_URL}{$_healthy_data[0].author_logo}" title="{$_healthy_data[0].author_name}" style="max-width: 100%;" />
			</div>
			<div class="col-sm-8 author-detail">{$_healthy_data[0].author_description}</div>
		</div>
		<div class="col-sm-1">
		</div>
	</div>
</section>
