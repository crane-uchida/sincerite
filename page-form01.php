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
  $wpcf7sn= do_shortcode('[wpcf7sn_view_count id="5641"]');
  // $wpcf7snの文字列に含まれる数字に1を足す
  $number = preg_replace( '/[^\p{Nd}]/u', '', $wpcf7sn);
  $number++;
  $substr1 = substr($wpcf7sn, 0, 1);
?>

<!-- 初回来店予約 -->
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
        if ($('input[name="date"]').val() == "") {
          $(".date_select .error_message").text("ご来店希望日を選択してください");
        } else if ($('select[name="select"] option:selected').val() == "") {
          $(".date_select .error_message").text("ご来店希望時間を選択してください");
        } else if ($('input[name="txt_name"]').val() == "") {
          $(".txt_name .error_message").text("お名前を入力してください");
        } else if ($('input[name="gender"]:checked').val() === undefined ) {
          $(".gender .error_message").text("性別を選択してください");
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
          var thanks = '/form01/form01-thanks/?id=' + parameter;
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
            <dt><span>ご来店予定の店舗</span></dt>
            <dd>東京 表参道本店</dd>
            <dt><span>ご来店希望日</span></dt>
            <dd>
              <div id="date"></div>
              <div id="select"></div>
            </dd>
            <dt><span>お名前</span></dt>
            <dd id="txt_name"></dd>
            <dt><span>性別</span></dt>
            <dd id="gender"></dd>
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