<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>


<article class="pages top">
  <section class="firstview">
    <div class="mv">
      <div class="mv-wrap">
        <div class="mv-bg"></div>
        <video id="video" webkit-playsinline="" playsinline="" muted="" autoplay="" loop=""
          src="<?php echo get_template_directory_uri() ?>/images/top/top_video.mp4" type="video/mp4">
        </video>
      </div>
    </div>

  </section>

  <section class="concept txt_center">
    <div class="sub">
      結婚に<span class="under_line">本気で、</span><br class="rwd">向き合う方のために。
    </div>

    <ul class="message rwd">
      <li>
        サンセリテ青山では
      </li>
      <li>
        「普段出会えない人と出会える場」
      </li>
      <li>
        「結婚に対して真剣に向き合う場」
      </li>
      <li>
        を創業からご提供し続けています。
      </li>
      <li class="sub">
        貴方の<span class="under_line">本気の婚活</span>を<br>サポートします。
      </li>
    </ul>

    <ul class="message pc">
      <li>
        「結婚相談所では生涯のパートナーなんて見つからない？」
      </li>
      <li>
        いいえ、見つかります。
      </li>
      <li>
        インターネットやSNSの普及により出会いの場は増えているはずですが、<br>
        未婚率は上昇し続けています。<br>
        「結婚に本気で向き合う方が集う場所」それが結婚相談所です。
      </li>
      <li>
        高収入男性に特化した結婚相談所 <span class="under_line">サンセリテ青山</span>
      </li>
      <li>
        私たちは「豊かな結婚」を実現するためのプロフェッショナルです。
      </li>
      <li class="sub">
        結婚相談所だからできる<br>
        本気の出会い・マッチングを全力でサポートします。
      </li>
    </ul>

    <ul class="link">
      <li>
        <a class="txt_white hover" href="<?php echo get_site_url(); ?>/form06/">
          2分程度の診断で未来の<br>
          セレブパートナーを簡単チェック！
        </a>
      </li>
      <li>
        <a class="txt_white hover" href="<?php echo get_site_url(); ?>/online/">
          <span class="txt_white">＼ご自宅から安心・簡単／</span>
          オンラインカウンセリング<br>
          大好評受付中です。
        </a>
      </li>
    </ul>
  </section>

  <section class="data">
    <dl>
      <dt class="sub background">
        <div class="contents_1 inner">
          <div class="txt">
            <span class="phrase">現在の男性会員平均年収</span><br>
            <?php 
  echo number_format(get_field('male-average-annual-income',3339));
