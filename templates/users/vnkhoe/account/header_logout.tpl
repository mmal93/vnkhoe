<div class="top-right-section">
	<a href="{BASE_URL}hiring" class="hiring"><span>Nhà tuyển dụng</span></a>
	<button class="top-account-button-toggle">Tài khoản của tôi</button>
	<div class="account-toggle">
		<button class="top-logout-button" title="Đăng xuất" rel="{$_session['member_id']}">Đăng xuất</button>
		<a href="{BASE_URL}account/dashboard.html?id={$smarty.session.member_id}" class="top-account-link account-link-button btn" title="Tài khoản của tôi"><span>{$smarty.session.member_firstname} {$smarty.session.member_lastname}</span></a>
	</div>
</div>