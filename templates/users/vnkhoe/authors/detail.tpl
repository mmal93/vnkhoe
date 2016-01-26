<!--article author-->
<section id="author-article-section">
	<div class="rows">
		{foreach from=_author__author_item item =_author_item}
		<div class="col-sm-4 col-new">
				<img src="{$MEDIA_URL}{$_author_item.author_hinhanh}" title="{$_author_item.author_item}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}authors/id/{$_author_item.author_id}">{$_author_item.author_item}</a></h3>
				<div class="bottom row">
					<div class="col-sm-6"><a href="{$BASE_URL}authors/id/{$_author_item.author_id}" class="detail">Xem chi tiết</a></div>
					<div class="col-sm-6 author">Bởi <a href="{$BASE_URL}author/{{$_author_item.author_id}}" class="author">{$_author_item.author_name}</a></div>
				</div>
		{/foreach}
	</div>
</section>
<!--end article - author-->
