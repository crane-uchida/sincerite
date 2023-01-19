<!DOCTYPE html>
<html class="html" lang="ja-JP">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(''); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/divination.css"/>
    <link media='(max-width: 640px)' href="<?php echo esc_url(get_template_directory_uri()); ?>/css_new/sp_header.css" rel="stylesheet">
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper.min.js"></script>
    <script>
      (function(d) {
        var config = {
          kitId: 'gms7ljh',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
<?php wp_head(); ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MVKPWGR');</script>
<!-- End Google Tag Manager -->
</head>

<body class="kekkon-uranai">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVKPWGR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="l-920">

  <?php
  $ua=$_SERVER['HTTP_USER_AGENT'];
  $browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
  if ($browser == true){
  $browser = 'sp';
  }
  if($browser == 'sp'){
  ?>

  <?php get_template_part( 'inc/header_sp' );?>

  <?php }else{ ?>

<div class="lmrBox">
  <div class="left">
    <a class="logo" href="<?php echo get_site_url(); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/images/divination/logo.svg" alt="東京・表参道の結婚相談所 サンセリテ青山">
    </a>
  </div>
  <div class="middle">
    <div class="annualIncome cl_corporate yumin">現在の男性会員&nbsp;&nbsp;平均年収&nbsp;&nbsp;約<span class="price">1,500</span><span class="en">万円</span></div>
    <nav class="yumin">
      <ul>
        <li>
          <a href="<?php echo get_page_link('4'); ?>" class="cl_corporate">ABOUT<span class="jp">はじめての方へ</span></a>
        </li>
        <li>
          <a href="<?php echo get_page_link('74'); ?>" class="cl_corporate">For MEN<span class="jp">男性プラン</span></a>
        </li>
        <li>
          <a href="<?php echo get_page_link('8'); ?>" class="cl_corporate">For LADY<span class="jp">女性プラン</span></a>
        </li>
        <li>
          <a href="<?php echo get_page_link('140'); ?>" class="cl_corporate">PARTY<span class="jp">お見合いパーティー</span></a>
        </li>
        <li>
          <a href="<?php echo get_site_url(); ?>/column" class="cl_corporate">COLUMN<span class="jp">コラム</span></a>
        </li>
        <li>
          <a href="<?php echo get_site_url(); ?>/access-tokyo" class="cl_corporate">ACCESS<span class="jp">店舗案内</span></a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="right">
    <a href="<?php echo get_site_url(); ?>/form01/" class="reserve yumin"><span>初回無料カウンセリング</span>来店予約</a>
  </div>
</div>
<div class="telBox cl_corporate yumin">
  <div class="tel"><span>TEL</span>03-5468-2181</div>
  <div class="time">受付時間&nbsp;&nbsp;10:00 - 19:00（水曜定休）</div>
</div>







  <?php } ?>

</header>
