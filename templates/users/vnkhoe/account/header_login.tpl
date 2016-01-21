<div class="top-right-section">
	<a href="{BASE_URL}hiring" class="hiring"><span>Nhà tuyển dụng</span></a>
	<button class="top-account-button-toggle">Tài khoản của tôi</button>
	<div class="account-toggle">
		<!--<button class="login-toggle-button" title="Đăng nhập">Đăng nhập</button>-->
		<a href="{BASE_URL}account/login.html{if !isset($repos)}?repos={$CURRENT_URL}{else}?repos={$repos}{/if}" class="top-login-link btn login-button" title="Đăng nhập"><span>Đăng nhập</span></a>
		<a href="{BASE_URL}account/register.html" class="top-register-link" title="Đăng ký"><button><span>Đăng ký</span></button></a>
	</div>
</div>