<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/favicon-256x256.png" sizes="256x256" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/colorbox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/common.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/wp.css">
<?php if ( is_single()): ?>
<?php if ($post->post_excerpt){ ?>
<meta name="description" content="<? echo $post->post_excerpt; ?>" />
<?php } else {
$summary = strip_tags($post->post_content);
$summary = str_replace("\n", "", $summary);
$summary = mb_substr($summary, 0, 120). "…"; ?>
<meta name="description" content="<?php echo $summary; ?>" />
<?php } ?>
<?php elseif ( is_home() || is_front_page() || is_category() ): ?>
<?php else: ?>
<meta name="description" content="<?php the_excerpt();?>" />
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body>
<section id="inline-content">
    <div class="modal-content">
      <h3><?php the_title(); ?></h3>
      <div class="modal-img"><?php the_post_thumbnail(); ?></div>
      <?php the_content(); ?>
    </div>
  </section>
	
</body>