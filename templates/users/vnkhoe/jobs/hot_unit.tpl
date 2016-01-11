<!--hot contact-->
<section id="hot-section">
	<h2 class="section-title">Các đơn vị hot nhất <a href="{$BASE_URL}contacts/search" class="read-more">Xem thêm</a></h2>
	{assign var=i value=0}
	{assign var=count value=$_hot_data|@count}
	{while $i<$count}
		{if (($i)%4)==0}
		<div class="row">
			<div class="col-sm-3">
				<img src="{$MEDIA_URL}images/companies/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
				<h3 class="job_type" style="text-overflow: ellipsis; ">{$_hot_data[$i].name_vi}</h3>
				<div class="col-sm-4">{$_hot_data[$i].capbac}</div>
				<div class="col-sm-4">{$_hot_data[$i].chucvu}</div>
				<div class="col-sm-4">{$_hot_data[$i].diadiem}</div>
			</div>
		{elseif (($i%4==3)|| $i+1==$count)}
			<div class="col-sm-3">
				<img src="{$MEDIA_URL}images/companies/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
				<h3 class="job_type" style="text-overflow: ellipsis; ">{$_hot_data[$i].name_vi}</h3>
				<div class="col-sm-4">{$_hot_data[$i].capbac}</div>
				<div class="col-sm-4">{$_hot_data[$i].chucvu}</div>
				<div class="col-sm-4">{$_hot_data[$i].diadiem}</div>
			</div>
		</div>
		{else}
			<div class="col-sm-3">
				<img src="{$MEDIA_URL}images/companies/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
				<h3 class="job_type" style="text-overflow: ellipsis; ">{$_hot_data[$i].name_vi}</h3>
				<div class="col-sm-4">{$_hot_data[$i].capbac}</div>
				<div class="col-sm-4">{$_hot_data[$i].chucvu}</div>
				<div class="col-sm-4">{$_hot_data[$i].diadiem}</div>
			</div>
		{/if}
		{$i=$i+1}
	{/while}
</section>
<!--hot contact-->