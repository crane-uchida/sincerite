

<footer>
<?php if ( is_page('kekkon-uranai-kekka') ) : ?>

  <?php //スマホとタブレットでは画像表示
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) {
  ?>


  <div class="partnerDiagnosisBtn">
    <a href="<?php echo get_site_url(); ?>/form01/">
      <img src="<?php echo get_template_directory_uri() ?>/images/divination/partner_diagnosis_btn.jpg" alt="来店予約">
    </a>
  </div>


<div class="column">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css_new/sp_index.css" media="all">
<div class="columnttl">サンセリテ青山の婚活コラム</div>
<div class="columnsubttl">婚活にまつわるお悩みから、お医者様やお金持ちとの結婚のこと、<br>
    男性視点・女性視点からのさまざまなトピックスを定期配信しています。
</div>
            <div class="columncont">
            <?php
            require_once TEMPLATEPATH. '/inc/Feed.php'; // 解凍したファイル『rss/Feed.php』をテーマディレクトリ内に格納する。
            $feed = new Feed;
            $url = 'https://www.club-sincerite.co.jp/column/feed'; // RSSのURL
            $rss = $feed->loadRss($url);
            $num = 6; //表示させたい件数
            $i = 0;
            $desW = 40; //概要（本文）の文字数
            if ( $desW != 0 ){
              $desW = ($desW*2)+2;
            }
            foreach ( $rss->item as $item ){
              if($i>=$num){
              } else {
                $site_name = $rss->title; // サイト名
                $site_link = $rss->link; // サイトリンク
                $site_description = $rss->description; // サイトディスクリプション
                $title = $item->title; // 記事タイトル
                $link = $item->link; // 記事リンク
                $timestamp = strtotime( $item->pubDate ); // 更新日時
                $image = $item->image->url; // アイキャッチ
                $description = $item->description; // 概要（本文）
                $description = strip_tags($description);
                if ( $desW != 0 ){
                  $description = mb_strimwidth($description, 0, $desW, "…",'utf-8'); // 概要（本文）の文字数が超えたら『…』が付く
                }
                $eyecatch = '/img/no-image.png'; // アイキャッチ画像がない場合の代替画像
                if ( $image ){
                  $eyecatch = $image;
                }
                $days = 7; // 『New』を表示する日数
                $today = date('U'); // 今日って
                $sa = date('U',($today - $timestamp)) / 86400; // timestamp()の引数に86400を指定
                $tag1 = $item->tag1; //タグ1
                $tag2 = $item->tag2; //タグ2
                $tag3 = $item->tag3; //タグ3
            ?>

            <div class="columnbox">
              <a href="<?php echo $link; ?>">
                <img src="<?php echo $eyecatch; ?>" alt="<?php echo $title; ?>">

                <ul class="tags">
                  <li><?php echo $tag1; ?></li>
                  <?php if(!empty($item->tag2)): ?>
                    <li><?php echo $tag2; ?></li>
                  <?php endif; ?>
                  <?php if(!empty($item->tag3)): ?>
                    <li><?php echo $tag3; ?></li>
                  <?php endif; ?>
                </ul>

                <span class="text"><?php echo $title; ?></span>
              </a>
            </div>

            <?php
                $i++;
              }
            }
            ?>
            </div>
            <a href="<?php echo get_site_url(); ?>/column" class="morecolumn">サンセリテ青山の婚活コラムをもっと見る</a>

        </div>









  <?php } else { //PCではテキスト表示 ?>
  <div class="lightBlueBox">
    <div class="l-container">
      <div class="partnerDiagnosis flex">
        <div class="left"><img src="<?php echo get_template_directory_uri() ?>/images/divination/partner_sindan_kirinuki.gif" alt="パートナー"></div>
        <div class="right">
          <p class="txt1 cl_corporate yumin">高収入男性に特化した結婚相談所 サンセリテ青山では<br class="br-sp">あなたの未来のパートナーにふわさしい男性を<br class="br-sp">簡単な診断をもとに無料でご案内いたします。</p>
          <div class="partnerDiagnosisBtn"><a href="<?php echo get_site_url(); ?>/form01/" class="yumin">来店予約する</a></div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

<?php endif; ?>

<?php /* ?>
  <div class="corporateColorBox">
    <div class="lmrBox l-920">

      <div class="left">
        <div class="innerBox">
          <a class="logo" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/images/divination/logo2.svg" alt="東京・表参道の結婚相談所 サンセリテ青山">
          </a>
          <div class="pcNone name yumin">サンセリテ青山<span class="headOffice">表参道本店</span></div>
        </div>
      </div>

      <div class="middle">
        <div class="spNone name yumin">サンセリテ青山</div>
        <div class="adr">東京都渋谷区神宮前5-6-13 ヴァイス表参道 B1<br>《 地下鉄 銀座線・半蔵門線・千代田線 表参道駅 A1出口徒歩5分 》</div>
        <div class="tel">TEL.03-5468-2181</div>
      </div>

      <div class="right">
        <p class="spNone fs16 lh16">高収入・エリート男性に特化した結婚相談所<br>サンセリテ青山の無料来店相談はこちらから</p>
        <ul class="btnBox">
          <li class="tel pcNone"><a href="tel:0354682181">お電話</a></li>
          <li class="access"><a href="<?php echo get_site_url(); ?>/access-tokyo">アクセス</a></li>
          <li class="reserve spNone"><a href="<?php echo get_site_url(); ?>/form01/">来店予約</a></li>
          <li class="document spNone"><a href="<?php echo get_site_url(); ?>/form05/">資料請求</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="gmaps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.457392602265!2d139.70638081525846!3d35.66573808019792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca1059007e1%3A0xf9b88a254332709c!2z44CSMTUwLTAwMDEg5p2x5Lqs6YO95riL6LC35Yy656We5a6u5YmN77yV5LiB55uu77yW4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1445235784775" frameborder="0" style="border:0"></iframe>
  </div>

  <nav>
    <ul>
      <li>
          <a href="<?php echo get_page_link('4'); ?>"><?php echo get_page('4')->post_title; ?></a>
      </li>
      <li>
          <a href="<?php echo get_page_link('74'); ?>"><?php echo get_page('74')->post_title; ?></a>
      </li>
      <li>
          <a href="<?php echo get_page_link('8'); ?>"><?php echo get_page('8')->post_title; ?></a>
      </li>
      <li>
          <a href="<?php echo get_page_link('1918'); ?>">コース・料金</a>
      </li>
      <li>
          <a href="<?php echo get_site_url(); ?>/access-tokyo">店舗案内</a>
      </li>
      <li>
          <a href="<?php echo get_page_link('140'); ?>">お見合いパーティー</a>
      </li>
      <li>
          <a href="<?php echo get_page_link('78'); ?>"><?php echo get_page('78')->post_title; ?></a>
      </li>
      <li>
          <a href="<?php echo get_page_link('17'); ?>">婚活体験談</a>
      </li>
      <li>
          <a href="<?php echo get_page_link('151'); ?>"><?php echo get_page('151')->post_title; ?></a>
      </li>
    </ul>
  </nav>
<?php */ ?>


<div class="linkBox"><a href="<?php echo get_site_url(); ?>">高収入男性に特化した結婚相談所&nbsp;<br>サンセリテ青山 公式サイト</a></div>

  <div class="privacy">
    <div class="l-920">
      <div class="ttl">個人情報の取扱いについて</div>
      <p class="content">株式会社ランスクリエイトは、結婚相談所事業およびそれに付帯する事業などの業務を行う上でお客様、並びに従業者の重要な個人情報を保護することを重大な社会的責任であると認識しております。将来に亘って、この大切な個人情報を適正、安全に取り扱うために従業者のすべてが遵守すべき行動基準として本個人情報保護方針を定め、その遵守の徹底を図って参ります。</p>
    </div>
  </div>
  <small class="fs10">&copy; Sincerite Aoyama. All rights Reserved.</small>




  <?php // スマホ・タブレット・PCの条件分岐
  	$ua=$_SERVER['HTTP_USER_AGENT'];
  	$browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false) || (strpos($ua, 'iPad') !== false));
  		if ($browser == true){
  		$browser = 'sp';
  	}
  	if($browser == 'sp'){
  ?>

  <!-- スマホ・タブレットの場合 -->
<?php /* ?>
<?php if ( !(is_page('kekkon-uranai-kekka')) ) : ?>
    <ul id="fixNav">
      <li class="counseling"><a href="<?php echo get_site_url(); ?>/form01/">あなたの理想の相手をご紹介。<br>初回無料カウンセリングに申し込む。</a></li>
      <li class="document"><a href="<?php echo get_site_url(); ?>/form05/">資料請求する。</a></li>
    </ul>
<?php else: ?>
  <script>
  jQuery('small').css('padding-bottom','20px');
  </script>
<?php endif; ?>
<?php */ ?>


  <?php }else{ ?>

    <!-- PCの場合 -->

  <?php } ?>


</footer>









<?php wp_footer(); ?>
<script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/js/fixNav.js"></script>


</body>
</html>
