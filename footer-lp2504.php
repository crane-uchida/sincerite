<?php
/* 
Template Name: LP2504
*/
?>

<?php /* SP版 固定フッター - sp-footer end */ ?>
<section class="p-lp2504__sp-footer">
  <div class="p-lp2504__sp-contents">
    <a class="p-lp2504__sp-link" href="#form">
      <picture class="p-lp2504__sp-banner-picture">
        <source class="p-lp2504__sp-banner-image" srcset="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/cta_banner.avif" type="image/avif">
        <img class="p-lp2504__sp-banner-image"
          src="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/cta_banner.png" alt="はじめての来店予約をする">
      </picture>
    </a>
  </div>
</section>
<?php /* SP版 固定フッター - sp-footer end */ ?>

<?php /* フッター */ ?>
<footer class="p-lp2504__footer">
  <hgroup class="p-lp2504__footer-name">
    <a class="p-lp2504__footer-logo" href="https://www.club-sincerite.co.jp/">
      <h2 class="p-lp2504__footer-logo-link">
        <img class="p-lp2504__footer-logo-image" src="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/logo.png" alt="サンセリテ青山">
      </h2>
      <p class="p-lp2504__footer-text">サンセリテ青山</p>
    </a>
  </hgroup>
  <div class="p-lp2504__footer-contents">
    <!--     <ul class="p-lp2504__footer-list">
      <li class="p-lp2504__footer-item">
        <a class="p-lp2504__footer-link" href="https://www.club-sincerite.co.jp/company/">運営会社</a>
      </li>
      <li class="p-lp2504__footer-item">
        <a class="p-lp2504__footer-link" href="#">利用規約</a>
      </li>
      <li class="p-lp2504__footer-item">
        <a class="p-lp2504__footer-link" href="#">プライバシーポリシー</a>
      </li>
    </ul> -->
    <div class="p-lp2504__footer-copyright">
      &copy; 2025 sincerite aoyama.
    </div>
  </div>
</footer>
<?php /* フッター end */ ?>

</section>
<?php /* メインコンテンツ end */ ?>

<?php /* PC版 右側 */ ?>
<section class="p-lp2504__right">
  <div class="p-lp2504__right-headline">
    <a class="p-lp2504__right-link" href="#">
      <picture class="p-lp2504__right-headline-picture">
        <source class="p-lp2504__right-headline-image" srcset="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/bg-logo.avif" type="image/avif">
        <img class="p-lp2504__right-headline-image"
          src="<?php echo get_template_directory_uri() ?>/assets/images/lp2504/bg-logo.png" alt="結婚相談所バーサス婚活アプリ本当に結婚したいあなたのための婚約手引">
      </picture>
    </a>
  </div>
</section>
<?php /* PC版 右側 end */ ?>
</article>

<?php /* JS */ ?>
<?php /* SP版 画面固定CTA */ ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const spFooter = document.querySelector(".p-lp2504__sp-footer");
    const feature = document.querySelector(".p-lp2504__message");
    const footer = document.querySelector(".p-lp2504__form");
    const fv = document.querySelector(".p-lp2504__firstview");

    if (!spFooter || !feature || !footer || !fv) return;

    spFooter.style.opacity = "0";
    spFooter.style.transition = "opacity 0.5s ease";

    function handleIntersection(entries) {
      entries.forEach(entry => {
        if (entry.target === feature) {
          if (entry.isIntersecting) {
            spFooter.style.opacity = "1";
          }
        } else if (entry.target === footer || entry.target === fv) {
          if (entry.isIntersecting) {
            spFooter.style.opacity = "0";
          } else {
            spFooter.style.opacity = "1";
          }
        }
      });
    }

    const observer = new IntersectionObserver(handleIntersection, {
      root: null,
      rootMargin: "0px",
      threshold: 0.1
    });

    observer.observe(feature);
    observer.observe(footer);
    observer.observe(fv);
  });
</script>

<?php /* フォーム */ ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/form.js?v=1.2"></script>
<?php /* JS end */

wp_footer();

?>

</body>

</html>