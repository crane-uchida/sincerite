<?php
/*
Template Name: パートナー診断
*/?>
<?php
remove_filter('the_content', 'wpautop');
get_header('new'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    window.addEventListener('load', function() {
      $('.val').click(function () {
        formCheck();

        // お名前(ニックネーム)
        let input_name = $("input[name=txt_name]").val();
        $('#txt_name').empty().append(input_name);
        // 年収
        let input_txt_income = $("input[name=txt_income]").val();
        $('#txt_income').empty().append(input_txt_income);
        // 年齢層
        let input_age = $("input[name=age]:checked").val();
        
      });

      function formCheck() {
        var number = $('input[name="tel"]').val()
        number = number.replace(/-/g,'');

        var is_check = true;
        var txt_name_error = $(".txt_name .error_message");
        var txt_income_error = $(".txt_income .error_message");
        var age_error = $(".age .error_message");
        
       

        if ($('input[name="txt_name"]').val() == "") {
          is_check = false;
          txt_name_error.text("入力してください");
        }else{
          txt_name_error.text("");
        }
       
        if ($('input[name="txt_income"]').val() == "") {
          is_check = false;
          txt_income_error.text("入力してください");
        }else{
          txt_income_error.text("");
        }

        if ($('input[name="age"]:checked').val() === undefined ) {
          is_check = false;
          age_error.text("年齢を選択してください");
        }else{
          age_error.text("");
        }
        
        
        


      }

    })


  </script>
<div class="title" id="main-visual">
    <div class="container">
        <div class="title__wrapper">
            <h1><span>簡単<span>2</span>分</span>未来のセレブパートナー診断</h1>
        </div>
    </div>
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

<?php
  $wpcf7sn= do_shortcode('[wpcf7sn_view_count id="5730"]');
  // $wpcf7snの文字列に含まれる数字に1を足す
  $number = preg_replace( '/[^\p{Nd}]/u', '', $wpcf7sn);
  $number++;
  $substr1 = substr($wpcf7sn, 0, 1);
?>

<!-- 無料パンフレット請求 -->
<script>
    window.onload = function(){
      $('#entry_conf').click(function () {
        formCheck();

        // 01
        let input_sentaku = $("input[name=a02_01]:checked").val();
        $('#a02_01').empty().append(input_sentaku);
        // お名前
        let input_name = $("input[name=txt_name]").val();
        $('#txt_name').empty().append(input_name);
        // 性別
        let input_gender = $("input[name=gender]:checked").val();
        $('#gender').empty().append(input_gender);
        //メールアドレス
        let input_txt_email = $("input[name=txt_email]").val();
        $('#txt_email').empty().append(input_txt_email);
        //電話番号
        let input_tel = $("input[name=tel]").val();
        $('#tel').empty().append(input_tel);
        //郵便番号
        let input_txt_number = $("input[name=txt_number]").val();
        $('#txt_number').empty().append(input_txt_number);
        //住所1
        let select_txt_prefectures = $("select[name=txt_prefectures]").val();
        $('#txt_prefectures').empty().append(select_txt_prefectures);
        //住所2
        let input_txt_address = $("input[name=txt_address]").val();
        $('#txt_address').empty().append(input_txt_address);
        //住所3
        let input_txt_other = $("input[name=txt_other]").val();
        $('#txt_other').empty().append(input_txt_other);
        // ご来店希望日
        let input_date = $("input[name=date]").val();
        $('#date').empty().append(input_date);
        // ご来店希望時間
        let input_select = $("select[name=select]").val();
        $('#select').empty().append(input_select);
        //弊社へのお問い合わせ
        let textarea_FlexTextarea = $("textarea[name=FlexTextarea]").val();
        $('#FlexTextarea').empty().append(textarea_FlexTextarea);
        // お名前
        let input_hon_name = $("input[name=hon_name]").val();
        $('#hon_name').empty().append(input_hon_name);
      });

      function formCheck() {
        var number = $('input[name="tel"]').val()
        number = number.replace(/-/g,'');

        var is_check = true;
        var a02_01_error = $(".a02_01 .error_message");
        var txt_name_error = $(".txt_name .error_message");
        var gender_error = $(".gender .error_message");
        var txt_email_error = $(".txt_email .error_message");
        var tel_error = $(".tel .error_message");
        var txt_number_error = $(".txt_number .error_message");
        var txt_prefectures_error = $(".txt_prefectures .error_message");
        var txt_address_error = $(".txt_address .error_message");
        var checkbox_error = $(".checkbox .error_message");
        var hon_name_error = $(".hon_name .error_message");
       
        if ($('input[name="a02_01"]').val() == "") {
          is_check = false;
          a02_01_error.text("全角カタカナで入力してください");
        }else{
          a02_01_error.text("");
        }

        if ($('input[name="txt_name"]').val() == "") {
          is_check = false;
          txt_name_error.text("全角カタカナで入力してください");
        }else{
          txt_name_error.text("");
        }

        
        if ($('input[name="gender"]:checked').val() === undefined ) {
          is_check = false;
          gender_error.text("性別を選択してください");
        }else{
          gender_error.text("");
        }
        
        if ($('input[name="txt_email"]').val() == "") {
          is_check = false;
          txt_email_error.text("メールアドレスを入力してください");
        }else{
          txt_email_error.text("");
        }
        
        if (!$('input[name="txt_email"]').val().match(/^[A-Za-z0-9.]+[\w-]+@[\w\.-]+\.\w{2,}$/)) {
          is_check = false;
          txt_email_error.text("メールアドレスを正しく入力してください");
        }else{
          txt_email_error.text("");
        }
        
        if (number.length < 10) {
          is_check = false;
          tel_error.text("半角英数字で入力してください");
        }else{
          tel_error.text("");
        }
        
        if ($('input[name="txt_number"]').val() == "") {
          is_check = false;
          txt_number_error.text("半角英数字で入力してください");
        }else{
          txt_number_error.text("");
        }

        if ($('select[name="txt_prefectures"]').val() == "") {
          is_check = false;
          txt_prefectures_error.text("住所（都道府県）を選択してください");
        }else{
          txt_prefectures_error.text("");
        }
        
        if ($('input[name="txt_address"]').val() == "") {
          is_check = false;
          txt_address_error.text("住所を入力してください");
        }else{
          txt_address_error.text("");
        }
        
        if (!$('input[name="checkbox"]').prop("checked")) {
          is_check = false;
          checkbox_error.text("お問い合わせには、個人情報の同意が必要です。");
        }else{
          checkbox_error.text("");
        }

        if ($('input[name="hon_name"]').val() == "") {
          is_check = false;
          hon_name_error.text("入力してください");
        }else{
          hon_name_error.text("");
        }
      }

    };


  </script>
<script>
  var wpcf7Elm = document.querySelector( '.wpcf7' );
 
  wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
    let speed = 1000;
    jQuery("html, body").animate({scrollTop:0}, speed, "swing");
  }, false );
