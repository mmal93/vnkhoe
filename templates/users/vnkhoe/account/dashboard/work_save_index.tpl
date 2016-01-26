<section id="main-dashboard" class="row">
	<div class="col-sm-2 member-menu-left left">
		{include file='account\\dashboard\\left_menu.tpl'}
	</div>
	<div class="col-sm-10 right-content">
		{include file='account\\dashboard\\top_banner.tpl'}
		<div class="content">
			<div class="row top">
				<div class="col-sm-6">
					<h3 class="title">Việc làm đã lưu</h3>
					<select>
						<option></option>
					</select> bản ghi trong {} bản ghi
				</div>
				<form class="col-sm-6">
					<button class="add-new">Thêm mới</button>
					<a class="back-link btn">Quay lại</a>
					Tìm kiếm <input type="text" value="" placeholder="Từ khóa" required />
				</form>
			</div>
			<div class="bottom">
				<table class="job-list">
					<tr>
						<th>STT</th>
						<th>Tên việc làm</th>
						<th>Công ty tuyển dụng</th>
						<th>Hạn nộp hồ sơ</th>
						<th>Thao tác</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</secton>