<section class="main-login">
	<h1>Đăng nhập</h1>
	<div class="main-login">
		<form name="login-form" id="login-form" method="post" action="{$BASE_URL}login/">
			<ul>
				<li class="message">
					{if isset($_message) && (!empty($_message))}
						{$_message}
					{/if}
				</li>
				<li><label for="username">Tên đăng nhập: </label><input name="username" type="text" value="" placeholder="Username" title="Username" required /></li>
				<li><label for="password">Mật khẩu: </label><input name="password" type="password" value="" placeholder="Mật khẩu" title="Mật khẩu" required /></li>
				<li><label for="remember">Nhớ mật khẩu: </label><input name="remember" type="checkbox" value="" title="Mật khẩu" /></li>
				<li><input name="submit" type="submit" value="Đăng nhập" title="Đăng nhập" /></li>
				
			</ul>
		</form>
	</div>
</section>
