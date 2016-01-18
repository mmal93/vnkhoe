<!--article healthy detail-->
<section id="detail-healthy-section">
	<div class="rows">
		<div class="col-sm-11 content left">
			<img class="feature-image" src="{$MEDIA_URL}{$_healthy_data[0].tvsk_hinhanh}" title="{$_healthy_data[0].tvsk_tieude}" style="max-width: 100%;" />
			<h1 class="title center" title="{$_healthy_data[0].tvsk_tieude}">{$_healthy_data[0].tvsk_tieude}</h1>
			<form method="post" class="social-like center">
				<div class="heart"><i class="fa fa-heart"></i></div>
				<div class="facebook"><i class="fa fa-facebook-f"></i> Chia sẻ facebook</div>
				<div class="send-mail"><i class="fa fa-envelope-o"></i></div>
				<div class="google-plus"><i class="fa fa-google-plus"></i></div>
			</form>
			<p class="content"><span class="author-name"><a href="#">{$_healthy_data[0].author_name}</a></span>, {$_healthy_data[0].tvsk_ngaydangtin}<br/>{$_healthy_data[0].tvsk_noidung}</p>
			<h3 class="title">Giới thiệu tác giả</h3>
			<div class="logo col-sm-2">
				<img src="{$MEDIA_URL}{$_healthy_data[0].author_logo}" title="{$_healthy_data[0].author_name}" style="max-width: 100%;" />
			</div>
			<div class="col-sm-8 author-detail">{$_healthy_data[0].author_description}</div>
		</div>
		<div class="col-sm-1 right">
			<div class="right-social like"><i class="fa fa-heart-o"></i></div>
			<div class="right-social facebook"><i class="fa fa-facebook-f"></i></div>
			<div class="right-social linkedin"><i class="fa fa-linkedin"></i></div>
			<div class="right-social twitter"><i class="fa fa-twitter"></i></div>
			<div class="right-social mail"><i class="fa fa-envelope-o"></i></div>
		</div>
	</div>
</section>
