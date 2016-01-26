<div class="right_index">
	<form class="update-info" method="post" action="{$BASE_URL}account/dashboard.html">
		<h3 class="title center"> Cập nhật thông tin </h3>
		<ul>
			<li><label>Họ</label><input name="firstname" type="text" value="" placeholder="Nhập họ" title="Nhập họ" required /></li> 
			<li><label>Tên</label><input name="lastname" type="text" value="" placeholder="Nhập tên" title="Nhập vào họ" required /></li>
			<li><label>Email đăng nhập</label><input name="email" type="email" value="" placeholder="Nhập email" title="Email đăng nhập" required /></li>
			<li><label>Số điện thoại</label><input name="tel" type="tel" value="" placeholder="Nhập số điện thoại" title="Nhập số điện thoại" /></li>
			<li><label>Nhập password hiện tại</label><input name="password" type="password" value="" placeholder="Mật khẩu hiện tại" title="Nhập vào mật khẩu hiện tại" required /></li>
			<li><label></label><button name="submit" class="info-update">Cập nhật</button></li>
		</ul>
	</form>
	<form class="update-password" method="post" action="{$BASE_URL}account/dashboard.html">
		<h3 class="title center">Thay đổi mật khẩu </h3>
		<ul>
			<li><label>Nhập mật khẩu mới</label><input name="newpassword" type="password" placeholder="Nhập mật khẩu mới" title="Nhập mật khẩu mới" required /></li>
			<li><label>Nhập lại mật khẩu mới</label><input name="repassword" type="password" placeholder="Nhập lại mật khẩu mới" title="Nhập lại mật khẩu mới" required /></li>
			<li><label>Nhập mật khẩu hiện tại</label><input name="password" type="password" placeholder="Nhập mật khẩu hiện tại" title="Nhập mật khẩu hiện tại" required /></li>
			<li><label></label><button>Cập nhật</button></li>
		</ul>
	</form>
</div>










