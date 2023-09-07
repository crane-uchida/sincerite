<?php
/*
Template Name: 結婚占いフォーム
*/
 get_header('divination');
$syear = get_option('divination');
?>


<script type="application/ld+json">
	{
		"@context" : "https://schema.org/",
		"@type": "Product",
		"@id": "uranai",
		"name": "<?php the_title(); ?>",
		"review": {
						"@type": "Review",
						"reviewRating": {
							"@type": "Rating",
							"ratingValue": "4.6",
							"bestRating": "5"
						},
						"author": {
						"@type": "Person",
						"name" : "占いをご利用のお客様"
						}
					},
					"aggregateRating": {
						"@type": "AggregateRating",
						"ratingValue": "4.6",
						"reviewCount": "126"
					}
	}
</script>


<main id="divination" class="diagnosis">
<div class="l-container">
  <div class="flower1"><img src="<?php echo get_template_directory_uri() ?>/images/divination/flower1.gif" alt="花"></div>
  <div class="ttlBox ta_c">
    <p class="ask fs20">貴女の未来の<br class="br-sp">結婚相手の職業は…？</p>
    <h1 class="mainTtl">結婚占い</h1>
  </div>
  <div class="wBox">
  <p class="fs18">人気占い師監修のもと、<br class="br-sp-small">結婚相談所 サンセリテ青山が提供する結婚占い。<br class="br-sp">
    高収入な男性と結婚したいあなたのためのスペシャルな占いです。<br>
    どんなハイスペックな職業の男性との結婚が向いているか、<br class="br-sp">あなたの何を求められているのか、無料で鑑定・診断いたします。</p>
  </div>
  <div class="flower2"><img src="<?php echo get_template_directory_uri() ?>/images/divination/flower2.gif" alt="花"></div>
  <h2 class="ta_c mb20 fw_b fs21">あなたとの結婚に向いているのは…<br class="br-pc">医者？弁護士？会社経営者？</h2>
  <hr class="wBox" style="margin-bottom:15px;">
<p class="ta_c fs18">あなたの未来の結婚相手の職業を<br>2つのパートで占います。</p>
<p class="ta_c fs18 fw_b">＜パート１＞<br>数秘術により誕生数を導き出します。<br>＜パート２＞<br>直感によりカードを１枚選択します。</p>
<p class="ta_c fs18">回答結果を総合し、<br>最終的に占いの結果が導き出されます。<br class="br-pc">ぜひ、お気軽にチェックしてくださいね。</p>

<div class="calculateBox">
  <div class="border1">
    <div class="border2">
      <p class="ta_c fw_b lh16 txt6">数秘術による占いのため、<br class="br-pc">あなたの誕生数を自動で計算します。</p>
    <div class="box">
      <p class="fs15">数秘術とは、西洋占星術や易学等と並ぶ占術の一つで、ピタゴラス式やカバラ等が有名。「数秘学」とも呼ばれます。 一般的な占術の方法は「命術」で、占う対象の生年月日や姓名などから、固有の計算式に基づいて運勢傾向や先天的な宿命を占う方法です。</p>
    </div>
  <p class="ta_c fw_b fs23 lh14">それでは、あなたの<br>生年月日を教えて下さい</p>


  <form action="<?php echo esc_url( home_url( '/kekkon-uranai-card/' ) ); ?>" method="post" class="">

		<div class="birthdayBox">
<?php /* ?>
			<label for="birth" class="ttl fs12">生年月日</label>
<?php */ ?>
      <div class="ymdBox">
        <div class="selectArrow">
         <select id="year" name="syear" class="fs24">
          <option value="0">----</option>
         </select>
        </div>
        <span>年</span>
        <div class="selectArrow">
          <select id="month" name="smonth" class="fs24">
            <option value="0">--</option>
          </select>
        </div>
        <span>月</span>
        <div class="selectArrow">
          <select id="date" name="sday" class="fs24">
            <option value="0">--</option>
          </select>
        </div>
        <span>日</span>
      </div>
		</div>

		<div class="resultBtn"><input type="submit" value="数秘術占いの結果を見る"></div>

	</form>


  </div>
  </div>