?>
            <span class="unit">万円</span>
          </div>
        </div>
        <div class="contents_2 inner">
          <div class="notes">
            <span>リアルタイム計測</span>（<?php echo date("Y年n月j日");?>時点）<br>
            当店では、すべての男性会員様より収入証明書のご提出をいただいた上で、面談による入会審査を実施させていただいております。
          </div>
        </div>
      </dt>
      <dd class="chart">
        <div class="contents inner">
          <ul class="container inview fadeIn">
            <li class="txt">
              1年間のお見合い<br>
              成功率
            </li>
            <li class="img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/data_graf_1.svg" alt="1年間のお見合い成功率">
              <div>
                92％
              </div>
            </li>
          </ul>
          <ul class="container inview fadeIn">
            <li class="img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/data_graf_2.svg" alt="入会から1年以内の交際">
              <div>
                84％
              </div>
            </li>
            <li class="txt">
              入会から<br>
              1年以内の交際
            </li>
          </ul>
          <ul class="container inview fadeIn">
            <li class="txt">
              1年以内に<br>
              成婚した人の割合
            </li>
            <li class="img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/data_graf_3.svg" alt="1年以内に成婚した人の割合">
              <div>
                65％
              </div>
            </li>
          </ul>
          <ul class="container inview fadeIn">
            <li class="img">
              <img src="<?php echo get_template_directory_uri() ?>/images/top/data_graf_4.svg" alt="入会から交際までの平均期間">
              <div class="value">
                2.3ヶ月
              </div>
            </li>
            <li class="txt">
              入会から交際までの<br>
              平均期間
            </li>
          </ul>

        </div>
      </dd>
    </dl>
  </section>

  <section class="plan">
    <section class="mens gender">
      <h2>
        <img src="<?php echo get_template_directory_uri() ?>/images/top/planm_sub.svg"
          alt="男性向けプラン status plan ステータスプラン">
      </h2>
      <ul class="">
        <li class="txt">
          多忙な毎日を送るエリート男性を<br class="pc">対象とした独自のプランをご用意しています。
        </li>
        <li class="sub">
          <img src="<?php echo get_template_directory_uri() ?>/images/top/planm_txt.svg" alt="入会金・月額活動費¥0">
        </li>
        <li class="link">
          <a href="<?php echo get_site_url(); ?>/intelligence_members/">
            <div class="arrow"></div>
            <h3>
              旧帝大・早慶プレミアムメンバーズ
            </h3>
          </a>
          <a href="<?php echo get_site_url(); ?>/doctors-club/">
            <div class="arrow"></div>
            <h3>
              ドクターズプレミアム
            </h3>
          </a>
        </li>
        <li class="btn">
          <a href="<?php echo get_site_url(); ?>/statusplan2/">
            男性向けプランを詳しく見る
          </a>
        </li>
      </ul>
    </section>
    <section class="ladies gender">
      <h2>
        <img src="<?php echo get_template_directory_uri() ?>/images/top/planl_sub.svg"
          alt="女性向けプラン private style プライベートスタイル">
      </h2>
      <ul class="">
        <li class="txt">
          専属カウンセラーによる完全担当制、<br class="pc">
          充実した自分磨きサポートをご用意しています。
        </li>
        <li class="sub">
          <img src="<?php echo get_template_directory_uri() ?>/images/top/planl_txt.svg"
            alt="他の結婚相談所では実現できない出会う男性会員が全員高収入という奇跡">
        </li>
        <li class="link">
          <a href="<?php echo get_site_url(); ?>/party/">
            <div class="arrow"></div>
            <h3>
              お見合いパーティー
            </h3>
          </a>
          <a href="<?php echo get_site_url(); ?>/beauty/">
            <div class="arrow"></div>
            <h3>
              サンセリテ・ビューティー
            </h3>
          </a>
        </li>
        <li class="btn">
          <a href="<?php echo get_site_url(); ?>/private_style/">
            女性向けプランを詳しく見る
          </a>
        </li>
      </ul>
    </section>
  </section>

  <section class="cta txt_white">
    <div class="btn">
      <a class="hover" href="<?php echo get_site_url(); ?>/form01/">
        <span class="txt_white">＼初回無料！／</span>
        カウンセリングに申し込む
      </a>
    </div>
  </section>

  <section class="conversation background">
    <ul class="inner">
      <li>
        <h2 class="txt_white">
          サンセリテ青山<br class="rwd">
          <span class="rwd txt_white">×</span>
          GUEST 対談
        </h2>
      </li>
      <li class="txt_white">
        サンセリテでは定期的にゲストをお招きし、結婚や人生にまつわる価値あるお話をご紹介しています。
      </li>
      <li class="btn">
        <a href="<?php echo get_site_url(); ?>/interview/">
          対談を読む
        </a>
      </li>
    </ul>
  </section>

  <section class="voice background">
    <div class="btn">
      <a class="hover" href="<?php echo get_site_url(); ?>/voice/">
        <h2 class="txt_white">
          お客様の声
        </h2>
      </a>
    </div>
  </section>

  <section class="question">
    <h2 class="txt_white">
      よくある質問
    </h2>
    <?php // アコーディオン ?>
    <div class="inner">
      <dl class="accordion_1">
        <dt class="q_txt">
          <span>q.</span>サンセリテ青山と大手の結婚情報サービスとは何が違うのですか？
        </dt>
        <dd class="a_txt">
          <div>
            <span>a.</span>私どもは、大手の結婚情報サービスとは一線を画した上質の結婚情報サービスとして、厳正なる会員資格を設け、青山という地に象徴される品格ある会員様に相応しい信頼ある情報をお届けしております。また、一流のサロン及び外資系ホテルと独自の提携関係を結び、会員の結婚活動を様々な場面でサポートしております。
          </div>
        </dd>
      </dl>
      <div class="line">
        <hr>
      </div>
      <dl class="accordion_1">
        <dt class="q_txt">
          <span>q.</span>どんな方がサンセリテ青山に入会されているのですか？
        </dt>
        <dd class="a_txt">
          <div>
            <span>a.</span>男性は30代の方が多く登録され、青山ブランドにふさわしい高学歴で高収入層の割合が高くなっております。女性は20代後半から30代の方が多く登録されています。みなさん結婚を真剣に考えておられる誠実な方ばかりですのでご安心ください。
          </div>
        </dd>
      </dl>
      <div class="line">
        <hr>
      </div>
      <dl class="accordion_1">
        <dt class="q_txt">
          <span>q.</span>《理想のお相手》が自分でもわかりません。
        </dt>
        <dd class="a_txt">
          <div>
            <span>a.</span>ご自身一人きりで婚活するのは決して楽な事ではありません。サンセリテ青山では専属のベテランカウンセラーが貴方の本当に求めているお相手像を一緒に見つけ出すお手伝いを致します。
          </div>
        </dd>
      </dl>
      <div class="line">
        <hr>
      </div>
      <dl class="accordion_1">
        <dt class="q_txt">
          <span>q.</span>入会してどれくらいの期間で成婚できますか？
        </dt>
        <dd class="a_txt">
          <div>
            <span>a.</span>弊社では1年以内の成婚を目指し、サポートを致します。中には活動して2ヶ月、3ヶ月で成婚された方もいらっしゃいます。
          </div>
        </dd>
      </dl>
      <div class="line">
        <hr>
      </div>
      <dl class="accordion_1">
        <dt class="q_txt">
          <span>q.</span>男女比率はどれくらいですか？
        </dt>
        <dd class="a_txt">
          <div>
            <span>a.</span>男性、女性が50対50のおよそ半々です。
          </div>
        </dd>
      </dl>
    </div>
    <div class="btn">
      <a href="<?php echo get_site_url(); ?>/faq">
        他の質問を見る
      </a>
    </div>
  </section>
  <section class="column">
    <h2>
      サンセリテ青山の<br class="rwd">婚活コラム
    </h2>

    <?php // スライダーのコンテナ ?>
    <div class="swiper">
      <?php // 必要に応じたwrapper ?>
      <div class="swiper-wrapper">

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

        <?php // スライド ?>
        <div class="swiper-slide">
          <a href="<?php echo $link; ?>">
            <img src="<?php echo $eyecatch; ?>" alt="<?php echo $title; ?>">
            <div><?php echo $title; ?></div>
            <ul>
              <li>#<?php echo $tag1; ?></li>
              <?php if(!empty($item->tag2)): ?>
              <li>#<?php echo $tag2; ?></li>
              <?php endif; ?>
              <?php if(!empty($item->tag3)): ?>
              <li>#<?php echo $tag3; ?></li>
              <?php endif; ?>
            </ul>
          </a>
        </div>

        <?php
              $i++;
            }
          }
          ?>

      </div>
    </div>


    <div class="btn">
      <a href="<?php echo get_site_url(); ?>/column">
        他のコラムを読む
      </a>
    </div>
  </section>
</article>




<?php get_footer(); ?>