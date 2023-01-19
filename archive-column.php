<?php get_header(); ?>
 
                <!-- 一覧表示部分ここから -->
                <div id="archive-column">
                <h2>コラム</h2>
                	<ul>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                
<li>
	<div class="pic"><?php the_post_thumbnail('full');?></div>
	
	<div class="txt">
		<span class="date"><?php the_time('Y.m.d'); ?></span>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
		<div class="excerpt"><?php the_excerpt();?></div>
	</div>

</li>
                
                
                
<?php endwhile; else : ?>
                <p>記事がありません</p>
<?php endif; ?>


					</ul>
					
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
					
				</div>




				

                <!-- 一覧表示部分ここまで -->
 
<?php get_footer(); ?>