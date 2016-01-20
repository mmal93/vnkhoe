<section class="main-login" id="main-login">
	<div class="main-login col-sm-12">
		<div class="section-title">
			<h1>Đăng nhập vnkhoe</h1>
		</div>
		<div class="main-login">
			<form name="login-form" id="login-form" method="post" action="{$BASE_URL}account/login/">
				<ul>
					<li class="message">
						{if isset($error_message) && (!empty($error_message))}
							<ul class="hllm-error-box">
							{foreach from=$error_message item=_error}
								<li class="item"><i class="fa fa-exclamation-circle"></i>{$_error}</li>
							{/foreach}
							</ul>
						{/if}
						{if isset($success_message) && (!empty($success_message))}
							<ul class="hllm-success-box">
							{foreach from=$success_message item=_success}
								<li class="item"><i class="fa fa-check-square-o"></i>{$_success}</li>
							{/foreach}
							</ul>
						{/if}
					</li>
					<li><label for="username">Tên đăng nhập: </label><input name="username" type="text" value="" placeholder="Username" title="Username" required /></li>
					<li><label for="password">Mật khẩu: </label><input name="password" type="password" value="" placeholder="Mật khẩu" title="Mật khẩu" required /></li>
					<li><label for="remember">Nhớ mật khẩu: </label><input name="remember" type="checkbox" value="" title="Mật khẩu" /></li>
					<li><input name="submit" type="submit" value="Đăng nhập" title="Đăng nhập" class="btn login-button" /></li>
				</ul>
			</form>
		</div>
	</div>
</section>
