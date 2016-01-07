<!--category contact-->
<section id="category-section">
	<h2 class="section-title">Các đơn vị theo phân loại <a href="{$BASE_URL}contacts/search" class="read-more">Xem tất cả</a></h2>
	{if $_categories|@count >1}
		{assign var=count value=1}
		<div class="row">
		{foreach from=$_categories item=category}
			{if $count==1 || $count==7}
				<div class="col-sm-8 relative">
				<img src="{$MEDIA_URL}images/company_categories/{$category.type_image}" title="{$category.nganhnghe_tieude }" style="max-width: 100%;" />
				<h4>{$category.nganhnghe_tieude }</h4>
				</div>
			{else}
				<div class="col-sm-4 relative">
				<img src="{$MEDIA_URL}images/company_categories/{$category.type_image}" title="{$category.nganhnghe_tieude }" style="max-width: 100%;" />
				<h4>{$category.nganhnghe_tieude }</h4>
				</div>
			{/if}
			{$count = $count + 1}
		{/foreach}
	{/if}
</section>
<!--category contact-->