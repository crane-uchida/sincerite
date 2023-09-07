<!DOCTYPE html>
<html class="html" lang="ja-JP">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
   <!--fonts-->
  <!-- <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&family=Zen+Maru+Gothic:wght@400;500;700&display=swap"
        rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&family=Noto+Sans+JP:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;700&family=Zen+Old+Mincho:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- CSS/JS -->
  <?php if (is_home() || is_front_page()) : ?>
  <?php elseif (is_page('recruit')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php elseif (is_page('form05')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php elseif (is_page('request')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php elseif (is_page('form01')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php elseif (is_page('entry-men')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php elseif (is_page('entry-women')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php elseif (is_page('reserve')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  
  <?php elseif (is_page('online')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  
  <?php elseif (is_page('counseling')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php elseif (is_page('form02')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
 
  <?php else : ?>
  <?php endif; ?>
 
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss_new/common/common.css" media="all" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss_new/top/top.css" media="all" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss_new/introduction/introduction.css" media="all" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss_new/party/party.css" media="all" />
 
  <?php if (is_page('form01') || is_page('entry-men') || is_page('entry-women') || is_page('reserve') || is_page_template('templates/template-form.php') || is_page('form05') || is_page('request') || is_page('form06') || is_page('online') || is_page('counseling') ||  is_page('form02') || is_page('recruit') || is_page('request-thanks') || is_page('reserve-thanks') || is_page('thanks') || is_page('counseling-thanks') || is_page('entry-women-thanks') || is_page('entry-men-thanks') || is_page('partnertest-man') || is_page('partnertest-woman') || is_page('first_matching')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/fix_css/form_new.css?v=1.1" rel="stylesheet">

<?php endif; ?>
  
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?=v3.5" media="all" />
  <title><?php wp_title(''); ?></title>



  <!-- Other scripts -->
  <script type="text/javascript">
  document.documentElement.className += ' js';
  </script>
  <!--custom head HTML-->

  <meta name="google-site-verification" content="ZtuahCKMiROdjmWFC8nI2IOkESI5GfTTVC1m6yVgfVs" />
  <?php wp_head(); ?>
 
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MVKPWGR');</script>
<!-- End Google Tag Manager -->
</head>

<body class="body_index">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVKPWGR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
  <!-- HEADER  -->
  <header class="header" id="header">
    <div class="header__wrapper">
      <div><a href="<?php echo get_site_url(); ?>" class="header__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/sincerite_logo.svg" alt="SINCERITE AOYAMA" width="55" height="35"
          class="img-fluid only-sp">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/sincerite_logo.svg" alt="SINCERITE AOYAMA" width="85" height="66"
          class="img-fluid only-pc">
        <span class="header__heading">高収入男性に特化<br class="d-md-none">した<br class="only-pc">東京 表参道の<br class="d-md-none">結婚相談所</span>
      </a></div>

      <div class="header__link">
        <ul class="header__link-list">
          
          <li>
            <a href="<?php echo get_site_url(); ?>/reserve/">
              <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/bell-iocn.svg" alt="RESERVATION WHITE" width="44" height="44"
                loading="lazy" class="img-fluid hover"> -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/bell-iocn-hover.svg" alt="RESERVATION BLACK" width="23" height="22"
                loading="eager" class="img-fluid">
              <span>
                来店予約
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo get_site_url(); ?>/request/">
              <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/book-icon.svg" alt="DOCUMENT WHITE" width="44" height="44"
                loading="lazy" class="img-fluid hover"> -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/book-icon-hover.svg" alt="DOCUMENT BLACK" width="21" height="25"
                loading="eager" class="img-fluid">
              <span>
                資料請求
              </span>
            </a>
          </li>
          <li>
            <a href="tel:03-5468-2181">
              <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/tel-icon.svg" alt="PHONE WHITE" width="44" height="44"
                loading="lazy" class="img-fluid hover"> -->
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/tel-icon-hover.svg" alt="PHONE BLACK" width="22" height="22"
                loading="eager" class="img-fluid">
              <span>
                <!-- お問い合せ -->
                お問合せ
              </span>
            </a>
          </li>
          <li>
            <div class="header__contact">
            <p class="header__contact-desc">電話からのお問い合せ</p>
            <p class="header__contact-no">03-5468-2181</p>
            <p class="header__contact-txt">水曜日を除く11時〜20時まで</p>
          </div>
          </li>
          
        </ul>

        <div class="nav-icon" id="js-navIcon">
          <span></span>
        </div>

        <nav class="header__nav" id="js-nav">


          <div class="header__nav-wrapper d-none d-md-block">


            <div class="header__nav-top">
              <div class="header__nav-list-wrapper">
                <a href="<?php echo get_site_url(); ?>" class="header__nav-list-heading">トップページ</a>

                <ul class="header__nav-list">
                  <li>
                    <a href="<?php echo get_site_url(); ?>/introduction/" class="header__nav-link">はじめての方へ</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/faq/" class="header__nav-link">よくある質問</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/access/" class="header__nav-link">店舗案内（アクセス）</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/voice/" class="header__nav-link">ご成婚されたお客様の声</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/news/" class="header__nav-link">お知らせ</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/company/" class="header__nav-link">会社概要</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/party/" class="header__nav-link">お見合いパーティーレポート</a>
                  </li>
                  <li>
                    <a href="https://www.club-sincerite.co.jp/column/" class="header__nav-link">婚活コラム</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/recruit/" class="header__nav-link">採用情報</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/interview/" class="header__nav-link">ゲストインタビュー</a>
                  </li>
                </ul>
              </div>
              <div class="header__nav-list-wrapper -flx">

                <div class="header__nav-list-inr">
                  <a href="<?php echo get_site_url(); ?>/men/" class="header__nav-list-heading">男性向けプラン</a>
                  <ul class="header__nav-list">
                    <li>
                      <a href="<?php echo get_site_url(); ?>/men/job-info/" class="header__nav-link">職業別のご案内</a>
                    </li>
                    <li>
                      <a href="<?php echo get_site_url(); ?>/men/premium01/" class="header__nav-link">旧帝大・早慶プレミアム<br>メンバーズ</a>
                    </li>
                    <li>
                      <a href="<?php echo get_site_url(); ?>/men/premium02/" class="header__nav-link">ドクターズ・プレミアム</a>
                    </li>

                  </ul>
                </div>

                <div class="header__nav-list-inr">
                  <a href="<?php echo get_site_url(); ?>/women/" class="header__nav-list-heading">女性向けプラン</a>

                  <ul class="header__nav-list">
                    <li>
                      <a href="<?php echo get_site_url(); ?>/women/job-info/" class="header__nav-link">パートナーの職業別アドバイス</a>
                    </li>
                  </ul>
                </div>

                <div class="header__nav-list-inr">
                  <a href="https://elt-net.jp/login" target="_blank"  class="header__nav-page">マイページ</a>
                </div>

              </div>
            </div>

            <div class="header__nav-bottom">
              <div class="header__nav-bottom-links-list">
                <a href="<?php echo get_site_url(); ?>/request/" class="header__nav-bottom-links -brown">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/book-brown.svg" alt="BOOK" class="img-fluid" width="24" height="24"
                    loading="lazy">
                  <p><span class="res">無料</span>パンフレット請求</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/reserve/" class="header__nav-bottom-links">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/home-brown.svg" alt="HOME" class="img-fluid" width="24" height="24"
                    loading="lazy">
                  <p>来店のご予約</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/counseling/" class="header__nav-bottom-links">
                  <p class="fs">お問い合わせ・<br>カウンセリングのご相談</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/entry-men/" class="header__nav-bottom-links -blue">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/man.svg" alt="MAN" class="img-fluid" width="23" height="30"
                    loading="lazy">
                  <p><span>男性会員</span>簡易エントリー</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/entry-women/" class="header__nav-bottom-links -pink">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/woman.svg" alt="WOMEN" class="img-fluid" width="22" height="30"
                    loading="lazy">
                  <p><span>女性会員</span>簡易エントリー</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/partnertest/" class="header__nav-bottom-links -brown">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/icon-match.svg" alt="無料マッチング体験" class="img-fluid" width="27" height="24"
                    loading="lazy">
                  <p><span>簡単2分</span>無料マッチング体験</p>
                </a>
              </div>

              <div class="header__nav-bottom-social">
                <a href="https://www.instagram.com/sincerite_aoyama_official/" target="_blank" class="header__nav-bottom-social-link">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/instagram-black.svg" alt="INSTAGRAM" class="img-fluid"
                    width="25" height="25" loading="lazy">
                </a>
                <a href="https://twitter.com/sinceriteaoyama" target="_blank" class="header__nav-bottom-social-link">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/twitter-black.svg" alt="TWITTER" class="img-fluid" width="25"
                    height="20" loading="lazy">
                </a>
                <a href="https://www.facebook.com/SinceriteAoyama" target="_blank" class="header__nav-bottom-social-link">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/facebook-black.svg" alt="FACEBOOK" class="img-fluid" width="25"
                    height="25" loading="lazy">
                </a>
                <a href="https://page.line.me/sincerite?openQrModal=true" target="_blank" class="header__nav-bottom-social-link">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/line-black.svg" alt="LINE" class="img-fluid" width="25"
                    height="23" loading="lazy">
                </a>
                <a href="https://www.youtube.com/user/SinceriteAoyama" target="_blank" class="header__nav-bottom-social-link">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/youtube-black.svg" alt="YOUTUBE" class="img-fluid" width="28"
                    height="19" loading="lazy">
                </a>
              </div>
            </div>

          </div>


          <div class="header__nav-wrapper d-md-none">
            <div class="header__nav-lft">
              <a href="<?php echo get_site_url(); ?>" class="header__nav-logo d-none d-md-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/header-logo-gold.svg" alt="SINCERITE AOYAMA" class="img-fluid"
                  width="150" height="116" loading="lazy">
                <p class="header__nav-logo-txt">サンセリテ青山</p>
              </a>

              <a href="https://elt-net.jp/login" target="_blank" class="header__login d-none d-md-flex">
                マイページ
              </a>

              <div class="header__nav-bottom-links-list">
                <a href="<?php echo get_site_url(); ?>/partnertest/" class="header__nav-bottom-links -brown">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/icon-match.svg" alt="無料マッチング体験" class="img-fluid" width="27" height="24"
                    loading="lazy">
                  <p><span class="mat">簡単2分</span>無料マッチング体験</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/request/" class="header__nav-bottom-links -brown">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/book-brown.svg" alt="BOOK" class="img-fluid" width="24" height="23"
                    loading="lazy">
                  <p><span class="res">無料</span>パンフレット請求</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/reserve/" class="header__nav-bottom-links">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/home-brown.svg" alt="HOME" class="img-fluid" width="24" height="24"
                    loading="lazy">
                  <p>来店のご予約</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/counseling/" class="header__nav-bottom-links">
                  <p class="fs">お問い合わせ・<br>カウンセリングのご相談</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/entry-men/" class="header__nav-bottom-links -blue">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/man.svg" alt="MAN" class="img-fluid" width="23" height="30" loading="lazy">
                  <p><span>男性会員</span>簡易エントリー</p>
                </a>
                <a href="<?php echo get_site_url(); ?>/entry-women/" class="header__nav-bottom-links -pink">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/woman.svg" alt="WOMEN" class="img-fluid" width="22" height="30"
                    loading="lazy">
                  <p><span>女性会員</span>簡易エントリー</p>
                </a>
              </div>


              <div class="header__nav-social">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/header-logo-gold.svg" alt="logo" loading="lazy" width="100"
                  height="78" class="img-fluid header__nav-logo">
                <ul class="header__nav-social-link-list">
                  <li>
                    <a href="https://www.instagram.com/sincerite_aoyama_official/" target="_blank">
                      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/instagram-black.svg" alt="INSTAGRAM" class="img-fluid" width="25" height="25" loading="lazy"> -->

                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25.001">
                        <defs>
                          <style>
                            .a {
                              fill: #333;
                            }
                          </style>
                        </defs>
                        <g transform="translate(-0.005)">
                          <g transform="translate(0.005)">
                            <g transform="translate(0)">
                              <path class="a"
                                d="M18.755,0H6.255A6.269,6.269,0,0,0,0,6.25v12.5A6.269,6.269,0,0,0,6.255,25h12.5A6.269,6.269,0,0,0,25,18.751V6.25A6.269,6.269,0,0,0,18.755,0Zm4.167,18.751a4.171,4.171,0,0,1-4.167,4.167H6.255a4.172,4.172,0,0,1-4.167-4.167V6.25A4.171,4.171,0,0,1,6.255,2.083h12.5A4.171,4.171,0,0,1,22.922,6.25v12.5Z"
                                transform="translate(-0.005)" />
                            </g>
                          </g>
                          <g transform="translate(17.714 4.167)">
                            <circle class="a" cx="1.563" cy="1.563" r="1.563" />
                          </g>
                          <g transform="translate(6.255 6.25)">
                            <path class="a"
                              d="M108.655,102.4a6.25,6.25,0,1,0,6.25,6.25A6.249,6.249,0,0,0,108.655,102.4Zm0,10.417a4.167,4.167,0,1,1,4.167-4.167A4.167,4.167,0,0,1,108.655,112.817Z"
                              transform="translate(-102.405 -102.4)" />
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/sinceriteaoyama" target="_blank">
                      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/twitter-black.svg" alt="TWITTER" class="img-fluid" width="25" height="20" loading="lazy"> -->

                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20.313">
                        <defs>
                          <style>
                            .a {
                              fill: #333;
                            }
                          </style>
                        </defs>
                        <g transform="translate(0 -48)">
                          <g transform="translate(0 48)">
                            <path class="a"
                              d="M25,50.4a10.686,10.686,0,0,1-2.953.809A5.1,5.1,0,0,0,24.3,48.381a10.242,10.242,0,0,1-3.25,1.241,5.125,5.125,0,0,0-8.866,3.5A5.277,5.277,0,0,0,12.3,54.3,14.507,14.507,0,0,1,1.741,48.934a5.127,5.127,0,0,0,1.575,6.85A5.062,5.062,0,0,1,1,55.153v.056a5.149,5.149,0,0,0,4.106,5.036,5.115,5.115,0,0,1-1.344.169,4.532,4.532,0,0,1-.97-.087A5.174,5.174,0,0,0,7.581,63.9a10.3,10.3,0,0,1-6.355,2.186A9.6,9.6,0,0,1,0,66.012a14.429,14.429,0,0,0,7.863,2.3A14.487,14.487,0,0,0,22.45,53.728c0-.227-.008-.445-.019-.662A10.224,10.224,0,0,0,25,50.4Z"
                              transform="translate(0 -48)" />
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/SinceriteAoyama" target="_blank">
                      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/facebook-black.svg" alt="FACEBOOK" class="img-fluid" width="25" height="25" loading="lazy"> -->

                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                        <defs>
                          <style>
                            .a {
                              fill: #333;
                              fill-rule: evenodd;
                            }
                          </style>
                        </defs>
                        <path class="a"
                          d="M19.883,7.758a12.388,12.388,0,0,1,6.31,1.717A12.626,12.626,0,0,1,29.35,28.546,12.736,12.736,0,0,1,22.3,32.758V23.772h2.451l.554-3.531H21.591V17.929a2.01,2.01,0,0,1,.427-1.328,1.955,1.955,0,0,1,1.568-.6h2.242V12.911q-.048-.016-.916-.123a18.2,18.2,0,0,0-1.975-.123,4.935,4.935,0,0,0-3.545,1.264,4.887,4.887,0,0,0-1.332,3.628v2.683H15.235v3.531H18.06v8.985a12.43,12.43,0,0,1-7.644-4.212A12.612,12.612,0,0,1,13.573,9.474,12.391,12.391,0,0,1,19.883,7.758Z"
                          transform="translate(-7.383 -7.758)" />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://page.line.me/sincerite?openQrModal=true" target="_blank">
                      <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/line-black.svg" alt="LINE" class="img-fluid" width="25" height="23" loading="lazy"> -->

                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 23.421">
                        <defs>
                          <style>
                            .a {
                              fill: #333;
                            }

                            .b {
                              fill: #fff;
                            }
                          </style>
                        </defs>
                        <g transform="translate(-7.768 -9.584)">
                          <path class="a"
                            d="M463.134,344.219c1.989-1.932,3.466-4.148,3.466-6.79,0-5.426-5.6-9.83-12.5-9.83s-12.5,4.4-12.5,9.83c0,5,4.46,9.119,10.568,9.744,0,0,1.222-.17.938,1.449s-.483,1.761-.142,2.33S458.731,348.48,463.134,344.219Z"
                            transform="translate(-433.832 -318.016)" />
                          <g transform="translate(12.2 16.8)" class="letter">
                            <path class="b" d="M458.592,353v4.517h1.989v1.193H457.2V353Z"
                              transform="translate(-457.2 -353)" />
                            <path class="b" d="M473.592,353v5.739H472.2V353Z" transform="translate(-467.939 -353)" />
                            <path class="b"
                              d="M481.249,353l2.443,3.665V353h1.364v5.739h-1.449l-2.443-3.665v3.665H479.8V353Z"
                              transform="translate(-473.379 -353)" />
                            <path class="b"
                              d="M504.922,355.188v1.165h-2.358v1.165h2.67v1.193H501.2V353h3.92v1.193h-2.557v.966h2.358Z"
                              transform="translate(-488.7 -353)" />
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/user/SinceriteAoyama" target="_blank">
                      <svg id="Group_7446" data-name="Group 7446" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 27.908 16.9">
                        <defs>
                          <clipPath id="clip-path">
                            <rect id="Rectangle_2705" data-name="Rectangle 2705" width="27.908" height="16.9"
                              transform="translate(0 0)" fill="none" />
                          </clipPath>
                        </defs>
                        <g id="Group_7445" data-name="Group 7445" transform="translate(0 0)"
                          clip-path="url(#clip-path)">
                          <path id="Path_2014" data-name="Path 2014"
                            d="M25.2.681V.671A96.293,96.293,0,0,0,13.733,0,85.65,85.65,0,0,0,2.71.659v0A3.245,3.245,0,0,0,0,3.866v9.176a3.24,3.24,0,0,0,2.71,3.2,85.65,85.65,0,0,0,11.024.659A96.293,96.293,0,0,0,25.2,16.23a3.223,3.223,0,0,0,2.711-3.188V3.866A3.217,3.217,0,0,0,25.2.681M11.5,12.36V4.533l7.226,3.914Z"
                            transform="translate(0 0)" fill="#302d2c" />
                        </g>
                      </svg>

                    </a>
                  </li>
                </ul>
                <ul class="header__nav-other-link">

                  <li>
                    <a href="<?php echo get_site_url(); ?>/access/">店舗情報</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/company/">会社概要</a>
                  </li>
                  <li>
                    <a href="<?php echo get_site_url(); ?>/recruit/">採用情報</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="header__nav-rgt">
              <div class="header__nav-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/icon-flower.svg" alt="" class="img-fluid" width="16" height="20"
                  loading="lazy">
              </div>

              <a href="https://elt-net.jp/login" target="_blank" class="header__login d-md-none">
                マイページ
              </a>

              <ul class="header__nav-list">
                <li>
                  <a href="<?php echo get_site_url(); ?>/introduction/"><span>はじめての方へ</span></a>
                </li>
                <li>
                  <a class="more-links" href="<?php echo get_site_url(); ?>/men/"><span>男性向けプラン</span><span class="plus"></span></a>
                  <ul class="header__nav-list-inner">
                    <li class="d-md-none">
                      <a href="<?php echo get_site_url(); ?>/men/"><span>男性向けプランTOP</span></a>
                    </li>
                    <li>
                      <a href="<?php echo get_site_url(); ?>/men/job-info/"><span>職業別のご案内</span></a>
                    </li>
                    <li>
                      <a href="<?php echo get_site_url(); ?>/men/premium01/"><span>旧帝大・早慶プレミアムメンバーズ</span></a>
                    </li>
                    <li>
                      <a href="<?php echo get_site_url(); ?>/men/premium02/"><span>ドクターズ・プレミアム</span></a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="more-links" href="<?php echo get_site_url(); ?>/women/"><span>女性向けプラン</span><span class="plus"></span></a>
                  <ul>
                    <li class="d-md-none">
                      <a href="<?php echo get_site_url(); ?>/women/"><span>女性向けプランTOP</span></a>
                    </li>
                    <li>
                      <a href="<?php echo get_site_url(); ?>/women/job-info/"><span>パートナーの職業別アドバイス</span></a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/voice/"><span>ご成婚されたお客様の声</span></a>
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/party/"><span>お見合いパーティーレポート</span></a>
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/interview/"><span>ゲストインタビュー</span></a>
                </li>
                <li>
                  <a href="https://www.club-sincerite.co.jp/column/"><span>婚活コラム</span></a>
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/news/"><span>お知らせ</span></a>
                </li>
                <li>
                  <a href="<?php echo get_site_url(); ?>/faq/"><span>よくあるご質問</span></a>
                </li>
              </ul>


            </div>
          </div>
          <span class="close"></span>
        </nav>
      </div>
    </div>
  </header>
