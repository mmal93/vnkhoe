<!--article author-->
<section id="author-article-section">
	<div class="rows">
		{foreach from=$article_data item=$article_item}
		<div class="col-sm-4 col-item">
			<img src="{$MEDIA_URL}{$article_item.tvsk_hinhanh}" title="{$article_item.tvsk_tieude}" style="max-width: 100%;" />
			<h3 class="title"><a href="{$BASE_URL}tu_van_suc_khoe/id/{$article_item.tvsk_id}">{$article_item.tvsk_tieude}</a></h3>
			<div class="bottom row">
				<div class="col-sm-6"><a href="{$BASE_URL}tu_van_suc_khoe/id/{$article_item.tvsk_id}" class="detail">Xem chi tiết</a></div>
				<div class="col-sm-6 author">Bởi <a href="{$BASE_URL}author/{{$article_item.tvsk_id}}" class="author">{$article_item.author_name}</a></div>
			</div>
		</div>
		{/foreach}
	</div>
</section>
<!--end article - author-->
