<?php
$categoryName =  isset($args['parent_category']) ? $args['parent_category']  : '';
$subCategories = subcats_from_parentcat_by_name($categoryName);
$perendId = parent_cat_id_by_name($categoryName);

$post_type = 'faq';
$tax = 'faq_tax';
$child_terms = "";
$tax_args = array(
    'order' => 'ASC',
    'parent' => $perendId
);

?>
<div class="nagoiko-inner">
    <div class="nagoiko-faq__title">Q&A</div>
    <div class="nagoiko-faq__menu">
        <ul class="nav flex-column flex-md-row nav-pills nav-justified row">
            <?php foreach ($subCategories as $index => $subCategory) : ?>
                <li class="nav-item mb-3 col-md-4 col-12">
                    <a class="nav-link active target" href="#faq<?php output($index) ?>">
                        <?php output($subCategory->name) ?>
                        <span class="icon-arrow icon-white down"></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
    $child_terms = get_terms($tax, $tax_args);
    if (!empty($child_terms)) :
        foreach ($child_terms as $index => $child_term) :
            $child_args = "";
            $child_args = array(
                'post_type' => $post_type,
                'tax_query' => array(
                    array(
                        'taxonomy' => $tax,
                        'field' => 'slug',
                        'terms' => $child_term->slug,
                        'include_children' => false,
                        'operator' => 'IN'
                    )
                ),
                'post_status' => 'publish',
                'order' => 'ASC',
                'posts_per_page' => 100,
            );
            // query the posts
            $child_query = null;
            $child_query = new WP_Query($child_args);

            if ($child_query->have_posts()) : ?>
                <div id="faq<?php output($index); ?>">
                    <div class="faq-title">
                        <?php output($child_term->name); ?>
                    </div>
                    <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="#faq-collapse<?php output($index); ?>_<?php the_ID() ?>" data-toggle="collapse" class="collapsed">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-md-center">
                                            <span class="cq">
                                                <span class="card-q">Q</span>
                                            </span>
                                            <span class="card-title"><?php the_title(); ?></span>
                                        </div>
                                        <span class="icon-plus"></span>
                                    </div>
                                </a>
                            </div>
                            <div id="faq-collapse<?php output($index); ?>_<?php the_ID(); ?>" class="card-body collapse">
                                <div class="row">
                                    <div class="col-auto pr-0">
                                        <span class="card-a">A</span>
                                    </div>
                                    <div class="col">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/card-->
                    <?php endwhile; ?>
                </div>
    <?php endif;
            wp_reset_query();
        endforeach;
    else: ?>
        <h5 class="text-center text-danger">よくある質問はありません。</h5>
    <?php endif; ?>
</div>