<!--search contact-->
<section id="search-section">
	<h2 class="section-title">Tìm kiếm nâng cao</h2>
	<div class="row">
		<form>
			<div class="col-sm-8"><input type="text" value="" Placeholder="Nhập vào công việc" /></div>
			<div class="col-sm-4"><input type="text" value="" Placeholder="Nhập địa điểm" /></div>
			<div class="col-sm-6">
			{if $_form_data|count >0}
				<select name="nganhnghe">
				{foreach from=$_form_data item=item_data}
					<option value="{$item_data.nganhnghe_id}">{$item_data.nganhnghe_tieude}</option>
				{/foreach}
				</select>
			{else}
				<input type="text" value="" Placeholder="Nhập ngành nghề" />
			{/if}
			</div>
			<div class="col-sm-6"><input type="text" value="" Placeholder="Nhập vào số nhân viên" /></div>
			<div class="col-sm-12 center"><button>Tìm kiếm</button></div>
		</form>
	</div>
</section>
<!--search contact-->