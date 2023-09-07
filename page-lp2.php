<?php
/* 
Template Name: LP2
*/ 
 
get_header("lp2"); ?>



<main id="lp">
<article>

<section id="top">
	<figure><img class="switch" src="<?php echo get_template_directory_uri() ?>/images/lp/main_pc.jpg" alt="サンセリテ青山"></figure>
	<h1><img class="switch" src="<?php echo get_template_directory_uri() ?>/images/lp/main_txt_pc.png" alt="サンセリテ青山"></h1>
</section>



<section id="status">
	<div class="inner">
		<h2>社会的な高ステータス男性や高収入の男性と<br class="br-sp">ご自身を磨き続ける聡明な女性とを結びつける<br>結婚相談所サンセリテ青山の婚活プラン。<br class="br-sp">誠意と真心でサポート致します。</h2>
	</div>
</section>





<section id="annual-income">
		<div class="inner">
			<h2>真面目に結婚を考えてご入会されている<br class="br-sp">『医師』や『弁護士』をはじめ<br>男性の平均年収は業界でも<br class="br-sp">ダントツの<br class="br-sp"><b>1,500万円以上</b></h2>
			<p class="s01">あなたのご希望・お悩みをお聞かせ下さい。</p>
			
			<div class="reservation-wrap">
				<div class="reservation-btn"><a href="<?php echo home_url(); ?>/counseling/">無料来店カウンセリング予約</a></div>
				<div class="online-btn"><a href="<?php echo home_url(); ?>/online/">オンライン面談予約</a></div>
				<div class="tel-btn"><a href="tel:03-5468-2181">03-5468-2181</a></div>
			</div>
			
			<p class="s02">ご成婚おめでとうございます！</p>
			<p class="s03">サンセリテ青山でご成婚された方々をご紹介</p>
	

<div class="swiper-container">
    <div class="swiper-wrapper">
		<div class="swiper-slide">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/lp/marriage01.jpg">
			<dl class="cont"><dt>Aさん Bさん</dt><dd>交際３ヶ月でご成婚。</dd></dl>
		</div>
		<div class="swiper-slide">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/lp/marriage02.jpg">
			<dl class="cont"><dt>Cさん Dさん</dt><dd>交際５ヶ月でプロポーズ</dd></dl>
		</div>
		<div class="swiper-slide">
			<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/lp/marriage03.jpg">
			<dl class="cont"><dt>Eさん Fさん</dt><dd>交際４ヶ月で成婚退会！</dd></dl>
		</div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script>
  var swiper03 = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop: true,
    slidesPerView: 2,
    centeredSlides : true,
    slideToClickedSlide: true,
    spaceBetween: 1,
    autoplay: {
    delay: 2000,
	},
    speed: 1000,
    breakpoints: {
      543: {
        slidesPerView: 2,
        spaceBetween: 1
      }
    }
  });
</script>




	
			<div class="satisfaction-wrap">
				<div class="img-box">
					<h3>会員様ご満足度<span>81.7％</span></h3>
					<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_satisfaction_level.png" alt="満足度"></figure>
				</div>
				<div class="txt-box">
					<p>”結婚できない”のではなく”結婚を選びたい”方々が活動されているサンセリテ青山には、独自のエリートネットワークより厳しい入会審査を行い入会へ至る仕組みが整っております。</p>
					<p>完全会員制だからこそ、良質の結婚生活を送るのにふさわしい男女にご活動頂いています。</p>
				</div>
			</div>
		</div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<section id="reason">