</script>

  <!-- 確認画面 -->
  <!--<div class="modal-container">
    <div class="modal-position">
      <div class="modal-body">
        <div class="modal-close modal-button">×</div>
        <div class="modal-content">
         
          <div>
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/kakunin-sp.png" alt="02内容の確認" class="only-sp">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/kakunin.png" alt="02内容の確認" class="pc" width="1000" hieght="92"></div>
         <div class="mdl">
          <table class="modal-table">
           <tr>
            <th>今まで好きになった異性のタイプで多いのは？</th>
            <td id="a02_01"></td>
           </tr>
           
           <tr>
            <th>メールアドレス<span class="hissu">必須</span></th>
            <td id="txt_email"></td>
           </tr>
           
           <tr>
            <th>電話番号<span class="hissu">必須</span></th>
            <td id="tel"></td>
           </tr>
           
           <tr>
            <th>郵便番号<span class="hissu">必須</span></th>
            <td id="txt_number"></td>
           </tr>
           
           <tr>
            <th>住所<span class="hissu">必須</span></th>
            <td>
              <div id="txt_prefectures"></div>
              <div id="txt_address"></div>
              <div id="txt_other"></div>
            </td>
           </tr>
           
           <tr class="dan2">
            <th>個人情報の<br>取り扱いへの同意<span class="hissu">必須</span></th>
            <td>同意する</td>
           </tr>
         
          </table>
         </div>

          <div class="button-box">
            <button type="button" class="modal-close btn-prev modoru">修正する</button>
            <button type="button" id="entry_send" class="submit btn-primary" onclick="send_form()">送信する</button>
          </div>
          <div class="modoru-area"><button type="button" class="modal-close tojiru">閉じる</button></div>
        </div>
      </div>
    </div>
  </div>-->
  <!-- 確認画面 end -->
<style>
 .section{
  padding: 20px;
  border: 1px solid #eee;
  max-width: 700px;
  margin: auto;
 }
span.wpcf7-not-valid-tip {
    border-radius: 3px;
    display: none;
}
 .btn-arre{display: flex;justify-content: center;}
 .btn-arrea a{ cursor: pointer;margin: 20px;}
 .form_area .form dd .wpcf7-not-valid-tip {
    /*display: block !important;*/
}
 span.wpcf7-not-valid-tip {
  /* display: block !important;*/
}
 .form_area .form dd .wpcf7-not-valid-tip{
  margin-top: 0;
    text-indent: 0;
    line-height: 2;
    background: none;
    color: #C42222;
    font-size: 1.2rem !important;
    border-radius: 3px;
    padding: 0;
 }
 .doui.partnertest-doui{
  margin: 40px auto;
  max-width: 900px;
 }
