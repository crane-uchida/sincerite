<?php
/* 
Template Name: LP2504_THANKS
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="google-site-verification" content="">

  <title><?php wp_title(''); ?></title>

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon-152x152.png">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php wp_head(); ?>

  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/scss/style.css" rel="stylesheet">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MVKPWGR');
  </script>
  <!-- End Google Tag Manager end -->
</head>

<body class="p-lp2504">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVKPWGR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) end -->

  <article class="p-lp2504__outer">

    <?php /* PC版 左側 */ ?>
    <section class="p-lp2504__left">
      <div class="p-lp2504__contents">
        <div class="p-lp2504__contents-headline">
          <img class="p-lp2504__contents-headline-image"
            src="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/menu_sub.png" alt="メニュー">
        </div>
        <ul class="p-lp2504__menu">
          <li class="p-lp2504__menu-item p-lp2504__menu-item-odd">
            <a class="p-lp2504__menu-link" href="#message">
              結婚相談所？婚活アプリ？<br>あなたはどっち派？
            </a>
          </li>
          <li class="p-lp2504__menu-item p-lp2504__menu-item-even">
            <a class="p-lp2504__menu-link" href="#instruction">
              そもそも結婚相談所って？<br>婚活アプリって？
            </a>
          </li>
          <li class="p-lp2504__menu-item p-lp2504__menu-item-odd">
            <a class="p-lp2504__menu-link" href="#difference">
              もっと知りたい！<br>結婚相談所と婚活アプリの違い
            </a>
          </li>
          <li class="p-lp2504__menu-item p-lp2504__menu-item-even">
            <a class="p-lp2504__menu-link" href="#cta">
              結婚相談所なら<br>サンセリテ青山
            </a>
          </li>
          <li class="p-lp2504__menu-item p-lp2504__menu-item-odd">
            <a class="p-lp2504__menu-link" href="#voice">
              男女それぞれから見た<br>サンセリテ青山の魅力
            </a>
          </li>
          <li class="p-lp2504__menu-item p-lp2504__menu-item-even">
            <a class="p-lp2504__menu-link" href="#strength">
              サンセリテ青山は全力で<br>婚活をサポートいたします！
            </a>
          </li>
          <li class="p-lp2504__menu-item p-lp2504__menu-item-odd">
            <a class="p-lp2504__menu-link" href="#case">
              わたしたち！<br>サンセリテ青山で出会いました！
            </a>
          </li>
          <li class="p-lp2504__menu-item p-lp2504__menu-item-even">
            <a class="p-lp2504__menu-link" href="#form">
              まずはお気軽にご来店ください！<br>初回来店予約
            </a>
          </li>
        </ul>
      </div>
    </section>
    <?php /* PC版 左側 end */ ?>

    <?php /* メインコンテンツ */ ?>
    <section class="p-lp2504__center p-lp2504__form p-lp2504__thanks">
      <header class="p-lp2504__thanks-header">
        <h2 class="p-lp2504__headline">
          <img class="p-lp2504__headline-image"
            src="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/form_sub.png" alt="まずはお気軽にご来店ください！初回来店予約">
        </h2>
        <div class="p-lp2504__flow">
          <img class="p-lp2504__thanks-image"
            src="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/form_headline-3.jpg" alt="送信完了">
        </div>
      </header>
      <main class="p-lp2504__main p-lp2504__thanks">
        <div class="thanks-area">
          <div class="thanks-txt">
            <h2>初回来店の予約が完了しました。<br>ご予約ありがとうございます。</h2>
          </div>
          <div class="thanks-txt-sub">
            <div>
              内容を確認後、担当者より改めてご連絡させていただきます。今しばらくお待ち下さい。
            </div>
            <div>
              お電話でのご質問も承っておりますので、直接お話されたい方はお気軽にお問い合わせください。
            </div>
          </div>
          <!--           <div class="contact__btn-box" style="justify-content: center;">
            <a href="tel:03-5468-2181" class="btn-contact -ylw" style="margin: auto;">
              <span class="yellow">
                <span class="yellow-mrg">
                  <span class="btn-contact-txt-lg">電話で問い合わせる<em>(無料)</em></span>
                  <span class="btn-contact-txt-sm"><span class="btn-contact-txt-sm-line -flex"><span class="btn-contact-num d-none d-md-block">03&#8209;5468&#8209;2181</span>水曜日を除く<br class="d-md-block d-none">11時〜20時まで</span></span>
                </span>
            </a>
          </div> -->

          <div class="p-lp2504__thanks-tel">
            <a class="p-lp2504__thanks-link" href="tel:03-5468-2181">
              電話で問い合わせる（無料）<br>
              <span class="p-lp2504__thanks-number">03&#8209;5468&#8209;2181</span><br>
              <span class="p-lp2504__thanks-text">※水曜日を除く 11:00〜20:00まで</span>
            </a>
          </div>
        </div>
        <div class="p-lp2504__thanks-button">
          <a class="p-lp2504__thanks-link" href="../">トップページに戻る</a>
        </div>

      </main>

      <?php get_footer('lp2504'); ?>