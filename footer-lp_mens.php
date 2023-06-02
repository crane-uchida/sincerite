<?php
/**
 * The template for displaying the footer
 */
?>





<footer id="lp">

</footer>







<?php wp_footer(); ?>

<!-- ＃リンクのスムーズスクロール -->
<script>
jQuery(function() {
  jQuery('a[href^="#"]').click(function() {
    var speed = 500;
    var href = jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  });
});
</script>


<!-- ＃レスポンシブ時の画像切り替え -->
<script>
jQuery(function() {
  /* <img src>の[_pc]または[_sp]を判定し、ブレイクポイントに応じて画像を切り替える。*/
  jQuery(function() {
    //変数セット
    var $elem = jQuery('.switch');
    var sp = '_sp.';
    var pc = '_pc.';
    var replaceWidth = 415; //ブレイクポイント設定

    function imageSwitch() {
      //ウィンドウサイズ取得
      var windowWidth = parseInt(jQuery(window).width());
      //.switchに適用
      $elem.each(function() {
        var $this = jQuery(this);
        if (windowWidth >= replaceWidth) {
          $this.attr('src', $this.attr('src').replace(sp, pc));
        } else {
          $this.attr('src', $this.attr('src').replace(pc, sp));
        }
      });
    }
    imageSwitch();

    /* ディレイ設定(リサイズの実行タイミングを遅延させる)*/
    var delayStart;
    var delayTime = 200; //ミリSec
    jQuery(window).on('resize', function() {
      clearTimeout(delayStart);
      delayStart = setTimeout(function() {
        imageSwitch();
      }, delayTime);
    });
  });

});
</script>

<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/fixNav.js"></script>

</body>

</html>