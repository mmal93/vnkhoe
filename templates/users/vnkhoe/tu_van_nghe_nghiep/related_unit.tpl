{if isset($_related) && ($_related|@count>0)}
<section id="related-article-section">
	<div class="section-title">
		<h2>Tư vấn hữu ích khác</h2>
	</div>
	<div class="row">
		<div class="inner-slider">
			{foreach from=$_related item=related}
				<div class="slide relative">
					<a href="{$BASE_URL}tu_van_nghe_nghiep/id/{$related.id}"><img src="{$MEDIA_URL}{$related.feature_image}" title="{$related.name_vi}" /></a>
					<h4><a href="{$BASE_URL}tu_van_nghe_nghiep/id/{$related.id}">{$related.name_vi}</a></h4>
				</div>
			{/foreach}
		</div>
	</div>
</section>
{/if}
