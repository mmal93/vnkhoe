<section id="member-work-save" class="row">
	<div class="col-sm-2 member-menu-left left">
		{include file='account\\dashboard\\left_menu.tpl'}
	</div>
	<div class="col-sm-10 right-content">
		{include file='account\\dashboard\\top_banner.tpl'}
		<div class="content">
			<div class="row top">
				<div class="col-sm-6">
					<h3 class="title">Việc làm đã lưu</h3>
					{if isset($_data) && $_data|@count >0}
					<select>
						<option></option>
					</select> bản ghi trong {$_data|@count} bản ghi
					{/if}
				</div>
				<form class="col-sm-6">
					<button class="add-new">Thêm mới</button>
					<a class="back-link btn">Quay lại</a>
					Tìm kiếm <input type="text" value="" placeholder="Từ khóa" required />
				</form>
			</div>
			<div class="bottom">
				{if isset($_data) && $_data|@count > 0}
					<table class="member-job-list">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên việc làm</th>
								<th>Công ty tuyển dụng</th>
								<th>Hạn nộp hồ sơ</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							{foreach from=$_data item=$_item}
								<tr class="item-{$_item.vieclam_id}">
									<td>{$_item.STT}</td>
									<td><a href="{$BASE_URL}jobs/id/{$_item.vieclam_id}" target="_blank">{$_item.vieclam_ten}</a></td>
									<td><a href="{$BASE_URL}contacts/id/{$_item.congty_id}" target="_blank">{$_item.congty_name}</a></td>
									<td>{$_item.vieclam_hannop}</td>
									<td><button name="delete-{$_item.vieclam_id}" value="{$_item.vieclam_id}" class="delete delete-{$_item.vieclam_id}">Xóa</button></td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				{else}
					<div class="no-data">
						<h3>Chưa có bài viết nào trong mục yêu thích <a href="{$BASE_URL}jobs.html">Tìm kiếm bài viết ngay</a></h3>
					</div>
				{/if}
			</div>
		</div>
	</div>
</section>