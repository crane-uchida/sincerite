<?php
/*
Template Name: トップページ
*/
?>

<?php get_header("new"); ?>
<style>
  .slider {
    display: none;
  }
 
//slick-initializedクラスが付与されたら
  .slider.slick-initialized {
    display: block; 
  }
</style>

<!-- Hero Section -->
<div class="hero " id="main-visual">
  <div class="hero__wrapper">
    <!-- <div class="hero__banner-ttl d-md-none">
      <div class="container">
        <h1 class="hero__banner-fst">
          <span class="hero__banner-fst-span">HIGH</span><span class="hero__banner-fst-span">CLASS</span><span>MARIAGE</span>
        </h1>
      </div>
    </div> -->

    <div class="hero__left">
      

      <div class="hero__banner">
       <h1>
        <a href="<?php echo get_site_url(); ?>" class="hero__logo d-none d-md-block">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/header-logo-gold.svg" alt="SINCERITE AOYAMA" width="159" height="124" class="img-fluid" loading="lazy">
        <span class="hero__ttl">高収入男性に特化した<br>結婚相談所 </span>
        </a>
       </h1>
        <div class="hero-bottom">
        <div class="hero__banner-fst d-md-inline-flex">
          <span class="hero__banner-fst-span">HIGH</span><span class="hero__banner-fst-span">CLASS</span><span>MARIAGE</span>
        </div>

        <p class="hero__banner-sec d-none d-md-inline-block">
          ハイクラスな婚活を<span>サポート</span>
        </p>
        <p class="hero__banner-trd d-none d-md-flex">
          <span class="fs-a">
            <span class="-dots">稀</span><span class="-dots">有</span>
          </span><span class="fs-t">な</span><span class="fs-s">､</span><span class="-dots">出</span><span class="-dots">会</span><span class="-dots">い</span><span class="fs-b">を</span><br class="d-md-none"><span class="fs-line"><span class="fs-b">実現</span><span class="fs-u">す</span><span class="fs-b">る</span></span><span class="fs-c">。</span>
        </p>
        </div>
      </div>

    </div>

    <div class="hero__rgt">
      <div class="hero__slider">
        <div class="hero__slide">
          <picture>
            <source media="(max-width:767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img1-sp.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img1.jpg" alt="ハイクラスな婚活をサポート稀有な､出会いを実現する。" width="1377" height="1080" class="img-fluid" loading="eager">
          </picture>
        </div>
        <div class="hero__slide">
          <picture>
            <source media="(max-width:767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img2-sp.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img2.jpg" alt="ハイクラスな婚活をサポート稀有な､出会いを実現する。" width="1377" height="1080" class="img-fluid" loading="eager">
          </picture>
        </div>
        <div class="hero__slide">
          <picture>
            <source media="(max-width:767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img3-sp.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img3.jpg" alt="ハイクラスな婚活をサポート稀有な､出会いを実現する。" width="1377" height="1080" class="img-fluid" loading="eager">
          </picture>
        </div>
        <div class="hero__slide">
          <picture>
            <source media="(max-width:767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img4-sp.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/hero/hero-img4.jpg" alt="ハイクラスな婚活をサポート稀有な､出会いを実現する。" width="1377" height="1080" class="img-fluid" loading="eager">
          </picture>
        </div>
      </div>
    </div>

    <div class="hero__banner d-md-none">
      <p class="hero__banner-sec">
        ハイクラスな婚活を<span>サポート</span>
      </p>
      <p class="hero__banner-trd">
        <span class="fs-a">
          <span class="-dots">稀</span><span class="-dots">有</span>
        </span><span class="fs-t">な</span><span class="fs-s">､</span><span class="-dots">出</span><span class="-dots">会</span><span class="-dots">い</span><span class="fs-b">を</span><br class="d-md-none"><span class="fs-line"><span class="fs-b">実現</span><span class="fs-u">す</span><span class="fs-b">る</span></span><span class="fs-c">。</span>
      </p>
    </div>
  </div>
</div>

