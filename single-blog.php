<?php
/* Template Name Posts: blog */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blog_sp.css"/>

<div class="main-contents clearfix">
	<!-- div class="bread-list">
		<p><a href="<?php echo get_site_url(); ?>"><span>HOME</span></a>
			<span>&gt;</span>
			<span>blog詳細</span>
		</p>
	</div -->
	<?php $post = get_post(); ?>

	<div class="main-inner-box clearfix">

		<div class="main-sub-left">
			<div class="main-sub-ttl clearfix main-article blog_title">
				<h2><?php echo $post->post_title ?></h2>
				<!-- img src="<?php echo get_template_directory_uri() ?>/images/img_border1.gif" width="456" height="13" alt="東京 大阪の結婚相談所" / -->
			</div>


			<article>
				<div class="blog_first clearfix">
					<div class="tab"><?php $cat = get_the_category($post->ID); echo $cat[0]->name; ?></div>
					<div class="date"><?php echo preg_replace( '@曜日@', '', get_the_date( 'Y/m/d (l)' ) ); ?></div>
					<!--  END  #blog_first  --></div>
				<div><?php echo apply_filters('the_content', $post->post_content) ?></div>

			</article>


			<div class="link_btn clearfix">
				<p class="prev_article"><?php previous_post_link(); ?></p>
				<p class="next_article"><?php next_post_link(); ?></p>
			</div>

		</div>


		<div class="main-sub-right mgt20">
			<?php get_sidebar('blog'); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>
