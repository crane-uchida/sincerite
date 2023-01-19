<?php
/* Template Name: form */
get_header(); ?>

    <div class="main-contents clearfix">

        <div class="main-inner-box clearfix">

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    ?>

                    <?php the_content(); ?>


                    <?php
                endwhile;
            else:
                ?>

                <p>ページはありません！</p>

                <?php
            endif;
            ?>

        </div><!-- /main-inner-box -->

    </div><!-- /main-contents -->

<!-- フォームで使っているスクリプト -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js"></script>

<!-- 「フリガナ」を自動で入力する -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.autoKana.js"></script>
<script>
jQuery(function() {
    jQuery.fn.autoKana('#name', '#name_kana', {
        katakana : true
    });
});
</script>

<!-- 郵便番号から住所の自動入力 -->
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="utf-8"></script>
<script type="text/javascript">
jQuery(function( $ ) {
    jQuery( 'input[name="your-zip"]' ).keyup( function( e ) {
        AjaxZip3.zip2addr('your-zip','','your-address1','your-address2');
    } )
		
} );
</script>




<?php
$ua=$_SERVER['HTTP_USER_AGENT'];
$browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
if ($browser == true){
$browser = 'sp';
}
if($browser == 'sp'){
?>

<?php }else{ ?>

  <div class="kasa clearfix">
  <div class="kasa-title">サンセリテ青山のお見合い</div>
  <p class="mb20">結婚相談所・サンセリテ青山は高収入・高学歴の男性会員という限定した会員組織で運営しています。「お見合い」という言葉は現代ではあまり聞かない言葉になりましたが、女性の社会進出が進む中で人の紹介を介した出会いが少なくなったといわれています。特に都心部ではお節介をやいてくれるお世話好きのおばちゃんも減り、職場の上司も結婚について触れることはセクハラになる時代になり昔のように上司がお見合いをセッティングすることも少なくなりました。</p><p class="mb20">そんな時代ですが、まだ「お見合い」文化はしっかりと日本には根付いています。「出会いが少ない職場・環境」「今まで忙しすぎた」「周りは皆既婚者」と様々な理由によりお見合いを望んでいる人は少なくありません。結婚相談所・サンセリテ青山はお見合い文化をしっかり引き継ぎ、お見合いを望んでいる方々へ最適なお見合い環境を日々作る事を努力しています。</p><p class="mb20">サンセリテ青山のお見合いの特徴としては、(1)あなた自身で納得した相手を選び相手に申し込むことが出来る(2)あなた自身のことに興味を持ってもらった相手に会うことが出来る(3)経験豊富なプロのカウンセラーにあなた自身におすすめの人と会うことが出来るの3点が大きな特徴となります。出会いの幅を広げることはとても大事です。星の数ほど人はいるとよく言われますが、出会える人はその中のほんのわずかな人です。</p><p class="mb20">サンセリテ青山のお見合いに興味を持って頂いた方は是非<a href="<?php echo get_site_url(); ?>/form01">初回無料体験</a>に足を運んで下さい。誠心誠意ご対応いたします。</p></div>

  <?php } ?>



<?php get_footer(); ?>
