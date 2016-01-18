<section id="related-article-section">
	<div class="section-title">
		<h2>Tư vấn hữu ích khác</h2>
	</div>
	<div class="row">
		{foreach from=$_related item=related}
			<div class="col-xs-6 col-md-3 col-ms-2 col-5 relative">
				<img src="{$MEDIA_URL}{$related.feature_image}" title="{$related.name_vi}" />
				<h4><a href="{$BASE_URL}tu_van_nghe_nghiep/id/{$related.id}">{$related.name_vi}</a></h4>
			</div>
		{/foreach}
	</div>
</section>
