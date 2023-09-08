<?php
/* Template Name: MyCustom2 */
?>
<?php get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/work_type2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/work_type_sp2.css"/>
    <div class="main-contents clearfix">

        <div class="main-inner-box clearfix">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>

                    <div class="main-sub-left">
                        <div class="main-sub-ttl clearfix main-article">
                            <?php $main_image = get_field('main_image'); if ($main_image) { ?>
                            <div class="mainvisu-status">
                                <img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['alt'] ?>" />
                            </div>
                            <?php } ?>
                            <p><?php the_field('text_1'); ?></p>
                            <?php if (get_field('heading_2')) { ?>
                                <h3><?php the_field('heading_2'); ?></h3>
                                <img src="../wp-content/themes/sincerite/images/img_border3.gif" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true">
                            <?php } ?>
                            <p><?php the_field('text_2'); ?></p>
                            <?php if (get_field('heading_3')) { ?>
                                <h3><?php the_field('heading_3'); ?></h3>
                                <img src="../wp-content/themes/sincerite/images/img_border3.gif" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true">
                            <?php } ?>
                            <p class="txt01"><?php the_field('text_3'); ?></p>

                            <div class="img-area3 clearfix">
                                <ul>
                                    <?php $left_image = get_field('left_image'); if ($left_image) { ?>
                                        <li>
                                            <img src="<?php echo $left_image['url'] ?>" alt="<?php echo $left_image['alt'] ?>" width="197" height="124" />
                                        </li>
                                    <?php } ?>
                                    <?php $center_image = get_field('center_image'); if ($center_image) { ?>
                                        <li>
                                            <img src="<?php echo $center_image['url'] ?>" alt="<?php echo $center_image['alt'] ?>" width="197" height="124" />
                                        </li>
                                    <?php } ?>
                                    <?php $right_image = get_field('right_image'); if ($right_image) { ?>
                                        <li class="mg0">
                                            <img src="<?php echo $right_image['url'] ?>" alt="<?php echo $right_image['alt'] ?>" width="197" height="124" />
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php if (get_field('heading_4')) { ?>
                                <h3><?php the_field('heading_4'); ?></h3>
                                <img src="../wp-content/themes/sincerite/images/img_border3.gif" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true">
                            <?php } ?>
                            <p><?php the_field('text_4'); ?></p>

                            <?php if (get_field('heading_5')) { ?>
                                <h3><?php the_field('heading_5'); ?></h3>
                                <img src="../wp-content/themes/sincerite/images/img_border3.gif" alt="結婚相談所 サンセリテ青山" data-pin-nopin="true">
                            <?php } ?>
                            <p class="txt03"><?php the_field('text_5'); ?></p>

                            <div class="ttl-text-box chef_g">
                                <div class="clearfix chef_name">
                                    <div class="chef_img"><img src="<?php echo get_template_directory_uri() ?>/images/work04.png" alt="チーフカウンセラー川辺"></div>
                                    <div class="name_text">
                                        <p>サンセリテ青山 チーフカウンセラー川辺より</p>
                                        <?php if (get_field('counsellor_heading')) { ?>
                                            <h4><?php the_field('counsellor_heading'); ?></h4>
                                        <?php } ?>
                                    </div>
                                </div>
                                <p class="chef_text"><?php the_field('counsellor_text'); ?></p>
                            </div>


                            <div class="main-button-area pc">
                                <a href="../form05"><img src="<?php echo get_template_directory_uri() ?>/images/img_form_ladies.gif" alt="結婚相談所　サンセリテ青山" width="648" height="47"/></a>
                                <a href="../form01"><img  src="<?php echo get_template_directory_uri() ?>/images/form_08.gif" alt="結婚相談所　サンセリテ青山" width="648" height="47"/></a>
                            </div>


                        </div>
                    </div>
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
    <?php include('map-foott.php'); ?>
<?php get_footer(); ?>
