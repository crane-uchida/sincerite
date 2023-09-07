<?php
/*
Template Name: NEW_FAQあり
*/?>
<?php get_header('new'); ?>
    <?php remove_filter('the_content', 'wpautop'); ?>
    <?php the_content(); ?>
<!-- FAQ -->
  <div class="faq color-bg" id="faq">
    <div class="container">
      <h2 class="heading-primary">
        <span class="heading-primary-en">FAQ</span>
        <span class="heading-primary-jp">よくあるご質問</span>
      </h2>

      <div class="faq__box">
        <?php $group_set = SCF::get( 'よくあるご質問グループ' );	foreach ( $group_set as $field_name => $field_value ) {	?>
       
        <div class="faq__question">
          <div class="faq__heading-wpr acc-btn">
            <h4 class="faq__heading">
              <span class="faq__icon">Q</span>
              <span><?php echo nl2br( $field_value['質問'] ); ?></span>
            </h4>
            <span></span>
          </div>

          <div class="faq__answer-wpr">
            <p class="faq__answer">
              <span class="faq__icon">A</span>
              <span class="faq__text">
                <?php echo nl2br( $field_value['回答'] ); ?>
              </span>
            </p>
          </div>
        </div>
        <?php } ?>


      </div>

      <a href="/faq/" class="btn-primary ">すべて見る</a>
    </div>
  </div>
<div class="btn__home">
      <a href="<?php echo home_url(); ?>" class="btn__home-link">TOPページへ戻る</a>
    </div>
  </div>

</main>
<?php get_footer('new'); ?>