</div>


<div class="supervise ta_c">
  <div class="name">〈占い監修〉十田リコ</div>
  <p class="biography">京都在住の占い師・ライター。<br>心理学をベースにした女性向けの恋愛コラムや、<br class="br-sp-small">心理テストなどをこれまでに多数手掛けている。<br class="br-sp-small">ミュージシャンや写真家としての顔も持つ。</p>
</div>

</div>

<div class="wBox2">
  <?php get_template_part( 'inc/sns' );?>
</div>


<section class="uranaiReview">
  <div class="w920">
  <div class="ttl">占いをご利用いただいた方のレビュー</div>
  <div class="total">
    <span class="ratingValue">4.6</span>
    <span class="star5_rating" data-rate="4.5"></span>
    <span class="txt">126件のレビュー</span>
  </div>

  <article>
    <div class="head">
      <span class="person">20代女性</span>
      <span class="rating">5.0</span>
      <span class="star5_rating" data-rate="5"></span>
    </div>
    <p class="cont">結婚についての占いが無料で試せるコンテンツで自分が意識していなかったような業界の人が意外と自分には合うのかもと感じさせてくれました。これからの婚活に活かしたいと思います！</p>
  </article>

  <article>
    <div class="head">
      <span class="person">30代女性</span>
      <span class="rating">4.0</span>
      <span class="star5_rating" data-rate="4"></span>
    </div>
    <p class="cont">結婚相手に求める希望を自分でもよくわかっていなかったのでこの結婚占いは新鮮な角度で提案してくれました。私でもハイステータスな方と出会えるチャンスがあるかもと前向きにさせてくれました。</p>
  </article>

  <article>
    <div class="head">
      <span class="person">30代女性</span>
      <span class="rating">5.0</span>
      <span class="star5_rating" data-rate="5"></span>
    </div>
    <p class="cont">占いは世の中に数多くあるけれども、結婚占いについて、よくできているサイトだなと思いました。試してみてまさに心の中を見透かされたような･･･。占い結果にあるアドバイスを元に、頑張ります。</p>
  </article>

  <article>
    <div class="head">
      <span class="person">20代女性</span>
      <span class="rating">5.0</span>
      <span class="star5_rating" data-rate="5"></span>
    </div>
    <p class="cont">結婚占いを試してみて、目から鱗でした。相性の良いハイステータスな業種の男性と、そんな方々と出会う為に自分がしなきゃいけない事をアドバイスしてくれる内容なので、とてもわかりやすくて参考になります。</p>
  </article>


<?php /* ?>
  <article>
    <div class="head">
      <span class="star5_rating" data-rate="4"></span>
      <span class="rating">4.0</span>
      <span class="person">30代女性</span>
    </div>
    <p class="cont">気になっていた結婚相談所が提供する無料の結婚占いでした。私自身は意識していなかったけれども医者と相性が良いらしく婚活では少し意識して出会いを求めてみようかなと思いました。</p>
  </article>

  <article>
    <div class="head">
      <span class="star5_rating" data-rate="5"></span>
      <span class="rating">5.0</span>
      <span class="person">40代女性</span>
    </div>
    <p class="cont">数秘術という生年月日を元に算出される結婚占いです。また、直感で選択肢の中から選ぶことでより細かな自分の価値観に照らし合わせた相性が出てくるのは面白いなと思いました。</p>
  </article>

  <article>
    <div class="head">
      <span class="star5_rating" data-rate="5"></span>
      <span class="rating">5.0</span>
      <span class="person">30代女性</span>
    </div>
    <p class="cont">内容はハイステータスな職業に限られた占いになりますが自分の相性の良いタイプがわかるのはありがたいです。またどんな行動を取るべきかというアドバイスまであるのでこの結婚占いの結果を実践してみたいと思います。</p>
  </article>
<?php */ ?>

