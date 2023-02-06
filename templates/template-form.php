<?php
/* Template Name:フォーム */
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
  if (is_page('form02')) {
    $wpcf7sn= do_shortcode('[wpcf7sn_view_count id="5873"]');
  } elseif (is_page('form03')) {
    $wpcf7sn= do_shortcode('[wpcf7sn_view_count id="5854"]');
  } elseif (is_page('form04')) {
    $wpcf7sn= do_shortcode('[wpcf7sn_view_count id="5856"]');
  }
  // $wpcf7snの文字列に含まれる数字に1を足す
  $number = preg_replace( '/[^\p{Nd}]/u', '', $wpcf7sn);
  $number++;
  $substr1 = substr($wpcf7sn, 0, 1);
?>

<!-- ステータスプランform02 --><!-- 旧帝大・早慶プレミアムメンバーズform03 --><!-- ドクターズ・プレミアムform04 -->
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
        // 年収
        let input_select_annualincome = $("select[name=select_annualincome]").val();
        $('#select_annualincome').empty().append(input_select_annualincome);
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
        let input_txt_prefectures = $("input[name=txt_prefectures]").val();
        $('#txt_prefectures').empty().append(input_txt_prefectures);
        //住所2
        let input_txt_address = $("input[name=txt_address]").val();
        $('#txt_address').empty().append(input_txt_address);
        //住所3
        let input_txt_other = $("input[name=txt_other]").val();
        $('#txt_other').empty().append(input_txt_other);
        //弊社へのお問い合わせ
        let textarea_FlexTextarea = $("textarea[name=FlexTextarea]").val();
        $('#FlexTextarea').empty().append(textarea_FlexTextarea);
      });

      function formCheck() {
        var number = $('input[name="tel"]').val()
        number = number.replace(/-/g,'');

        var is_check = true;
        var txt_name_error = $(".txt_name .error_message");
        var gender_error = $(".gender .error_message");
        var select_annualincome_error = $(".select_annualincome .error_message");
        var txt_email_error = $(".txt_email .error_message");
        var tel_error = $(".tel .error_message");
        var txt_number_error = $(".txt_number .error_message");
        var txt_prefectures_error = $(".txt_prefectures .error_message");
        var txt_address_error = $(".txt_address .error_message");
        var checkbox_error = $(".checkbox .error_message");
        
        if ($('input[name="txt_name"]').val() == "") {
          is_check = false;
          txt_name_error.text("お名前を入力してください");
        }else{
          txt_name_error.text("");
        }
        
        if ($('input[name="gender"]:checked').val() === undefined ) {
          is_check = false;
          gender_error.text("性別を選択してください");
        }else{
          gender_error.text("");
        }
        
        if ($('select[name="select_annualincome"] option:selected').val() == "") {
          is_check = false;
          select_annualincome_error.text("年収を選択してください");
        }else{
          select_annualincome_error.text("");
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
          tel_error.text("電話番号を正しく入力してください");
        }else{
          tel_error.text("");
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

          var dir = location.href.split("/"); //変数dirに取得したURLをスラッシュごとに区切り、配列に格納
          var dir2 = dir[dir.length -2]; //配列dirの、最後のオブジェクトから数えて2番目のものを変数dir2に格納
          var thanks = '/' + dir2 + '/' + dir2 + '-thanks/?id=' + parameter; //サンクスページURL

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
            <dt><span>年収</span></dt>
            <dd id="select_annualincome"></dd>
            <dt><span>メールアドレス</span></dt>
            <dd id="txt_email"></dd>
            <dt><span>電話番号</span></dt>
            <dd id="tel"></dd>
            <dt><span>郵便番号</span></dt>
            <dd id="txt_number"></dd>
            <dt><span>住所</span></dt>
            <dd>
              <div id="txt_prefectures"></div>
              <div id="txt_address"></div>
              <div id="txt_other"></div>
            </dd>
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