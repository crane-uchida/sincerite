<style>
 .footer__logo img{
  margin: auto;
 }
</style>
<!-- footer-banner -->
<!--<div class="footer__banner hide" id="footer-banner">
  <a href="/counseling/" class="footer__btn">
    <span class="footer__btn-box">
      <span class="footer__btn-banner">
        初回無料</span>
      <span class="footer__btn-ttl">
        ご来店・またはご自宅から
      </span>
    </span>
    <span class="footer__btn-ttlt">
      カウンセリングを試してみる
    </span>
  </a>
  <a href="/partnertest/
  " class="footer__btn">
    <span class="footer__btn-box">
      <span class="footer__btn-banner">
        簡単２分</span>
      <span class="footer__btn-ttl">
        未来のパートナーを探す
      </span>
    </span>
    <span class="footer__btn-ttlt -fs">
      ハイクラスマッチングを<span>無</span><span>料</span><span>体</span><span>験</span>
    </span>
  </a>
  <a href="#" class="footer__btn-line">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/line-logo.svg" alt="line-logo" width="50" height="47" loading="lazy" class="img-fluid">
    <p>チャットで簡単<br>
      今すぐ相談</p>
  </a>
</div>-->
<!-- FOOTER -->
<footer class="footer form-footer" id="footer">
  <div class="footer__wrapper">
    <div class="footer__left">
      <a href="<?php echo get_site_url(); ?>" class="footer__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/common/logo-footer.svg" alt="footer-logo" width="149" height="95" class="img-fluid">
        <p class="footer__logo-ttl">
          サンセリテ青山
        </p>
      </a>


    </div>
    
   <p class="footer__company-txt">
          © <span>Sincerite Aoyama.</span> All rights Reserved.
        </p>
  </div>

</footer>



<!-- JS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>



<?php if (is_page('form01') || is_page('entry-men') || is_page('entry-women') || is_page('reserve') || is_page_template('templates/template-form.php') || is_page('form05') || is_page('request') || is_page('form06') || is_page('online') || is_page('counseling') ||  is_page('form02') || is_page('recruit') || is_page('first_matching')) : ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js?v=1.2"></script>
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/fix_css/form_new.css" rel="stylesheet">

<?php endif; ?>


<?php wp_footer(); ?>
</body>

</html>