<div class="inner">
	<h2>数ある結婚相談所の中で<br class="br-sp">サンセリテ青山が選ばれる理由</h2>
	
	<div class="wrap">
		<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/reason01.jpg" alt=""></div>
		<div class="txt-box">
			<h3><span class="number">01</span><span class="ttl">専属カウンセラーのサポート</span></h3>
			<p>サンセリテ青山では、会員様のひとりひとりに専属のカウンセラーが最終目標である、成婚に至るまでを受け持つ完全担当制を導入しております。</p>
			<p>１対１ならではの心地よい関係性を築く事でお互いの理解を深める事を大切にしています。</p>
		</div>
	</div>
	
	<div class="wrap">
		<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/reason02.jpg" alt=""></div>
		<div class="txt-box">
			<h3><span class="number">02</span><span class="ttl">1年以内の婚約を目指す</span></h3>
			<p>当会の会員期間は1年間です。ご結婚されたカップルのうち、63%が1年以内に成婚されているという統計から、会員期間を1年に設定、万が一1年経過しても成婚に至らない場合には、月額1万円の引き落としで活動を続けて頂いております。</p>
		</div>
	</div>
	
	<div class="wrap">
		<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/reason03.jpg" alt=""></div>
		<div class="txt-box">
			<h3><span class="number">03</span><span class="ttl">お見合いパーティーへの<br class="br-sp">こだわり</span></h3>
			<p>サンセリテ青山のお見合いパーティーは表参道という立地を活かして非日常空間での出会いを大切にします。ミシュラン掲載店舗を運営する関連会社のネットワークを活かして、通常ではお見合いパーティーに使用できない場所での貸切パーティーや、生演奏バンドによる演出・シェフによる挨拶等と出会いを盛り上げるために様々な工夫を行っています。</p>
		</div>
	</div>
	

</div>
</section>	
	











<section id="data">
<div class="inner">
	<h2>数字でみるサンセリテ青山</h2>
	<p class="s01">有名企業勤務の会社員で高役職に就く方が多く、お忙しい方々の為に当会の専任カウンセラーが御希望を心得、効率よく立ち回り、出会いのセッティングを致します。</p>
	
	<ul class="wrap01">
		<li><h3>年収</h3><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_annual_income.png" alt="年収"></figure></li>
		<li><h3>年齢</h3><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_age.png" alt="年齢"></figure></li>
		<li><h3>職業</h3><figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_job.png" alt="職業"></figure></li>
	</ul>
	


	<ul class="wrap02">
		<li>
			<h3>1年間の<br class="br-sp">お見合い成立率</h3>
			<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_matchmaking.png" alt=""></figure>
			<p class="txt">※活動1年間で交際を経験した全会員比率。交際とは、お見合いの回答が双方YESになった状態です。中途退会者を含まない数字です。2018年4月調査（2016年4月～2017年3月までの1年間の入会者実額）</p>
		</li>
		<li>
			<h3>入会から<br class="br-sp">1年以内の交際率</h3>
			<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_companionship.png" alt=""></figure>
			<p class="txt">成婚退会した会員の活動期間1年以内に交際に至った割合<br>※2017年4月～2018年3月の成婚退会者実績</p>
		</li>
		<li>
			<h3>1年以内に<br class="br-sp">成婚した人の割合</h3>
			<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_marriage.png" alt=""></figure>
			<p class="txt">成婚退会した会員の活動期間1年以内に成婚に至った割合<br>※2017年4月～2018年3月の成婚退会者実績</p>
		</li>
		<li>
			<h3>入会から<br class="br-sp">交際までの平均期間</h3>
			<figure><img src="<?php echo get_template_directory_uri() ?>/images/lp/data_period.png" alt=""></figure>
		</li>
	</ul>
</div>
</section>

















