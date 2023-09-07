<?php

/**
 * Template part for displaying posts
 */
$shops = (get_query_var('paged')) ? get_query_var('paged') : 1;
$categories = parentcategory_name();
$categoryId = $_GET['category'] ? : [];
$search = $_GET['search'] ?? '';
$taxCategory = [];
if($categoryId) {
    $taxCategory = [
        [
            'taxonomy' => 'shop_tax',
            'field' => 'term_id',
            'terms' => $categoryId ,
        ]
    ];
}
$args = [
    'post_type' => 'shop',
    'post_status' => 'publish',
    'posts_per_page' => 20,
    'orderby' => 'term_id',
    'order' => 'DESC',
    's' => $search,
    'tax_query' => $taxCategory,
    'paged' => $shops,
];
$shops = new WP_Query($args);
?>
<div class="nagoiko-shop__inner">
    <form role="search" method="get" id="nagoiko-shop__search" action="<?php echo esc_url(home_url('/tenpo/')); ?>">
        <div class="nagoiko-shop__search">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="キーワードで検索" value="<?php echo $search ?? ''; ?>">
                <div class="input-group-append">
                    <button id="button-search" class="btn btn-secondary" type="button">
                        検索
                    </button>
                </div>
            </div>
        </div>
        <div class="nagoiko-shop__menu">
            <ul class="nav row">
                <?php foreach ($categories as $index => $category) : ?>
                    <li class="d-inline category-item">
                        <input class="d-none" type="checkbox" id="category_<?php output($category->term_id)?>" name="category[]" value="<?php output($category->term_id)?>" <?php echo isset($categoryId) && in_array($category->term_id, $categoryId) == $category->term_id ? ' checked' : '' ?>/>
                        <label class="nav-link shop-active text-center <?php echo isset($categoryId) && in_array($category->term_id, $categoryId) == $category->term_id ? ' active-sort' : '' ?>" for="category_<?php output($category->term_id)?>">
                            <?php output($category->name) ?>
                        </label>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </form>
    <div class="nagoiko-shop__list" id="nagoiko-shop__list">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="border-b-0 min-w-20">事業所名(店舗名)</th>
                    <th class="border-b-0 min-w-10">業種区分</th>
                    <th class="border-b-0 min-w-40">所在地(事業所)</th>
                    <th class="border-b-0 min-w-15">電話番号</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($shops->have_posts()) :
                    while ($shops->have_posts()) : $shops->the_post();
                        $terms = get_the_terms(get_the_ID(), 'shop_tax');
                        $term_name = isset($terms[0]) ? $terms[0]->name : '-';
                    ?>
                        <tr>
                            <td><?php echo get_the_title() ?></td>
                            <td><?php echo $term_name ?></td>
                            <td><?php echo get_post_meta(get_the_ID(), 'shop_local', true) ?></td>
                            <td><a href="tel:<?php echo get_post_meta(get_the_ID(), 'shop_phone_number', true) ?>"><?php echo get_post_meta(get_the_ID(), 'shop_phone_number', true) ?></a></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4">
                            <h4 class="text-center col-md-12 my-4">該当するデータがありません</h4>
                        </td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
        <?php bootstrap_pagination($shops); ?>
    </div>
</div>