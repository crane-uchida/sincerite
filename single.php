<?php get_header(); ?>

    <div class="main-contents clearfix">
        <div class="bread-list">
            <p><a href="<?php echo get_site_url(); ?>"><span>HOME</span></a>
                <span>&gt;</span>
                <span><?php echo get_the_title(); ?></span>
            </p>
        </div>

        <div class="main-inner-box clearfix">
            <div class="main-sub-left">
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

            <div class="main-sub-right mgt20">
                <?php get_sidebar(); ?>
            </div>

        </div>
    <?php get_template_part('map-footer'); ?>
    </div>
    <?php get_footer(); ?>