<section id="meet">
	<div class="inner">
		<h2>サンセリテ青山で出会いました</h2>
		<div class="wrap">
			<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/meet01.jpg" alt=""></div>
			<div class="ttl-box">	
				<h3>海外在住男性<br>×<br>会社員女性</h3>
			</div>
			<div class="txt-box">
				<p>米国在住男性と日本在住の会社員女性のご成婚事例です。男性は米国で大学教授をされており、現地でのお相手探しは困難という事でサンセリテ青山でご活動頂きました。</p>
				<p>とても明るくいつも笑顔でいる穏やかなお人柄でしたが、日本への帰国時に合わせてお見合いを組み、交際となった方とは帰国時はもちろん、女性の米国出張のタイミングには米国でのデートも楽しめました。</p>
				<p>活動開始からおよそ11ヶ月。この方と思えるお相手に巡り会えて今はお二人、米国で明るい家庭を築かれております。</p>
			</div>
		</div>
		<div class="wrap">
			<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/meet02.jpg" alt=""></div>
			<div class="ttl-box">	
				<h3>大手企業勤務男性<br>×<br>会社員女性</h3>
			</div>
			<div class="txt-box">
				<p>女性は40代の方で美容関連のお仕事をされておりましたが、サンセリテ青山でご紹介を受けてお見合いし、交際、成婚となりました。</p>
				<p>お相手は同世代の大手企業に勤める真面目で優しい男性です。ずっと子供が欲しいと婚活を頑張って参りましたが、成婚退会後の１年後には赤ちゃんを出産し、今では子育てに専念して専業主婦として家庭を支えています。</p>
				<p>ご友人や親戚の方をご紹介頂き、ご紹介頂いた方々にも良いご縁が繋がりましたので成婚の輪はどんどん広がっています。</p>
			</div>
		</div>
	</div>
</section>













<section id="flow">
		<div class="inner">
			<h2>ご入会までの流れ</h2>
			<div class="wrap">
				<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/flow01.jpg" alt=""></div>
				<div class="txt-box">
					<h3>資料請求・お問合せ</h3>
					<p>ご来店・面談につきましては事前にアポイントをとらせていただきます。また、オンラインでの面談も承ります。<br>（11:00-20:00 水曜定休）</p>
				</div>
			</div>
			<div class="wrap">
				<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/flow02.jpg" alt=""></div>
				<div class="txt-box">
					<h3>無料カウンセリングと<br class="br-sp">最適なプランのご提案</h3>
					<p>結婚に対する想いをお伺いし、当会の活動プランと紹介システムをご提案させていただきます。他社様との比較も丁寧に説明いたします。</p>
				</div>
			</div>
			<div class="wrap">
				<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/flow03.jpg" alt=""></div>
				<div class="txt-box">
					<h3>ご入会の判断</h3>
					<p>当会の入会資格を満たし、ご活動を御希望されましたら、必要書類を揃えて活動開始となります。</p>
				</div>
			</div>
		</div>
</section>
















<section id="cost">
	<div class="inner">
		<h2>コースと費用</h2>
		<p class="s01">サンセリテ青山では、専属カウンセラーがお客様のご状況を把握し、アレンジメントやご交際が上手くいかないときには、一緒に振り返り、少しずつでも良い出逢いと交際ができるようにと、ひとつひとつ問題解決し、ご成婚まで繋げます。</p>


		<h3>プライベートスタイル（1年活動）</h3>
		<div class="wrap">
			<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/cost01.jpg" alt=""></div>
			<div class="txt-box">
				<dl>
					<dt>入会費</dt><dd>30,000円</dd>
					<dt>初月度会費</dt><dd>95,000円</dd>
					<dt>活動費</dt><dd>275,000円</dd>
					<dt class="total">初期費用合計</dt><dd class="total">400,000円</dd>
					<dt>成婚料</dt><dd>－</dd>
				</dl>
				<p class="note">※2年目以降継続希望の場合は月々1万円の銀行引き落としとなります。</p>
			</div>
		</div>

		<ul class="cont">
			<li>専任カウンセラーがサポート</li>
			<li>プロフォトグラファーによる写真撮影</li>
			<li>毎月専任カウンセラーから選りすぐりの2名をご紹介</li>
			<li>出会いの申込があったお相手の案内（随時無制限）</li>
			<li>専任カウンセラーとのカウンセリング、お相手選び</li>
			<li>アレンジメント（お見合い）日時のお取次ぎ</li>
			<li>ご交際中のカウンセリング、アドバイス</li>
		</ul>
		
		<p class="cont-note">※会員期間は1年とし、2年目以降、再契約を結ぶ場合は月々1万円の銀行引き落としになります。<br class="br-sp">※上記金額には消費税が含まれております。<br class="br-sp">※交際成立時の費用は不要です。</p>

		<h3>男性向けプラン</h3>
		<dl class="mens-plan">
			<dt>ステータスプラン</dt>
			<dd>各界でご活躍の多忙な毎日を送るエリート男性を対象としたプラン</dd>
			<dt>東大・慶応・早稲田</dt>
			<dd>東大・慶応・早稲田大学の男性OBのみ入会可能</dd>	
			<dt>医師・歯科医師</dt>
			<dd>臨床研修中の医師・歯科医の男性のみ入会可能</dd>
		</dl>
	</div>
