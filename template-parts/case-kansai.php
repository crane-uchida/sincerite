
<ul class="area-case-list">
	<?php
  $args = array (
    'post_type'      => 'case',
		'taxonomy' => 'area_category',
		'term' => 'kansai',
    'posts_per_page' => -1,
    'post_status'    => array ('publish'),
    'order'          => 'DESC'
  );
  $query = new WP_Query($args);
  if($query->have_posts()): while($query->have_posts()): $query->the_post();
?>
        <li> <a href="<?php the_permalink(); ?>" class="inline"><i class="fas fa-chevron-circle-right"></i><?php the_title(); ?></a> </li>
	<?php
  endwhile;
  else: echo '投稿がありません';
  endif;
  wp_reset_postdata();
?>
      </ul>

