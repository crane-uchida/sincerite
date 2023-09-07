<?php get_header('new'); ?>
<!-- Hero Section -->
<div class="hero__heading newttl">
  <div class="intro-heading">
    <div class="container-1280">
      <h1 class="heading-secondary">
        お知らせ
        <span class="heading-secondary-sm">NEWS</span>
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
        <a href="<?php echo home_url(); ?>/new" class="breadcrumb-link">お知らせ</a>
      </li>
      <li class="breadcrumb-li">
        <a href="#" class="breadcrumb-link -active"><?php the_archive_title() ?></a>
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
	$category = get_the_category();
 $cat_id   = $category[0]->term_id;
	$cat_name = $category[0]->cat_name;
 $cat_slug = $category[0]->category_nicename;
	?>

			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					?>
          <div class="news-list__list">
            <div class="news-list__cat-box">
              <a href="<?php echo esc_url(get_category_link($cat_id)); ?>" class="news-list__cat <?php echo $cat_slug; ?>"><?php echo $cat_name ?></a>
              <p class="news-list__date"><?php echo preg_replace( '@曜日@', '', get_the_date( 'Y.m.d (l)' ) ); ?></p>
            </div>
            <a href="<?php echo get_permalink(); ?>" class="news-list__link"><?php the_title(); ?></a>
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