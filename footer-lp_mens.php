<?php
/* 
Template Name: LP_MENS
*/ 
?>

<?php /* フッター */ ?>
<footer class="p-mens-footer">
  <ul class="p-mens-footer__access">
    <li class="p-mens__logo">
      <img class="p-mens__logo-pic" src="<?php echo get_template_directory_uri() ?>/assets/images/lp_mens/logo.svg"
        alt="サンセリテ青山">
    </li>
    <li class="p-mens-footer__access-information p-mens__center">
      <h2 class="p-mens-footer__access-name">
        サンセリテ青山
      </h2>
      <h3 class="p-mens-footer__access-office">
        表参道本店
      </h3>
    </li>
    <li class="p-mens-footer__access-address p-mens__center">
      東京都渋谷区神宮前5-6-13<br>
      ヴァイス表参道 B1
    </li>
    <li class="p-mens-footer__access-map">
      <?php get_template_part( 'assets/others/map' );?>
    </li>
    <li class="p-mens-footer__access-guide p-mens__center">
      東京メトロ 銀座線・半蔵門線・千代田線<br>
      表参道駅 A1出口徒歩5分
    </li>
  </ul>
  <div class="p-mens-footer__copyright p-mens__center">
    &copy;Sincrite Aoyama.
  </div>
</footer>
<?php /* フッター end */ ?>

</article>

<?php /* <div class="p-mens__right"></div> */ ?>

<?php wp_footer(); ?>

<?php /* JS */ ?>
<?php /* アコーディオン */ ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/accordion.js"></script>
<?php /* スクロールイベント */ ?>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/appear.js"></script>
<?php /* JS end */ ?>

</body>

</html>