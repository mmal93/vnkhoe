<section id="new-job-article-section">
	<h2 class="section-title">Mới nhất <a href="{$BASE_URL}tu_van_nghe_nghiep/search" class="read-more">Xem thêm</a></h2>
	{assign var=i value=0}
	{assign var=count value=$_new_data|@count}
	{while $i<$count}
		{if (($i)%3)==0}
		<div class="row">
			<div class="col-sm-4">
				<img src="{$MEDIA_URL}images/articles/{$_new_data[$i].feature_image}" title="{$_new_data[$i].name_vi}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}tu_van_nghe_nghiep/id/{$_new_data[$i].id}">{$_new_data[$i].name_vi}</a></h3>
				<div class="col-sm-6"><a href="{$BASE_URL}detail/{$_new_data[$i].id}">Xem chi tiết</a></div>
				<div class="col-sm-6 author">Bởi <a href="{$BASE_URL}author/{{$_new_data[$i].author_id}}">{$_new_data[$i].author_name}</a></div>
			</div>
		{elseif (($i%3==2)|| $i+1==$count)}
			<div class="col-sm-4">
				<img src="{$MEDIA_URL}images/articles/{$_new_data[$i].feature_image}" title="{$_new_data[$i].name_vi}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}tu_van_nghe_nghiep/id/{$_new_data[$i].id}">{$_new_data[$i].name_vi}</a></h3>
				<div class="col-sm-6"><a href="{$BASE_URL}detail/{$_new_data[$i].id}">Xem chi tiết</a></div>
				<div class="col-sm-6 author">Bởi <a href="{$BASE_URL}author/{{$_new_data[$i].author_id}}">{$_new_data[$i].author_name}</a></div>
			</div>
		</div>
		{else}
			<div class="col-sm-4">
				<img src="{$MEDIA_URL}images/articles/{$_new_data[$i].feature_image}" title="{$_new_data[$i].name_vi}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}tu_van_nghe_nghiep/id/{$_new_data[$i].id}">{$_new_data[$i].name_vi}</a></h3>
				<div class="col-sm-6"><a href="{$BASE_URL}detail/{$_new_data[$i].id}">Xem chi tiết</a></div>
				<div class="col-sm-6 author">Bởi <a href="{$BASE_URL}author/{{$_new_data[$i].author_id}}">{$_new_data[$i].author_name}</a></div>
			</div>
		{/if}
		{$i=$i+1}
	{/while}
</section>
