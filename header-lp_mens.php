<?php
/**
 * The template for displaying the header
 *
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
  <!-- End Google Tag Manager -->
</head>

<body class="p-lp p-mens">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVKPWGR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="p-mens-header p-mens__inner">
    <div class="p-mens-header__inner">
      高収入男性のための結婚相談所 サンセリテ青山
    </div>
    <div class="p-mens-header__fv">
      <dl class="p-mens__cta">
        <dt class="p-mens__cta-title">
          <img class="p-mens__cta-title-pic"
            src="<?php echo get_template_directory_uri() ?>/assets/images/lp_mens/cta_txt.svg" alt="サンセリテ青山">
        </dt>
        <dd class="p-mens__cta-comment">
          ＼無料婚活相談受付中／
        </dd>
        <dd>
          <div>

          </div>
          <div>

          </div>
        </dd>
      </dl>
    </div>
  </header>