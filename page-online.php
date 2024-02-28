<?php
/*
Template Name: [初回無料] カウンセリングのご相談
*/ ?>
<?php
remove_filter('the_content', 'wpautop');
get_header('new'); ?>
<h1 class="form_ttl"><span>初回無料</span> カウンセリングのご相談</h1>
<div class="breadcrumb">
  <div class="container-1280">
    <div class="breadcrumb-content">
      <ul class="breadcrumb-ul">
        <li class="breadcrumb-li">
          <a href="/" class="breadcrumb-link">東京・表参道の結婚相談所 サンセリテ青山</a>
        </li>
      </ul>
      <ul class="breadcrumb-ul">
        <li class="breadcrumb-li">
          <a href="#" class="breadcrumb-link -active">[初回無料] カウンセリングのご相談</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="counseling-mv" style="overflow: hidden;">
  <div class="only-sp">
    <div class="icon-box">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/counseling-tool-sp.png" alt="" class="img-fluid" width="670" hieght="268">
    </div>
    <p class="counselinglead">サロンの雰囲気や婚活における具体的な活動内容の不安を払拭していただくために無料カウンセリングを実施しています。</p>
  </div>
  <div class="icon-box pc">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/counseling-tool-pc.png" alt="" class="img-fluid" width="500" hieght="194">
  </div>
  <div class="counseling-mv-box">
    <div class="counseling-mv-txt">
      <p class="pc counselinglead">サロンの雰囲気や婚活における具体的な活動内容の不安を払拭していただくために無料カウンセリングを実施しています。</p>
      <div class="steps__acc consult">
        <div class="steps__acc-top acc-btn">
          <p>ご予約からの流れについて</p>
          <span></span>
        </div>
        <div class="steps__acc-bot acc-cnt">
          <div class="tkbox"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/counseling-txt.svg" alt="" class="img-fluid" width="324" hieght="216"></div>
        </div>
      </div>
    </div>
    <div class="counseling-mv-img">
      <script src="https://www.youtube.com/iframe_api"></script>


      <div class="steps__img youtube">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/counseling-movie.jpg" class="img-fluid" alt="" width="820" height="464" loading="lazy">
        <div class="youtube-vid hide">
          <iframe width="1280" height="720" src="https://www.youtube.com/embed/eBWTA_yojCs?rel=0" title="サンセリテ青山 婚活イメージムービー〈お見合い編〉" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="form-flow">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/nyuryoku-sp.png" alt="" class="only-sp">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/nyuryoku.png" alt="" class="pc" width="900" hieght="90">
</div>
<style>
  /*無料カウンセリング*/
  .counseling-mv {
    background: url("../images_new/form/counseling-main.png") center top no-repeat #F8F4F0;
    background-size: 100%;
    border-radius: 0 0 6px 6px;
    max-width: 900px;
    margin: 40px auto 0;
    padding: 30px;
    padding-top: 200px;
  }

  .counseling-mv-box {
    display: flex;
    justify-content: space-between;
    max-width: 843px;
  }

  .counseling-mv-txt {
    max-width: 410px;
    padding-top: 40px;

  }

  .counselinglead {
    font-size: 16px;
    font-weight: 500;
    line-height: 1.8;
  }

  .counseling-mv-txt .steps__acc {
    margin-top: 20px;
    background: #fff;
  }

  .counseling-mv-txt .steps__acc img {
    width: 100%;
    padding: 20px;
    min-height: 487px;
  }

  .counseling-mv-img {
    max-width: 410px;
    width: 48%;
    position: relative;
  }

  .movie-content-wrap {
    position: relative;
    width: 100%;
    padding-top: 56.25%;
  }

  .movie-content-wrap iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .movie-content-wrap img {
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
  }

  .sp-spacer {
    display: none;
    width: 1px;
    height: 1px;
  }

  @media screen and (max-width: 767px) {
    .sp-spacer {
      display: block;
    }
  }

  img {
    max-width: 100%;
    pointer-events: unset;
  }
</style>
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>
    <?php the_content(); ?>
  <?php
  endwhile;
else :
  ?>
  <p>ページはありません！</p>
<?php
endif;
?>

<?php
$wpcf7sn = do_shortcode('[wpcf7sn_view_count id="5801"]');
// $wpcf7snの文字列に含まれる数字に1を足す
$number = preg_replace('/[^\p{Nd}]/u', '', $wpcf7sn);
$number++;
$substr1 = substr($wpcf7sn, 0, 1);
?>

