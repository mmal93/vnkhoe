<div class="top-login-section" style="display: none;">
	<form id="top-login-form" action="http://localhost/vnkhoe/controllers/ajax/index.php" method="post">
		<ul class="login-list">
			<li>
				<div class="message" style="display:none"></div>
			</li>
			<li>
				<input class="top-login-email" name="email" placeholder="Email" type="email" required validated />
			</li>
			<li>
				<input class="top-login-password" name="password" placeholder="Mật khẩu" type="password" value="" />
			</li>
			<li>
				<input id="top-login-remember" name="remember" type="checkbox" /> <label for="remember" class="top-login-remember" title="Nhớ mật khẩu">Nhớ mật khẩu</label>
			</li>
			<li>
				<button name="btn-login" class="top-login-button" title="Đăng nhập thành viên">Đăng nhập</button>
			</li>
			<li>
				<a href="{BASE_URL}remember" class="forgot-password" title="Khôi phục mật khẩu thành viên">Quên mật khẩu?</a>
			</li>
		</ul>
	</form>
</div>