<main id="main" class="main">

  <!-- INCOME -->
  <div class="income">
    <div class="income__cnt">
      <div class="container">
        <div class="income__wrapper">
          <div class="income__box">
            <!-- <h3 class="income__tittle d-md-none">STRONG POINT</h3> -->
            <div class="income__inner">
              <div class="income__left">
                <p class="income__date-wpr">
                  <span class="income__time">リアルタイム計測</span>
                  <span class="income__date"><em><?php echo date('Y.m.d'); ?></em>時点</span>
                </p>
                <h2 class="income__ttl">
                  男性会員様 平均年収
                </h2>
              </div>

              <div class="income__right">
                <p class="income__price"><?php $myfield = scf::get('年収'); echo $myfield; ?><span>万円</span></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/banner-sp.jpg" width="375" height="250" loading="lazy" alt="" class="img-fluid income-img">
  </div>

  <!-- POPULAR -->
  <div class="popular poptop">
    <div class="container">
      <h2 class="heading-primary">
        <span class="heading-primary-en">PICK UP CONTENTS</span>
        <span class="heading-primary-jp">いま人気のコンテンツ</span>
      </h2>

      <div class="popular__box">
        <div class="swiper popular__swiper">
         <?php $group_set = SCF::get( '人気のコンテンツグループ' );	foreach ( $group_set as $field_name => $field_value ) {	?>
          <div class="popular__swiper-slide">
            <a href="<?php echo( $field_value['人気コンテンツURL'] ); ?>" class="popular__img" target="<?php echo( $field_value['リンクの種類'] ); ?>">
              <img src="<?php echo wp_get_attachment_url( $field_value['人気コンテンツ画像'] ); ?>" alt="" width="400" height="115" class="img-fluid" loading="lazy">
            </a>
          </div>
         <?php } ?>
        </div>

        <div class="popular__arws">
          <div class="popular-button-prev slick-prev slider-button">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/popular/popular-arw.svg" width="32" height="32" loading="lazy" alt="" class="img-fluid">
          </div>
          <div class="popular-pagination"></div>
          <div class="popular-button-next slick-next slider-button">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/popular/popular-arw.svg" width="32" height="32" loading="lazy" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- NEWS -->


  <div class="news">
    <div class="container">
      <h2 class="heading-primary">
        <span class="heading-primary-en">NEWS</span>
        <span class="heading-primary-jp">お知らせ</span>
      </h2>
     
     

      <div class="news__box">
       
       <?php
// 取得したい内容を配列に記載します（不要箇所は省略可）
$args = array(
	'posts_per_page'   => 3, // 読み込みしたい記事数（全件取得時は-1）
	//'category'         => 1, // 読み込みしたいカテゴリID（複数の場合は '1,2'）
	//'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
	'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
	//'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切）
);

// 配列で指定した内容で、記事情報を取得
$datas = get_posts( $args );

// 取得した記事情報の表示
if ( $datas ): // 記事情報がある場合はforeachで記事情報を表示

// ↓ ループ開始 ↓
foreach ( $datas as $post ): // $datas as $post の $datas は取得時に設定した変数名、$postは変更不可
	setup_postdata( $post ); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
?> <?php
$cat = get_the_category();
$cat_id = $cat[0] -> cat_ID;
$cat_name = $cat[0] -> name;
$cat_slug = $cat[0] -> slug;
?>
        <a href="<?php the_permalink(); ?>" class="news__link">
          <div class="news__cat-box">
           <p class="news__cat cat<?php echo esc_html($cat_id); ?>"><?php echo esc_html($cat_name); ?></p>
            <p class="news__date"><?php the_time('Y.m.d'); ?></p>
          </div>
          <p class="news__desc"><span><?php the_title(); ?></span></p>
        </a>

       
       <?php
endforeach; 
// ↑ ループ終了 ↑

else: // 記事情報がなかったら
?>
       お知らせはありません。
<?php
endif;

