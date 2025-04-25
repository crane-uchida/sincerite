<?php
/* 
Template Name: LP2504
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

  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/scss/common/form/style.css?<?php echo date('YmdHis'); ?>" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/scss/style.css?<?php echo date('YmdHis'); ?>" rel="stylesheet">


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
    <section class="p-lp2504__center">
      <header class="p-lp2504__header">

        <?php /* ファーストビュー */ ?>
        <section class="p-lp2504__firstview">
          <h1 class="p-lp2504__h1">
            <picture class="p-lp2504__firstview-picture">
              <source class="p-lp2504__firstview-image" srcset="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/fv_pic-pc.avif" type="image/avif" media="(min-width: 1031px)">
              <source class="p-lp2504__firstview-image" srcset="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/fv_pic-sp.avif" type="image/avif" media="(max-width: 1030px)">
              <img class="p-lp2504__firstview-image"
                src="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/fv_pic-pc.png" alt="結婚相談所バーサス婚活アプリ本当に結婚したいあなたのための婚約手引">
            </picture>
          </h1>

<style>
  body{
    overflow-x:hidden;
    height: 100%;
    touch-action: pan-y;
  }
  .p-lp2504__header .nav_content{

  }
  .nav_content{

  }
  .p-lp2504__header #drawer_input:checked ~ .nav_content{


  }
  .p-lp2504__header #drawer_input:checked ~ .drawer_open{

  }
  
</style>


          <!-- ハンバーガーメニュー部分 -->
          <div class="nav">

            <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
            <input id="drawer_input" class="drawer_hidden" type="checkbox">

            <!-- ハンバーガーアイコン -->
            <label for="drawer_input" class="drawer_open">
              <span></span>
            </label>

            <!-- メニュー -->
            <nav class="nav_content">
              <ul class="p-lp2504__menu nav_list">
                <li class="p-lp2504__menu-item p-lp2504__menu-item-odd nav_item">
                  <a class="p-lp2504__menu-link" href="#message">
                    結婚相談所？婚活アプリ？<br>あなたはどっち派？
                  </a>
                </li>
                <li class="p-lp2504__menu-item p-lp2504__menu-item-even nav_item">
                  <a class="p-lp2504__menu-link" href="#instruction">
                    そもそも結婚相談所って？<br>婚活アプリって？
                  </a>
                </li>
                <li class="p-lp2504__menu-item p-lp2504__menu-item-odd nav_item">
                  <a class="p-lp2504__menu-link" href="#difference">
                    もっと知りたい！<br>結婚相談所と婚活アプリの違い
                  </a>
                </li>
                <li class="p-lp2504__menu-item p-lp2504__menu-item-even nav_item">
                  <a class="p-lp2504__menu-link" href="#cta">
                    結婚相談所なら<br>サンセリテ青山
                  </a>
                </li>
                <li class="p-lp2504__menu-item p-lp2504__menu-item-odd nav_item">
                  <a class="p-lp2504__menu-link" href="#voice">
                    男女それぞれから見た<br>サンセリテ青山の魅力
                  </a>
                </li>
                <li class="p-lp2504__menu-item p-lp2504__menu-item-even nav_item">
                  <a class="p-lp2504__menu-link" href="#strength">
                    サンセリテ青山は全力で<br>婚活をサポートいたします！
                  </a>
                </li>
                <li class="p-lp2504__menu-item p-lp2504__menu-item-odd nav_item">
                  <a class="p-lp2504__menu-link" href="#case">
                    わたしたち！<br>サンセリテ青山で出会いました！
                  </a>
                </li>
                <li class="p-lp2504__menu-item p-lp2504__menu-item-even nav_item">
                  <a class="p-lp2504__menu-link" href="#form">
                    まずはお気軽にご来店ください！<br>初回来店予約
                  </a>
                </li>
              </ul>
            </nav>

          </div>

        </section>
        <?php /* ファーストビュー end */ ?>

      </header>