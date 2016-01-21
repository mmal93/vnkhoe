/*custom.js*/
/*header banner slider*/
jQuery.noConflict();

// jQuery(window).load(function() {
  // jQuery('.header-slider').flexslider({
    // animation: "slide"
  // });
// });

jQuery(document).ready(function(){
    jQuery('.bxslider').bxSlider({
        auto: true,
		autoControls: false,
		mode: 'fade',
		captions: true,
		hideControlOnEnd: true
    });
	
	//top account toggle
	jQuery('.top-right-section .top-account-button-toggle').click(function() {
		if(jQuery(this).hasClass('active')) {
			jQuery('.top-right-section .account-toggle').slideUp('500');
			jQuery(this).removeClass('active');
		} else {
			jQuery('.top-right-section .account-toggle').slideDown('500');
			jQuery(this).addClass('active');
		}
	});
	
	
	//login toggle
	// jQuery('.login-toggle-button').click(function() {
		// if(jQuery('.login-toggle-button').hasClass('active')) {
			// jQuery('.login-toggle-button').removeClass('active');
			// jQuery('.top-login-section').stop().slideUp('slow');
		// } else {
			// jQuery('.login-toggle-button').addClass('active');
			// jQuery('.top-login-section').stop().slideDown('slow');
		// }
	// });
	
	//logout toggle
	jQuery('.top-logout-button').click(function() {
		var elm = '<div id="hllm-body-popup" class="hllm-body-popup"><div>';
		elm = elm + '<div class="hllm-popup-close"><i class="fa fa-times"></i></div>';
		elm = elm + '<div class="popup-overlay"></div>';
		elm = elm + '<div class="hllm-popup-content" id="hllm-popup-content">';
		elm = elm + '<span class="waiting">Đang xử lý...</span>';
		elm = elm + '</div></div></div>';
		jQuery('body').append(elm);
		var data = {
			"action": 'logout'
		};
		data = jQuery.param(data);
		jQuery.ajax({
			type: "POST",
			dataType: "json",
			url: "http://localhost/vnkhoe/controllers/ajax/index.php",
			data: data,
			success: function(data) {
				if(data['success'] == true) {
					jQuery('#hllm-body-popup .hllm-popup-content').html('<span class="success">' + data['message'] + '</span>');
					close = setTimeout(top_login_form_close, 2000);
				} else {
					jQuery('#hllm-body-popup .hllm-popup-content').html('<span class="error">' + data['message'] + '</span>');
				}
			}
		});
		return false;
	});
	
	//submit login form
	// jQuery("#top-login-form").submit(function(){
		// jQuery('#top-login-form .message').slideDown().html('<span class="checking">Đang kiểm tra...</span>');
		// var data = {
			// "action": 'check_login'
		// };
		// data = jQuery(this).serialize() + "&" + jQuery.param(data);
		// jQuery.ajax({
			// type: "POST",
			// dataType: "json",
			// url: "http://localhost/vnkhoe/controllers/ajax/index.php",
			// data: data,
			// success: function(data) {
				// if(data["is_member"] == false) {
					// jQuery('#top-login-form .message').html('<span class="error">Tài khoản <strong>' + data["email"] + '</strong> không tồn tại!</span>');
				// } else {
					// if(data["login"] == false) {
						// jQuery('#top-login-form .message').html('<span class="error">Mật khẩu đăng nhập không đúng!</span>');
					// } else {
						// jQuery('#top-login-form .message').html('<span class="success">Cảm ơn bạn <strong>' + data["firstname"] + ' ' + data['lastname'] + '</strong> đã đến với vnkhoe!</span>');
						// jQuery('.login-toggle-button').html('Đăng xuất');
						
						// jQuery('.login-toggle-button').removeClass('active');
						// jQuery('.top-login-section').stop().delay(1000).slideUp('slow').delay(1000);
						// close = setTimeout(top_login_form_close, 2000);
					// }
				// }
			// }
		// });
		// return false;
	// });
	
	//popup
	
	jQuery('.hllm-popup-close i').click(function() {
		jQuery('#hllm-body-popup').hide();
	});
	
	jQuery('.hllm-popup-close').click(function() {
		jQuery('#hllm-body-popup').hide();
	});
	
	//tuyen-dung click event
	jQuery(document).on('click', '#dang-tuyen-section .top-control .control', function() {
		var id = jQuery(this).attr('id');
		if(id=='dich-vu-goi') {
			if(!jQuery('#tuyen-dung-form').hasClass('active')) {
				jQuery('#tuyen-dung-form').stop().slideDown(500);
				jQuery('#tuyen-dung-form').addClass('active');
			}
		} else {
			if(jQuery('#tuyen-dung-form').hasClass('active')) {
				jQuery('#tuyen-dung-form').stop().slideUp(500);
				jQuery('#tuyen-dung-form').removeClass('active');
			}
		}
		jQuery('#dang-tuyen-section .top-control .control').each(function(index, value) {
			if(jQuery(value).hasClass('active')) {
				jQuery(value).removeClass('active');
			}
		});
		jQuery(this).addClass('active');
	});
});

