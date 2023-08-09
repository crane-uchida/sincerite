<?php get_header(); ?>
<?php query_posts($query_string.'&posts_per_page=10'); ?>
  <div class="h-block">
    <!-- <img class="pcview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/h-block-search.jpg" alt=""> -->
    <img class="spview" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/h-block-search-sp.jpg" alt="">
<?php
if(function_exists('yoast_breadcrumb')) {
  yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
}
?>
    <div class="heading">
      <h2>検索結果</h2>
      <span>- Search Results -</span>
    </div>
  </div>
  <div class="wrapper">
    <div class="inner flex-pc jc-sb">
      <main>
        <div class="all-category">
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {
    echo '<p class="search-results-num">検索キーワード未入力</p>';
  } else {
    echo '<p class="search-results-num">“ '.$_GET['s'] .' ”のサイト内検索結果：'.$wp_query->found_posts .'件</p>';
  }
?>
          <div>
<?php if (have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
            <div>
              <a href="<?php the_permalink(); ?>" class="flex">
                <div class="img-block pcview">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>">
                </div>
                <div class="txt-block">
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
                  <h1><?php
if(mb_strlen($post->post_title)>46) {
  $title= mb_substr($post->post_title,0,46) ;
    echo $title . '...';
  } else {
    echo $post->post_title;
  }
?></h1>
                  <p><?php the_excerpt(); ?></p>
                </div>
              </a>
            </div>
<?php endwhile; ?>
          </div>
          <div class="pagination flex jc-c">
<?php
  $big = 999999999;
  echo paginate_links( array (
    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link($big) ) ),
    'current'   => max( 1, get_query_var('paged') ),
    'mid_size'  => 2,
    'prev_text' => __( '<i class="fas fa-chevron-left"></i>'),
    'next_text' => __( '<i class="fas fa-chevron-right"></i>')
  ));
?>
<?php else: ?>
<p style="font-size: 14px;">検索されたキーワードにマッチする記事はありませんでした。</p>
<?php endif; ?>
          </div>
        </div>
      </main>
    </div>
  </div>
  <main>
<?php get_footer(); ?>