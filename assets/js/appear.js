// [jQuery] 特定位置にスクロールしたら表示/非表示するギミック
$(function () {
  $(window).on('load scroll resize', function () {
    let nowPosition = $(window).scrollTop();
    let trigger = $(window).height();
    if (nowPosition >= trigger) {
      if (!$('#scrolltarget').hasClass('active')) {
        $('#scrolltarget').addClass('active').fadeIn();
      }
    } else {
      if ($('#scrolltarget').hasClass('active')) {
        $('#scrolltarget').removeClass('active').fadeOut();
      }
    }
  })
})