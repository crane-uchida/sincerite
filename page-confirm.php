<?php
/*

Template Name: confirm

*/
?>


<?php get_header(); ?>

<div id="contents">
 <div class="page-style">
  


<?php the_content(); ?>
  
  
 </div>

 
</div>
<!-- /contents -->

<?php get_footer(); ?>


<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/swiper.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/script.js"></script> 

<?php wp_footer(); ?>
</body>
</html>