</section>










<section id="access">
		<div class="inner">
			<div class="wrap01">
				<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/logo.gif" alt=""></div>
				<div class="txt-box">サンセリテとはフランス語で”真実・誠意・真心”。東京表参道に本店を構え、男性会員をハイクラス層に限定することで、かつてない豊かな結婚相手の選択肢を提供しています。</div>
			</div>


			<h2>「表参道駅から通いやすい好立地店舗」</h2>
			<div class="wrap02">
				<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/exterior.jpg" alt=""></div>
				<div class="txt-box">東京都渋谷区神宮前5-6-13 <br class="br-sp">ヴァイス表参道B1</div>	
			</div>
			<div class="metro"><span>地下鉄 銀座線・半蔵門線・千代田線<br class="br-sp"> 表参道駅 A1出口徒歩5分</span></div>
			<figure class="access-root"><img class="switch" src="<?php echo get_template_directory_uri() ?>/images/lp/access_root_pc.png" alt=""></figure>
		</div>
</section>













<section id="privacy01">
	<div class="inner">
		<h2>個人情報保護を徹底しているので安心・安全</h2>
		<p class="s01">当会では会員様の個人情報を守る為に、厳重なシステムセキュリティーを実装し、お届けするプロフィール情報に氏名や住所詳細、連絡先等は一切掲載しておりません。</p>
		<div class="wrap">
			<div class="img-box"><img src="<?php echo get_template_directory_uri() ?>/images/lp/cms.jpg" alt=""></div>
			<div class="txt-box">経済産業省及びサービス産業生産性協議会が定めた「結婚相手紹介サービス業認証制度に関するガイドライン」に基づいた、特定非営利活動法人 日本ライフデザインカウンセラー協会（JLCA）の審査の結果、当会は認証（いわゆる「マル適マーク」）を付与されました。</div>
		</div>
	</div>
</section>












<section id="faq">
	<div class="inner">
		<h2>よくあるご質問</h2>

<script>
jQuery(function(){
	jQuery("main#lp section#faq dt").on("click", function() {
		jQuery(this).toggleClass("open").next().slideToggle();
	});
});
</script>

		<dl>
			<dt>Q.サンセリテ青山と大手の結婚情報サービスとは何が違うのですか？</dt>
			<dd>A.私どもは、大手の結婚情報サービスとは一線を画した上質の結婚情報サービスとして、厳正なる会員資格を設け、青山という地に象徴される品格ある会員様に相応しい信頼ある情報をお届けしております。
また、一流のサロン及び外資系ホテルと独自の提携関係を結び、会員の結婚活動を様々な場面でサポートしております。</dd>
			<dt>Q.男女比率はどれくらいですか？</dt>
			<dd>A.「男性、女性が50対50のおよそ半々です。</dd>
			<dt>Q.面談には予約が必要ですか？また、必ず来店が必要でしょうか？</dt>
			<dd>A.お席の数に限りがございますので、事前に来店のご予約をお願いしております。また、ビデオ通話を使用したオンラインでの面談も承っております。<br><a href="<?php echo home_url(); ?>/online/">こちら</a>よりお申し込みください。</dd>
		</dl>






