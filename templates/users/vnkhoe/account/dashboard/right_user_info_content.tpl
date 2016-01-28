<div class="right-user-info">
{assign var="is_data" value="false"}
{if isset($user_data)}
{$is_data = true}
{/if}
	<form class="update-info" method="post" action="{$BASE_URL}account/user-info.html">
		<h3 class="title center"> Cập nhật thông tin </h3>
		<ul>
			<li><label>Họ</label><input name="firstname" type="text" value="{if $is_data==true}{$user_data[0].member_firstname}{/if}" placeholder="Nhập họ" title="Nhập họ" required /></li> 
			<li><label>Tên</label><input name="lastname" type="text" value="{if $is_data==true}{$user_data[0].member_lastname}{/if}" placeholder="Nhập tên" title="Nhập vào họ" required /></li>
			<li><label>Email đăng nhập</label><input name="email" type="email" value="{if $is_data==true}{$user_data[0].member_email}{/if}" placeholder="Nhập email" title="Email đăng nhập" required /></li>
			<li><label>Giới tính</label><input name="gender" type="checkbox" {if $is_data==true}{if $user_data[0].member_sex=='1'}checked{/if}{/if} title="Chọn giới tính" />Nam</li>
			<li><label>Số điện thoại</label><input name="tel" type="tel" value="{if $is_data==true}{$user_data[0].member_phone}{/if}" placeholder="Nhập số điện thoại" title="Nhập số điện thoại" /></li>
			<li><label>Nghề hiện tại</label><input name="job" type="text" value="{if $is_data==true}{$user_data[0].member_job_name}{/if}" placeholder="Nhập công việc hiện tại" title="Nhập công việc hiện tại" required /></li>
			<li><label>Nhập password hiện tại</label><input name="password" type="password" value="" placeholder="Mật khẩu hiện tại" title="Nhập vào mật khẩu hiện tại" required /></li>
			<li><label></label><button name="info-update" class="info-update" value="update">Cập nhật</button></li>
		</ul>
	</form>
	<form class="update-password" method="post" action="{$BASE_URL}account/dashboard.html">
		<h3 class="title center">Thay đổi mật khẩu </h3>
		<ul>
			<li><label>Nhập mật khẩu mới</label><input name="newpassword" type="password" placeholder="Nhập mật khẩu mới" title="Nhập mật khẩu mới" required /></li>
			<li><label>Nhập lại mật khẩu mới</label><input name="repassword" type="password" placeholder="Nhập lại mật khẩu mới" title="Nhập lại mật khẩu mới" required /></li>
			<li><label>Nhập mật khẩu hiện tại</label><input name="password" type="password" placeholder="Nhập mật khẩu hiện tại" title="Nhập mật khẩu hiện tại" required /></li>
			<li><label></label><button name="password-update" class="password-update" value="update">Cập nhật</button></li>
		</ul>
	</form>
</div>