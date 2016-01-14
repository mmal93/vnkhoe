<!--article job detail-->
<section id="detail-job-article-section">
	<div class="rows">
		<div class="col-sm-11 content">
			<img class="feature-image" src="{$MEDIA_URL}{$_job_data[0].feature_image}" title="{$_job_data[0].name_vi}" style="max-width: 100%;" />
			<h1 class="title center" title="{$_job_data[0].name_vi}">{$_job_data[0].name_vi}</h1>
			<p class="content">{$_job_data[0].content_vi}</p>
			<h3 class="title">Giới thiệu tác giả</h3>
			<div class="logo col-sm-2">
				<img src="{$MEDIA_URL}{$_job_data[0].author_logo}" title="{$_job_data[0].author_name}" style="max-width: 100%;" />
			</div>
			<div class="col-sm-8 author-detail">{$_job_data[0].author_description}</div>
		</div>
		<div class="col-sm-1">
		</div>
	</div>
</section>
