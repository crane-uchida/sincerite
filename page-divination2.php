<?php
/*
Template Name: 結婚占いフォーム2222
*/
// ログインした状態と同等にするためセッションを開始します
session_start();
// 暗号学的的に安全なランダムなバイナリを生成し、それを16進数に変換することでASCII文字列に変換します
$toke_byte = openssl_random_pseudo_bytes(16);
$csrf_token = bin2hex($toke_byte);
// 生成したトークンをセッションに保存します
$_SESSION['csrf_token'] = $csrf_token;

get_header('divination');




if(intval($_POST['syear'])<1 ||  intval($_POST['smonth']) < 1  || intval($_POST['sday']) < 1 ){


	header('Location: /kekkon-uranai');
	exit;


}else{


//占いデータ
$birth_number=get_divination($_POST['syear'],$_POST['smonth'],$_POST['sday']);


/********
誕生数は = $birth_number[1];
*******/

?>


<main id="divination" class="card">
<div class="l-container">
  <div class="flower1"><img src="<?php echo get_template_directory_uri() ?>/images/divination/flower1.gif" alt="花"></div>
  <div class="ttlBox ta_c">
    <p class="ask fs18">貴女の未来の<br class="br-sp">結婚相手の職業は…？</p>
    <h1 class="mainTtl">結婚占い</h1>
  </div>


<p class="fs30 ta_c txt1">あなたの誕生数は</p>
<div class="birthNumber ta_c yumin"><?php echo $birth_number[1] ?></div>

<?php
	if($birth_number[1] == '1' ||  $birth_number[1] == '3' || $birth_number[1] == '5' || $birth_number[1] == '8' ){
?>
<div class="wBox">
<p class="fs18" style="margin-bottom:30px;">誕生数が「１，３，５，８」だったあなたは、行動力に優れています。<br><br>
	リーダーシップの取れる姉御肌タイプと言えるでしょう。
	臆病であることや、消極的であることに抵抗を感じ、思い立ったら
	即実行！というスタンスで、これまでの人生を切り拓いて来たのではないでしょうか？</p>
</div>
<?php
	}else if($birth_number[1] == '2' ||  $birth_number[1] == '4' || $birth_number[1] == '6' || $birth_number[1] == '9' ){
?>
<div class="wBox">
<p class="fs18" style="margin-bottom:30px;">誕生数が「２，４，６，９」だったあなたは、真面目で穏やか。<br><br>
	協調性があり、相手の感情を読み取って、波長を合わせることが得意です。
	母性に溢れていて面倒見が良いタイプでもあるため、悩み相談をされることも多いのではないでしょうか？</p>
</div>
<?php
	}else{
?>
<div class="wBox">
<p class="fs18" style="margin-bottom:30px;">誕生数が「７，１１，２２，３３」だったあなたは、	感受性が非常に鋭く、直感で行動するタイプ。<br><br>
	スピリチュアルな世界にも興味があり、幼少の頃から神秘的な体験を重ねて来たのではないでしょうか？
	考え方のスケールが大きく、国境や時代を超越した価値観を持っています。</p>
</div>
<?php
	}
?>

<div class="wBox">
<p class="fs18">そんなあなたの結婚相手としてふさわしい男性の職業を、次のステップでさらに絞り込みます。</p>
</div>

<div class="vertical ellipsis fw_b">・・・</div>

<div class="wBox">
<p class="fs18 lh15">パート2は、直感によるカード占いです。３枚のカードの中から最も「ピン」と来た１枚を選んでください。</p>
</div>


  	<div id="slide">
  		<div class="swiper-container">

			<?php
			if($birth_number[1] == '1' ||  $birth_number[1] == '3' || $birth_number[1] == '5' || $birth_number[1] == '8' ){
			?>
  			<div class="swiper-wrapper">
  				<!-- スライドする画像 -->
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="card_number" value="1">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_1-1.png" value="カード">
							</form>
						</div>
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="card_number" value="2">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_1-2.png" value="カード">
							</form>
						</div>
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="card_number" value="3">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_1-3.png" value="カード">
							</form>
						</div>
  				<!-- /スライドする画像 -->
  			</div>
			<?php
				}else if($birth_number[1] == '2' ||  $birth_number[1] == '4' || $birth_number[1] == '6' || $birth_number[1] == '9' ){
			?>

  			<div class="swiper-wrapper">
  				<!-- スライドする画像 -->
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="card_number" value="1">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_2-1.png" value="カード">
							</form>
						</div>
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="card_number" value="2">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_2-2.png" value="カード">
							</form>
						</div>
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="card_number" value="3">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_2-3.png" value="カード">
							</form>
						</div>
  				<!-- /スライドする画像 -->
  			</div>

			<?php
				}else{
			?>

  			<div class="swiper-wrapper">
  				<!-- スライドする画像 -->
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="card_number" value="1">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_3-1.png" value="カード">
							</form>
						</div>
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="card_number" value="2">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_3-2.png" value="カード">
							</form>
						</div>
  					<div class="swiper-slide hoverType1">
							<form action="<?php echo esc_url( home_url( '/kekkon-uranai-kekka' ) ); ?>" method="post">
								<input type="hidden" name="csrf_token" value="<?=$csrf_token?>">
								<input type="hidden" name="birth_number" value="<?php echo $birth_number[0];?>" />
								<input type="hidden" name="card_number" value="3">
								<input type="image" src="<?php echo esc_url ( get_template_directory_uri() ); ?>/images/divination/sct_uranai_card_3-3.png" value="カード">
							</form>
						</div>
  				<!-- /スライドする画像 -->
  			</div>


			<?php
			}
			?>



  			<!-- <div class="swiper-button-prev"></div> 前のページ -->
  			<!-- <div class="swiper-button-next"></div> 次のページ -->
  			<div class="swiper-pagination swiper-pagination-white"></div><!-- ページネーション(dots)-->
  		</div>
  	</div>

<script type="text/javascript">
var mySwiper = new Swiper ('.swiper-container', {
	slidesPerView:2,
	spaceBetween: 10,
	initialSlide: 1,
	centeredSlides : true,
	// autoplay: {
	// delay: 3000, //3秒後に次の画像へ
	// },
	// loop: true,
	pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	// レスポンシブブレーポイント（画面幅による設定）
  breakpoints: {
    // 画面幅が 560px 以上の場合（window width >= 560px）
    560: {
      slidesPerView: 3,
      spaceBetween: 10
    },
    // 画面幅が 960px 以上の場合（window width >= 960px）
    960: {
      slidesPerView: 3,
      spaceBetween: 30,
			centeredSlides : false,
    }
  }

});
</script>






<div class="wBox">
<p class="fs18 lh15">選んだカードをクリックすると貴女に向いている結婚相手の職業が導き出されます。</p>
</div>




</div>
</main>









<?php
}
get_footer('divination');
?>