// 一覧情報取得に利用したループをリセットする
wp_reset_postdata();
?>

        <a href="<?php echo get_site_url(); ?>/news/" class="btn-primary">一覧を見る</a>
      </div>
    </div>
  </div>

  <!-- ABOUT -->
  <div class="about">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/about/about-bg.jpg" width="" height="480" alt="" class="img-fluid about__main-img" loading="lazy">
    <div class="about__inner">
      <h2 class="heading-primary">
        <span class="heading-primary-en">ABOUT</span>
        <span class="heading-primary-jp">サンセリテ青山について</span>
      </h2>

      <div class="about__box">
        <p class="about__desc">サンセリテ青山が創業から<br class="d-md-none">ご提供し続けていること</p>

        <div class="about__content">
          <p class="about__content-desc">日常で<br class="d-md-none">巡り会えない人<br class="d-md-none">と<br class="d-none d-md-block">出会える場</p>
          <p class="about__content-mid">&</p>
          <p class="about__content-desc">結婚に<br class="d-md-none">対して真剣に<br>向き合う場</p>
        </div>

        <div class="about__banner-wpr">
          <div class="about__row">
            <div class="about__col">
              <div class="about__banner">
                <p class="about__txt">男性会員様<span>の</span><br>平均年収</p>
                <p class="about__rank">
                  <span>業界</span>
                  <em>No.1</em>
                  <span class="about__rank-three">クラス</span>
                </p>
                <p class="about__rank-note">※大手結婚相談所 各社公式サイト掲載の情報より当社調べ</p>
              </div>
            </div>

            <!--<div class="about__col">
              <div class="about__banner">
                <p class="about__txt">ハイクラス<br>婚活会員数</p>

                <p class="about__rank">
                  <span>業界</span><em>
                    No.1</em>
                </p>
              </div>
            </div>-->

            <div class="about__col">
              <div class="about__banner">
                <p class="about__txt">年収1000万円以上<span>の</span><br>男性会員割合</p>

                <p class="about__rank-2">
                  <em>
                    86<small>%</small></em>
                  <span>以上</span>
                </p>
                <p class="about__rank-note">※弊社男性会員様 2023年7月平均収入より</p>
              </div>
            </div>
          </div>
        </div>

        <p class="about__desc">結婚に本気で向き合うために、<br>
          あなたの本気の婚活をサポートします。</p>

        <a href="/introduction/" class="btn-primary">はじめての方はこちら</a>
      </div>
    </div>
  </div>


  <!-- PLAN -->
  <div class="plan">
    <h2 class="heading-primary">
      <span class="heading-primary-en">PLAN AND PRICE</span>
      <span class="heading-primary-jp">プランと料金について</span>
    </h2>

    <div class="plan__box">
      <div class="plan__box-wrapper">
        <div class="plan__row">
          <div class="plan__col-lg">
            <figure class="plan__fig">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/plan/plan-men-01.jpg" width="732" height="533" loading="lazy" alt="PLAN FOR MEN" class="img-fluid">

              <figcaption class="plan__fig-capt">
                PLAN<br>
                FOR<br>
                MEN
              </figcaption>
            </figure>
          </div>
          <div class="plan__col-sm">
            <p class="plan__ttl-sm">男性向けプラン</p>

            <p class="plan__desc">多忙な毎日を送る貴方様に最適な<br>
              独自のプランをご用意しました</p>

            <div class="plan__content">
              <p class="plan__content-desc">完全成果報酬型の</p>
              <h3 class="plan__content-ttl">入会金・月額費用0円</h3>
            </div>

            <div class="plan__content">
              <p class="plan__content-desc">業界No.1を誇る</p>
              <h3 class="plan__content-ttl">ハイクラス女性の会員登録数</h3>
            </div>

            <div class="plan__content">
              <p class="plan__content-desc">専属のベテランカウンセラーによる</p>
              <h3 class="plan__content-ttl">トータルサポート完備</h3>
            </div>

            <a href="/men/" class="btn-primary -no">男性向けプランのご案内はこちら</a>
          </div>
        </div>
      </div>

      <div class="plan__box-wrapper">
        <div class="plan__row -wmen">
          <div class="plan__col-sm -pnk ">
            <div class="plan__pnk-box">
              <p class="plan__ttl-sm -pnk">女性向けプラン</p>

              <p class="plan__desc">他の結婚相談所では実現できない<br>
                男性会員が全員高収入という奇跡</p>

              <div class="plan__content">
                <p class="plan__content-desc -pnk">男性会員様の平均年収 </p>
                <h3 class="plan__content-ttl -pnk">1,500万円以上</h3>
              </div>

              <div class="plan__content">
                <p class="plan__content-desc -pnk">高収入男性との</p>
                <h3 class="plan__content-ttl -pnk">1年以内の成婚率63%以上</h3>
              </div>

              <div class="plan__content">
                <p class="plan__content-desc -pnk">夢を叶えるための、</p>
                <div class="plan__content-ttl-wpr">
                  <h3 class="plan__content-ttl -pnk">知性・感性・美を磨く</h3>
                  <h3 class="plan__content-ttl -pnk">プロのサポート</h3>
                </div>
              </div>

              <a href="/women/" class="btn-primary -no">女性向けプランのご案内はこちら</a>
            </div>
          </div>

          <div class="plan__col-lg  -wmen">
            <figure class="plan__fig -rt">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/plan/plan-women-01.jpg" width="732" height="533" loading="lazy" alt="PLAN FOR WOMEN" class="img-fluid">

              <figcaption class="plan__fig-capt -wmen">
                PLAN<br>
                FOR<br>
                WOMEN
              </figcaption>
            </figure>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- DATA -->
  <div class="data">
    <div class="container">
      <h2 class="heading-primary">
        <span class="heading-primary-en">LATEST DATA</span>
        <span class="heading-primary-jp">最新データ</span>
      </h2>

      <div class="data__box">
        <div class="data__row">
          <!--<div class="data__col">
            <div class="data__col-wpr">
              <p class="data__col-desc -sm">登録会員数</p>
              <figure class="data__fig">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/data/data-01.svg" width="98" height="68" loading="lazy" alt="登録会員数" class="img-fluid">
                <figcaption class="data__fig-capt">DATA<br>01</figcaption>
              </figure>

              <div class="data__col-content">
                <p class="data__col-desc -md">登録会員数</p>
                <p class="data__col-digi"><span class="data__col-no">644</span>名</p>
                <p class="data__col-req">※2023.4.6 更新</p>
              </div>
            </div>
          </div>-->

          <div class="data__col">
            <div class="data__col-wpr">
              <p class="data__col-desc -sm">入会から交際まで</p>
              <figure class="data__fig">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/data/data-02.svg" width="83" height="83" loading="lazy" alt="入会から交際まで" class="img-fluid">
                <figcaption class="data__fig-capt">DATA<br>01</figcaption>
              </figure>

              <div class="data__col-content">
                <p class="data__col-desc -md">入会から交際まで</p>
                <p class="data__col-digi"><span class="data__col-digi-vtl">平均</span><span class="data__col-no -sm">1~2<span class="data__col-digi -inline">ヶ月</span></span>以内</p>
              </div>
            </div>
          </div>

          <div class="data__col">
            <div class="data__col-wpr">
              <p class="data__col-desc -sm">平均お見合い成功率</p>
              <figure class="data__fig">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/data/data-03.svg" width="116" height="82" loading="lazy" alt="平均お見合い成功率" class="img-fluid">
                <figcaption class="data__fig-capt">DATA<br>02</figcaption>
              </figure>

              <div class="data__col-content">
                <p class="data__col-desc -md">平均お見合い成功率</p>
                <p class="data__col-digi"><span class="data__col-no">98</span><span class="data__col-prcnt">%</span>以上
                </p>
              </div>
            </div>
          </div>

          <!--<div class="data__col">
            <div class="data__col-wpr">
              <p class="data__col-desc -sm">歴代成婚数</p>
              <figure class="data__fig">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/data/data-04.svg" width="93" height="69" loading="lazy" alt="歴代成婚数" class="img-fluid">
                <figcaption class="data__fig-capt">DATA<br>04</figcaption>
              </figure>

              <div class="data__col-content">
                <p class="data__col-desc -md">歴代成婚数</p>
                <p class="data__col-digi"><span class="data__col-no">780</span>名</p>
              </div>
            </div>
          </div>-->
        </div>

        <p class="data__txt">多くの夢を実現し続けて17年</p>

        <a href="<?php echo get_site_url(); ?>/introduction/#reason" class="btn-primary -data">選ばれる理由を見る</a>
      </div>
    </div>
  </div>



  <!-- CUSTOMER VOICE -->
  <div class="voice">
    <h2 class="heading-primary">
      <span class="heading-primary-en">CUSTOMER VOICE</span>
      <span class="heading-primary-jp">ご成婚されたお客様の声</span>
    </h2>

    <div class="voice__block">
      
      
      <div class="slick-slider voice__slider">
       <?php
