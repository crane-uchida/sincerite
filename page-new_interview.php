<?php
/*
Template Name: ゲストインタビュー
*/?>
<?php get_header('new'); ?>
    <?php remove_filter('the_content', 'wpautop'); ?>
<div class="breadcrumb">
  <div class="container-1280">
    <ul class="breadcrumb-ul">
      <li class="breadcrumb-li">
        <a href="<?php echo get_site_url(); ?>" class="breadcrumb-link -home">HOME</a>
      </li>
      <li class="breadcrumb-li">
        <a href="<?php echo get_site_url(); ?>/interview/" class="breadcrumb-link ">ゲストインタビュー</a>
      </li>
      <li class="breadcrumb-li">
        <a href="#" class="breadcrumb-link -active"><?php $myfield = scf::get('pankuzu-ttl'); echo $myfield; ?></a>
      </li>
    </ul>
  </div>
</div>
<main id="main" class="main">
  <div class="interview">
    <div class="container-1280">
      <div class="news-list__row">
        <?php the_content(); ?>
        <div class="news-list__col-sm">
          <h2 class="interview__list-ttl">サンセリテ青山×Guest対談</h2>

          <div class="interview__list-box">
            <a href="<?php echo get_site_url(); ?>/interview/konishi/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-01.jpg" width="270" height="180" loading="lazy" alt="第9回 自分をさらけ出せるのが結婚の良さ" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第9回 自分をさらけ出せるのが結婚の良さ</h3>

                <p class="gst__desc">ジャーナリスト・通訳<br>
                  小西 克哉氏</p>
              </div>
            </a>

            <a href="<?php echo get_site_url(); ?>/interview/kushima/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-02.jpg" width="270" height="180" loading="lazy" alt="第8回 「たし算」の出逢いが結婚へとつながる" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第8回 「たし算」の出逢いが結婚へとつながる</h3>

                <p class="gst__desc">モータージャーナリスト<br>
                  九島 辰也氏</p>
              </div>
            </a>
          </div>

          <div class="interview__list-box">
            <a href="<?php echo get_site_url(); ?>/interview/kamiya/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-03.jpg" width="270" height="180" loading="lazy" alt="第7回 仕事への本音のアドバイスは夫婦の信頼関係あってこそ" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第7回 仕事への本音のアドバイスは夫婦の信頼関係あってこそ</h3>

                <p class="gst__desc">株式会社スーパープランニング <br>
                  代表取締役 神谷 敬久氏</p>
              </div>
            </a>

            <a href="<?php echo get_site_url(); ?>/interview/kurusu/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-04.jpg" width="270" height="180" loading="lazy" alt="第6回 常連のお店が3軒あれば自分のペースで出逢いを演出できる" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第6回 常連のお店が3軒あれば自分のペースで出逢いを演出できる</h3>

                <p class="gst__desc">美食の王様・「エキュレ」<br>
                  オーナー　来栖 けい氏</p>
              </div>
            </a>
          </div>

          <div class="interview__list-box">
            <a href="<?php echo get_site_url(); ?>/interview/khalil/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-05.jpg" width="270" height="180" loading="lazy" alt="第5回 より崇高な、社会的責任を全うできるのが「結婚」です" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第5回 より崇高な、社会的責任を全うできるのが「結婚」です</h3>

                <p class="gst__desc">エジプト大使館 エジプト学・<br>
                  観光局 観光参事官 <br>
                  日本・韓国・台湾・オセアニア地区 <br>
                  イブラヒム・カリール氏</p>
              </div>
            </a>

            <a href="<?php echo get_site_url(); ?>/interview/shikauchi/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-06.jpg" width="270" height="180" loading="lazy" alt="第4回 住まい造りと結婚の共通項は「自分を振り返る作業」" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第4回 住まい造りと結婚の共通項は「自分を振り返る作業」</h3>

                <p class="gst__desc">鹿内健 建築事務所代表<br>
                  鹿内健氏</p>
              </div>
            </a>
          </div>

          <div class="interview__list-box">
            <a href="<?php echo get_site_url(); ?>/interview/dan/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-07.jpg" width="270" height="180" loading="lazy" alt="第3回 相手の心をつかむ「交渉術」" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第3回 相手の心をつかむ「交渉術」</h3>

                <p class="gst__desc">スポーツエージェント<br>
                  団 野村氏</p>
              </div>
            </a>

            <a href="<?php echo get_site_url(); ?>/interview/shimomura/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-08.jpg" width="270" height="180" loading="lazy" alt="第2回 出逢いと食の密接な関係" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第2回 出逢いと食の密接な関係</h3>

                <p class="gst__desc">エディション・コウジ シモムラ オーナーシェフ <br>
                  下村 浩司氏</p>
              </div>
            </a>
          </div>
          <div class="interview__list-box">
            <a href="<?php echo get_site_url(); ?>/interview/kishida/" class="gst__link">
              <div class="gst__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/guest/guest-09.jpg" width="270" height="180" loading="lazy" alt="第1回 結婚を決めるとき、決めたい相手とは" class="img-fluid">
              </div>
              <div class="interview__cntn">
                

                <h3 class="gst__ttl">第1回 結婚を決めるとき、決めたい相手とは</h3>

                <p class="gst__desc">LUXURY TV製作総指揮<br>
                  岸田 一郎氏</p>
              </div>
            </a>
          </div>
        </div>
        <div class="btn__home d-block d-md-none">
          <a href="<?php echo get_site_url(); ?>/interview/" class="btn-prev">一覧へ戻る</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer('new'); ?>
