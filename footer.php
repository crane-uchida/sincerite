<?php if (!(is_page('form01') || is_page('form02') || is_page('form03') || is_page('form04') || is_page('form05') || is_page('form06') || is_page('online') || is_page('recruit') || is_page('first_matching') )) : ?>

<div class=rwd>
  <ul class="floating">
    <li class="materials"><a href="<?php echo get_site_url(); ?>/form05/">資料請求</a></li>
    <li class="appointment"><a href="<?php echo get_site_url(); ?>/form01/">来店予約</a></li>
    <li class="line"><a href="https://line.me/R/ti/p/%40sincerite"><img
          src="<?php echo get_template_directory_uri() ?>/images/footer/footer_overlay_line.svg" alt="decoration"></a>
    </li>
  </ul>
</div>

<?php endif; ?>


<footer id="footer">
  <section class="info">
    <h2>
      <picture>
        <source srcset="<?php echo get_template_directory_uri() ?>/images/footer/logo.svg" type="image/svg+xml">
        <img src="<?php echo get_template_directory_uri() ?>/images/footer/logo.png" alt="高収入男性との結婚・出会いならサンセリテ青山">
      </picture>
    </h2>
    <ul class="contents">
      <li class="pic pc">
        <img src="<?php echo get_template_directory_uri() ?>/images/footer/info_pic_exterior.jpg" alt="サンセリテ青山の外観">
      </li>
      <li class="txt">
        <ul>
          <li class="name rwd">
            <h3 class="txt_primary">サンセリテ青山<br><span class="txt_primary">表参道本店</span></h3>
          </li>
          <li class="speechbubble pc">
            <div class="txt_primary">
              高収入・エリート男性に特化した、<br>結婚相談所サンセリテ青山の無料来店相談はこちらから
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/images/footer/info_decoration_tail.svg" alt="吹き出し">
          </li>
          <li class="address">
            <div>
              東京都渋谷区神宮前5-6-13<br class=rwd>ヴァイス表参道 B1
            </div>
            <div>
              <span class="pc">《 </span>地下鉄 銀座線・半蔵門線・<br class=rwd>千代田線 表参道駅 A1出口徒歩5分<span class="pc"> 》</span>
            </div>
          </li>
          <li class="tel">
            <img src="<?php echo get_template_directory_uri() ?>/images/footer/info_icon_tel.svg" alt="電話のアイコン">
            <div class="txt_primary">
              03-5468-2181
            </div>
          </li>
        </ul>
      </li>
    </ul>
    <ul class="btn">
      <li class="inquiry rwd">
        <a class="txt_primary" href="tel:0354682181">
          <img src="<?php echo get_template_directory_uri() ?>/images/footer/info_icon_phone.svg" alt="電話機のアイコン">
          お問い合わせ
        </a>
      </li>
      <li class="other">
        <ul>
          <li class="btn_access">
            <a href="<?php echo get_site_url(); ?>/access-tokyo">
              <span class="txt_primary"><img class=rwd
                  src="<?php echo get_template_directory_uri() ?>/images/footer/info_icon_pin.svg"
                  alt="電話機のアイコン">アクセス</span>
            </a>
          </li>
          <li class="btn_appointment">
            <a href="<?php echo get_site_url(); ?>/form01/">
              <span class="txt_primary"><img class=rwd
                  src="<?php echo get_template_directory_uri() ?>/images/footer/info_icon_door.svg"
                  alt="電話機のアイコン">来店予約</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </section>

  <section class="googlemap">
    <?php get_template_part( 'inc/map' );?>
  </section>

  <section class="cta rwd">
    <a class="cta_frame cta_primary" href="<?php echo get_site_url(); ?>/form01/">
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri() ?>/images/footer/cta_icon_rose.svg" alt="バラのアイコン">
        </li>
        <li>
          ＼ あなたの理想の相手をご紹介 ／
        </li>
        <li class="cta_txt">
          初回無料カウンセリングに<br>申し込む
        </li>
      </ul>
    </a>

    <a class="cta_frame cta_secondary" href="<?php echo get_site_url(); ?>/form05/">
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri() ?>/images/footer/cta_icon_materials.svg" alt="資料のアイコン">
        </li>
        <li class="cta_txt">
          資料請求はこちら
        </li>
      </ul>
    </a>
  </section>

  <section class="navigation">
    <ul>
      <li>
        <a href="<?php echo get_site_url(); ?>/introduction">はじめての方へ</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/statusplan2">男性向けプラン</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/private_style">女性向けプラン</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/party/">お見合いパーティー</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/column/">婚活コラム</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/faq">よくある質問</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/access-tokyo/">店舗案内</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/company">会社案内</a>
      </li>
      <li>
        <hr class=rwd>
        <div class="pc">
        </div>
      </li>
      <li>
        <a href="<?php echo get_site_url(); ?>/recruit">採用情報</a>
      </li>
    </ul>
    <dl>
      <dt class="sub rwd">
        個人情報の取扱いについて
      </dt>
      <dd>
        <div>
          <h3 class="sub pc">
            個人情報の取扱いについて
          </h3>
          株式会社ランスクリエイトは、結婚相談所事業およびそれに付帯する事業などの業務を行う上でお客様、並びに従業者の重要な個人情報を保護することを重大な社会的責任であると認識しております。将来に亘って、この大切な個人情報を適正、安全に取り扱うために従業者のすべてが遵守すべき行動基準として本個人情報保護方針を定め、その遵守の徹底を図って参ります。
        </div>
        <div>
          <img class="pc" src="<?php echo get_template_directory_uri() ?>/images/footer/notes_mark.png"
            alt="マル適マークCMSは、結婚相談・結婚情報の信頼の証です">
        </div>
      </dd>
    </dl>
  </section>

  <section class="copyright">
    <small>
      <span>&copy;</span> Sincerite Aoyama. All rights Reserved.
    </small>
  </section>
