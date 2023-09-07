<?php
/* 
Template Name: LP_MENS
*/ 
?>

<footer class="p-lp p-mens">
  <?php /* フッター */ ?>
  <div class="p-mens-footer p-mens__center">
    &copy;Sincrite Aoyama.
  </div>
  <?php /* フッター end */ ?>
</footer>

</article>

<?php /* <div class="p-mens__right"></div> */ ?>

<?php wp_footer(); ?>

<?php /* JS */ ?>
<?php /* CDN UAParser.js */ ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/UAParser.js/1.0.2/ua-parser.min.js"
  integrity="sha512-M/6+/Ib+r5t/hijvSPLPO76abBzT8vlMVRSJ16JDA+NV9CGCkAjq8UD4kHN6KpHncDTRRIb0oUU01yhW+yfqng=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php /* AndroidでのみGoogle Fontsを読み込ませる */ ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/andoroid.js"></script>
<?php /* アコーディオン */ ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/accordion.js"></script>
<?php /* JS end */ ?>

</body>

</html>