<?php /* ?>
			<input id="acd-check1" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check1">Q.サンセリテ青山と大手の結婚情報サービスとは何が違うのですか？</label>
			<div class="acd-content">
				<p>A.私どもは、大手の結婚情報サービスとは一線を画した上質の結婚情報サービスとして、厳正なる会員資格を設け、青山という地に象徴される品格ある会員様に相応しい信頼ある情報をお届けしております。
また、一流のサロン及び外資系ホテルと独自の提携関係を結び、会員の結婚活動を様々な場面でサポートしております。</p>
			</div>
			<input id="acd-check3" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check3">Q.男女比率はどれくらいですか？</label>
			<div class="acd-content">
				<p>A.「男性、女性が50対50のおよそ半々です。</p>
			</div>
			<input id="acd-check11" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check11">Q.面談には予約が必要ですか？</label>
			<div class="acd-content">
				<p>A.お席の数に限りがございますので、事前に来店のご予約をお願いしております。</p>
			</div>



			<input id="acd-check2" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check2">Q.どんな方がサンセリテ青山に入会されているのですか？</label>
			<div class="acd-content">
				<p>A.男性は 30代の方が多く登録され、青山ブランドにふさわしい高学歴で高収入層の割合が高くなっております。女性は20代後半から30代の方が多く登録されています。みなさん結婚を真剣に考えておられる誠実な方ばかりですのでご安心ください。</p>
			</div>
			
			<input id="acd-check4" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check4">Q.《理想のお相手》が自分でもわかりません。</label>
			<div class="acd-content">
				<p>A.ご自身一人きりで婚活するのは決して楽な事ではありません。サンセリテ青山では専属のベテランカウンセラーが貴方の本当に求めているお相手像を一緒に見つけ出すお手伝いを致します。</p>
			</div>
			<input id="acd-check5" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check5">Q.入会してどれくらいの期間で成婚できますか？</label>
			<div class="acd-content">
				<p>A.弊社では1年以内の成婚を目指し、サポートを致します。中には活動して2ヶ月、3ヶ月で成婚された方もいらっしゃいます。</p>
			</div>
			<input id="acd-check6" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check6">Q.誰でも入会できますか？</label>
			<div class="acd-content">
				<p>A.サンセリテ青山では男性、女性共に入会資格を設けております。男性は25～59歳までの大学卒業以上の学歴を持ち、喫煙されない、またはご結婚を機にやめる意思のある方。女性は43歳未満の短大卒以上の学歴をお持ちの方がご入会頂けます。</p>
			</div>
			<input id="acd-check7" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check7">Q.再婚ですが、入会できますか？</label>
			<div class="acd-content">
				<p>A.婚暦はご入会に関して不問でございます。再婚をお考えの方も良きパートナーと巡り合えるように尽力致します。</p>
			</div>
			<input id="acd-check8" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check8">Q.初回無料体験で無理やり入会させられませんか？</label>
			<div class="acd-content">
				<p>A.結婚は人生の一大事です。紹介システムや条件、カウンセラーの質、サービス内容など十分納得した上でご検討下さい。無理な勧誘などは一切行いません。</p>
			</div>
			<input id="acd-check9" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check9">Q.カウンセラーに何を相談したらよいですか？</label>
			<div class="acd-content">
				<p>A.婚活に関する事ならなんでもご相談下さい。服装のアドバイスからお見合いのポイント、お相手探しのコツなど、経験豊富なカウンセラーだからこそ、お役に立てると信じています。</p>
			</div>
			<input id="acd-check10" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check10">Q.初回無料体験ではどのようなことをするのですか？</label>
			<div class="acd-content">
				<p>A.「結婚」はプライバシーに関わることですので、ご連絡後ご来訪くださるのには大変緊張されるかと思います。また初対面のカウンセラーと話をするのも同様です。そんな緊張感をほぐしていただくためにも、まずはご自身について現在の状況、結婚への想い、相手に対して望まれること等をお聞かせください。
また、カウンセラーから「サンセリテ青山」のシステムやサービスのご説明をいたします。
ご自身で見ていただき、正しくご理解の上、ご入会の検討をいただければと思います。</p>
			</div>

			<input id="acd-check12" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check12">Q.初回無料体験はどれくらい時間がかかりますか？</label>
			<div class="acd-content">
				<p>A.おおよそ１時間半ほどを目安にお話させて頂きます。</p>
			</div>
			<input id="acd-check13" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check13">Q.交際から結婚が決まるまでどのくらい時間がかかりますか？</label>
			<div class="acd-content">
				<p>A.目安としては3ヶ月という交際期間を設けております。短いと思われがちですが、実際はどなたも真剣に結婚を考えていますので、お付き合いが進んでいけば婚約までにそれ程時間はかかりません。</p>
			</div>
			<input id="acd-check14" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check14">Q.紹介システムについて。</label>
			<div class="acd-content">
				<p>A.女性へは毎月2名の弊社男性会員様をご紹介致します。男性へも同じように毎月ご紹介をしておりますので同時に男性からのお申し込みが入ることがございます。</p>
			</div>
			<input id="acd-check15" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check15">Q.お見合いの流れを教えて下さい。</label>
			<div class="acd-content">
				<p>A.①ご紹介のお相手へ申し込みをします。<br>②相手が受けてくれたらお見合い成立。<br>③カウンセラーが間に入り日程の調整を致します。<br>④当日はお二人で素敵なラウンジ、カフェでひと時を過ごします。<br>⑤ご歓談終了後に担当カウンセラーへご報告。<br>⑥お互い好印象ならばカウンセラーを通して連絡先を交換し、次のステージへ進みます。</p>
			</div>
			<input id="acd-check16" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check16">Q.お見合いのお相手を自分で選べるのかどうか教えてください。</label>
			<div class="acd-content">
				<p>A.ご紹介された会員様の中で、お会いしてみたいと思える方へお申し込み下さい。もちろん、こちらで勝手にお見合いを成立させる事はございません。男女がお互いに会ってみたい。と思って始めてお見合いのステップへ進みます。また、ご自身で会員様の検索を行う事も可能です。カウンセラーと相談しながらご自身に合う活動のスタイルを確立していきます。</p>
			</div>
			<input id="acd-check17" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check17">Q.お見合い場所はどのような場所ですか?</label>
			<div class="acd-content">
				<p>A.表参道という洗練された街には、様々なラウンジ、カフェがございます。主にお見合いに使用されるのは騒がしくない、落ち着いた空間のカフェや、場所を変えてホテルのラウンジ等が人気でございます。</p>
			</div>
			<input id="acd-check18" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check18">Q.お見合いはどのような服装ですか?</label>
			<div class="acd-content">
				<p>A.あまりカジュアルな格好ではなく男性はジャケット着用をお願いしています。女性はスカート、ワンピース等、いつもよりちょっと華やかな格好が望ましいです。</p>
			</div>
			<input id="acd-check19" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check19">Q.交際終了をお相手に言いづらいのですが。</label>
			<div class="acd-content">
				<p>A.ご安心下さい。お見合いの結果や交際終了の際には担当カウンセラーが間に入り交際終了を告げる事になります。</p>
			</div>
			<input id="acd-check20" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check20">Q.お見合い以外にどんなサポートがありますか？</label>
			<div class="acd-content">
				<p>A.サンセリテ青山では提携するエステサロンで外見を磨き、また開催する会員様向けのセミナーではメイクやマナー講座等、活動される会員様からも大変好評頂いています。</p>
			</div>
			<input id="acd-check21" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check21">Q.パーティーの参加人数は？</label>
			<div class="acd-content">
				<p>A.企画するパーティー会場によって人数には差があります。おおよそ10対10以上の人数で開催をしております。</p>
			</div>
			<input id="acd-check22" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check22">Q.パーティーの形式は？</label>
			<div class="acd-content">
				<p>A.会場によりますが、通常着席形式でのパーティーを開催いたしております。女性はゆっくりお食事を楽しみながら参加者全員と会話のできる形をとらせて頂きます。</p>
			</div>
			<input id="acd-check23" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check23">Q.プライバシーはきちんと守られるのでしょうか？</label>
			<div class="acd-content">
				<p>A.弊社では厳重に個人情報の管理を行っておりますので、お聞きした個人情報などが外部に漏れるようなことは一切ありえません。
秘密を守るということが会員様との信頼関係の第一歩であり最低限のポリシーだと考えております。</p>
			</div>
			<input id="acd-check24" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check24">Q.家族に入会したことを知られたくないのですが</label>
			<div class="acd-content">
				<p>A.ご安心ください。本人様以外とのコンタクトは必要ありません。連絡方法なども本人様のご希望を最重視いたします。サンセリテ青山は会員でいることが一つのステータスとなるようなサービスをスタッフ一同心がけております。</p>
			</div>
			<input id="acd-check25" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check25">Q.息子・娘の結婚相手を探しているのですが</label>
			<div class="acd-content">
				<p>A.親御さんのみで結構ですので一度ご説明させてください。しかし、ご入会に際しましてはご子息様・お嬢様との面談が必要となります。親御さんがご心配されるお気持ちはよくわかりますが、ご本人様の意志が何より大切ですので無理にお連れになるよりもご自分で入会の意志を持たれた時点でのご入会が一番かと思います。</p>
			</div>
			<input id="acd-check26" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check26">Q.活動費はどれくらいかかるのでしょうか。</label>
			<div class="acd-content">
				<p>A.活動費は各コースのページに記載がございます。<br>高収入 男性用プラン〈ステータスプラン〉<br>女性用プラン〈プライベートスタイル〉<br>お支払いはクレジットカード（VISA / MasterCrad）、銀行振込、現金にて承ります。</p>
			</div>
			<input id="acd-check27" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check27">Q.活動に必要な書類は？</label>
			<div class="acd-content">
				<p>A.独身証明書/住民票/最終学歴証明証/資格証明証(有資格者のみ)/給与明細若しくは源泉徴収等(男性のみ)</p>
			</div>
			<input id="acd-check28" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check28">Q.店舗数は？</label>
			<div class="acd-content">
				<p>A.東京表参道店がございます。</p>
			</div>
			<input id="acd-check29" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check29">Q.近くに店舗がありませんが、入会できますか？</label>
			<div class="acd-content">
				<p>A.ご自身の活動の拠点となる東京でのお見合いに合わせて、東京まで出向くことが可能でしたらご入会は可能です。</p>
			</div>
			<input id="acd-check30" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check30">Q.他社と同時に活動できますか？</label>
			<div class="acd-content">
				<p>A.他社で活動されていても、同時に活動することは可能です。</p>
			</div>
			<input id="acd-check31" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check31">Q.休会は可能ですか？</label>
			<div class="acd-content">
				<p>A.活動期間中は最長1年間の休会をすることが可能です。休会中の月会費は発生致しません。</p>
			</div>
			<input id="acd-check32" class="acd-check" type="checkbox">
			<label class="acd-label" for="acd-check32">Q.会員期間中でも退会できますか？</label>
			<div class="acd-content">
				<p>A.可能です。会員期間中の退会の場合、残月数の月会費分が返金の対象となります。</p>
			</div>
<?php */ ?>

			
		</div>
</section>




<section id="privacy02">
	<div class="inner">
		<h2>個人情報の取扱いについて</h2>
		<p class="s01">株式会社ランスクリエイトは、結婚相談所事業およびそれに付帯する事業などの業務を行う上でお客様、並びに従業者の重要な個人情報を保護することを重大な社会的責任であると認識しております。将来に亘って、この大切な個人情報を適正、安全に取り扱うために従業者のすべてが遵守すべき行動基準として本個人情報保護方針を定め、その遵守の徹底を図って参ります。</p>
		<ul class="wrap">
			<li><a href="<?php echo get_template_directory_uri() ?>/sincerite_hogohousin.pdf" target="_blank">サンセリテ青山 個人情報保護方針</a></li>
			<li><a href="<?php echo get_template_directory_uri() ?>/sincerite_privacy.pdf" target="_blank">サンセリテ青山 プライバシーポリシー</a></li>
		</ul>
		<p class="s02"><small>&copy; Sincerite Aoyama. All rights Reserved.</small></p>
	</div>
</section>










</article>
</main>



<?php get_footer("lp2"); ?>
