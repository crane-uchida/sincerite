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
  $wpcf7sn= do_shortcode('[wpcf7sn_view_count id="5914"]');
  // $wpcf7snの文字列に含まれる数字に1を足す
  $number = preg_replace( '/[^\p{Nd}]/u', '', $wpcf7sn);
  $number++;
  $substr1 = substr($wpcf7sn, 0, 1);
?>

<!-- 求人応募フォーム -->
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
        // 生年月日（年）
        let input_select_yy = $("select[name=select_yy]").val();
        $('#select_yy').empty().append(input_select_yy);
        // 生年月日（月）
        let input_select_mm = $("select[name=select_mm]").val();
        $('#select_mm').empty().append(input_select_mm);
        // 生年月日（日）
        let input_select_dd = $("select[name=select_dd]").val();
        $('#select_dd').empty().append(input_select_dd);
        // 性別
        let input_gender = $("input[name=gender]:checked").val();
        $('#gender').empty().append(input_gender);
        //メールアドレス
        let input_txt_email = $("input[name=txt_email]").val();
        $('#txt_email').empty().append(input_txt_email);
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
        //電話番号
        let input_tel = $("input[name=tel]").val();
        $('#tel').empty().append(input_tel);
        //希望職種
        let input_select_occupation = $("select[name=select_occupation]").val();
        $('#select_occupation').empty().append(input_select_occupation);
        //職歴備考
        let textarea_FlexTextarea = $("textarea[name=FlexTextarea]").val();
        $('#FlexTextarea').empty().append(textarea_FlexTextarea);
      });

      function formCheck() {
        var number = $('input[name="tel"]').val()
        number = number.replace(/-/g,'');

        var is_check = true;
        var txt_name_error = $(".txt_name .error_message");
        var select_yy_error = $(".select_yy .error_message");
        var select_mm_error = $(".select_mm .error_message");
        var select_dd_error = $(".select_dd .error_message");
        var gender_error = $(".gender .error_message");
        var txt_email_error = $(".txt_email .error_message");
        var txt_number_error = $(".txt_number .error_message");
        var txt_prefectures_error = $(".txt_prefectures .error_message");
        var txt_address_error = $(".txt_address .error_message");
        var tel_error = $(".tel .error_message");
        var select_occupation_error = $(".select_occupation .error_message");
        var checkbox_error = $(".checkbox .error_message");

        if ($('input[name="txt_name"]').val() == "") {
          is_check = false;
          txt_name_error.text("お名前を入力してください");
        }else{
          txt_name_error.text("");
        }
        
        if ($('select[name="select_yy"] option:selected').val() == "") {
          is_check = false;
          select_yy_error.text("生年月日の年を選択してください");
        }else{
          select_yy_error.text("");
        }
        
        if ($('select[name="select_mm"] option:selected').val() == "") {
          is_check = false;
          select_mm_error.text("生年月日の月を選択してください");
        }else{
          select_mm_error.text("");
        }
        
        if ($('select[name="select_dd"] option:selected').val() == "") {
          is_check = false;
          select_dd_error.text("生年月日の日を選択してください");
        }else{
          select_dd_error.text("");
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
        
        if ($('input[name="txt_number"]').val() == "") {
          is_check = false;
          txt_number_error.text("郵便番号を入力してください");
        }else{
          txt_number_error.text("");
        }
        
        if ($('input[name="txt_prefectures"]').val() == "") {
          is_check = false;
          txt_prefectures_error.text("住所（都道府県）を入力してください");
        }else{
          txt_prefectures_error.text("");
        }
        
        if ($('input[name="txt_address"]').val() == "") {
          is_check = false;
          txt_address_error.text("住所を入力してください");
        }else{
          txt_address_error.text("");
        }
        
        if (number.length < 10) {
          is_check = false;
          tel_error.text("電話番号を正しく入力してください");
        }else{
          tel_error.text("");
        }
        
        if ($('select[name="select_occupation"] option:selected').val() == "") {
          is_check = false;
          select_occupation_error.text("希望職種を選択してください");
        }else{
          select_occupation_error.text("");
        }
        
        if (!$('input[name="checkbox"]').prop("checked")) {
          is_check = false;
          checkbox_error.text("個人情報に同意してください");
        }else{
          checkbox_error.text("");
        }
        
        if(is_check){
          $(".error_message").text("");
          $('#entry_send').attr("type", "submit");

          var parameter = '<?=$substr1.$number?>'; //PHPの変数をJavaScriptへ渡す
          var thanks = '/recruit/thanks/?id=' + parameter;
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
            <dt><span>生年月日</span></dt>
            <dd>
              <div id="select_yy"></div>
              <div id="select_mm"></div>
              <div id="select_dd"></div>
            </dd>
            <dt><span>性別</span></dt>
            <dd id="gender"></dd>
            <dt><span>メールアドレス</span></dt>
            <dd id="txt_email"></dd>
            <dt><span>郵便番号</span></dt>
            <dd id="txt_number"></dd>
            <dt><span>住所</span></dt>
            <dd>
              <div id="txt_prefectures"></div>
              <div id="txt_address"></div>
              <div id="txt_other"></div>
            </dd>
            <dt><span>電話番号</span></dt>
            <dd id="tel"></dd>
            <dt><span>希望職種</span></dt>
            <dd id="select_occupation"></dd>
            <dt><span>職歴備考</span></dt>
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