<?php remove_filter('the_content', 'wpautop'); ?>
<?php get_header(); ?>

    <div class="main-contents clearfix">

        <div class="main-inner-box clearfix">

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>

                    <?php the_content(); ?>
                    <?php get_sidebar(); ?>

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

<?php get_footer(); ?>
