<?php
/* Smarty version 3.1.29, created on 2016-01-29 01:44:59
  from "E:\Xampp\Xam5_6_12\htdocs\vnkhoe\templates\users\vnkhoe\tu_van_suc_khoe\detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56aab60bede216_95479242',
  'file_dependency' => 
  array (
    '1827dc158dd8657c0d8881bed9804ed088906ffe' => 
    array (
      0 => 'E:\\Xampp\\Xam5_6_12\\htdocs\\vnkhoe\\templates\\users\\vnkhoe\\tu_van_suc_khoe\\detail.tpl',
      1 => 1453808865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56aab60bede216_95479242 ($_smarty_tpl) {
?>
<!--article healthy detail-->
<section id="detail-healthy-section">
	<div class="rows">
		<div class="col-sm-11 content left">
			<img class="feature-image" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_hinhanh'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_tieude'];?>
" style="max-width: 100%;" />
			<h1 class="title center" title="<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_tieude'];?>
"><?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_tieude'];?>
</h1>
			<form method="post" class="social-like center">
				<div class="heart tvsk-heart<?php if (isset($_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status']) && $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status'] == '1') {?> active<?php }?>" title="<?php if (isset($_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status']) && $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status'] == '1') {?>Xóa khỏi danh sách bài viết yêu thích<?php } else { ?>Lưu vào bài viết yêu thích<?php }?>"><i class="fa fa-heart"></i></div>
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
" class="social-share-popup" onclick="return false;"><div class="facebook"><i class="fa fa-facebook-f"></i> Chia sẻ facebook</div></a>
				<a class="social-share-popup" href="mailto:?Subject=<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_tieude'];?>
;body=Xin chào, tôi được biết đến các tư vấn nghề nghiệp qua vnkhoe.com ở địa chỉ <?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
, tôi thấy bài viết rất hay và ý nghĩa!"><div class="send-mail"><i class="fa fa-envelope-o"></i></div></a>
				<a class="google-share-article" href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
" onclick="return false;"><div class="google-plus"><i class="fa fa-google-plus"></i></div></a>
			</form>
			<p class="content"><span class="author-name"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
athors/id/<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['author_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['author_name'];?>
</a></span>, <?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_ngaydangtin'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_noidung'];?>
</p>
			<h3 class="title">Giới thiệu tác giả</h3>
			<div class="logo col-sm-2">
				<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
athors/id/<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['author_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MEDIA_URL']->value;
echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['author_logo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['author_name'];?>
" style="max-width: 100%;" /></a>
			</div>
			<div class="col-sm-8 author-detail"><?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['author_description'];?>
</div>
		</div>
		<div class="col-sm-1 right">
			<div class="right-social like tvsk-heart<?php if (isset($_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status']) && $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status'] == '1') {?> active<?php }?>" title="<?php if (isset($_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status']) && $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['like_status'] == '1') {?>Xóa khỏi danh sách bài viết yêu thích<?php } else { ?>Lưu vào bài viết yêu thích<?php }?>"><i class="fa fa-heart-o"></i></div>
			<a class="social-share-popup" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
" onclick="return false;"><div class="right-social facebook"><i class="fa fa-facebook-f"></i></div></a>
			<a class="social-share-popup" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_tieude'];?>
" onclick="return false;"><div class="right-social linkedin"><i class="fa fa-linkedin"></i></div></a>
			<a class="social-share-popup" href="http://twitter.com/intent/tweet?status=<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_tieude'];?>
+<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
" onclick="return false;"><div class="right-social twitter"><i class="fa fa-twitter"></i></div></a>
			<a class="social-share-popup" href="mailto:?Subject=<?php echo $_smarty_tpl->tpl_vars['_healthy_data']->value[0]['tvsk_tieude'];?>
;body=Xin chào, tôi được biết đến các tư vấn nghề nghiệp qua vnkhoe.com ở địa chỉ <?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
, tôi thấy bài viết rất hay và ý nghĩa!"><div class="right-social mail"><i class="fa fa-envelope-o"></i></div></a>
		</div>
	</div>
</section>
<?php }
}
