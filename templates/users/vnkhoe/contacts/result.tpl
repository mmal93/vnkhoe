<section id="search-result">
	{if (isset($_search_data)&&(!empty($_search_data)))}
		<h2 class="section-title">Kết quả tìm kiếm:</h2>
		{assign var=i value=0}
		{assign var=count value=$_search_data|@count}
		{while $i<$count}
			{if (($i)%4)==0}
			<div class="row">
				<div class="col-sm-3">
					<div class="relative">
						<img src="{$MEDIA_URL}images/companies/{$_search_data[$i].congty_id}/{$_search_data[$i].congty_anhvp}" title="{$_search_data[$i].congty_name}" style="max-width: 100%;" />
						<div class="information">
							<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i>{$_search_data[$i].ten_nganh}</div>
							<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i>{$_search_data[$i].congty_size} người</div>
							<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i>{$_search_data[$i].dia_diem}</div>
						</div>
					</div>
					<div class="col-sm-9 col-right">
						<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_search_data[$i].congty_id}">{$_search_data[$i].congty_name}</a></h3>
						<p class="sologan" style="text-overflow: ellipsis; ">{$_search_data[$i].congty_sologan}</p>
					</div>
					<div class="col-sm-3 col-left">
						<img src="{$MEDIA_URL}images/companies/{$_search_data[$i].congty_id}/{$_search_data[$i].congty_logo}" title="{$_search_data[$i].congty_name}" style="max-width: 100%;" />
					</div>
				</div>
			{elseif (($i%4==3)|| $i+1==$count)}
				<div class="col-sm-3">
					<div class="relative">
						<img src="{$MEDIA_URL}images/companies/{$_search_data[$i].congty_id}/{$_search_data[$i].congty_anhvp}" title="{$_search_data[$i].congty_name}" style="max-width: 100%;" />
						<div class="information">
							<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i>{$_search_data[$i].ten_nganh}</div>
							<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i>{$_search_data[$i].congty_size} người</div>
							<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i>{$_search_data[$i].dia_diem}</div>
						</div>
					</div>
					<div class="col-sm-9 col-right">
						<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_search_data[$i].congty_id}">{$_search_data[$i].congty_name}</a></h3>
						<p class="sologan" style="text-overflow: ellipsis; ">{$_search_data[$i].congty_sologan}</p>
					</div>
					<div class="col-sm-3 col-left">
						<img src="{$MEDIA_URL}images/companies/{$_search_data[$i].congty_id}/{$_search_data[$i].congty_logo}" title="{$_search_data[$i].congty_name}" style="max-width: 100%;" />
					</div>
				</div>
			</div>
			{else}
				<div class="col-sm-3">
					<div class="relative">
						<img src="{$MEDIA_URL}images/companies/{$_search_data[$i].congty_id}/{$_search_data[$i].congty_anhvp}" title="{$_search_data[$i].congty_name}" style="max-width: 100%;" />
						<div class="information">
							<div class="col-sm-4 company-type"><i class="glyphicon glyphicon-home"></i>{$_search_data[$i].ten_nganh}</div>
							<div class="col-sm-4 company-count"><i class="glyphicon glyphicon-user"></i>{$_search_data[$i].congty_size} người</div>
							<div class="col-sm-4 company-location"><i class="glyphicon glyphicon-map-marker"></i>{$_search_data[$i].dia_diem}</div>
						</div>
					</div>
					<div class="col-sm-9 col-right">
						<h3 class="title"><a href="{$BASE_URL}contacts/id/{$_search_data[$i].congty_id}">{$_search_data[$i].congty_name}</a></h3>
						<p class="sologan" style="text-overflow: ellipsis; ">{$_search_data[$i].congty_sologan}</p>
					</div>
					<div class="col-sm-3 col-left">
						<img src="{$MEDIA_URL}images/companies/{$_search_data[$i].congty_id}/{$_search_data[$i].congty_logo}" title="{$_search_data[$i].congty_name}" style="max-width: 100%;" />
					</div>
				</div>
			{/if}
			{$i=$i+1}
		{/while}
	{else}
	<h2 class="title no-data">Xin lỗi, chúng tôi không tìm thấy kết quả nào như bạn đã yêu cầu!</h2>
	{/if}
</section>