<?php
/**
 * Template Name: コラム一覧 */
?>
<?php get_header(); ?>
  <div id="contents">
  <section id="second-slide" class="">
		<div class="inner">
			<div class="slide-box column-slide-box">
				<div class="swiper-container slider-content-column"> 
				  <div class="swiper-wrapper">
						<?php
  $args = array (
    'post_type'      => array ('post'),
    'posts_per_page' => 5,
		'tag'            => 'mv-pickup',
    'order'          => 'DESC'
  );
  $query = new WP_Query($args);
  if($query->have_posts()): while($query->have_posts()): $query->the_post();
?>
						<div class="swiper-slide">
							<a href="<?php the_permalink(); ?>">
								<div class="slide-img"><?php the_post_thumbnail('c-slide'); ?></div>
								<div class="clumn-slide-box">
									<p class="c-red rob b fs18 sp-fs14">PICK UP</p>
									<p class="robi"><?php the_time('Y/m/d');?></p>
									<h3><?php
if(mb_strlen($post->post_title)>34) {
  $title= mb_substr($post->post_title,0,34);
    echo $title . '...';
  } else {
    echo $post->post_title;
  }
?></h3>
								</div>
							</a>
						</div>
<?php
  endwhile;
  else: echo '投稿がありません';
  endif;
  wp_reset_postdata();
?>
						
				  </div>
				  <div class="swiper-pagination"></div>
				  
				</div>
				<div class="naci-fix">
				<div class="swiper-button-prev swiper-button-prev03"><i class="fas fa-chevron-circle-left"></i></div>
				<div class="swiper-button-next swiper-button-next03"><i class="fas fa-chevron-circle-right"></i></div>
				</div>
			</div>
		</div>
	</section>
  <!-- /MV -->
  <div class="breadcrumbs">
    <div class="inner"> <span><span><a href="./">TOP</a> &gt; <span><span class="breadcrumb_last" aria-current="page">コラム</span></span></span></span> </div>
  </div>
	<!-- /breadcrumbs -->
	<h1 class="column-h1 t-center">コラム</h1>
	<section id="column-main" class="bg-lgray">
		<div class="inner">
			<main>
				<ul class="column-list">
					<?php
				// ①ページネーションに現在のページ位置を知らせるのに必要
				$paged = ( int )get_query_var( 'paged' );
				$args = array(
					// get_option('posts_per_page') ← で管理画面で設定した、記事一覧で表示するページ数を取得
					'posts_per_page' => get_option( 'posts_per_page' ),
					// (int) get_query_var('paged') ← で取得した、$pagedを挿入
					'paged' => $paged,
					'orderby' => 'post_date',
					'posts_per_page' => 18,
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish'
				);
				// ②記事一覧のMaxページ数を取得するのに必要
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post();
				?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="column-img"><?php the_post_thumbnail('c-cont'); ?></div>
							<div class="column-txt">
								<h3><?php the_title(); ?></h3>
								<p class="robi fs12"><?php the_time('Y/m/d');?><?php
  $post_time = get_the_time('U');
  $days = 30;
  $last = time() - ($days * 24 * 60 * 60);
  if ($post_time > $last) {
    echo '<span class="c-red rob"> NEW</span>';
  }
?></p>
							</div>
						</a>
					</li>
					<?php endwhile;?>
				<?php else:?>
				<li>現在投稿記事はありません。</li>
				<?php endif;wp_reset_postdata(); ?>

				</ul>
				
				<div class="page-nation fix">
				<?php $page_arg = array( 'current' => max( 1, $paged ), 'total' => $the_query->max_num_pages, 'prev_text' => '← 戻る','next_text' => 'もっと見る →', ); echo paginate_links($page_arg);  ?>
				</div>

			</main>
			<?php get_sidebar(); ?>
		</div>
	</section>


	
	
  
  
</div>
<?php get_footer(); ?>