<!-- オンライン面談 -->
<script>
  window.onload = function() {
    $('#entry_conf').click(function() {
      formCheck();
      $('.modal-close').on('click', function() {
        $('.modal-container').removeClass('active');
      });
      $('.modal-container.active').on('click', function(e) {
        if (!$(e.target).closest('.modal-body').length) {
          $('.modal-container').removeClass('active');
        }
      });
      // 性別
      let input_houhou = $("input[name=houhou]:checked").val();
      $('#houhou').empty().append(input_houhou);
      // ご来店希望日
      let input_date = $("input[name=date]").val();
      $('#date').empty().append(input_date);
      // ご来店希望時間
      let input_select = $("select[name=select]").val();
      $('#select').empty().append(input_select);
      // お名前
      let input_name = $("input[name=txt_name]").val();
      $('#txt_name').empty().append(input_name);
      // 性別
      let input_gender = $("input[name=gender]:checked").val();
      $('#gender').empty().append(input_gender);
      //郵便番号
      let input_txt_number = $("input[name=txt_number]").val();
      $('#txt_number').empty().append(input_txt_number);
      //住所1
      let input_txt_prefectures = $("input[name=txt_prefectures]").val();
      $('#txt_prefectures').empty().append(input_txt_prefectures);
      //住所2
      let input_txt_address = $("input[name=txt_address]").val();
      $('#txt_address').empty().append(input_txt_address);
      //住所3
      let input_txt_other = $("input[name=txt_other]").val();
      $('#txt_other').empty().append(input_txt_other);
      //メールアドレス
      let input_txt_email = $("input[name=txt_email]").val();
      $('#txt_email').empty().append(input_txt_email);
      //電話番号
      let input_tel = $("input[name=tel]").val();
      $('#tel').empty().append(input_tel);
      //弊社へのお問い合わせ
      let textarea_FlexTextarea = $("textarea[name=FlexTextarea]").val();
      $('#FlexTextarea').empty().append(textarea_FlexTextarea);
    });

    function formCheck() {
      var number = $('input[name="tel"]').val()
      number = number.replace(/-/g, '');

      var is_check = true;
      var houhou_error = $(".houhou .error_message");
      var date_error = $(".date .error_message");
      var select_error = $(".select .error_message");
      var txt_name_error = $(".txt_name .error_message");
      var gender_error = $(".gender .error_message");
      var txt_number_error = $(".txt_number .error_message");
      var txt_prefectures_error = $(".txt_prefectures .error_message");
      var txt_address_error = $(".txt_address .error_message");
      var txt_email_error = $(".txt_email .error_message");
      var tel_error = $(".tel .error_message");
      var checkbox_error = $(".checkbox .error_message");

      if ($('input[name="houhou"]:checked').val() === undefined) {
        is_check = false;
        houhou_error.text("ご希望の方法を選択してください");
      } else {
        houhou_error.text("");
      }

      if ($('input[name="date"]').val() == "") {
        is_check = false;
        date_error.text("ご来店希望日を選択してください");
      } else {
        date_error.text("");
      }

      if ($('select[name="select"] option:selected').val() == "") {
        is_check = false;
        select_error.text("ご来店希望時間を選択してください");
      } else {
        select_error.text("");
      }

      if ($('input[name="txt_name"]').val() == "") {
        is_check = false;
        txt_name_error.text("お名前を入力してください");
      } else {
        txt_name_error.text("");
      }


      if ($('input[name="gender"]:checked').val() === undefined) {
        is_check = false;
        gender_error.text("性別を選択してください");
      } else {
        gender_error.text("");
      }

      if ($('input[name="txt_number"]').val() == "") {
        is_check = false;
        txt_number_error.text("半角英数字で入力してください");
      } else {
        txt_number_error.text("");
      }

      if ($('input[name="txt_prefectures"]').val() == "") {
        is_check = false;
        txt_prefectures_error.text("住所（都道府県）を選択してください");
      } else {
        txt_prefectures_error.text("");
      }

      if ($('input[name="txt_address"]').val() == "") {
        is_check = false;
        txt_address_error.text("住所を入力してください");
      } else {
        txt_address_error.text("");
      }

      if ($('input[name="txt_email"]').val() == "") {
        is_check = false;
        txt_email_error.text("メールアドレスを入力してください");
      } else {
        txt_email_error.text("");
      }

      if (!$('input[name="txt_email"]').val().match(/^[A-Za-z0-9.]+[\w-]+@[\w\.-]+\.\w{2,}$/)) {
        is_check = false;
        txt_email_error.text("メールアドレスを正しく入力してください");
      } else {
        txt_email_error.text("");
      }

      if (number.length < 10) {
        is_check = false;
        tel_error.text("半角英数字で入力してください");
      } else {
        tel_error.text("");
      }

      if (!$('input[name="checkbox"]').prop("checked")) {
        is_check = false;
        checkbox_error.text("お問い合わせには、個人情報の同意が必要です。");
      } else {
        checkbox_error.text("");
      }

      if (is_check) {
        $(".error_message").text("");
        $('#entry_send').attr("type", "submit");

        var parameter = '<?= $substr1 . $number ?>'; //PHPの変数をJavaScriptへ渡す
        var thanks = '/counseling/counseling-thanks/?id=' + parameter;
        $('form').attr('action', thanks);

        var close = $('.modal-close'),
          container = $('.modal-container');
        container.addClass('active');
      }

    }

  };

  function send_form() {
    $('form').submit();
  }
