$(function() {

//サイドバーのブロック要素のマウスイベント
  jQuery('.contents_block').mouseover(function(e) {
	jQuery(this).addClass("m-e01");
    })
  jQuery('.contents_block').mouseout(function(e) {
	jQuery(this).removeClass("m-e01");
    })

//サイドバーのブロック要素全体をリンクにする
    jQuery(".contents_block").click(function(){
         window.location=$(this).find("a").attr("href");
         return false;
    });




/*===========================================================
レスポンシブ時の画像切り替え
=============================================================*/
// <img src>の[_pc]または[_sp]を判定し、ブレイクポイントに応じて画像を切り替える。
jQuery(function () {
	//変数セット
	var $elem = jQuery('.switch');
	var sp = '_sp.';
	var pc = '_pc.';
	var replaceWidth = 767; //ブレイクポイント設定

	function imageSwitch() {
		//ウィンドウサイズ取得
		var windowWidth = parseInt(jQuery(window).width());
		//.switchに適用
		$elem.each(function () {
			var $this = jQuery(this);
			if (windowWidth >= replaceWidth) {
				$this.attr('src', $this.attr('src').replace(sp, pc));
			} else {
				$this.attr('src', $this.attr('src').replace(pc, sp));
			}
		});
	}
	imageSwitch();

	//ディレイ設定(リサイズの実行タイミングを遅延させる)
	var delayStart;
	var delayTime = 200; //ミリSec
	jQuery(window).on('resize', function () {
		clearTimeout(delayStart);
		delayStart = setTimeout(function () {
			imageSwitch();
		}, delayTime);
	});
});



/*===========================================================
アコーディオン @お客様の声
=============================================================*/
jQuery(function($){
  $(".accordionBtn").on("click", function() {
    $(this).next().slideToggle();
    $(this).toggleClass("active");
  });
});





/*===========================================================
スムーズスクロール @求人応募
=============================================================*/
jQuery('.recruit_scroll').click(function () {
	var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
	if (navigator.userAgent.match(/iPhone|Android.+Mobile/)) {
		var adjust = 100;
	  } else {
		var adjust = 150;
	  }
	var pos = $(elmHash).offset().top - adjust;  //idの上部の距離を取得
	console.log(pos);
	$('body,html').animate({scrollTop: pos}, 1000); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
	return false;
  });






});