global $post;
$args = array(
  'posts_per_page' => 4,
  'post_type'=> 'voice_page',  
);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="voice__swiper-slide">
          <div class="voice__card">
            <p class="voice__card-desc"><?php $customfield = SCF::get('抜粋テキスト'); echo nl2br($customfield);?></p>
            <div class="voice__card-person">
             <?php $status = SCF::get('性別'); ?>
              <?php if($status == '男性'): ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/voice/voice-icon02.svg" alt="<?php $myfield = scf::get('年齢'); echo $myfield; ?> <?php $myfield = scf::get('性別'); echo $myfield; ?> / <?php $myfield = scf::get('職業'); echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間'); echo $myfield; ?>" loading="lazy" width="101" height="101">
              <?php elseif($status == '女性'): ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/voice/voice-icon01.svg" alt="<?php $myfield = scf::get('年齢'); echo $myfield; ?> <?php $myfield = scf::get('性別'); echo $myfield; ?> / <?php $myfield = scf::get('職業'); echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間'); echo $myfield; ?>" loading="lazy" width="101" height="101">
              <?php endif; ?>
              <p class="voice__card-ttl">
                <?php $myfield = scf::get('年齢'); echo $myfield; ?> <?php $myfield = scf::get('性別'); echo $myfield; ?> / <?php $myfield = scf::get('職業'); echo $myfield; ?><br>
                活動期間<?php $myfield = scf::get('活動期間'); echo $myfield; ?>
              </p>
            </div>
          </div>
        </div>
       <?php
