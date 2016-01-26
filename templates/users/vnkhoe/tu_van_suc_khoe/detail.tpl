<!--article healthy detail-->
<section id="detail-healthy-section">
	<div class="rows">
		<div class="col-sm-11 content left">
			<img class="feature-image" src="{$MEDIA_URL}{$_healthy_data[0].tvsk_hinhanh}" title="{$_healthy_data[0].tvsk_tieude}" style="max-width: 100%;" />
			<h1 class="title center" title="{$_healthy_data[0].tvsk_tieude}">{$_healthy_data[0].tvsk_tieude}</h1>
			<form method="post" class="social-like center">
				<div class="heart tvsk-heart{if isset($_healthy_data[0].like_status)&&$_healthy_data[0].like_status=='1'} active{/if}" title="{if isset($_healthy_data[0].like_status)&&$_healthy_data[0].like_status=='1'}Xóa khỏi danh sách bài viết yêu thích{else}Lưu vào bài viết yêu thích{/if}"><i class="fa fa-heart"></i></div>
				<a href="https://www.facebook.com/sharer/sharer.php?u={$CURRENT_URL}" class="social-share-popup" onclick="return false;"><div class="facebook"><i class="fa fa-facebook-f"></i> Chia sẻ facebook</div></a>
				<a class="social-share-popup" href="mailto:?Subject={$_healthy_data[0].tvsk_tieude};body=Xin chào, tôi được biết đến các tư vấn nghề nghiệp qua vnkhoe.com ở địa chỉ {$CURRENT_URL}, tôi thấy bài viết rất hay và ý nghĩa!"><div class="send-mail"><i class="fa fa-envelope-o"></i></div></a>
				<a class="google-share-article" href="https://plus.google.com/share?url={$CURRENT_URL}" onclick="return false;"><div class="google-plus"><i class="fa fa-google-plus"></i></div></a>
			</form>
			<p class="content"><span class="author-name"><a href="{$BASE_URL}athors/id/{$_healthy_data[0].author_id}">{$_healthy_data[0].author_name}</a></span>, {$_healthy_data[0].tvsk_ngaydangtin}<br/>{$_healthy_data[0].tvsk_noidung}</p>
			<h3 class="title">Giới thiệu tác giả</h3>
			<div class="logo col-sm-2">
				<a href="{$BASE_URL}athors/id/{$_healthy_data[0].author_id}"><img src="{$MEDIA_URL}{$_healthy_data[0].author_logo}" title="{$_healthy_data[0].author_name}" style="max-width: 100%;" /></a>
			</div>
			<div class="col-sm-8 author-detail">{$_healthy_data[0].author_description}</div>
		</div>
		<div class="col-sm-1 right">
			<div class="right-social like tvsk-heart{if isset($_healthy_data[0].like_status)&&$_healthy_data[0].like_status=='1'} active{/if}" title="{if isset($_healthy_data[0].like_status)&&$_healthy_data[0].like_status=='1'}Xóa khỏi danh sách bài viết yêu thích{else}Lưu vào bài viết yêu thích{/if}"><i class="fa fa-heart-o"></i></div>
			<a class="social-share-popup" href="https://www.facebook.com/sharer/sharer.php?u={$CURRENT_URL}" onclick="return false;"><div class="right-social facebook"><i class="fa fa-facebook-f"></i></div></a>
			<a class="social-share-popup" href="http://www.linkedin.com/shareArticle?mini=true&url={$CURRENT_URL}&title={$_healthy_data[0].tvsk_tieude}" onclick="return false;"><div class="right-social linkedin"><i class="fa fa-linkedin"></i></div></a>
			<a class="social-share-popup" href="http://twitter.com/intent/tweet?status={$_healthy_data[0].tvsk_tieude}+{$CURRENT_URL}" onclick="return false;"><div class="right-social twitter"><i class="fa fa-twitter"></i></div></a>
			<a class="social-share-popup" href="mailto:?Subject={$_healthy_data[0].tvsk_tieude};body=Xin chào, tôi được biết đến các tư vấn nghề nghiệp qua vnkhoe.com ở địa chỉ {$CURRENT_URL}, tôi thấy bài viết rất hay và ý nghĩa!"><div class="right-social mail"><i class="fa fa-envelope-o"></i></div></a>
		</div>
	</div>
</section>
