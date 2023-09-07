<?php
$count_posts = wp_count_posts();
$published_posts = $count_posts->publish;
?>



<div class="news-list__col-sm">
          <div class="news-list__category">
            <p class="news-list__cat-ttl">
              CATEGORY<span>カテゴリー</span>
            </p>
            <div class="news-list__link-box">
              <a href="<?php echo home_url(); ?>/news/" class="news-list__cat-link -active"><span>すべて</span>（<?php echo $published_posts; ?>）</a>
             <?php
$args = array(
	'orderby'  => 'count',
	'order'    => 'DESC'
);
$terms = get_terms('category', $args);
?>
              <ul>
<?php foreach($terms as $term):
	echo '<li><a href="'.get_term_link( $term ).'" class="news-list__cat-link"><span>'.$term->name.'</span> ('.$term->count.')</a></li>';
endforeach;?>
</ul>
            </div>
          </div>

          <div class="news-list__category">
            <p class="news-list__cat-ttl">
              ARCHIVES<span>アーカイブ</span>
            </p>
            <div class="news-list__link-box">
              <a href="<?php echo home_url(); ?>/news/" class="news-list__cat-link -active"><span>すべて</span>（<?php echo $published_posts; ?>）</a>
              <ul class="sidebar-custom">
      
<?php
$str = wp_get_archives(array('post_type' => 'post', 'type' => 'yearly','show_post_count' => 1,'echo' => 0));
$str_grep = preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', '<span class="line-s"></span>年度 <span>$1</span></a>', $str);
echo $str_grep;
?>
</ul>

            </div>
          </div>

          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
 <?php
$count_posts = wp_count_posts();
$published_posts = $count_posts->publish;
?>
        </div>
