<?php
/**
 * The template for displaying the footer
 */
?>





<footer>
	<div id="f1-wrap">
		<div class="layoutFrame">
			<div class="info-wrap">
				<div class="logo-box"><figure><a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/logo.png" alt="サンセリテ青山"></a></figure></div>
				<div class="catch-box"><p>高収入・高ステータス男性との結婚なら<br><span>東京・表参道の結婚相談所 サンセリテ青山</span></p></div>
				<div class="tel-box">
					<div class="inner">
						<p>お電話でもお申し込みいただけます</p>
						<dl>
							<dt><a href="tel:0354682181">03-5468-2181</a></dt>
							<dd>お電話受付時間 10:00 - 19:00〈水曜定休〉</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="f2-wrap">
		<div class="layoutFrame">
			<div class="privacy-wrap">
<?php /* プライバシーマーク削除
				<div class="img-box">
					<figure><a href="http://privacymark.jp/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/sp/sp_pmark.png" alt="プライバシーマーク"></a></figure>
				</div>
 */ ?>
				<div class="txt-box">
					<dl>
						<dt>個人情報の取扱いについて</dt>
						<dd>株式会社ランスクリエイトは、結婚相談所事業およびそれに付帯する事業などの業務を行う上でお客様、並びに従業者の重要な個人情報を保護することを重大な社会的責任であると認識しております。将来に亘って、この大切な個人情報を適正、安全に取り扱うために従業者のすべてが遵守すべき行動基準として本個人情報保護方針を定め、その遵守の徹底を図って参ります。</dd>
					</dl>
					<ul>
						<li><a href="<?php echo get_template_directory_uri() ?>/sincerite_hogohousin.pdf" target="_blank">サンセリテ青山 個人情報保護方針</a></li>
						<li><a href="<?php echo get_template_directory_uri() ?>/sincerite_privacy.pdf" target="_blank">サンセリテ青山 プライバシーポリシー</a></li>
					</ul>
				</div>
			</div>
			<p class="copyright"><small>&copy; Sincerite Aoyama. All rights Reserved.</small></p>
		</div>
	</div>


</footer>



</div><!-- /FirstMatchingWrapper -->



<?php wp_footer(); ?>

<!-- ＃リンクのスムーズスクロール -->
<script>
jQuery(function(){
  jQuery('a[href^="#"]').click(function(){
    var speed = 500;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
</script>


<!-- ＃レスポンシブ時の画像切り替え -->
<script>
jQuery(function(){
/* <img src>の[_pc]または[_sp]を判定し、ブレイクポイントに応じて画像を切り替える。*/
jQuery(function () {
	//変数セット
	var $elem = jQuery('.switch');
	var sp = '_sp.';
	var pc = '_pc.';
	var replaceWidth = 415; //ブレイクポイント設定

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
	
/* ディレイ設定(リサイズの実行タイミングを遅延させる)*/
	var delayStart;
	var delayTime = 200; //ミリSec
	jQuery(window).on('resize', function () {
		clearTimeout(delayStart);
		delayStart = setTimeout(function () {
			imageSwitch();
		}, delayTime);
	});
});
	
});
</script>	


<!-- フォームで使っているスクリプト -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js"></script>

<!-- 「フリガナ」を自動で入力する -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.autoKana.js"></script>
<script>
jQuery(function() {
    jQuery.fn.autoKana('#name', '#name_kana', {
        katakana : true
    });
});
</script>

<!-- 郵便番号から住所の自動入力 -->
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function( $ ) {
    jQuery( 'input[name="your-zip"]' ).keyup( function( e ) {
        AjaxZip3.zip2addr('your-zip','','your-address1','your-address2');
    } )
} );
</script>


<?php /* yahoo!ユニバーサルタグ(YTMタグ) →GTMに移行して全ページに設置。
<script id="tagjs" type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=zRL72Zo";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=zRL72Zo" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
 */ ?>

</body>
</html>
