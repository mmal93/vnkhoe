<!--hot job-->
<section id="hot-section" class="hot-job">
	<h2 class="section-title">Các đơn vị hot nhất <a href="{$BASE_URL}jobs/search" class="read-more">Xem thêm</a></h2>
	{assign var=i value=0}
	{assign var=count value=$_hot_data|@count}
	{while $i<$count}
		{if (($i)%4)==0}
		<div class="row">
			<div class="col-sm-3">
				<img src="{$MEDIA_URL}images/companies/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="{$BASE_URL}jobs/id/{$_hot_data[$i].vieclam_id}">{$_hot_data[$i].congty_name}</a></h3>
				<div class="bottom row">
					<div class="col-sm-4">{$_hot_data[$i].capbac_name}</div>
					<div class="col-sm-4">{$_hot_data[$i].chucvu_name}</div>
					<div class="col-sm-4">{$_hot_data[$i].diadiem}</div>
				</div>
			</div>
		{elseif (($i%4==3)|| $i+1==$count)}
			<div class="col-sm-3">
				<img src="{$MEDIA_URL}images/companies/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="{$BASE_URL}jobs/id/{$_hot_data[$i].vieclam_id}">{$_hot_data[$i].congty_name}</a></h3>
				<div class="bottom row">
					<div class="col-sm-4">{$_hot_data[$i].capbac_name}</div>
					<div class="col-sm-4">{$_hot_data[$i].chucvu_name}</div>
					<div class="col-sm-4">{$_hot_data[$i].diadiem}</div>
				</div>
			</div>
		</div>
		{else}
			<div class="col-sm-3">
				<img src="{$MEDIA_URL}images/companies/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="{$BASE_URL}jobs/id/{$_hot_data[$i].vieclam_id}">{$_hot_data[$i].congty_name}</a></h3>
				<div class="bottom row">
					<div class="col-sm-4">{$_hot_data[$i].capbac_name}</div>
					<div class="col-sm-4">{$_hot_data[$i].chucvu_name}</div>
					<div class="col-sm-4">{$_hot_data[$i].diadiem}</div>
				</div>
			</div>
		{/if}
		{$i=$i+1}
	{/while}
</section>
<!--hot job-->