.area_checkbox span.wpcf7-not-valid-tip {
    border-radius: 0.3rem;
    margin-top: 0;
    text-indent: 0;
    line-height: 2;
    background: none;
    color: #C42222;
    font-size: 1.2rem !important;
    border-radius: 3px;
    padding: 0;

}
 @media screen and (min-width: 768px), print{
.area_checkbox span.wpcf7-not-valid-tip {

    white-space: nowrap;
    margin-left: -30px;
    background: #fff !important;
}
 }
.submit-area .btn_1, #entry_send {
 border: none;
}
.wpcf7-spinner {
    display: block;
     margin: 10px auto 10px;
}
 
 /**/
 .shiryou .wpcf7-list-item {
    margin: 0;
    padding: 0 0;
    width: 410px;
    border: solid 1px #D0D0D0;
    border-radius: 0.3rem;
    font-size: 14px;
    height: 5rem;
    display: flex;
    justify-content: flex-start;
    background-color: #fff;
}
 .shiryou label{
  width: 100%;
  cursor: pointer;
 }
 .shiryou .wpcf7-form-control .wpcf7-list-item-label::before {
    content: "";
    background: #fff;
    width: 1em;
    height: 1em;
    margin-bottom: auto;
    margin-right: 0.5em;
    margin-top: 7px;
    border: 1px solid #AE9E82;
    border-radius: 0.3rem;
    transition: background-color 0.5s;
  display: inline-block;
  position: relative;
    top: 2px;
}
 .shiryou .wpcf7-form-control input[type=checkbox]:checked + .wpcf7-list-item-label::after {
  color: #AE9E82;
    position: absolute;
    margin-top: 0.4rem;
    width: 1.4rem;
    height: 0.8rem;
    border-bottom: solid 0.2rem currentColor;
    border-left: solid 0.2rem currentColor;
    transform: rotate(-45deg);
 margin-top: 9px;
  left: 0;
}
 .shiryou .wpcf7-list-item-label{
  position: relative;
  top: -6px;
  font-size: 16px;
    font-weight: bold;
 }
 .shiryou p {
    font-size: 12px;
    letter-spacing: -0.1pt;
  line-height: 1.8;
}
 .modoru-area02{
  display: flex;
  justify-content: center;
 }
 .modoru-area02 .question__form-btn-prev{
    max-width: 200px;
    height: 50px;
 }
.modoru-area02 .question__form-btn-prev:not(:disabled):hover::before {
    transform: translateY(-50%) translateX(0px);
}
@media only screen and (max-width: 767px) {
 .shiryou .wpcf7-list-item {
    width: 100%;
}
 .shiryou .wpcf7-list-item-label{
  top: 0;
  font-size: 14px;
  position: absolute;
  top: 8px;
  left: 1rem;
 }
 .shiryou label #ttr{
  opacity: 0;
 }
 }
.question__row .note {
  text-align: left;
}
.question__row .wpcf7-list-item {
    margin: 0;
     
}
 
 /*disable*/
 .question__form-btn-next:hover{
  opacity: 1 !important;
 }
.question__form-btn-next:disabled {
 z-index: 0;
 
 
}
.question__form-btn-next {
    display: block;
 position: relative;
    z-index: 2;
 font-family: "Noto Sans JP", sans-serif;
}
 .question__form-btn-next.val {
        display: flex;
    justify-content: center;
    align-items: center;
    pointer-events: unset;
   opacity: 1;
  position: absolute;
  z-index: 0;
}
.question__form-btn-next.b-hgt {
    font-family: "Noto Sans JP", sans-serif;
} 
 
 
input.wpcf7-not-valid, textarea.wpcf7-not-valid, select.wpcf7-not-valid {
    background-color:#fff !important;
    border: solid 1px #D0D0D0 !important;
}
.question__form-btn-next:not(:disabled):hover::after {

    transform: translateY(-50%) translateX(0);
}
.question__form-btn-prev:not(:disabled):hover::before {
    transform: translateY(-50%) translateX(0);
}
.error_message {
    margin-top: 0;
    text-indent: 0;
    line-height: 2;
    background: none;
    color: #C42222;
    font-size: 1.2rem;
    border-radius: 3px;
}
 
