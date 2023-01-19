<?php
/* 
Template Name: オンライン面談
*/ 
 
get_header("online"); ?>



<main>

<div id="main-img-wrap">
	<img class="switch" src="<?php echo get_template_directory_uri() ?>/images/lp/online/main_pc.jpg" alt="">
</div>

<div class="reserve-btn"><a href="#form">オンライン面談のご予約はこちらから</a></div>

<div id="first-step-wrap">
	<h2>高収入・エリート男性に特化した結婚相談所 サンセリテ青山の<br class="br-sp">無料婚活カウンセリングをオンラインでお気軽に!</h2>
	<p class="txt1">結婚相談所で活動しようと思ってはみても、実際にどんな様子で活動を行うのだろうと疑問に思う方は多くいらっしゃいます。<br class="br-sp">サンセリテ青山では、そんな皆様の不安を払拭していただくために無料カウンセリングを実施しています。<br class="br-sp">この度、昨今の情勢を鑑みまして、オンラインでのご面談を開始いたしました。<br class="br-sp">実際にどんな形でご紹介が行われるのか、サロンの雰囲気はどんな様子で、どのようなサポートを行うか。<br class="br-sp">実際に活動されている方がどんな方々なのかをご覧いただき、あなたに合わせた活動をご案内いたします。</p>
	<p class="txt2"><span>女性は20歳以上、43歳未満の方が対象です。ご家族と一緒にお話いただくことも可能です。</span></p>
</div>


<div id="remote-wrap">
	<p class="txt">エリート専門だから<br>叶えられる理想の結婚を<br>ご自宅からお気軽に。</p>
</div>

<div id="flow-wrap">
	<div class="flow-wrap-inner">
		<h2>ご予約からオンライン面談・婚活スタートまでの流れ</h2>
		<p class="first-txt"><span>まずは当ページ下記の応募フォームより面談希望日時のご予約をお願い致します。</span></p>
		
		<div class="angle-down"><i class="fa fa-angle-down"></i></div>
		
		

		
		<div class="image-wrap">
			<div class="image-box">
				<div class="ttl"><div class="maru"><span>1</span></div><span class="ttl-txt no1">日程確定のご連絡</span></div>
				<div class="pic"><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/online/flow01.jpg"></figure></div>
				<div class="txt">担当者より日程確定・およびオンライン面談への参加方法をお知らせいたします。</div>
			</div>
			<div class="arrow-box"><i class="fa fa-angle-right"></i></div>
			<div class="image-box">
				<div class="ttl"><div class="maru"><span>2</span></div><span class="ttl-txt no2">オンライン面談スタート</span></div>
				<div class="pic"><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/online/flow02.jpg"></figure></div>
				<div class="txt">担当者とご来店時同様の面談を行います。結婚相談所のことや当会のサービス内容を丁寧にご説明いたします。</div>
			</div>
			<div class="arrow-box"><i class="fa fa-angle-right"></i></div>
			<div class="image-box">
				<div class="ttl"><div class="maru"><span>3</span></div><span class="ttl-txt no3">ご来店で無料マッチングも</span></div>
				<div class="pic"><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/online/flow03.jpg"></figure></div>
				<div class="txt">さらに1度ご来店いただけますと、お相手への希望条件を元に無料でデータマッチング結果もご案内します。</div>
			</div>
		</div>
		
		<div class="notice-box">
			<ul>
				<li>オンライン面談で使用するアプリについては日程確定時にご案内いたします。</li>
				<li>データマッチングの検索結果には、個人を特定する情報は含まれません。</li>
				<li>もちろんその場で入会を決めていただく必要はありません。ご納得いただけるまでご検討ください。</li>
			</ul>
		</div>
		
		<div class="angle-down"><i class="fa fa-angle-down"></i></div>

		
		<p class="last-txt"><span>サンセリテ青山での婚活をお決めいただきましたら、正式なお申込み・活動開始となります。</span></p>
		
	</div>
</div>

<div id="form-wrap">
	<div class="pic-wrap">
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/online/first-step01.jpg" alt=""></figure>
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/online/first-step02.jpg" alt=""></figure>
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/online/first-step03.jpg" alt=""></figure>
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/online/first-step04.jpg" alt=""></figure>
	</div>
	<h2>ご興味のある方は、どうぞお気軽に下記フォームより<br class="br-sp">無料オンライン面談のご希望日をお知らせください</h2>
	<div class="notice-box">
		<ul>
			<li>当日および翌日の面談をご希望の場合は、03-5468-2181（受付時間10:00 - 19:00）までご連絡くださいませ。</li>
			<li>毎週水曜は定休日となります。</li>
			<li>無料オンライン面談の所要時間は、30分程度が目安となります。</li>
		</ul>
	</div>

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

</div>


</main>



<?php get_footer("online"); ?>
