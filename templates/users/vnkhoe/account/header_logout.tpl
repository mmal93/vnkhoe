<div class="top-right-section">
	<form name="tuyendung" id="tuyen-dung-form">
		<input type="search" value="" required />
		<button class="tuyen-dung" title="Tìm kiếm nhà tuyển dụng"><span>Nhà tuyển dụng</span></button>
	</form>
	<button class="top-logout-button" title="Đăng xuất" rel="{$_session['tv_id']}">Đăng xuất</button>
	<a href="{BASE_URL}account/dashboard.html?id={$_session['tv_id']}" class="top-account-link" title="Tài khoản của tôi"><span>{$_session['firstname']} {$_session['lastname']}</span></a>
</div>