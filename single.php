<?php get_header('new'); ?>
<?php
  $category = get_the_category();
  $cat = $category[0];

  //カテゴリー名
  $cat_name = $cat->name;

  //カテゴリーID
  $cat_id = $cat->cat_ID;

  //カテゴリースラッグ
  $cat_slug = $cat->slug;
?>

<div class="breadcrumb singlebred">
  <div class="container-1280">
    <ul class="breadcrumb-ul">
      <li class="breadcrumb-li">
        <a href="<?php echo home_url(); ?>" class="breadcrumb-link -home">HOME</a>
      </li>
      <li class="breadcrumb-li">
        <a href="<?php echo home_url(); ?>/news/" class="breadcrumb-link">お知らせ</a>
      </li>
      <li class="breadcrumb-li">
        <a href="#" class="breadcrumb-link -active"><?php echo get_the_title(); ?></a>
      </li>
    </ul>
  </div>
</div>

<main id="main" class="main">

  <div class="news-list">
    <div class="container-1280">
      <div class="news-list__row">
        <div class="news-list__col-lg">

                    <div class="news-detail">
                        <div class="news-list__cat-box">
                            <a href="<?php echo esc_url(get_category_link($cat_id)); ?>" class="news-list__cat <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a>
                            <!--<p class="news-list__date"><?php echo preg_replace( '@曜日@', '', get_the_date( 'Y.m.d (l)' ) ); ?></p>-->
             <p class="news-list__date"><?php echo preg_replace( '@曜日@', '', get_the_date( 'Y.m.d' ) ); ?></p>
                        </div>
                        <h1 class="news-detail__ttl"><?php echo get_the_title(); ?></h1>

                        <div class="news-detail__content">
                            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>

                    <?php the_content(); ?>

                    <?php
                endwhile;
            endif;
            ?>

                        </div>

                        <div class="news-detail__arws">
                            <?php previous_post_link(' %link', '前の記事'); ?>
                            <?php next_post_link('%link ', '次の記事'); ?>
                        </div>

                    </div>

                    <div class="btn__home">
                        <a href="<?php echo home_url(); ?>/news/" class="btn-prev">お知らせ一覧へ戻る</a>
                    </div>
                </div>
        <?php get_sidebar('blog'); ?>
      </div>




    </div>
  </div>

</main>




<?php get_footer('new'); ?>