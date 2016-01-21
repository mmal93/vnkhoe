<section class="main-register row" id="main-register">
	<div class="main-register col-sm-12">
		<div class="section-title">
			<h1>Đăng ký tài khoản vnkhoe</h1>
		</div>
		<form name="register-form" id="register-form" method="post" action="{$BASE_URL}account/register/">
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
				<li><label for="username">Tên đăng nhập: </label><input name="username" type="email" value="{$_username}" placeholder="Email" title="Nhập địa chỉ email" required validated /><label class="required">(*)</label></li>
				<li><label for="password">Mật khẩu: </label><input name="password" type="password" value="{$_password}" placeholder="Mật khẩu" title="Nhập mật khẩu" required validated /><label class="required">(*)</label></li>
				<li><label for="repassword">Nhập lại mật khẩu: </label><input name="repassword" type="password" value="" placeholder="Nhập lại mật khẩu" title="Nhập lại mật khẩu" required validated/><label class="required">(*)</label></li>
				<li><label for="firstname">Họ và tên đệm: </label><input name="firstname" type="text" value="{$_firstname}" placeholder="Họ" title="Nhập vào họ và tên đệm" required validated/><label class="required">(*)</label></li>
				<li><label for="lastname">Tên: </label><input name="lastname" type="text" value="{$_lastname}" placeholder="Tên" title="Nhập vào tên" required validated/><label class="required">(*)</label></li>
				<li><label for="tel">Số điện thoại: </label><input name="tel" type="tel" value="{$_tel}" title="Số điện thoại" validated/></li>
				<li><label for="job">Công việc: </label><input name="job" type="text" value="{$_job}" placeholder="Công việc" title="Nhập công việc hiện tại của bạn" required validated/><label class="required">(*)</label></li>
				<li><label for="gender">giới tính: </label><input name="gender" type="checkbox" value="" {if isset($_gender)}checked{/if} title="Nam" /> <label>Nam</label></li>
				<li><label></label><label class="required">(*)</label>: <span>Những trường bắt buộc</span></li>
				<li><input name="submit" type="submit" value="Đăng ký" title="Đăng ký" /> hoặc <a href="{$BASE_URL}account/login.html" class="login-button btn">Đăng nhập</a> nếu bạn đã có tài khoản tại vnkhoe</li>
			</ul>
		</form>
	</div>
</section>