</script>


<!-- 確認画面 -->
<div class="modal-container">
  <div class="modal-position">
    <div class="modal-body">
      <div class="modal-close modal-button">×</div>
      <div class="modal-content">


        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/kakunin-sp.png" alt="" class="only-sp">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_new/form/kakunin.png" alt="" class="pc" width="1000" hieght="92">
        </div>
        <div class="mdl">
          <table class="modal-table">
            <tr>
              <th>ご希望の方法<span class="hissu">必須</span></th>
              <td>
                <span id="houhou"></span>
              </td>
            </tr>

            <tr>
              <th>ご来店希望日<span class="hissu">必須</span></th>
              <td>
                <span id="date"></span>　<span id="select"></span>
              </td>
            </tr>

            <tr>
              <th>お名前（フリガナ）<span class="hissu">必須</span></th>
              <td id="txt_name"></td>
            </tr>

            <tr>
              <th>性別<span class="hissu">必須</span></th>
              <td id="gender"></td>
            </tr>

            <tr>
              <th>メールアドレス<span class="hissu">必須</span></th>
              <td id="txt_email"></td>
            </tr>

            <tr>
              <th>電話番号<span class="hissu">必須</span></th>
              <td id="tel"></td>
            </tr>


            <!--<tr class="dan2">
            <th>お問い合わせ<span class="only-sp nakaguro">・</span><br class="pc">ご相談事項<span class="hissu nini">任意</span></th>
            <td id="FlexTextarea"></td>
           </tr>-->

            <tr class="dan2">
              <th>個人情報の<br>取り扱いへの同意<span class="hissu">必須</span></th>
              <td>同意する</td>
            </tr>

          </table>
        </div>
        <!--<p class="text">この内容で送信します。よろしいですか？</p>
          <dl class="primary">
            <dt><span>ご希望の方法</span></dt>
            <dd id="houhou"></dd>
            <dt><span>ご来店希望日</span></dt>
            <dd>
              <div id="date"></div>
              <div id="select"></div>
            </dd>
            <dt><span>お名前</span></dt>
            <dd id="txt_name"></dd>
            <dt><span>性別</span></dt>
            <dd id="gender"></dd>
            <dt><span>郵便番号</span></dt>
            <dd id="txt_number"></dd>
            <dt><span>住所</span></dt>
            <dd>
              <div id="txt_prefectures"></div>
              <div id="txt_address"></div>
              <div id="txt_other"></div>
            </dd>
            <dt><span>メールアドレス</span></dt>
            <dd id="txt_email"></dd>
            <dt><span>電話番号</span></dt>
            <dd id="tel"></dd>
            <dt><span>弊社へのお問い合わせ</span></dt>
            <dd id="FlexTextarea"></dd>
          </dl>-->
        <div class="button-box">
          <button type="button" class="modal-close btn-prev modoru">修正する</button>
          <button type="button" id="entry_send" class="submit btn-primary" onclick="send_form()">送信する</button>
        </div>
        <div class="modoru-area"><button type="button" class="modal-close tojiru">閉じる</button></div>
      </div>
    </div>
  </div>
</div>
<!-- 確認画面 end -->
<script>
  //【リニューアル】性別の男性・女性のinputタグにidを追加する。
  jQuery(function() {
    jQuery(".wpcf7 .houhou input").attr('id', 'online');
    jQuery('.wpcf7 .houhou .first input').attr('id', 'odenwa');
    jQuery('.wpcf7 .houhou .last input').attr('id', 'goraiten');
  });
  jQuery(function() {
    $('[name="houhou"]:radio').change(function() {
      if ($('[id=odenwa]').prop('checked')) {
        $(this).parent().addClass("odenwa");
        $("label.goraiten").removeClass();
        $("label.online").removeClass();
      } else if ($('[id=goraiten]').prop('checked')) {
        $(this).parent().addClass("goraiten");
        $("label.odenwa").removeClass();
        $("label.online").removeClass();
      } else if ($('[id=online]').prop('checked')) {
        $(this).parent().addClass("online");
        $("label.odenwa").removeClass();
        $("label.goraiten").removeClass();
      }
    });
  });

  jQuery(function() {
    $('.tori').on('click', function() {
      $(this).addClass("kieru");
    });
  });
</script>

<?php get_footer('new02'); ?>