function top_login_form_close() {
	window.location.reload();
	clearTimeout(close);
}

/*hllm-popup*/

jQuery(document).ready(function() {
	jQuery('#hllm-body-popup').hide();
	//resize()
	hllm_body_popup_resize();
	//show popup
	jQuery(document).on('click', '#show-popup', function() {
		jQuery('#hllm-body-popup').show();
		jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	});
	//close popup
	jQuery('#hllm-body-popup .hllm-close-popup').click(function() {
		jQuery('#hllm-body-popup').hide();
	});
	jQuery('#hllm-body-popup .hllm-close-popup i').click(function() {
		jQuery('#hllm-body-popup').hide();
	});
	jQuery('#hllm-body-popup .popup-overlay').click(function() {
		jQuery('#hllm-body-popup').hide();
	});
	//inner popup click event
	jQuery('#hllm-body-popup #hllm-popup-content').click(function() {
	return false;
	});
});
jQuery(window).resize(function() {
	hllm_body_popup_resize();
});
function hllm_body_popup_resize(){
	var g_w = 616;
	var w_w = jQuery(window).width();
	if(g_w+30<w_w) {
		jQuery('#hllm-body-popup').css('left', (w_w-g_w-15)/2);
		jQuery('#hllm-body-popup').css('right', (w_w-g_w-15)/2);
		jQuery('#hllm-body-popup').css('width', g_w);
	} else {
		jQuery('#hllm-body-popup').css('left', '15px');
		jQuery('#hllm-body-popup').css('right', '15px');
		jQuery('#hllm-body-popup').css('width', 'auto');
	}
	var g_h = jQuery('#hllm-body-popup').height();
	var w_h = jQuery(window).innerHeight();
	if(g_h+200>w_h) {
		jQuery('#hllm-body-popup').css('top', '120px');
	} else {
		jQuery('#hllm-body-popup').css('top', (w_h-g_h)/2);
	}
}

jQuery(document).ready(function(){
	//slider of every top-slider id
	jQuery('#top-slider .inner-slider').bxSlider({
		auto: true,
		pause: 3000,
		minSlides: 3,
		maxSlides: 3,
		slideWidth: 480,
		startSlides: 0,
		moveSlides: 1,
		slideMargin: 0,
		preloadImages: 'all',
	});
	
	//related article section slider
	jQuery('#related-article-section .inner-slider').bxSlider({
		auto: true,
		pause: 3000,
		minSlides: 5,
		maxSlides: 5,
		slideWidth: 480,
		startSlides: 0,
		moveSlides: 1,
		slideMargin: 0,
		preloadImages: 'all',
	});
	
});
/**/
/* Medium and Above screens */
var largeSlider = {
		minSlides: 3,
		maxSlides: 3,
		moveSlides: 2,
		slideWidth: 480,
		preloadImages: 'all',
		pager: false,
		nextSelector: '.right',
		prevSelector: '.left',
		prevText: 'Prev',
		nextText: 'Next'
}
/* Small and below screens */
var smallSlider = {
		minSlides: 1,
		maxSlides: 1,
		moveSlides: 1,
		slideWidth: 480,
		preloadImages: 'all',
		pager: false,
		infiniteLoop: false,
		hideControlOnEnd: true,
		nextSelector: '.right-arrow',
		prevSelector: '.left-arrow',
		prevText: 'Prev',
		nextText: 'Next'
}
jQuery(window).on('orientationchange resize', function(){
	setTimeout(function(){ 
		var screenWidth = jQuery(window).width();
		if(screenWidth >= 600){
			var slideSetup = largeSlider;
		}
		else {
			var slideSetup = smallSlider;
		}
		//reload slider
		productSlider.reloadSlider(slideSetup);

	}, 500);
});
//social share popup in new window
jQuery(document).on('click', '.social-share-popup', function() {
	var w = 480;
	var h = 470;
	var w_w = screen.availWidth;
	var w_h = screen.height;
	if(w_w>w) {
		var new_facebook_win = window.open(jQuery(this).attr('href'), "social-share-popup", "width=480px, height=470px, left="+(w_w-w)/2+"px, top="+(w_h-h)/2+"px");
	} else {
		var new_facebook_win = window.open(jQuery(this).attr('href'), "social-share-popup", "width=480px, height=470px, left=100px top = 80px");
	}
});
