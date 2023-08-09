<?php get_header(); ?>
<div id="contents">
  <section id="second-mv-area" class="sec-mv">
		<div class="inner">
			<h1><?php the_title(); ?><span class="rob"><?php the_field('sub_title_page'); ?></span></h1>
		</div>
	</section>
  <!-- /MV -->
  <div class="breadcrumbs">
    <div class="inner"> <?php
if(function_exists('yoast_breadcrumb')) {
  yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
}
?></div>
  </div>
	<!-- /breadcrumbs -->
	<?php the_content(); ?>
  

  
</div>
<?php get_footer(); ?>