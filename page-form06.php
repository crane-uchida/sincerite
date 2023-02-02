<?php
remove_filter('the_content', 'wpautop');
get_header(); ?>

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
  $wpcf7sn= do_shortcode('[wpcf7sn_view_count id="5778"]');
  // $wpcf7snの文字列に含まれる数字に1を足す
  $number = preg_replace( '/[^\p{Nd}]/u', '', $wpcf7sn);
  $number++;
  $substr1 = substr($wpcf7sn, 0, 1);
?>

<!-- パートナー診断 -->
<script>
    window.onload = function(){
      $('#entry_conf').click(function () {
        formCheck();
        $('.modal-close').on('click', function () {
          $('.modal-container').removeClass('active');
        });
        $('.modal-container.active').on('click', function (e) {
          if (!$(e.target).closest('.modal-body').length) {
            $('.modal-container').removeClass('active');
          }
        });
        // お名前
        let input_name = $("input[name=txt_name]").val();
        $('#txt_name').empty().append(input_name);
        // 性別
        let input_gender = $("input[name=gender]:checked").val();
        $('#gender').empty().append(input_gender);
        // あなたの年齢層
        let input_select_age = $("select[name=select_age]").val();
        $('#select_age').empty().append(input_select_age);
        // あなたの星座
        let input_select_zodiac = $("select[name=select_zodiac]").val();
        $('#select_zodiac').empty().append(input_select_zodiac);
        // あなたの血液型
        let input_select_bloodtype = $("select[name=select_bloodtype]").val();
        $('#select_bloodtype').empty().append(input_select_bloodtype);
        // 今まで好きになった異性のタイプで多いのは？
        let input_select_1 = $("select[name=select_1]").val();
        $('#select_1').empty().append(input_select_1);
        // あなたの生活の中で一番優先順位が高いのは？
        let input_select_2 = $("select[name=select_2]").val();
        $('#select_2').empty().append(input_select_2);
        // ほっぺがプニっとしている
        let input_yesno_1 = $("input[name=yesno_1]:checked").val();
        $('#yesno_1').empty().append(input_yesno_1);
        // 写真に写るときはどんな表情をしますか？
        let input_select_3 = $("select[name=select_3]").val();
        $('#select_3').empty().append(input_select_3);
        // お肌の色は健康的な小麦色ですか？
        let input_yesno_2 = $("input[name=yesno_2]:checked").val();
        $('#yesno_2').empty().append(input_yesno_2);
        // 恋人の携帯、あなたはチェックする？
        let input_select_4 = $("select[name=select_4]").val();
        $('#select_4').empty().append(input_select_4);
        // メイクをしなくても顔立ちがハッキリしている
        let input_yesno_3 = $("input[name=yesno_3]:checked").val();
        $('#yesno_3').empty().append(input_yesno_3);
        // 鼻が高いと言われたことがある
        let input_yesno_4 = $("input[name=yesno_4]:checked").val();
        $('#yesno_4').empty().append(input_yesno_4);
        // 髪を切ってイメチェンしたところ、周りから賛否両論の声が…どうしますか？
        let input_select_5 = $("select[name=select_5]").val();
        $('#select_5').empty().append(input_select_5);
        // 瞳の色は真っ黒である
        let input_yesno_5 = $("input[name=yesno_5]:checked").val();
        $('#yesno_5').empty().append(input_yesno_5);
        // 眉はくっきりしてる方である
        let input_yesno_6 = $("input[name=yesno_6]:checked").val();
        $('#yesno_6').empty().append(input_yesno_6);
        // 部屋を掃除していたら昔の恋人からもらったアクセサリーが出てきました…どうしますか？
        let input_select_6 = $("select[name=select_6]").val();
        $('#select_6').empty().append(input_select_6);
        // 海に浮かぶ無人島で一人きりの生活をすることになりました。一冊だけ本を持って行けるとしたらどんな本を選びますか？
        let input_select_7 = $("select[name=select_7]").val();
        $('#select_7').empty().append(input_select_7);
        // 強調するメイクより、やわらかいメイクの方が似合ってると思う
        let input_yesno_7 = $("input[name=yesno_7]:checked").val();
        $('#yesno_7').empty().append(input_yesno_7);
        // あなたの趣味はどれが一番近いですか？
        let input_select_8 = $("select[name=select_8]").val();
        $('#select_8').empty().append(input_select_8);
        // 鏡の前に立つと頬骨が気になる
        let input_yesno_8 = $("input[name=yesno_8]:checked").val();
        $('#yesno_8').empty().append(input_yesno_8);
        // あなたが最も頼れると思うのは？
        let input_select_9 = $("select[name=select_9]").val();
        $('#select_9').empty().append(input_select_9);
        // 笑うと少し大福っぽいかもしれない
        let input_yesno_9 = $("input[name=yesno_9]:checked").val();
        $('#yesno_9').empty().append(input_yesno_9);
        // 宝石が、黄、赤、緑、黒、茶、白、青、ピンクの8色があります。あなたはどの色を使って指輪を作りますか？
        let input_select_10 = $("select[name=select_10]").val();
        $('#select_10').empty().append(input_select_10);
        // 来店（無料カウンセリング）するならいつ頃がいいですか？
        let input_select_11 = $("select[name=select_11]").val();
        $('#select_11').empty().append(input_select_11);
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
        number = number.replace(/-/g,'');
        if ($('input[name="txt_name"]').val() == "") {
          $(".txt_name .error_message").text("お名前を入力してください");
        } else if ($('input[name="gender"]:checked').val() === undefined ) {
          $(".gender .error_message").text("性別を選択してください");
        } else if ($('select[name="select_age"] option:selected').val() == "") {
          $(".select_age .error_message").text("あなたの年齢層を選択してください");
        } else if ($('select[name="select_zodiac"] option:selected').val() == "") {
          $(".select_zodiac .error_message").text("あなたの星座を選択してください");
        } else if ($('select[name="select_bloodtype"] option:selected').val() == "") {
          $(".select_bloodtype .error_message").text("あなたの血液型を選択してください");
        } else if ($('select[name="select_1"] option:selected').val() == "") {
          $(".select_1 .error_message").text("選択してください");
        } else if ($('select[name="select_2"] option:selected').val() == "") {
          $(".select_2 .error_message").text("選択してください");
        } else if ($('input[name="yesno_1"]:checked').val() === undefined ) {
          $(".yesno_1 .error_message").text("選択してください");
        } else if ($('select[name="select_3"] option:selected').val() == "") {
          $(".select_3 .error_message").text("選択してください");
        } else if ($('input[name="yesno_2"]:checked').val() === undefined ) {
          $(".yesno_2 .error_message").text("選択してください");
        } else if ($('select[name="select_4"] option:selected').val() == "") {
          $(".select_4 .error_message").text("選択してください");
        } else if ($('input[name="yesno_3"]:checked').val() === undefined ) {
          $(".yesno_3 .error_message").text("選択してください");
        } else if ($('input[name="yesno_4"]:checked').val() === undefined ) {
          $(".yesno_4 .error_message").text("選択してください");
        } else if ($('select[name="select_5"] option:selected').val() == "") {
          $(".select_5 .error_message").text("選択してください");
        } else if ($('input[name="yesno_5"]:checked').val() === undefined ) {
          $(".yesno_5 .error_message").text("選択してください");
        } else if ($('input[name="yesno_6"]:checked').val() === undefined ) {
          $(".yesno_6 .error_message").text("選択してください");
        } else if ($('select[name="select_6"] option:selected').val() == "") {
          $(".select_6 .error_message").text("選択してください");
        } else if ($('select[name="select_7"] option:selected').val() == "") {
          $(".select_7 .error_message").text("選択してください");
        } else if ($('input[name="yesno_7"]:checked').val() === undefined ) {
          $(".yesno_7 .error_message").text("選択してください");
        } else if ($('select[name="select_8"] option:selected').val() == "") {
          $(".select_8 .error_message").text("選択してください");
        } else if ($('input[name="yesno_8"]:checked').val() === undefined ) {
          $(".yesno_8 .error_message").text("選択してください");
        } else if ($('select[name="select_9"] option:selected').val() == "") {
          $(".select_9 .error_message").text("選択してください");
        } else if ($('input[name="yesno_9"]:checked').val() === undefined ) {
          $(".yesno_9 .error_message").text("選択してください");
        } else if ($('select[name="select_10"] option:selected').val() == "") {
          $(".select_10 .error_message").text("選択してください");
        } else if ($('select[name="select_11"] option:selected').val() == "") {
          $(".select_11 .error_message").text("選択してください");
        } else if ($('input[name="txt_number"]').val() == "") {
          $(".txt_number .error_message").text("郵便番号を入力してください");
        } else if ($('input[name="txt_prefectures"]').val() == "") {
          $(".txt_prefectures .error_message").text("住所（都道府県）を入力してください");
        } else if ($('input[name="txt_address"]').val() == "") {
          $(".txt_address .error_message").text("住所を入力してください");
        } else if ($('input[name="txt_email"]').val() == "") {
          $(".txt_email .error_message").text("メールアドレスを入力してください");
        } else if (!$('input[name="txt_email"]').val().match(/^[A-Za-z0-9.]+[\w-]+@[\w\.-]+\.\w{2,}$/)) {
          $(".txt_email .error_message").text("メールアドレスを正しく入力してください");
        } else if (number.length < 10) {
          $(".tel .error_message").text("電話番号を正しく入力してください");
        } else if (!$('input[name="checkbox"]').prop("checked")) {
          $(".checkbox .error_message").text("個人情報に同意してください");
        } else {
          $(".error_message").text("");
          $('#entry_send').attr("type", "submit");

          var parameter = '<?=$substr1.$number?>'; //PHPの変数をJavaScriptへ渡す
          var thanks = '/form06/form06-thanks/?id=' + parameter;
          $('form').attr('action', thanks);

          var close = $('.modal-close'),
          container = $('.modal-container');
          container.addClass('active');
        }
      }

    };

    function send_form(){
        $('form').submit();
    }

  </script>


  <!-- 確認画面 -->
  <div class="modal-container">
    <div class="modal-position">
      <div class="modal-body">
        <div class="modal-close modal-button">×</div>
        <div class="modal-content">
          <p class="text">この内容で送信します。よろしいですか？</p>
          <dl class="primary">
            <dt><span>お名前</span></dt>
            <dd id="txt_name"></dd>
            <dt><span>性別</span></dt>
            <dd id="gender"></dd>
            <dt><span>あなたの年齢層</span></dt>
            <dd id="select_age"></dd>
            <dt><span>あなたの星座</span></dt>
            <dd id="select_zodiac"></dd>
            <dt><span>あなたの血液型</span></dt>
            <dd id="select_bloodtype"></dd>
            <dt><span>今まで好きになった異性のタイプで多いのは？</span></dt>
            <dd id="select_1"></dd>
            <dt><span>あなたの生活の中で一番優先順位が高いのは？</span></dt>
            <dd id="select_2"></dd>
            <dt><span>ほっぺがプニっとしている</span></dt>
            <dd id="yesno_1"></dd>
            <dt><span>写真に写るときはどんな表情をしますか？</span></dt>
            <dd id="select_3"></dd>
            <dt><span>お肌の色は健康的な小麦色ですか？</span></dt>
            <dd id="yesno_2"></dd>
            <dt><span>恋人の携帯、あなたはチェックする？</span></dt>
            <dd id="select_4"></dd>
            <dt><span>メイクをしなくても顔立ちがハッキリしている</span></dt>
            <dd id="yesno_3"></dd>
            <dt><span>鼻が高いと言われたことがある</span></dt>
            <dd id="yesno_4"></dd>
            <dt><span>髪を切ってイメチェンしたところ、周りから賛否両論の声が…どうしますか？</span></dt>
            <dd id="select_5"></dd>
            <dt><span>瞳の色は真っ黒である</span></dt>
            <dd id="yesno_5"></dd>
            <dt><span>眉はくっきりしてる方である</span></dt>
            <dd id="yesno_6"></dd>
            <dt><span>部屋を掃除していたら昔の恋人からもらったアクセサリーが出てきました…どうしますか？</span></dt>
            <dd id="select_6"></dd>
            <dt><span>海に浮かぶ無人島で一人きりの生活をすることになりました。一冊だけ本を持って行けるとしたらどんな本を選びますか？</span></dt>
            <dd id="select_7"></dd>
            <dt><span>強調するメイクより、やわらかいメイクの方が似合ってると思う</span></dt>
            <dd id="yesno_7"></dd>
            <dt><span>あなたの趣味はどれが一番近いですか？</span></dt>
            <dd id="select_8"></dd>
            <dt><span>鏡の前に立つと頬骨が気になる</span></dt>
            <dd id="yesno_8"></dd>
            <dt><span>あなたが最も頼れると思うのは？</span></dt>
            <dd id="select_9"></dd>
            <dt><span>笑うと少し大福っぽいかもしれない</span></dt>
            <dd id="yesno_9"></dd>
            <dt><span>宝石が、黄、赤、緑、黒、茶、白、青、ピンクの8色があります。あなたはどの色を使って指輪を作りますか？</span></dt>
            <dd id="select_10"></dd>
            <dt><span>来店（無料カウンセリング）するならいつ頃がいいですか？</span></dt>
            <dd id="select_11"></dd>
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
          </dl>
          <div class="button-box">
            <button type="button" class="modal-close">戻る</button>
            <button type="button" id="entry_send" class="submit" onclick="send_form()">送信する</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 確認画面 end -->

<?php get_footer(); ?>