</footer>

</div><!-- container  -->


<?php if (is_page('form01') || is_page('form02') || is_page('form03') || is_page('form04') || is_page('form05') || is_page('form06') || is_page('online') || is_page('recruit') || is_page('first_matching')) : ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- フォームで使っているスクリプト -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js"></script>
<!-- 「フリガナ」を自動で入力する -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.autoKana.js">
</script>
<script>
jQuery(function() {
  jQuery.fn.autoKana('#name', '#name_kana', {
    katakana: true
  });
});
</script>

<!-- 【リニューアル】 郵便番号から住所の自動入力 -->
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function($) {
  $('.btn_address').click(function() {
    AjaxZip3.zip2addr('txt_number', '', 'txt_prefectures', 'txt_address');
  });
});
</script>

<?php endif; ?>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/sp.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/common.js"></script>

<?php if (is_page(5728)) :?>
<!-- 資料請求サンクスページに、A8.netのタグ設置のための準備 -->
<?php
	$var= do_shortcode('[wpcf7sn_view_count id="5730"]'); //「Contact Form 7 Serial Numbers」プラグインのショートコードの出力をPHP変数varに格納する
	echo <<< EOD
	<script>
	var pram="$var"; //PHP変数varをjavascript変数pramにいれる
	</script>
	EOD;
	?>

<!-- 資料請求サンクスページに、A8.netのタグ設置。受付番号(order_number)に変数(pram)をいれることで動的になる。-->
<span id="a8sales"></span>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script>
a8sales({
  "pid": "s00000021539001",
  "order_number": pram,
  "currency": "JPY",
  "items": [{
    "code": "a8",
    "price": 3500,
    "quantity": 1
  }, ],
  "total_price": 3500
});
</script>

<?php elseif (is_page(5645)) :?>
<!-- 来店予約サンクスページに、A8.netのタグ設置のための準備 -->
<?php
	$var= do_shortcode('[wpcf7sn_view_count id="5641"]'); //「Contact Form 7 Serial Numbers」プラグインのショートコードの出力をPHP変数varに格納する
	echo <<< EOD
	<script>
	var pram="$var"; //PHP変数varをjavascript変数pramにいれる
	</script>
	EOD;
?>

<!-- 来店予約サンクスページに、A8.netのタグ設置。受付番号(order_number)に変数(pram)をいれることで動的になる。-->
<span id="a8sales"></span>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script>
a8sales({
  "pid": "s00000021539001",
  "order_number": pram,
  "currency": "JPY",
  "items": [{
    "code": "b8",
    "price": 15000,
    "quantity": 1
  }, ],
  "total_price": 15000
});
</script>

<?php elseif (is_page('statusplan2')) :?>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/statusplan.js"></script>

<?php elseif (is_page('faq')) :?>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/faq.js"></script>

<?php elseif (is_page('voice')) :?>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/voice.js"></script>

<?php elseif (is_home() || is_front_page()) :?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
const mySwiper = new Swiper('.swiper', {
  slidesPerView: 1,
  spaceBetween: 0,
  grabCursor: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  speed: 1000,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    900: {
      slidesPerView: 3,
      spaceBetween: 20,
    }
  },
  loop: true,
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script>
//ふわっとアニメーション
jQuery(function($) {
  $(".inview").on("inview", function(event, isInView) {

    if (isInView) {
      $(this).stop().addClass("is-show");
    }
  });
});
</script>

<?php endif; ?>

<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/accordion.js"></script>
<!-- 画面下に固定させてスクロール途中で非表示にする -->
<script>
jQuery(window).on("scroll", function() {
  if (100 < jQuery(this).scrollTop()) { //スクロール量が100pxを超えたら表示する
    jQuery(".floating").css({
      display: "flex",
    });
  } else {
    jQuery(".floating").css({
      display: "none",
    });
  }
});

jQuery(window).on("scroll", function() {
  documentHeight = jQuery(document).height();
  scrollPosition = jQuery(this).height() + jQuery(this).scrollTop();
  footerHeight = jQuery("#footer").innerHeight();

  if (documentHeight - scrollPosition <= footerHeight) {
    jQuery(".floating").css({
      display: "none"
      // ↓スクロール途中で表示したまま置いて残す場合はこれを適用する
      //position: "absolute",
      //bottom: footerHeight + 0
    });
  } else {
    jQuery(".floating").css({
      position: "fixed",
      bottom: 0
    });
  }
});
</script>


</body>
</html>