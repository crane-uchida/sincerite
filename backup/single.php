<?php get_header(); ?>
<div id="contents">
  <section id="second-mv-area" class="sec-mv column-mv">
    <div class="inner">
      <h2>コラム<span class="rob">Column</span></h2>
    </div>
  </section>
  <!-- /MV -->
  <div class="breadcrumbs">
    <div class="inner"> <p class="breadcrumbs"><span><span><a href="<?php echo esc_url( home_url('/') ); ?>">TOP</a> &gt; <span><a href="<?php echo esc_url( home_url('/') ); ?>column">コラム</a> &gt; <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></span></span></p> </div>
  </div>
  <!-- /breadcrumbs -->
  
  <section id="column-main" class="bg-lgray">
    <div class="inner">
      <main class="detail">
        <div class="article-cont">
          <div class="upper-sns">
            <div class="fs14"><span class="robi"><?php the_time('Y/m/d');?></span><?php
  $post_time = get_the_time('U');
  $days = 30;
  $last = time() - ($days * 24 * 60 * 60);
  if ($post_time > $last) {
    echo '<span class="c-red rob"> NEW</span>';
  }
?></div>
            <div class="df">
              <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="false"></div>
              <div id="fb-root"></div>
              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v12.0&appId=2668555016732458&autoLogAppEvents=1" nonce="kCqa6Thl"></script> 
              <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
            </div>
          </div>
          <h1><?php the_title(); ?></h1>
          <figure class="wp-block-image size-full w100p"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>"></figure>
          <?php the_content(); ?>
          <div class="sns-container">
            <p class="c-blue t-center rob fs20">SHARE</p>
            <div class="sns-list flex fw-w jc-c"> <a href="http://b.hatena.ne.jp/entry/<?php echo get_the_permalink(); ?>" class="sns-bhatena" href="" target="_blank" rel="nofollow noopener"> <img class="only-pc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-bhatena.svg" alt=""> <img class="only-sp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-bhatena-sp.svg" alt=""> </a> <a class="sns-facebook" href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"> <img class="only-pc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-facebook.svg" alt=""> <img class="only-sp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-facebook-sp.svg" alt=""> </a> <a class="sns-twitter" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener"> <img class="only-pc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-twitter.svg" alt=""> <img class="only-sp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-twitter-sp.svg" alt=""> </a> <a class="sns-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener"> <img class="only-pc" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-line.svg" alt=""> <img class="only-sp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/single-btm-line-sp.svg" alt=""> </a> </div>
          </div>
        </div>
				<?php if( get_field('著者名前') ) { ?>
        <div class="author-box">
          <p>この記事の著者</p>
          <div class="author-inner">
            <div class="belle-box-img"> <img src="<?php the_field('著者画像'); ?>"  /> </div>
            <div class="belle-box-txt">
              <div class="author-name"><?php the_field('著者名前'); ?></div>
              <div class="belle-info"> <?php the_field('著者説明'); ?> </div>
            </div>
          </div>
        </div>
				<?php } ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  </section>
</div>
<!-- /contents -->
<?php get_footer(); ?>