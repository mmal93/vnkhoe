<section id="new-section" class="new-job">
	<h2 class="section-title">Các đơn vị mới nhất <a href="{$BASE_URL}jobs/search" class="read-more">Xem thêm</a></h2>
	{assign var=i value=0}
	{assign var=count value=$_new_data|@count}
	{while $i<$count}
		{if (($i)%4)==0}
		<div class="row">
			<div class="col-sm-3">
				<a href="{$BASE_URL}jobs/id/{$_new_data[$i].vieclam_id}"><img src="{$MEDIA_URL}images/companies/{$_new_data[$i].congty_id}/{$_new_data[$i].congty_anhvp}" title="{$_new_data[$i].congty_name}" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_new_data[$i].congty_id}">{$_new_data[$i].congty_name}</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="{$BASE_URL}jobs/id/{$_new_data[$i].vieclam_id}">{$_new_data[$i].congty_name}</a></h3>
				<div class="bottom row">
					<div class="col-sm-4">{$_new_data[$i].capbac_name}</div>
					<div class="col-sm-4">{$_new_data[$i].chucvu_name}</div>
					<div class="col-sm-4">{$_new_data[$i].diadiem}</div>
				</div>
			</div>
		{elseif (($i%4==3)|| $i+1==$count)}
			<div class="col-sm-3">
				<a href="{$BASE_URL}jobs/id/{$_new_data[$i].vieclam_id}"><img src="{$MEDIA_URL}images/companies/{$_new_data[$i].congty_id}/{$_new_data[$i].congty_anhvp}" title="{$_new_data[$i].congty_name}" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_new_data[$i].congty_id}">{$_new_data[$i].congty_name}</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="{$BASE_URL}jobs/id/{$_new_data[$i].vieclam_id}">{$_new_data[$i].congty_name}</a></h3>
				<div class="bottom row">
					<div class="col-sm-4">{$_new_data[$i].capbac_name}</div>
					<div class="col-sm-4">{$_new_data[$i].chucvu_name}</div>
					<div class="col-sm-4">{$_new_data[$i].diadiem}</div>
				</div>
			</div>
		</div>
		{else}
			<div class="col-sm-3">
				<a href="{$BASE_URL}jobs/id/{$_new_data[$i].vieclam_id}"><img src="{$MEDIA_URL}images/companies/{$_new_data[$i].congty_id}/{$_new_data[$i].congty_anhvp}" title="{$_new_data[$i].congty_name}" style="max-width: 100%;" /></a>
				<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_new_data[$i].congty_id}">{$_new_data[$i].congty_name}</a></h3>
				<h3 class="job-type" style="text-overflow: ellipsis; "><a href="{$BASE_URL}jobs/id/{$_new_data[$i].vieclam_id}">{$_new_data[$i].congty_name}</a></h3>
				<div class="bottom row">
					<div class="col-sm-4">{$_new_data[$i].capbac_name}</div>
					<div class="col-sm-4">{$_new_data[$i].chucvu_name}</div>
					<div class="col-sm-4">{$_new_data[$i].diadiem}</div>
				</div>
			</div>
		{/if}
		{$i=$i+1}
	{/while}
</section>