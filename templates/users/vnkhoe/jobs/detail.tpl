<!--detail contact-->
<section id="detail-section">
	<div class="row top-detail">
		<div class="col-sm-6 col-left relative">
			<img src="{$MEDIA_URL}{$_job_data[0].vieclam_anhvp}" title="{$_job_data[0].congty_name}" style="max-width: 100%;" />
			<div class="title">
				<p>Xem bên trong văn phòng của</p>
				<h3 title="{$_job_data[0].congty_name}">{$_job_data[0].congty_name}</h3>
			</div>
		</div>
		<div class="col-sm-6 col-right">
			<p class="logo center"><img src="{$MEDIA_URL}images/companies/{$_job_data[0].congty_id}/{$_job_data[0].congty_logo}" title="{$_job_data[0].congty_name}"/></p>
			<p class="sologan" style="text-overflow: ellipsis; ">{$_job_data[0].vieclam_gioithieu}</p>
			<form method="post" class="like job-like"><div class="heart{if isset($_job_data[0].like_status)&&$_job_data[0].like_status=='1'} active{/if}" title="{if isset($_job_data[0].like_status)&&$_job_data[0].like_status=='1'}Xóa khỏi danh sách việc làm yêu thích{else}Lưu vào việc làm yêu thích{/if}"><i class="fa fa-heart"></i></div><div class="send-mail"><i class="fa fa-envelope-o"></i>Gửi cho bạn bè</div></form>
		</div>
	</div>
	<div class="row require-info">
		<div class="col-sm-12 top">
			<h1 class="require-name center title">Tuyển {$_job_data[0].chucvu_name}</h1>
			<form method="post" name="apply-work" class="apply-work center">
				<button name="apply">Nộp hồ sơ</button>
			</form>
			<div class="require-content">
				<span class="top-introduce">{$_job_data[0].congty_name} trân trọng thông báo thông tin tuyển dụng một số vị trí chuyên môn tại {$_job_data[0].congty_name} như sau:</span>
				<p>
					<h4 class="title">Yêu cầu</h5>
					{$_job_data[0].vieclam_yeucau}
				</p>
			</div>
		</div>
		<div class="col-sm-12 middle">
			<h4 class="title"><span>Thông tin cơ bản</span></h4>
			<div class="bottom-info"><i class="fa fa-signal"></i>{$_job_data[0].capbac_name}</div>
			<div class="bottom-info"><i class="fa fa-pencil"></i>{$_job_data[0].chucvu_name}</div>
			<div class="bottom-info"><i class="fa fa-map-marker"></i>{$_job_data[0].diadiem}</div>
		</div>
		<form method="post" name="bottom-apply-work" class="apply-work center col-sm-12 bottom">
			<button name="apply">Nộp hồ sơ</button>
		</form>
		
	</div>
</section>
<!--detail contact-->