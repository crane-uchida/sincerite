<?php get_header(); ?>
<div class="main-contents clearfix">
<div class="bread-list">
<p><span><?php echo get_the_title(); ?></span></p>
</div>

<div class="main-inner-box clearfix">
<div class="main-sub-left">
<div class="post">
<section class="post-content" itemprop="text">
<?php get_template_part('content', 'none'); ?>
</section>
</div>

</div>

<div class="main-sub-right mgt20">
<?php get_sidebar(); ?>
</div>

</div>
</div>
<?php get_template_part('map-footer'); ?>
<?php get_footer(); ?>
