<?php
/*
Template Name: NEW_FAQ無し
*/?>
<?php get_header('new'); ?>
    <?php remove_filter('the_content', 'wpautop'); ?>
    <?php the_content(); ?>

<div class="btn__home">
      <a href="<?php echo home_url(); ?>" class="btn__home-link">TOPページへ戻る</a>
    </div>
  </div>

</main>
<?php get_footer('new'); ?>