endforeach;
wp_reset_postdata();
?>
      </div>
      
      
      <div class="voice__arws">
        <div class="slider-button slick-next voice__swiper-button-prev">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/voice/voice-swiper-pev.svg" width="32" height="32" loading="lazy" alt="" class="img-fluid -nohover">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/popular/popular-arw-hover.svg" width="32" height="32" loading="lazy" alt="" class="img-fluid -hover">
        </div>

        <div class="slider-pagination"></div>

        <div class="slider-button slick-prev voice__swiper-button-next">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/voice/voice-swiper-pev.svg" width="32" height="32" loading="lazy" alt="" class="img-fluid -nohover">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/popular/popular-arw-hover.svg" width="32" height="32" loading="lazy" alt="" class="img-fluid -hover">
        </div>
      </div>
      <a href="/voice/" class="btn-primary -voice">すべて見る</a>
    </div>
  </div>
  
 
  


  <!-- GUEST -->
  <div class="gst">
    <div class="container">
      <h2 class="heading-primary">
        <span class="heading-primary-en">GUEST INTERVIEW</span>
        <span class="heading-primary-jp">結婚や人生にまつわる<br class="d-md-block d-none">
          価値あるお話をご紹介</span>
      </h2>

      <div class="gst__box">
        <div class="gst__wpr">
          <div class="gst__row">
            <div class="gst__col">
              <a href="/interview/konishi/" class="gst__link">
                <div class="gst__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-01.jpg" width="270" height="180" loading="lazy" alt="第9回 自分をさらけ出せるのが結婚の良さ" class="img-fluid">
                </div>
                <h3 class="gst__ttl">第9回 自分をさらけ出せるのが結婚の良さ</h3>

                <p class="gst__desc">ジャーナリスト・通訳<br>
                  小西 克哉氏</p>
              </a>
            </div>

            <div class="gst__col">
              <a href="/interview/kushima/" class="gst__link">
                <div class="gst__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-02.jpg" width="270" height="180" loading="lazy" alt="第8回 「たし算」の出逢いが結婚へとつながる" class="img-fluid">
                </div>
                <h3 class="gst__ttl">第8回 「たし算」の出逢いが結婚へとつながる</h3>

                <p class="gst__desc">モータージャーナリスト<br>
                  九島 辰也氏</p>
              </a>
            </div>

            <div class="gst__col">
              <a href="/interview/kamiya/" class="gst__link">
                <div class="gst__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-03.jpg" width="270" height="180" loading="lazy" alt=">第7回 仕事への本音のアドバイスは夫婦の信頼関係あってこそ" class="img-fluid">
                </div>
                <h3 class="gst__ttl">第7回 仕事への本音のアドバイスは夫婦の信頼関係あってこそ</h3>

                <p class="gst__desc">株式会社スーパープランニング <br>
                  代表取締役 神谷 敬久氏</p>
              </a>
            </div>

            <div class="gst__col">
              <a href="/interview/kurusu/" class="gst__link">
                <div class="gst__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-04.jpg" width="270" height="180" loading="lazy" alt="第6回 常連のお店が3軒あれば自分のペースで出逢いを演出できる" class="img-fluid">
                </div>
                <h3 class="gst__ttl">第6回 常連のお店が3軒あれば自分のペースで出逢いを演出できる</h3>

                <p class="gst__desc">美食の王様・「エキュレ」<br>
                  オーナー　来栖 けい氏</p>
              </a>
            </div>
          </div>
        </div>
      </div>

      <a href="/interview/" class="btn-primary ">すべて見る</a>
    </div>
  </div>

  <!-- COLAM -->
  <div class="clm">
    <div class="container">
      <h2 class="heading-primary">
        <span class="heading-primary-en">COLUMN</span>
        <span class="heading-primary-jp">サンセリテ青山の婚活コラム</span>
      </h2>

      <div class="clm__box">
        <div class="clm__wpr">
          <div class="clm__row">
           <?php
          require_once TEMPLATEPATH. '/inc/Feed.php'; // 解凍したファイル『rss/Feed.php』をテーマディレクトリ内に格納する。
          $feed = new Feed;
          $url = 'https://www.club-sincerite.co.jp/column/feed'; // RSSのURL
          $rss = $feed->loadRss($url);
          $num = 4; //表示させたい件数
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
              $timestamp = strtotime( $item->pubDate ); // 更新日時
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
            <div class="clm__col">
              <a href="<?php echo $link; ?>" class="clm__col-wpr">
                <figure class="clm__fig">
                  <img src="<?php echo $eyecatch; ?>" width="270" height="180" loading="lazy" alt="<?php echo $title; ?>" class="img-fluid">
                </figure>
              
                <div class="clm__content">
                  <p class="clm__date"><?php echo date( "Y.m.d", $timestamp ); ?></p>

                  <h3 class="clm__ttl"><?php echo $title; ?></h3>
                  <div class="clm__link-box">
                    <span class="clm__tag">#<?php echo $tag1; ?></span>
                    <?php if(!empty($item->tag2)): ?>
                    <span class="clm__tag">#<?php echo $tag2; ?></span>
                    <?php endif; ?>
                    <?php if(!empty($item->tag3)): ?>
                    <span class="clm__tag">#<?php echo $tag3; ?></span>
                   <?php endif; ?>
                  </div>
                </div>
              </a>
            </div>
           <?php
              $i++;
            }
          }
          ?>
          </div>
         
        </div>
       
      </div>
     

      <a href="https://www.club-sincerite.co.jp/column/" class="btn-primary ">すべて見る</a>
    </div>
  </div>

  <!-- FAQ -->
  <div class="faq color-bg">
    <div class="container">
      <h2 class="heading-primary">
        <span class="heading-primary-en">FAQ</span>
        <span class="heading-primary-jp">よくあるご質問</span>
      </h2>

      <div class="faq__box">
        <?php $group_set = SCF::get( 'よくあるご質問グループ' );	foreach ( $group_set as $field_name => $field_value ) {	?>
        <div class="faq__question">
          <div class="faq__heading-wpr acc-btn">
            <h4 class="faq__heading">
              <span class="faq__icon">Q</span>
              <span><?php echo nl2br( $field_value['質問'] ); ?></span>
            </h4>
            <span></span>
          </div>

          <div class="faq__answer-wpr">
            <p class="faq__answer">
              <span class="faq__icon">A</span>
              <span class="faq__text">
                <?php echo nl2br( $field_value['回答'] ); ?>
              </span>
            </p>
          </div>
        </div>
        <?php } ?>


      </div>

      <a href="/faq/" class="btn-primary ">すべて見る</a>
    </div>
  </div>
</main>

<!-- SCROLL-TO-TOP -->
<!-- Scroll to top code -->






<?php get_footer("new"); ?>