      <aside>
				<!--div class="bannar-area"><a href=""><img src="assets/images/column/bannar.png" alt=""></a></div-->
				<div class="side-menu">
					<h2>よく読まれている記事<span class="rob">RANKING</span></h2>
					<div style="position: relative;">
						<div class="column-slide swiper-container">
						<ul class="clumn-ranking-rist swiper-wrapper">
							<?php
							// views post metaで記事のPV情報を取得する
    setPostViews(get_the_ID());
  $args = array(
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'posts_per_page' => 5 // ← 5件取得
    );
  // WP_Queryによるループ
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
?>
							<li class="swiper-slide">
								<a href="<?php the_permalink(); ?>">
									<div class="column-img"><?php the_post_thumbnail('c-side'); ?></div>
									<div class="column-txt">
									<h3><?php
if(mb_strlen($post->post_title)>34) {
  $title= mb_substr($post->post_title,0,34);
    echo $title . '...';
  } else {
    echo $post->post_title;
  }
?></h3>
								</div>
								<p class="robi fs12"><?php the_time('Y/m/d');?></p>
								</a>
							</li>
							<?php
  endwhile;
  else: echo '投稿がありません';
  endif;
  wp_reset_postdata();
?>
						</ul>
					</div>
						<div class="swiper-button-prev swiper-button-prev02"><i class="fas fa-chevron-circle-left"></i></div>
						<div class="swiper-button-next swiper-button-next02"><i class="fas fa-chevron-circle-right"></i></div>
					</div>
					<div class="aside-sns flex jc-c t-center">
          <a class="sns-facebook" href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="nofollow noopener">
            <img class="pcview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/column/aside-facebook.png" alt="">
          </a>
          <a class="sns-twitter" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener">
            <img class="pcview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/column/aside-twitter.png" alt="">
          </a>
        </div>
				</div>
			</aside>
