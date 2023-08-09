<?php
/**
 * Template Name: archive */
?>

<?php get_header('new'); ?>
<!-- Hero Section -->
<div class="hero__heading">
  <div class="intro-heading">
    <div class="container-1280">
      <h1 class="heading-secondary">
        NEWS
        <span class="heading-secondary-sm">お知らせ</span>
      </h1>
    </div>
  </div>
</div>

<div class="breadcrumb">
  <div class="container-1280">
    <ul class="breadcrumb-ul">
      <li class="breadcrumb-li">
        <a href="<?php echo home_url(); ?>" class="breadcrumb-link -home">HOME</a>
      </li>
      <li class="breadcrumb-li">
        <a href="#" class="breadcrumb-link -active">お知らせ</a>
      </li>
    </ul>
  </div>
</div>

<main id="main" class="main">

  <div class="news-list">
    <div class="container-1280">
      <div class="news-list__row">
        <div class="news-list__col-lg">
         
         <?php
			$per_page = 10; //ページあたりの件数

			$query = get_query_var('paged');
			if($query == 0){
				$start = 1;
			}else{
				$start = ($query - 1) * $per_page + 1;
			}

			query_posts( 'post_status=publish&posts_per_page='.$per_page.'&paged='.$query );
			?>

			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					$ca = get_the_category();
     $category = get_the_category();
  $cat = $category[0];

  //カテゴリー名
  $cat_name = $cat->name;

  //カテゴリーID
  $cat_id = $cat->cat_ID;

  //カテゴリースラッグ
  $cat_slug = $cat->slug;
					?>
          <div class="news-list__list">
            <div class="news-list__cat-box">
              <a href="<?php echo esc_url(get_category_link($cat_id)); ?>" class="news-list__cat <?php echo $ca[0]->slug ?>"><?php echo $ca[0]->name ?></a>
              <!--<p class="news-list__date"><?php echo preg_replace( '@曜日@', '', get_the_date( 'Y.m.d (l)' ) ); ?></p>-->
             <p class="news-list__date"><?php echo preg_replace( '@曜日@', '', get_the_date( 'Y.m.d' ) ); ?></p>
            </div>
            <a href="<?php echo get_permalink(); ?>" class="news-list__link"><span><?php the_title(); ?></span></a>
          </div>
         <?php
				endwhile;
			endif;
			?>
		


          <!-- PAGINATION -->
          <?php if (function_exists('responsive_pagination')) {
		  responsive_pagination($additional_loop->max_num_pages);
		} ?>

        </div>
        <?php get_sidebar('blog'); ?>
      </div>




    </div>
  </div>

  <div class="btn__home">
    <a href="../" class="btn__home-link">TOPページへ戻る</a>
  </div>
</main>




<?php get_footer('new'); ?>
