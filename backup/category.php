<?php get_header(); ?>
  <div class="h-block">
    <!-- <img class="pcview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/h-block-category.jpg" alt=""> -->
<?php if(in_category('seminar-report')) : ?>
    <img class="spview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/h-block-category-3-sp.jpg" alt="">
<?php else : ?>
    <img class="spview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/h-block-category-sp.jpg" alt="">
<?php endif; ?>
<?php
if(function_exists('yoast_breadcrumb')) {
  yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
}
?>
    <div class="heading">
      <h2><?php single_cat_title(); ?></h2>
<?php if(is_category('recruit')) : ?>
      <span>- <?php the_field('sub_title_category', 'category_6'); ?> -</span>
<?php elseif(is_category('human-resources')) : ?>
      <span>- <?php the_field('sub_title_category', 'category_7'); ?> -</span>
<?php elseif(is_category('others')) : ?>
      <span>- <?php the_field('sub_title_category', 'category_8'); ?> -</span>
<?php elseif(is_category('column')) : ?>
      <span>- <?php the_field('sub_title_category', 'category_5'); ?> -</span>
<?php elseif(is_category('easy-commentary')) : ?>
      <span>- <?php the_field('sub_title_category', 'category_4'); ?> -</span>
<?php elseif(is_category('seminar-report')) : ?>
      <span>- <?php the_field('sub_title_category', 'category_3'); ?> -</span>
<?php endif; ?>
    </div>
  </div>
  <div class="wrapper">
    <div class="inner flex-pc jc-sb">
      <main>
        <div class="all-category">
          <div class="flex fw-w jc-sb">
<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
<?php if(is_category('recruit')) : ?>
  <?php if ( wp_is_mobile() ) : ?>
    <?php $args = array (
      'posts_per_page' => 10,
      'category_name'  => 'recruit',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php else: ?>
    <?php $args = array (
      'posts_per_page' => 15,
      'category_name'  => 'recruit',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php endif; ?>
<?php elseif(is_category('human-resources')) : ?>
  <?php if ( wp_is_mobile() ) : ?>
    <?php $args = array (
      'posts_per_page' => 10,
      'category_name'  => 'human-resources',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php else: ?>
    <?php $args = array (
      'posts_per_page' => 15,
      'category_name'  => 'human-resources',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php endif; ?>
<?php elseif(is_category('others')) : ?>
  <?php if ( wp_is_mobile() ) : ?>
    <?php $args = array (
      'posts_per_page' => 10,
      'category_name'  => 'others',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php else: ?>
    <?php $args = array (
      'posts_per_page' => 15,
      'category_name'  => 'others',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php endif; ?>
<?php elseif(is_category('column')) : ?>
  <?php if ( wp_is_mobile() ) : ?>
    <?php $args = array (
      'posts_per_page' => 10,
      'category_name'  => 'column',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php else: ?>
    <?php $args = array (
      'posts_per_page' => 15,
      'category_name'  => 'column',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php endif; ?>
<?php elseif(is_category('easy-commentary')) : ?>
  <?php if ( wp_is_mobile() ) : ?>
    <?php $args = array (
      'posts_per_page' => 10,
      'category_name'  => 'easy-commentary',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php else: ?>
    <?php $args = array (
      'posts_per_page' => 15,
      'category_name'  => 'easy-commentary',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php endif; ?>
<?php elseif(is_category('seminar-report')) : ?>
  <?php if ( wp_is_mobile() ) : ?>
    <?php $args = array (
      'posts_per_page' => 10,
      'category_name'  => 'seminar-report',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php else: ?>
    <?php $args = array (
      'posts_per_page' => 15,
      'category_name'  => 'seminar-report',
      'order'          => 'DESC',
      'paged'          => $paged
    ); ?>
  <?php endif; ?>
<?php endif; ?>
<?php
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
?>
            <div>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>">
                <h3><?php
if(mb_strlen($post->post_title)>28) {
  $title= mb_substr($post->post_title,0,28) ;
    echo $title . '...';
  } else {
    echo $post->post_title;
  }
?></h3>
<?php $cat = get_the_category(); $cat = $cat[0]; {
  echo '<span class="category '. $cat->category_nicename .'">';
 } ?>
<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                <time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
<?php
  $post_time = get_the_time('U');
  $days = 30;
  $last = time() - ($days * 24 * 60 * 60);
  if ($post_time > $last) {
    echo '<span class="new-judgement">NEW</span>';
  }
?>
              </a>
            </div>
<?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
          <div class="pagination flex jc-c">
<?php
  $big = 999999999;
  echo paginate_links( array (
    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link($big) ) ),
    'current'   => max( 1, get_query_var('paged') ),
    'total'     => $query->max_num_pages,
    'mid_size'  => 2,
    'prev_text' => __( '<i class="fas fa-chevron-left"></i>'),
    'next_text' => __( '<i class="fas fa-chevron-right"></i>')
  ));
?>
          </div>
        </div>
      </main>
<?php get_sidebar(); ?>
    </div>
  </div>
  <main>
<?php get_footer(); ?>