<?php get_header('blog'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog_sp.css"/>

<div class="main-contents clearfix">
	<!-- <div class="bread-list">
		<p><a href="<?php echo get_site_url(); ?>"><span>HOME</span></a>
			<span>&gt;</span>
			<span>blog</span>
		</p>
	</div> -->

	<div class="main-inner-box clearfix">
		<div class="main-sub-left">
			<div class="main-sub-ttl clearfix main-article blog_title">
				<h2><?php the_archive_title() ?></h2>
				<!-- img src="<?php echo get_template_directory_uri() ?>/images/img_border1.gif" width="456" height="13" alt="東京 大阪の結婚相談所 サンセリテ青山" / -->
			</div>

			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					$ca = get_the_category();
					?>
					<div class="cnt_box">
						<div class="blog_first clearfix">
							<div class="tab"><?php echo $ca[0]->name ?></div>
							<div class="date"><?php echo preg_replace( '@曜日@', '', get_the_date( 'Y/m/d (l)' ) ); ?></div>
							<!--  END  #blog_first  --></div>
						<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
						<!-- <div><p><?php echo mb_substr(strip_tags($post-> post_content),0,200); ?></p></div> --><div class="cnt_box_contents"><?php the_excerpt(); ?></div>
						<!--  END  #cnt_box  --></div>
					<?php
				endwhile;
			endif;
			?>
<!--ページネーション-->
<?php if (function_exists('responsive_pagination')) {
  responsive_pagination($additional_loop->max_num_pages);
} ?>
			<!--  END  #main-sub-left  --></div>


		<div class="main-sub-right mgt20">
			<?php get_sidebar('blog'); ?>
		</div>

	</div>
</div>
<?php get_template_part('map-footer'); ?>
<?php get_footer(); ?>
