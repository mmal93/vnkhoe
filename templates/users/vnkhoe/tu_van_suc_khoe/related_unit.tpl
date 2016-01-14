<section id="related-article-section">
	<h2 class="section-title">Tư vấn hữu ích khác</h2>
	<div class="row">
		{foreach from=$_related item=related}
			<div class="col-xs-6 col-md-3 col-ms-2 col-5">
				<img src="{$MEDIA_URL}{$related.tvsk_hinhanh}" title="{$related.tvsk_tieude}" />
				<h4><a href="{$BASE_URL}tu_van_suc_khoe/id/{$related.tvsk_id}">{$related.tvsk_tieude}</a></h4>
			</div>
		{/foreach}
	</div>
</section>
