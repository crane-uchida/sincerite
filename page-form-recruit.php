<?php
/* Template Name: 求人応募フォーム */
get_header(); ?>

    <div class="main-contents clearfix">

        <div class="main-inner-box clearfix">

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>

                    <?php the_content(); ?>


                    <?php
                endwhile;
            else:
                ?>

                <p>ページはありません！</p>

                <?php
            endif;
            ?>

        </div><!-- /main-inner-box -->

    </div><!-- /main-contents -->

<!-- フォームで使っているスクリプト -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js"></script>

<!-- 「フリガナ」を自動で入力する -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.autoKana.js"></script>
<script>
jQuery(function() {
    jQuery.fn.autoKana('#name', '#name_kana', {
        katakana : true
    });
});
</script>

<!-- 郵便番号から住所の自動入力 -->
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function( $ ) {
    jQuery( 'input[name="your-zip"]' ).keyup( function( e ) {
        AjaxZip3.zip2addr('your-zip','','your-address1','your-address2');
    } )
} );
</script>


<?php get_footer(); ?>
