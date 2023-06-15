<?php
/* 
Template Name: LP_MENS
*/ 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="google-site-verification" content="">

  <title><?php wp_title( '' ); ?></title>

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon-152x152.png">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/scss/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/accordion.js" rel="stylesheet">

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

<body class="p-lp p-mens">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVKPWGR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) end -->

  <header class="p-mens-header">
    <?php /* ヘッダー */ ?>
    <div class="p-mens-header__inner p-mens__center">
      高収入男性のための結婚相談所 サンセリテ青山
    </div>
    <?php /* ヘッダー end */ ?>

    <?php /* ファーストビュー */ ?>
    <h1 class="p-mens-header__headline">
      <img class="p-mens-header__title"
        src="<?php echo get_template_directory_uri() ?>/assets/images/lp_mens/fv_title.svg" alt="ステータスプランエリート男性専用プラン">
    </h1>

    <?php /* CTA */ ?>
    <dl class="p-mens__cta">
      <dt class="p-mens__cta-title">
        <img class="p-mens__cta-title-pic"
          src="<?php echo get_template_directory_uri() ?>/assets/images/lp_mens/cta_txt.svg" alt="入会金・月額活動費0円">
      </dt>
      <dd class="p-mens__cta-comment p-mens__center">
        ＼無料婚活相談受付中／
      </dd>
      <dd class="p-mens__cta-button-application">
        <a class="p-mens__cta-link p-mens__center" href="">
          お申し込みはこちら
        </a>
      </dd>
      <dd class="p-mens__cta-button-line">
        <a class="p-mens__cta-link p-mens__center" href="">
          <img class="p-mens__cta-icon"
            src="<?php echo get_template_directory_uri() ?>/assets/images/lp_mens/icon_line.png" alt="ラインのアイコン">
          LINEからも簡単お申し込み！
        </a>
      </dd>
    </dl>
    <?php /* CTA end */ ?>

    <?php /* ファーストビュー end */ ?>
  </header>