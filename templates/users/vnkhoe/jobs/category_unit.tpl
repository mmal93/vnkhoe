<!--category jobs-->
<section id="category-section">
	<h2 class="section-title">Các đơn vị theo phân loại <a href="{$BASE_URL}jobs/search" class="read-more">Xem tất cả</a></h2>
	{if $_categories|@count >1}
		{assign var=count value=1}
		<div class="row">
		{foreach from=$_categories item=category}
			{if $count==1 || $count==7}
				<div class="col-sm-8 relative">
					<a href="{$BASE_URL}jobs/search?ctid={$category.nganhnghe_id}" title ="Việc làm tại {$category.nganhnghe_tieude}">
						<img src="{$MEDIA_URL}{$category.nganhnghe_anh}" title="{$category.nganhnghe_tieude}" style="max-width: 100%;" />
					</a>
					<a href="{$BASE_URL}jobs/search?ctid={$category.nganhnghe_id}" title ="Việc làm tại {$category.nganhnghe_tieude}">
						<h4>{$category.nganhnghe_tieude }</h4>
					</a>
				</div>
			{else}
				<div class="col-sm-4 relative">
					<a href="{$BASE_URL}jobs/search?ctid={$category.nganhnghe_id}" title ="Việc làm tại {$category.nganhnghe_tieude}">
						<img src="{$MEDIA_URL}{$category.nganhnghe_anh}" title="{$category.nganhnghe_tieude }" style="max-width: 100%;" />
					</a>
					<a href="{$BASE_URL}jobs/search?ctid={$category.nganhnghe_id}" title ="Việc làm tại {$category.nganhnghe_tieude}">
						<h4>{$category.nganhnghe_tieude }</h4>
					</a>
				</div>
			{/if}
			{$count = $count + 1}
		{/foreach}
	{/if}
</section>
<!--category jobs-->