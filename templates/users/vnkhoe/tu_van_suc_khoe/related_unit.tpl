{if isset($_related) && ($_related|@count>0)}
<section id="related-article-section">
	<div class="section-title">
		<h2>Tư vấn hữu ích khác</h2>
	</div>
	<div class="row">
		<div class="inner-slider">
			{foreach from=$_related item=related}
				<div class="slide relative">
					<a href="{$BASE_URL}tu_van_suc_khoe/id/{$related.tvsk_id}"><img src="{$MEDIA_URL}{$related.tvsk_hinhanh}" title="{$related.tvsk_tieude}" /></a>
					<h4><a href="{$BASE_URL}tu_van_suc_khoe/id/{$related.tvsk_id}">{$related.tvsk_tieude}</a></h4>
				</div>
			{/foreach}
		</div>
	</div>
</section>
{/if}