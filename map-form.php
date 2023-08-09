<?php
$ua=$_SERVER['HTTP_USER_AGENT'];
$browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
if ($browser == true){
$browser = 'sp';
}
if($browser == 'sp'){
?>

<?php }else{ ?>

<div class="shop_mapblock">
<div class="main-top-05 clearfix">
    <div class="address_box_left">
        <div class="address_inner_wrapper clearfix">
            <div class="address_inner_left">
                <h3>サンセリテ青山 表参道店<div class="telnumber">TEL.03-5468-2181</div></h3>
            </div>
            <div class="address_inner_right">
		<div class="shop_part"><p>東京都渋谷区神宮前5-6-13 ヴァイス表参道 B1<br>《 地下鉄 銀座線・半蔵門線・千代田線 表参道駅 A1出口徒歩5分 》</p></div>
    <div class="link_part">
                <a class="access" href="<?php echo get_site_url(); ?>/access-tokyo/">アクセス</a>
                <a class="reserve" href="<?php echo get_site_url(); ?>/form01">来店予約</a>
		</div>
            </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.457392602265!2d139.70638081525846!3d35.66573808019792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca1059007e1%3A0xf9b88a254332709c!2z44CSMTUwLTAwMDEg5p2x5Lqs6YO95riL6LC35Yy656We5a6u5YmN77yV5LiB55uu77yW4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1445235784775" width="920" height="350" frameborder="0" style="border:0"></iframe>

        </div>
        <!-- div class="sub_address">
            <p>地下鉄 銀座線・半蔵門線・千代田線 表参道駅 A1出口徒歩5分<a href="<?php echo get_site_url(); ?>/access-tokyo/" class="arrow access_link">店舗詳細</a></p>
        </div -->
    </div>

</div>
</div>

<div class="kasa clearfix">
<div class="kasa-title">サンセリテ青山のお見合い</div>
<p class="mb20">結婚相談所・サンセリテ青山は高収入・高学歴の男性会員という限定した会員組織で運営しています。「お見合い」という言葉は現代ではあまり聞かない言葉になりましたが、女性の社会進出が進む中で人の紹介を介した出会いが少なくなったといわれています。特に都心部ではお節介をやいてくれるお世話好きのおばちゃんも減り、職場の上司も結婚について触れることはセクハラになる時代になり昔のように上司がお見合いをセッティングすることも少なくなりました。</p><p class="mb20">そんな時代ですが、まだ「お見合い」文化はしっかりと日本には根付いています。「出会いが少ない職場・環境」「今まで忙しすぎた」「周りは皆既婚者」と様々な理由によりお見合いを望んでいる人は少なくありません。結婚相談所・サンセリテ青山はお見合い文化をしっかり引き継ぎ、お見合いを望んでいる方々へ最適なお見合い環境を日々作る事を努力しています。</p><p class="mb20">サンセリテ青山のお見合いの特徴としては、(1)あなた自身で納得した相手を選び相手に申し込むことが出来る(2)あなた自身のことに興味を持ってもらった相手に会うことが出来る(3)経験豊富なプロのカウンセラーにあなた自身におすすめの人と会うことが出来るの3点が大きな特徴となります。出会いの幅を広げることはとても大事です。星の数ほど人はいるとよく言われますが、出会える人はその中のほんのわずかな人です。</p><p class="mb20">サンセリテ青山のお見合いに興味を持って頂いた方は是非<a href="<?php echo get_site_url(); ?>/form01">初回無料体験</a>に足を運んで下さい。誠心誠意ご対応いたします。</p></div>

<?php } ?>