.form_area .form.shindan {
    margin: 0 auto 3rem;
}
 .s-kekka-ttl{
  text-align: center;
  font-size: 30px;
  font-weight: bold;
  margin: 50px 0 50px;
  font-family: "Noto Sans JP", sans-serif !important;
 }
@media only screen and (max-width: 767px) {
.doui-box.shinan {
    padding: 0 0;
}
 .s-kekka-ttl{
  font-size: 20px;
 } 
 }
 .shiryou{
  position: relative;
 }
 .shiryou.bg_cya label{
  background: #F8F4F0;
 }
 .shiryou label.male{
  background: #F8F4F0;
  color: #333;
 }
  .shiryou label:hover{
  background: #F8F4F0;
 }
 /*.shiryou .toria{
  position: absolute;
    width: 100%;
    height: 50px;
    top: 0;
 }*/
 
 .wpcf7-response-output{
  display: none;
 }
 
 
 /*header 調整*/
 @media only screen and (min-width: 768px){
 .header {
   box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
   background-color: #fff;
}
  .header__logo {
    opacity: 1;
    visibility: visible;
}
 }
.title__wrapper h1 > span {
    font-family: "Noto Sans JP", sans-serif;
}
.title__wrapper h1 > span span {
    font-family: "Zen Old Mincho", serif;
}
 

/*切り替え調整*/
 
 .form_area .form.kirikae{
    padding: 0 0;
  margin: 0;
}
@media only screen and (max-width: 767px) {
 .submit-area.shindancon {
    padding: 30px 0 0;
}
.doui-box.shindan {
    padding: 0 0;
}

 }
 
 
 /*診断コンテンツTOP*/
@media only screen and (min-width: 768px) {
.heading__btn a .btn-top {
    justify-content: center;
}
 }
 
@media only screen and (max-width: 767px) {
.partner__wrapper {
    margin-top: 50px;
}
.heading__btn a {
    white-space: nowrap;
}
.heading__btn a::after {
    display: none !important
}
.heading__btn a .btn-btm {
    margin-left: 40px;
}
 .partner__wrapper .d-md-none.d-block img {
  width: 100%;
  height: auto;
  vertical-align: bottom;
 }
 }
 
 
 /*修正*/
 @media only screen and (max-width: 767px) {
 .s-kekka-ttl {
    margin-top: 30px;
  margin-bottom: 0;
}
  .question__form-btn-next {
    padding: 15px 0;
}
  .question__form-btn-prev {
    font-size: 14px;
   height: 50px;
}
 .doui.partnertest-doui {
    margin: 30px auto;
  overflow: hidden;
}
 .btn_address {
    height: 50px !important;
}
 .area_checkbox .error_message {
    background: #fff !important;
}
 .form_area .form .shiryou label {
    position: relative;
}
 }
 
 /*診断コンテンツ*/
.submit-area #entry_conf {
    background: url(/wp-content/themes/sincerite/images_new/top/arw-white.svg) right 30px center no-repeat #BA4F4F;
}
input.wpcf7-not-valid, textarea.wpcf7-not-valid, select.wpcf7-not-valid {
    background-color: #FAF2F2 !important;
    border: 1px solid #C42222 !important;
}
 
/*修正*/
 .question{
  padding-top: 0;
 }
.form__steps-desc {
    margin: 30px auto 25px;
}
@media only screen and (max-width: 767px) {
.form__steps-desc {
    margin: 25px auto 15px;
}
 }
</style>

<script>
 // 完了ページ
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://www.club-sincerite.co.jp/partnertest/partnertest-thanks/';
}, false );
 
	//【リニューアル】メールアドレス入力欄をクリックすると、注意事項を表示させる。
	jQuery('input[type="email"]').focus(function() {
		jQuery('.email-notice').css('display', 'block');
	});
 

//ボタンの色変え 

	
$(".shiryou label").click(function () {
 $(this).parent('span').toggleClass("bg_cya");
});
 	jQuery(function () {
		jQuery('.wpcf7 .shiryou .first input').attr('id', 'ttr');
	});
 
	//jQuery(function() {
	 // $('[name="check_shiryou[]"]:checkbox').change( function() {
	//	if($('[id=ttr]').prop('checked', true)){
	//	  $(this).parent().addClass("male");
	//	} 
	//  });
	//});
 
	// 【リニューアル】 郵便番号から住所の自動入力
	jQuery(function($){
		if(jQuery('input[name="txt_number"]').length) { //特定の要素(input[name="txt_number"])が存在するかどうかを判別
			$.getScript("https://ajaxzip3.github.io/ajaxzip3.js");
			$('.btn_address').click(function() {
				AjaxZip3.zip2addr('txt_number', '', 'txt_prefectures', 'txt_address');
			});
		}
	});
</script>

<?php get_footer('new02'); ?>