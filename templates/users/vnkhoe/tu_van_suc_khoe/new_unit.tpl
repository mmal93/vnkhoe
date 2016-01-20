<section id="new-job-article-section">
	<div class="row">
		{foreach from =$_new_data item = $data}
			<div class="col-sm-4 col-new">
				<a href="{$BASE_URL}tu_van_suc_khoe/id/{$data.tvsk_id}"><img src="{$MEDIA_URL}{$data.tvsk_hinhanh}" title="{$data.tvsk_tieude}" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="{$BASE_URL}tu_van_suc_khoe/id/{$data.tvsk_id}">{$data.tvsk_tieude}</a></h3>
				<div class="bottom row">
					<div class="col-sm-6"><a href="{$BASE_URL}tu_van_suc_khoe/id/{$data.tvsk_id}" class="detail">Xem chi tiết</a></div>
					<div class="col-sm-6 author">Bởi <a href="{$BASE_URL}authors/id/{$data.author_id}" class="author">{$data.author_name}</a></div>
				</div>
			</div>
		{/foreach}
	</div>
</section>
