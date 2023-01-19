<?php
/* 
Template Name: 無料マッチング体験
*/ 
 
get_header("first-matching"); ?>



<main>

<div id="main-img-wrap">
	<div class="main-img-wrap-inner">
		<h1>サンセリテ青山<br>無料マッチング体験</h1>
		<p>高収入・高ステータスの男性会員が多数登録する<br class="br-sp">サンセリテ青山のデータマッチングを<br class="br-sp">無料でお試しいただけます。</p>
	</div>
</div>

<div id="first-step-wrap">
	<h2>婚活へのファーストステップをサンセリテ青山で。</h2>
	<p class="txt1">結婚相談所で活動しようと思ってはみても、実際にどんな様子で活動を行うのだろうと疑問に思う方は多くいらっしゃいます。<br>サンセリテ青山では、そんな皆様の不安を払拭していただくために無料マッチング体験を実施しています。<br>実際にどんな形でご紹介が行われるのか、サロンの雰囲気はどんな様子で、どのようなサポートを行うか。<br>実際に活動されている方がどんな方々なのかをご覧いただき、あなたに合わせた活動をご案内いたします。</p>
	<p class="txt2"><span>女性は20歳以上、43歳未満の方が対象です。ご家族と一緒にお越しいただくことも可能です。</span></p>
	<div class="pic-wrap">
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/first-step01.jpg" alt=""></figure>
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/first-step02.jpg" alt=""></figure>
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/first-step03.jpg" alt=""></figure>
		<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/first-step04.jpg" alt=""></figure>
	</div>
</div>

<div id="flow-wrap">
	<div class="flow-wrap-inner">
		<h2>ご予約から無料体験・カウンセリング当日までの流れ</h2>
		<p class="first-txt"><span>まずは当ページ下記の応募フォームより来店のご予約をお願いいたします。<br class="br-sp">サンセリテ青山専任スタッフより電話またはメールにてご予約確定のご連絡をさせていただきます。</span></p>
		
		<div class="angle-down"><i class="fa fa-angle-down"></i></div>
		
		

		
		<div class="image-wrap">
			<div class="image-box">
				<div class="ttl"><div class="maru"><span>1</span></div><span class="ttl-txt">専任カウンセラーのご紹介</span></div>
				<div class="pic"><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/flow01.jpg"></figure></div>
				<div class="txt">専任カウンセラーがご挨拶させていただきます。その際にあなたの婚活の理想・ご希望をお聞かせください。</div>
			</div>
			<div class="arrow-box"><i class="fa fa-angle-right"></i></div>
			<div class="image-box">
				<div class="ttl"><div class="maru"><span>2</span></div><span class="ttl-txt">データマッチング体験</span></div>
				<div class="pic"><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/flow02.jpg"></figure></div>
				<div class="txt">あなたのプロフィールとお相手への希望条件から、どんな方が出会いの対象になるのかをお伝えいたします。</div>
			</div>
			<div class="arrow-box"><i class="fa fa-angle-right"></i></div>
			<div class="image-box">
				<div class="ttl"><div class="maru"><span>3</span></div><span class="ttl-txt">婚活スタートのご相談</span></div>
				<div class="pic"><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/first_matching/flow03.jpg"></figure></div>
				<div class="txt">検索結果をもとに、運命のお相手と出会うための具体的なプランやサービスをご案内します。</div>
			</div>
		</div>
		
		<div class="notice-box">
			<ul>
				<li>青山・表参道のサロンでは個別のお席をご用意していますので、ゆっくりとご相談いただけます。</li>
				<li>データマッチングの検索結果には、個人を特定する情報は含まれません。</li>
				<li>もちろんその場で入会を決めていただく必要はありません。ご納得いただけるまでご検討ください。</li>
			</ul>
		</div>
		
		<div class="angle-down"><i class="fa fa-angle-down"></i></div>

		
		<p class="last-txt"><span>サンセリテ青山での婚活をお決めいただきましたら、正式なお申込み・活動開始となります。</span></p>
		
	</div>
</div>

<div id="form-wrap">
	<h2>無料マッチング体験のご希望日をお知らせください</h2>
	<div class="notice-box">
		<ul>
			<li>当日および翌日のご来社をご希望の場合は、03-5468-2181（受付時間10:00 - 19:00）までご連絡くださいませ。</li>
			<li>毎週水曜は定休日となります。</li>
			<li>マッチング体験の所要時間は、2時間程度が目安となります。</li>
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



<?php get_footer("first-matching"); ?>
