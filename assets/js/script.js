


 /* scroll
 *********************************************/

 $(window).bind('scroll', scrollListener);
 $(window).bind('resize', scrollListener);

 // グローバルメニューをスクロール後、fixed
 var fixElm = $("#header");
 var ScrollTop = 100;

 function scrollListener() {
     // PCの時だけスクロールイベントを実行

         if ($(window).scrollTop() >= ScrollTop
             && $(window).scrollTop() > fixElm.offset().top - ScrollTop) {
             fixElm.addClass("fixed");
         } else {
             fixElm.removeClass("fixed");
         }
 }
 /* TO TOP
 *********************************************/
$(function () {
  $('a[href*="#"]').click(function () {
    const speed = 400;
    const target = $(this.hash === '#' || '' ? 'html' : this.hash)
    if (!target.length) return;
    const targetPos = target.offset().top;
    $('html, body').animate({ scrollTop: targetPos }, speed, 'swing');
    return false;
  });
});
 /* ハンバーガーメニューページ内スクロールで閉じる
 *********************************************/


jQuery(function($){
    $('#navi a').on('click',function(){
        $('body').removeClass('nav_open');

    });
});

///* TOP スライダー
//*********************************************/
//Slider1
var slider1 = new Swiper ('.slider-content01', {
		loop: false,
 autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
 effect: 'fade',
  //speed: 600,
    slidesPerView: 1,
		spaceBetween:0,
		centeredSlides : true,
  	pagination: { 
    	el: '.swiper-pagination', //ページネーションの要素
    	type: 'bullets', //ページネーションの種類
    	clickable: true, //クリックに反応させる
  	},
  	//navigation: { 
    	//nextEl: '.swiper-button-next01', //「次へボタン」要素の指定
    	//prevEl: '.swiper-button-prev01', //「前へボタン」要素の指定
  	//},
		breakpoints: {
        768: {
            slidesPerView: 1,// PCでは3枚を中央に、.5で見切れ具合を調整
            spaceBetween:0,
        }
    },
});

///* コラム スライダー
//*********************************************/
//Slider1
var slider1 = new Swiper ('.slider-content-column', {
 effect: 'fade', // フェードのエフェクト
		loop: true,
		loopAdditionalSlides: 2,
    slidesPerView: 1,
		spaceBetween:50,
		autoplay: {
    	delay: 4000,
		},
		//centeredSlides : true,
  	pagination: { 
    	el: '.swiper-pagination', //ページネーションの要素
    	type: 'bullets', //ページネーションの種類
    	clickable: true, //クリックに反応させる
  	},
  	navigation: { 
    	nextEl: '.swiper-button-next01', //「次へボタン」要素の指定
    	prevEl: '.swiper-button-prev01', //「前へボタン」要素の指定
  	},
		breakpoints: {
        768: {
            slidesPerView: 1,// PCでは3枚を中央に、.5で見切れ具合を調整
            spaceBetween:0,
        }
    },
});
//side ranking
$(window).on('load resize',function() {
if ($(window).width() <1024) {
var slider2 = new Swiper ('.column-slide', {
 effect: 'fade', // フェードのエフェクト
		loop: true,
    slidesPerView: 1,
		spaceBetween:50,
		//centeredSlides : true,
  	pagination: { 
    	el: '.swiper-pagination', //ページネーションの要素
    	type: 'bullets', //ページネーションの種類
    	clickable: true, //クリックに反応させる
  	},
  	navigation: { 
    	nextEl: '.swiper-button-next02', //「次へボタン」要素の指定
    	prevEl: '.swiper-button-prev02', //「前へボタン」要素の指定
  	},

});
}						 
});

//メール注意書き
	jQuery('input[type="email"]').focus(function() {
		jQuery('.email-notice').css('display', 'block');
	});

//男女判別
	jQuery(function () {
		jQuery('.wpcf7 .gender .first input').attr('id', 'male');
		jQuery('.wpcf7 .gender .last input').attr('id', 'female');
	});
//諤ｧ蛻･縺ｮ逕ｷ諤ｧ繝ｻ螂ｳ諤ｧ繧ｯ繝ｪ繝�け縺吶ｋ縺ｨ縲√◎繧後◇繧梧ｳｨ諢丈ｺ矩��ｒ陦ｨ遉ｺ縺輔○繧九�
	jQuery('input#sex-1[type="radio"]').change(function() {
		 jQuery('.man-notice').toggle(true);
		 jQuery('.woman-notice').toggle(false);
	});
	jQuery('input#sex-2[type="radio"]').change(function() {
		 jQuery('.woman-notice').toggle(true);
		 jQuery('.man-notice').toggle(false);
	});
	//縲舌Μ繝九Η繝ｼ繧｢繝ｫ縲第ｧ蛻･縺ｮ逕ｷ諤ｧ繝ｻ螂ｳ諤ｧ繧ｯ繝ｪ繝�け縺吶ｋ縺ｨ縲√◎繧後◇繧梧ｳｨ諢丈ｺ矩��ｒ陦ｨ遉ｺ縺輔○繧九�
	jQuery(function(){
		jQuery('input#male[type="radio"]').change(function() {
			jQuery('.man_notice').toggle(true);
			jQuery('.woman_notice').toggle(false);
		});
		jQuery('input#female[type="radio"]').change(function() {
			jQuery('.woman_notice').toggle(true);
			jQuery('.man_notice').toggle(false);
		});
	});
	//諤ｧ蛻･縺ｮ逕ｷ諤ｧ繝ｻ螂ｳ諤ｧ繧ｯ繝ｪ繝�け縺吶ｋ縺ｨ縲√◎繧後◇繧梧ｳｨ諢丈ｺ矩��ｒ陦ｨ遉ｺ縺輔○繧九�
	jQuery('[name="your-sex"]:radio').change( function() {
		if(jQuery('[id=sex-1]').prop('checked')){
			jQuery('.woman-notice').toggle(false);
			jQuery('.man-notice').toggle(true);
		} else if (jQuery('[id=sex-2]').prop('checked')) {
			jQuery('.man-notice').toggle(false);
			jQuery('.woman-notice').toggle(true);
		}
	});

// 住所自動検索
	jQuery(function($){
		if(jQuery('input[name="txt_number"]').length) { //迚ｹ螳壹�隕∫ｴ�(input[name="txt_number"])縺悟ｭ伜惠縺吶ｋ縺九←縺�°繧貞愛蛻･
			$.getScript("https://ajaxzip3.github.io/ajaxzip3.js");
			$('.btn_address').click(function() {
				AjaxZip3.zip2addr('txt_number', '', 'txt_prefectures', 'txt_address');
			});
		}
	});

