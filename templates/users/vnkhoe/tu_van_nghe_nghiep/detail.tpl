<!--article job detail-->
<section id="detail-job-article-section">
	<div class="rows">
		<div class="col-sm-11 content left">
			<img class="feature-image" src="{$MEDIA_URL}{$_job_data[0].feature_image}" title="{$_job_data[0].name_vi}" style="max-width: 100%;" />
			<h1 class="title center" title="{$_job_data[0].name_vi}">{$_job_data[0].name_vi}</h1>
			<form method="post" class="social-like center">
				<div class="heart"><i class="fa fa-heart"></i></div>
				<div class="facebook"><i class="fa fa-facebook-f"></i> Chia sẻ facebook</div>
				<div class="send-mail"><i class="fa fa-envelope-o"></i></div>
				<div class="google-plus"><i class="fa fa-google-plus"></i></div>
			</form>
			<p class="content"><span class="author-name"><a href="#">{$_job_data[0].author_name}</a></span>, {$_job_data[0].created}<br/>{$_job_data[0].content_vi}</p>
			<h3 class="title">Giới thiệu tác giả</h3>
			<div class="logo col-sm-2">
				<img src="{$MEDIA_URL}{$_job_data[0].author_logo}" title="{$_job_data[0].author_name}" style="max-width: 100%;" />
			</div>
			<div class="col-sm-8 author-detail">{$_job_data[0].author_description}</div>
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
