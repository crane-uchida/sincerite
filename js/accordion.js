// アコーディオン

// 選択した以外の項目も開いた状態になるアコーディオン
/* jQuery(function () {
    $(".accordion_1 dt").on("click", function () {
        $(this).siblings('.accordion_1 dd').stop().slideToggle();
    });
}); */

// 選択した以外の項目は閉じた状態になるアコーディオン
jQuery(function () {
	
    $(".accordion_1 dt").on("click", function () {
        $(this).siblings('.accordion_1 dd').stop().slideToggle();
        $('.accordion_1 dt').not($(this)).siblings('.accordion_1 dd').slideUp();
        $(this).toggleClass('active');
        $('.accordion_1 dt').not($(this)).removeClass('active');
    });


// アコーディオン @求人応募
    $(".recruit_accordion").on("click", function () {
        $(this).children('.contents').toggleClass('active');
		if($(this).children(".down").find('div').attr("class") == 'triangle_open'){
            $(this).children().find('.triangle_open').addClass('triangle_close');
            $(this).children().find('.triangle_open').removeClass('triangle_open');
		}else{
            $(this).children().find('.triangle_close').addClass('triangle_open');
            $(this).children().find('.triangle_close').removeClass('triangle_close');
		}
    });










});

