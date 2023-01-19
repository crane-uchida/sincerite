<!DOCTYPE html>
<html class="html" lang="ja-JP">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title(''); ?></title>

  <!-- load adobe font -->

  <script>
  (function(d) {
    var config = {
        kitId: 'vkx2zkt',
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config)
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
  })(document);
  </script>

  <?php /* ?>
  <Helmet>
    <script type="application/javascript">
    {
      (function(d) {
        var config = {
            kitId: 'vkx2zkt',
            scriptTimeout: 3000,
            async: true
          },
          h = d.documentElement,
          t = setTimeout(function() {
            h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
          }, config.scriptTimeout),
          tk = d.createElement("script"),
          f = false,
          s = d.getElementsByTagName("script")[0],
          a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
          a = this.readyState;
          if (f || a && a != "complete" && a != "loaded") return;
          f = true;
          clearTimeout(t);
          try {
            Typekit.load(config)
          } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
      })(document);
    }
    </script>
  </Helmet>
  <?php */ ?>


  <?php if (is_home() || is_front_page()) : ?>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper@8/swiper.min.css">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/top/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;1,400;1,500&display=swap&text=0123456789,"
    rel="stylesheet">

  <?php elseif (is_page_template('page-form.php')) : ?>
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/site_global-form.css" />
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/site_global-226757758.css" />
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/master_c-____-427596753.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/sub.css" />

  <?php elseif (is_page_template('single-blog.php')) : ?>
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/site_global-226757758.css" />
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/master_c-____-427596753.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/sub.css" />

  <?php elseif (is_page('statusplan2')) : ?>
  <link media='(min-width: 641px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/statusplan.css"
    rel="stylesheet">
  <link media='(max-width: 640px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/sp_statusplan.css"
    rel="stylesheet">

  <?php elseif (is_page('faq')) : ?>
  <link media='(min-width: 641px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/faq-page.css"
    rel="stylesheet">
  <link media='(max-width: 640px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/sp_faq-page.css"
    rel="stylesheet">

  <?php elseif (is_page('voice')) : ?>
  <link media='(min-width: 641px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/voice.css"
    rel="stylesheet">
  <link media='(max-width: 640px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/sp_voice.css"
    rel="stylesheet">

  <?php elseif (is_page('private_style')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/private_style/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;600;700;900&family=Noto+Serif+JP:wght@400;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form01')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form01-thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form05')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form05-thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form06')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form06-thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('online')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form03')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form03-thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form04')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form04-thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form02')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('form02-thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('recruit')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php elseif (is_page('recruit/thanks')) : ?>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/reset.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/faq/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Noto+Serif+JP:wght@400;500;600;700;900&display=swap"
    rel="stylesheet">

  <?php else : ?>
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/site_global-226757758.css" />
  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/master_c-____-427596753.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/sub.css" />

  <?php endif; ?>

  <link rel="stylesheet" type="text/css"
    href="<?php echo get_stylesheet_directory_uri(); ?>/css/master_a-____-520408639.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fotorama.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common.css"
    media="all">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/sp_common.css"
    media="all">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/slide.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/fotorama.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/scripts/script_sp.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/media.js"></script>



  <!-- Other scripts -->
  <script type="text/javascript">
  document.documentElement.className += ' js';
  </script>
  <!--custom head HTML-->

  <meta name="google-site-verification" content="ZtuahCKMiROdjmWFC8nI2IOkESI5GfTTVC1m6yVgfVs" />
  <?php wp_head(); ?>

  <?php /* ?>
  <!-- Google 構造化データ マークアップ支援ツールが生成した JSON-LD マークアップです。 -->
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "東京・表参道の結婚相談所 サンセリテ 青山",
    "image": "https://www.club-sincerite.co.jp/wp-content/themes/sincerite/images/toplogo.gif",
    "telephone": "03-5468-2181",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "神宮前5-6-13 ヴァイス表参道 B1",
      "addressLocality": "渋谷区",
      "addressRegion": "東京都",
      "addressCountry": "日本",
      "postalCode": "150-0001"
    }
  }
  </script>
  <?php */ ?>

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

  <!-- <link media='(min-width: 641px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/archivebrand.css" rel="stylesheet"> -->
  <link media='(max-width: 640px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/sp_header.css"
    rel="stylesheet">
  <link media='(min-width: 641px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/header.css"
    rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/style.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/footer/style.css" rel="stylesheet">


</head>

<body class="body_index">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVKPWGR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <div class="container">

    <!-- pc header -->
    <div class="header-wrapper pc">
      <div class="header-box clearfix">
        <div class="menucont">
          <div class="head">
            <a href="<?php echo get_site_url(); ?>"><img class="menulogo" alt="高収入男性との結婚・出会いならサンセリテ青山"
                src="<?php echo get_template_directory_uri() ?>/images/frontpage/logo.png" /></a>
            <div class="mypage"><a href="https://elt-net.jp/" target="_blank">マイページ</a></div>
          </div>
          <div class="menunav">
            <div class="navrow">
              <div class="dropnav">
                <a class="mainnav">
                  はじめての方へ
                  <div class="arrowicon"></div>
                </a>
                <div class="subnavcont">
                  <div class="subnavbox">
                    <a class="subnav" href="<?php echo get_site_url(); ?>/introduction/">はじめての方へ</a>
                    <a class="subnav" href="<?php echo get_site_url(); ?>/marriage">ご成婚への想い</a>
                  </div>
                </div>
              </div>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/kekkon-uranai/">結婚占い</a>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/form06/">パートナー診断</a>
              <div class="dropnav">
                <a class="mainnav">
                  初回来店予約・アクセス
                  <div class="arrowicon"></div>
                </a>
                <div class="subnavcont">
                  <div class="subnavbox">
                    <a class="subnav" href="<?php echo get_site_url(); ?>/form01/">初回来店予約</a>
                    <a class="subnav" href="<?php echo get_site_url(); ?>/access-tokyo">表参道店アクセス</a>
                  </div>
                </div>
              </div>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/column/">婚活コラム</a>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/blog/">ブログ</a>
            </div>
            <div class="navrow">
              <a class="mainnav" href="<?php echo get_site_url(); ?>/form05/">無料パンフレット請求</a>
              <div class="dropnav">
                <a class="mainnav">
                  高収入 男性向けプラン
                  <div class="arrowicon"></div>
                </a>
                <div class="subnavcont">
                  <div class="subnavbox">
                    <a class="subnav" href="<?php echo get_site_url(); ?>/statusplan2/">ステータスプラン・簡易エントリー</a>
                    <a class="subnav" href="<?php echo get_site_url(); ?>/intelligence_members/">旧帝大・早慶プレミアムメンバーズ</a>
                    <a class="subnav" href="<?php echo get_site_url(); ?>/doctors-club/">ドクターズ・プレミアム</a>
                  </div>
                </div>
              </div>
              <div class="dropnav">
                <a class="mainnav">
                  女性向けプラン
                  <div class="arrowicon"></div>
                </a>
                <div class="subnavcont">
                  <div class="subnavbox">
                    <a class="subnav" href="<?php echo get_site_url(); ?>/private_style">プライベートスタイル</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="navrow">
              <div class="dropnav">
                <a class="mainnav">
                  お見合い
                  <div class="arrowicon"></div>
                </a>
                <div class="subnavcont">
                  <div class="subnavbox">
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/doctor/">医者</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/president/">会社経営者</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/dentist/">歯科医</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/servant/">国家公務員I 種</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/lawyer/">弁護士</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/professor/">大学教授</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/accountant/">公認会計士</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/advertising/">大手広告代理店</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/judicial/">司法書士</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/trading/">大手商社勤務</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/pilot/">パイロット</a>
                    <a class="subnav side" href="<?php echo get_site_url(); ?>/statusplan2/architect/">一級建築士</a>
                  </div>
                </div>
              </div>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/party/">お見合いパーティレポート</a>
            </div>
            <div class="navrow">
              <a class="mainnav" href="<?php echo get_site_url(); ?>/counseling/">カウンセリング</a>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/beauty/">サンセリテビューティー</a>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/voice/">お客様の声</a>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/faq/">よくあるご質問</a>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/media/">メディア掲載履歴</a>
              <a class="mainnav" href="<?php echo get_site_url(); ?>/company/">会社概要</a>
            </div>
          </div>
        </div>
        <div class="tophead">
          <div class="contbox">
            <?php if (is_home() || is_front_page()) : ?>
            <h1 class="toptxt">東京・表参道の結婚相談所 サンセリテ青山 高収入セレブとの出会い・結婚・婚活</h1>
            <?php else : ?>
            <h1 class="toptxt"><?php echo get_post_custom()['_aioseo_title'][0]; ?></h1>
            <?php endif; ?>
            <div class="headercont">
              <span class="navtxt">表参道本店</span>
              <img src="<?php echo get_template_directory_uri() ?>/images/frontpage/phonenum.svg" alt="decoration">
              <a class="navbtn" href="<?php echo get_site_url(); ?>/access-tokyo">アクセス</a>
              <!-- <a href="" class="navbtn">お問い合わせ</a> -->
              <a href="https://www.facebook.com/SinceriteAoyama" target="_blank" class="icon fb"></a>
              <a href="https://twitter.com/sinceriteaoyama" target="_blank" class="icon twitter"></a>
              <a href="https://www.instagram.com/sincerite_aoyama_official/" target="_blank" class="icon ig"></a>
              <a href="https://www.youtube.com/user/SinceriteAoyama" target="_blank" class="icon yt"></a>
              <div class="hamburger">
                <ul class="hambmenu">
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="innerhead">
          <div class="contbox inner">
            <div class="leftsec">
              <a href="<?php echo get_site_url(); ?>" class="logo">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri() ?>/images/logo.svg">
                  <img class="headerlogo" alt="高収入男性との結婚・出会いならサンセリテ青山"
                    src="<?php echo get_template_directory_uri() ?>/images/frontpage/logo.png">
                </picture>
              </a>
            </div>
            <div class="rightsec">
              <div class="textcont">
                <div class="headertxt">
                  <span> 結婚相談所 サンセリテ青山。</span>
                  <span>通常の生活では難しい出会いを実現し、ハイクラスな婚活をサポートします。</span>
                </div>
                <div class="headernavcont">
                  <div class="nav">
                    <a class="headernav" href="<?php echo get_site_url(); ?>/introduction">はじめての方へ</a>
                    <div class="subnav">
                      <a href="<?php echo get_site_url(); ?>/introduction">はじめての方へ</a>
                      <a href="<?php echo get_site_url(); ?>/marriage">ご成婚の理由</a>
                    </div>
                  </div>
                  <div class="nav">
                    <a class="headernav" href="<?php echo get_site_url(); ?>/statusplan2">高収入男性向けプラン</a>
                    <div class="subnav">
                      <a href="<?php echo get_site_url(); ?>/statusplan2">高収入男性向けプラン</a>
                      <a href="<?php echo get_site_url(); ?>/intelligence_members">旧帝大・早慶プレミアムメンバーズ</a>
                      <a href="<?php echo get_site_url(); ?>/doctors-club">ドクターズ・プレミアム</a>
                    </div>
                  </div>
                  <div class="nav">
                    <a class="headernav" href="<?php echo get_site_url(); ?>/private_style">女性向けプラン</a>
                    <div class="subnav">
                      <a href="<?php echo get_site_url(); ?>/private_style">プライベートスタイル</a>
                      <a href="<?php echo get_site_url(); ?>/form06/">パートナー診断</a>
                    </div>
                  </div>
                  <a class="headernav" href="<?php echo get_site_url(); ?>/voice">お客様の声</a>
                  <a class="headernav" href="<?php echo get_site_url(); ?>/party">パーティーレポート</a>
                  <a class="headernav end" href="<?php echo get_site_url(); ?>/faq">よくあるご質問</a>
                </div>
              </div>
              <div class="boxcont">
                <a href="<?php echo get_site_url(); ?>/form05/" class="bluebox">資料請求</a>
                <a href="<?php echo get_site_url(); ?>/form01/" class="redbox">来店予約</a>
              </div>

            </div>
          </div>
        </div><!--  /header-inner-box  -->
      </div><!-- header-box -->
    </div><!-- header-wrapper -->

    <?php get_template_part( 'inc/header_sp' );?>