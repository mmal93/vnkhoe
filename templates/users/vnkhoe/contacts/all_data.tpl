<!-- all contact-->
<section id="contacts-section">
	{assign var=i value=0}
	{assign var=count value=$_all_data|@count}
	{while $i<$count}
		{if (($i)%4)==0}
		<div class="row">
			<div class="col-sm-3">
				<div class="relative">
					<img src="{$MEDIA_URL}images/companies/{$_all_data[$i].congty_id}/{$_all_data[$i].congty_anhvp}" title="{$_all_data[$i].congty_name}" style="max-width: 100%;" />
					<div class="information">
						<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i>{$_all_data[$i].ten_nganh}</div>
						<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i>{$_all_data[$i].congty_size} người</div>
						<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i>{$_all_data[$i].dia_diem}</div>
					</div>
				</div>
				<div class="col-sm-9 col-right">
					<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_all_data[$i].congty_id}">{$_all_data[$i].congty_name}</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; ">{$_all_data[$i].congty_sologan}</p>
				</div>
				<div class="col-sm-3 col-left">
					<img src="{$MEDIA_URL}images/companies/{$_all_data[$i].congty_id}/{$_all_data[$i].congty_logo}" title="{$_all_data[$i].congty_name}" style="max-width: 100%;" />
				</div>
			</div>
		{elseif (($i%4==3)|| $i+1==$count)}
			<div class="col-sm-3">
				<div class="relative">
					<img src="{$MEDIA_URL}images/companies/{$_all_data[$i].congty_id}/{$_all_data[$i].congty_anhvp}" title="{$_all_data[$i].congty_name}" style="max-width: 100%;" />
					<div class="information">
						<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i>{$_all_data[$i].ten_nganh}</div>
						<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i>{$_all_data[$i].congty_size} người</div>
						<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i>{$_all_data[$i].dia_diem}</div>
					</div>
				</div>
				<div class="col-sm-9 col-right">
					<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_all_data[$i].congty_id}">{$_all_data[$i].congty_name}</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; ">{$_all_data[$i].congty_sologan}</p>
				</div>
				<div class="col-sm-3 col-left">
					<img src="{$MEDIA_URL}images/companies/{$_all_data[$i].congty_id}/{$_all_data[$i].congty_logo}" title="{$_all_data[$i].congty_name}" style="max-width: 100%;" />
				</div>
			</div>
		</div>
		{else}
			<div class="col-sm-3">
				<div class="relative">
					<img src="{$MEDIA_URL}images/companies/{$_all_data[$i].congty_id}/{$_all_data[$i].congty_anhvp}" title="{$_all_data[$i].congty_name}" style="max-width: 100%;" />
					<div class="information">
						<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i>{$_all_data[$i].ten_nganh}</div>
						<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i>{$_all_data[$i].congty_size} người</div>
						<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i>{$_all_data[$i].dia_diem}</div>
					</div>
				</div>
				<div class="col-sm-9 col-right">
					<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_all_data[$i].congty_id}">{$_all_data[$i].congty_name}</a></h3>
					<p class="sologan" style="text-overflow: ellipsis; ">{$_all_data[$i].congty_sologan}</p>
				</div>
				<div class="col-sm-3 col-left">
					<img src="{$MEDIA_URL}images/companies/{$_all_data[$i].congty_id}/{$_all_data[$i].congty_logo}" title="{$_all_data[$i].congty_name}" style="max-width: 100%;" />
				</div>
			</div>
		{/if}
		{$i=$i+1}
	{/while}
</section>
<!--all contact-->