<!--hot contact-->
<section id="hot-section">
	<h2 class="section-title">Các đơn vị hot nhất <a href="{$BASE_URL}contacts/search" class="read-more">Xem thêm</a></h2>
	{assign var=i value=0}
	{assign var=count value=$_hot_data|@count}
	{while $i<$count}
		{if (($i)%4)==0}
		<div class="row">
			<div class="col-sm-3">
				<img src="{$TEMPLATE_URL}images/contacts/companys/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<div class="col-sm-9">
					<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; ">{$_hot_data[$i].congty_sologan}</p>
				</div>
				<div class="col-sm-3">
					<img src="{$TEMPLATE_URL}images/contacts/companys/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_logo}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				</div>
			</div>
		{elseif (($i%4==3)|| $i+1==$count)}
			<div class="col-sm-3">
				<img src="{$TEMPLATE_URL}images/contacts/companys/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<div class="col-sm-9">
					<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; ">{$_hot_data[$i].congty_sologan}</p>
				</div>
				<div class="col-sm-3">
					<img src="{$TEMPLATE_URL}images/contacts/companys/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_logo}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				</div>
			</div>
		</div>
		{else}
			<div class="col-sm-3">
				<img src="{$TEMPLATE_URL}images/contacts/companys/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_anhvp}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				<div class="col-sm-9">
					<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_hot_data[$i].congty_id}">{$_hot_data[$i].congty_name}</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; ">{$_hot_data[$i].congty_sologan}</p>
				</div>
				<div class="col-sm-3">
					<img src="{$TEMPLATE_URL}images/contacts/companys/{$_hot_data[$i].congty_id}/{$_hot_data[$i].congty_logo}" title="{$_hot_data[$i].congty_name}" style="max-width: 100%;" />
				</div>
			</div>
		{/if}
		{$i=$i+1}
	{/while}
</section>
<!--hot contact-->