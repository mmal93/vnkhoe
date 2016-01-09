<!--search contact-->
<section id="search-section">
	<h2 class="section-title">Tìm kiếm nâng cao</h2>
	<div class="row">
		<form method="post">
			<div class="col-sm-8"><input name="job" type="text" value="" Placeholder="Nhập vào công việc" /></div>
			<div class="col-sm-4"><input name="place" type="text" value="" Placeholder="Nhập địa điểm" /></div>
			<div class="col-sm-6">
			{if $_form_data|count >0}
				<select name="type">
				{foreach from=$_form_data item=item_data}
					<option value="{$item_data.nganhnghe_id}">{$item_data.nganhnghe_tieude}</option>
				{/foreach}
				</select>
			{else}
				<input name="type" type="text" value="" Placeholder="Nhập ngành nghề" />
			{/if}
			</div>
			<div class="col-sm-6"><input name="count" type="number" value="" Placeholder="Nhập vào số nhân viên" validated /></div>
			<div class="col-sm-12 center"><button name="submit" type="submit" value="submit">Tìm kiếm</button></div>
		</form>
	</div>
</section>
<!--search contact-->