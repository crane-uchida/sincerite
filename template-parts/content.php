<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nagoiko
 */
$week = array("日", "月", "火", "水", "木", "金", "土");
?>
<article id="post-<?php the_ID(); ?>" class="hirata-newsPage article-singlePage">
    <div class="news-box">
        <div class="new-date text-center font-weight-bold font-size-18 mb-2">
            <?php echo get_the_date('Y.m.d'); ?>
            <?php echo $week[get_the_date("w")]; ?>
        </div>
        <div class="news-title text-center">
            <h1><?php the_title() ?></h1>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="max-width450 py-3 text-center">
                <?php if ( is_singular() ) :?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="news-content my-3">
            <?php
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'chanomee' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hirata' ),
                        'after'  => '</div>',
                    )
                );
            ?>
        </div>
        <div class="news-top">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="btn btn-orange-100">
                お知らせ一覧に戻る
                <span class="icon-arrow icon-white right"></span>
            </a>
        </div>
    </div>
</article>
