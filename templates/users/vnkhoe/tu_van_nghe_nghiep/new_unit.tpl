<section id="new-job-article-section">
	<h2 class="section-title">Mới nhất <a href="{$BASE_URL}tu_van_nghe_nghiep/search" class="read-more">Xem thêm</a></h2>
	<div class="row">
		{foreach from =$_new_data item = $data}
			<div class="col-sm-4 col-new">
				<img src="{$MEDIA_URL}{$data.feature_image}" title="{$data.name_vi}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}tu_van_nghe_nghiep/id/{$data.id}">{$data.name_vi}</a></h3>
				<div class="bottom row">
					<div class="col-sm-6"><a href="{$BASE_URL}detail/{$data.id}">Xem chi tiết</a></div>
					<div class="col-sm-6 author">Bởi <a href="{$BASE_URL}author/{{$data.author_id}}">{$data.author_name}</a></div>
				</div>
			</div>
		{/foreach}
	</div>
</section>