</div>
</section>


<div class="wBox2">
  <?php get_template_part( 'inc/sns' );?>
</div>







</main>







<script>
$(function() {

	$('.resultBtn input[type=submit]').click(function() {

		if ( $('#year').val() < 1  ){

			alert('生年月日の「年」を選択してください。');
			$('#year').focus();
			return false;

		}else if ( $('#month').val() < 1 ){

			alert('生年月日の「月」を選択してください。');
			$('#month').focus();
			return false;

		}else if( $('#date').val() < 1 ){

			alert('生年月日の「日」を選択してください。');
			$('#date').focus();
			return false;

		}

	});




    // 現在の年月日を取得
    var time = new Date();
    //var year = time.getFullYear();
    var year =  <?php if($syear[200]){ echo $syear[200];}else{?>time.getFullYear();<?php }?>;

    var month = time.getMonth() + 1;
    var date = time.getDate();

    // 選択された年月日を取得
    var selected_year = document.getElementById("year").value;
    var selected_month = document.getElementById("month").value;

    // 年(初期): 1900〜現在の年 の値を設定
    var start_year = <?php if($syear[100]){ echo $syear[100];}else{?>1900<?php }?>;
    for (var i = year; i >= start_year ; i--) {
        $('#year').append('<option value="' + i + '">' + i + '</option>');
    }

    // 月(初期): 1~12 の値を設定
    var last_month = 12;
    for (var j = 1; j <= last_month; j++) {
        $('#month').append('<option value="' + j + '">' + j + '</option>');
    }

    // 日(初期): 1~31 の値を設定
    var last_date = 31;
    for (var k = 1; k <= last_date; k++) {
        $('#date').append('<option value="' + k + '">' + k + '</option>');
    }

    // 月(変更)：選択された年に合わせて、適した月の値を選択肢にセットする
    $('#year').change(function() {
        selected_year = $('#year').val();

        // 現在の年が選択された場合、月の選択肢は 1~現在の月 に設定
        // それ以外の場合、1~12 に設定
        last_month = 12;
        if (selected_year == year) {
            last_month = month;
        }
        $('#month').children('option').remove();
        $('#month').append('<option value="' + 0 + '">--</option>');
        for (var n = 1; n <= last_month; n++) {
            $('#month').append('<option value="' + n + '">' + n + '</option>');
        }
    });

    // 日(変更)：選択された年・月に合わせて、適した日の値を選択肢にセットする
    $('#year,#month').change(function() {
        selected_year = $('#year').val();
        selected_month = $('#month').val();

        // 現在の年・月が選択された場合、日の選択肢は 1~現在の日付 に設定
        // それ以外の場合、各月ごとの最終日を判定し、1~最終日 に設定
        if (selected_year == year && selected_month == month ) {
            last_date = date;
        }else{
            // 2月：日の選択肢は1~28日に設定
            // ※ ただし、閏年の場合は29日に設定
            if (selected_month == 2) {
                if((Math.floor(selected_year%4 == 0)) && (Math.floor(selected_year%100 != 0)) || (Math.floor(selected_year%400 == 0))){
                    last_date = 29;
                }else{
                    last_date = 28;
                }

            // 4, 6, 9, 11月：日の選択肢は1~30日に設定
            }else if(selected_month == 4 || selected_month == 6 || selected_month == 9 || selected_month == 11 ){
                last_date = 30;

            // 1, 3, 5, 7, 8, 10, 12月：日の選択肢は1~31日に設定
            }else{
                last_date = 31;
            }
        }

        $('#date').children('option').remove();
        $('#date').append('<option value="' + 0 + '">--</option>');
        for (var m = 1; m <= last_date; m++) {
            $('#date').append('<option value="' + m + '">' + m + '</option>');
        }
    });

});
</script>




<?php
get_footer('divination');
?>
