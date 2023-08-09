<!-- CUSTOMER VOICE -->
  <div class="voice" id="voice">
    <div class="heading-tertiary-box bgpink">
      <div class="container-1280">
        <h2 class="heading-tertiary">
          ご成婚者からの喜びの声
        </h2>
      </div>
    </div>

    <div class="voice__block mb">

      <div class="slick-slider voice__slider">
       <?php
global $post;
$args = array(
  'posts_per_page' => 4,
  'post_type'=> 'voice_page',
  'taxonomy' => 'voice_sex',
  'field' => 'slug',
  'term' => 'cat_women',
  
);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="voice__swiper-slide">
          <div class="voice__card">
            <p class="voice__card-desc"><?php $customfield = SCF::get('抜粋テキスト'); echo nl2br($customfield);?></p>
            <div class="voice__card-person">
             <?php $status = SCF::get('性別'); ?>
              <?php if($status == '男性'): ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/voice/voice-icon02.svg" alt="<?php $myfield = scf::get('年齢'); echo $myfield; ?> <?php $myfield = scf::get('性別'); echo $myfield; ?> / <?php $myfield = scf::get('職業'); echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間	'); echo $myfield; ?>" loading="lazy" width="101" height="101">
              <?php elseif($status == '女性'): ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/top/voice/voice-icon01.svg" alt="<?php $myfield = scf::get('年齢'); echo $myfield; ?> <?php $myfield = scf::get('性別'); echo $myfield; ?> / <?php $myfield = scf::get('職業'); echo $myfield; ?> 活動期間<?php $myfield = scf::get('活動期間	'); echo $myfield; ?>" loading="lazy" width="101" height="101">
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