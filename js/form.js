jQuery(function() {

	//生年月日から年齢を自動計算。その年齢をフォームの#ageのvalueに設定する。
		jQuery("select#Date_Year,select#Date_Month,select#Date_Day").change(BDcal);
		function BDcal(){
			var y = parseInt(jQuery('#Date_Year').val(), 10);
			var m = parseInt(jQuery('#Date_Month').val(), 10);
			var d = parseInt(jQuery('#Date_Day').val(), 10);
	
			myNow   = new Date();
			myBirth = new Date( 1970, 0, d );
			myBirth.setTime( myNow.getTime() - myBirth.getTime() );
	
			myYear  = myBirth.getUTCFullYear() - y;
			myMonth = myBirth.getUTCMonth() - ( m - 1 );
	
			if( myMonth < 0 ){
				myYear --;
				myMonth += 12;
			}
	
			myDate = myBirth.getUTCDate();
			jQuery('#results').html( '（'+myYear+'才）' );
			jQuery('#age').val( '（'+myYear+'才）' );
		}
	
	//性別の男性・女性のinputタグにidを追加する。
	jQuery(function () {
		jQuery('#your-sex .first input').attr('id', 'sex-1');
		jQuery('#your-sex .last input').attr('id', 'sex-2');
	});
	//【リニューアル】性別の男性・女性のinputタグにidを追加する。
	jQuery(function () {
		jQuery('.wpcf7 .gender .first input').attr('id', 'male');
		jQuery('.wpcf7 .gender .last input').attr('id', 'female');
	});
	
	//【リニューアル】はい・いいえのinputタグにidを追加する。
	jQuery(function () {
		jQuery('.wpcf7 .yesno_1 .first input').attr('id', 'yes_1');
		jQuery('.wpcf7 .yesno_1 .last input').attr('id', 'no_1');
		jQuery('.wpcf7 .yesno_2 .first input').attr('id', 'yes_2');
		jQuery('.wpcf7 .yesno_2 .last input').attr('id', 'no_2');
		jQuery('.wpcf7 .yesno_3 .first input').attr('id', 'yes_3');
		jQuery('.wpcf7 .yesno_3 .last input').attr('id', 'no_3');
		jQuery('.wpcf7 .yesno_4 .first input').attr('id', 'yes_4');
		jQuery('.wpcf7 .yesno_4 .last input').attr('id', 'no_4');
		jQuery('.wpcf7 .yesno_5 .first input').attr('id', 'yes_5');
		jQuery('.wpcf7 .yesno_5 .last input').attr('id', 'no_5');
		jQuery('.wpcf7 .yesno_6 .first input').attr('id', 'yes_6');
		jQuery('.wpcf7 .yesno_6 .last input').attr('id', 'no_6');
		jQuery('.wpcf7 .yesno_7 .first input').attr('id', 'yes_7');
		jQuery('.wpcf7 .yesno_7 .last input').attr('id', 'no_7');
		jQuery('.wpcf7 .yesno_8 .first input').attr('id', 'yes_8');
		jQuery('.wpcf7 .yesno_8 .last input').attr('id', 'no_8');
		jQuery('.wpcf7 .yesno_9 .first input').attr('id', 'yes_9');
		jQuery('.wpcf7 .yesno_9 .last input').attr('id', 'no_9');
	});
	
	//性別の男性・女性クリックすると、それぞれ注意事項を表示させる。
	jQuery('input#sex-1[type="radio"]').change(function() {
		 jQuery('.man-notice').toggle(true);
		 jQuery('.woman-notice').toggle(false);
	});
	jQuery('input#sex-2[type="radio"]').change(function() {
		 jQuery('.woman-notice').toggle(true);
		 jQuery('.man-notice').toggle(false);
	});
	//【リニューアル】性別の男性・女性クリックすると、それぞれ注意事項を表示させる。
	jQuery(function(){
		jQuery('input#male[type="radio"]').change(function() {
			jQuery('.man_notice').toggle(true);
			jQuery('.woman_notice').toggle(false);
		});
		jQuery('input#female[type="radio"]').change(function() {
			jQuery('.woman_notice').toggle(true);
			jQuery('.man_notice').toggle(false);
		});
	});
	
	//性別の男性・女性クリックすると、それぞれ注意事項を表示させる。
	jQuery('[name="your-sex"]:radio').change( function() {
		if(jQuery('[id=sex-1]').prop('checked')){
			jQuery('.woman-notice').toggle(false);
			jQuery('.man-notice').toggle(true);
		} else if (jQuery('[id=sex-2]').prop('checked')) {
			jQuery('.man-notice').toggle(false);
			jQuery('.woman-notice').toggle(true);
		}
	});
	
	//性別の男性・女性をクリックすると、生年月日の年の選択肢が変更される。女性をクリックすると指定optionタグが削除され、女性以外をクリックすると（指定optionタグが存在してなければ）指定optionタグを追加。
	jQuery(function(){
		jQuery('input[name="your-sex"]').change(function() {
			if (jQuery('input[name="your-sex"]:checked').val() == '女性') jQuery('select#Date_Year option').remove("option[value=1960], option[value=1961], option[value=1962], option[value=1963], option[value=1964], option[value=1965], option[value=1966], option[value=1967], option[value=1968], option[value=1969], option[value=1970], option[value=1971], option[value=1972], option[value=1973], option[value=1974], option[value=1975], option[value=1976]");
			else if(
						!(jQuery('select#Date_Year option[value=1960]').length) && !(jQuery('select#Date_Year option[value=1961]').length) && !(jQuery('select#Date_Year option[value=1962]').length)
					 && !(jQuery('select#Date_Year option[value=1963]').length) && !(jQuery('select#Date_Year option[value=1964]').length) && !(jQuery('select#Date_Year option[value=1965]').length)
					 && !(jQuery('select#Date_Year option[value=1966]').length) && !(jQuery('select#Date_Year option[value=1967]').length) && !(jQuery('select#Date_Year option[value=1968]').length)
					 && !(jQuery('select#Date_Year option[value=1969]').length) && !(jQuery('select#Date_Year option[value=1970]').length) && !(jQuery('select#Date_Year option[value=1971]').length)
					 && !(jQuery('select#Date_Year option[value=1972]').length) && !(jQuery('select#Date_Year option[value=1973]').length) && !(jQuery('select#Date_Year option[value=1974]').length)
					 && !(jQuery('select#Date_Year option[value=1975]').length) && !(jQuery('select#Date_Year option[value=1976]').length)
					)
			{
				jQuery('select#Date_Year option').eq(0).after(jQuery('<option value="1960">1960</option>'));
				jQuery('select#Date_Year option').eq(1).after(jQuery('<option value="1961">1961</option>'));
				jQuery('select#Date_Year option').eq(2).after(jQuery('<option value="1962">1962</option>'));
				jQuery('select#Date_Year option').eq(3).after(jQuery('<option value="1963">1963</option>'));
				jQuery('select#Date_Year option').eq(4).after(jQuery('<option value="1964">1964</option>'));
				jQuery('select#Date_Year option').eq(5).after(jQuery('<option value="1965">1965</option>'));
				jQuery('select#Date_Year option').eq(6).after(jQuery('<option value="1966">1966</option>'));
				jQuery('select#Date_Year option').eq(7).after(jQuery('<option value="1967">1967</option>'));
				jQuery('select#Date_Year option').eq(8).after(jQuery('<option value="1968">1968</option>'));
				jQuery('select#Date_Year option').eq(9).after(jQuery('<option value="1969">1969</option>'));
				jQuery('select#Date_Year option').eq(10).after(jQuery('<option value="1970">1970</option>'));
				jQuery('select#Date_Year option').eq(11).after(jQuery('<option value="1971">1971</option>'));
				jQuery('select#Date_Year option').eq(12).after(jQuery('<option value="1972">1972</option>'));
				jQuery('select#Date_Year option').eq(13).after(jQuery('<option value="1973">1973</option>'));
				jQuery('select#Date_Year option').eq(14).after(jQuery('<option value="1974">1974</option>'));
				jQuery('select#Date_Year option').eq(15).after(jQuery('<option value="1975">1975</option>'));
				jQuery('select#Date_Year option').eq(16).after(jQuery('<option value="1976">1976</option>'));
			}
		});
	});
	
	//性別の男性・女性をクリックすると、最終学歴の選択肢が変更される。
	jQuery(function(){
		jQuery('input[name="your-sex"]').change(function() {
			if (jQuery('input[name="your-sex"]:checked').val() == '男性') jQuery('select#your-academic-background option').remove("option[value=短期大学卒業]");
			else if(
						!(jQuery('select#your-academic-background option[value=短期大学卒業]').length)
					)
			{
				jQuery('select#your-academic-background option').eq(0).after(jQuery('<option value="短期大学卒業">短期大学卒業</option>'));
			}
		});
	});
	
	//性別の男性・女性をクリックすると、チェックされたinputの親のlabelにclassが追加される。
	jQuery(function() {
	  $('[name="your-sex"]:radio').change( function() {
		if($('[id=sex-1]').prop('checked')){
		  $(this).parent().addClass("male");
				$("label.female").removeClass();
		} else if ($('[id=sex-2]').prop('checked')) {
				$(this).parent().addClass("female");
				$("label.male").removeClass();
		}
	  });
	});
	
	//【リニューアル】性別の男性・女性をクリックすると、チェックされたinputの親のlabelにclassが追加される。
	jQuery(function() {
		$('[name="gender"]:radio').change( function() {
		  if($('[id=male]').prop('checked')){
			$(this).parent().addClass("male");
				  $("label.female").removeClass();
		  } else if ($('[id=female]').prop('checked')) {
				  $(this).parent().addClass("female");
				  $("label.male").removeClass();
		  }
		});
	
		$('[name="yesno_1"]:radio').change( function() {
		  if($('[id=yes_1]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_1 .no").removeClass();
		  } else if ($('[id=no_1]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_1 .yes").removeClass();
		  }
		});
		$('[name="yesno_2"]:radio').change( function() {
		  if($('[id=yes_2]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_2 .no").removeClass();
		  } else if ($('[id=no_2]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_2 .yes").removeClass();
		  }
		});
		$('[name="yesno_3"]:radio').change( function() {
		  if($('[id=yes_3]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_3 .no").removeClass();
		  } else if ($('[id=no_3]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_3 .yes").removeClass();
		  }
		});
		$('[name="yesno_4"]:radio').change( function() {
		  if($('[id=yes_4]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_4 .no").removeClass();
		  } else if ($('[id=no_4]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_4 .yes").removeClass();
		  }
		});
		$('[name="yesno_5"]:radio').change( function() {
		  if($('[id=yes_5]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_5 .no").removeClass();
		  } else if ($('[id=no_5]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_5 .yes").removeClass();
		  }
		});
		$('[name="yesno_6"]:radio').change( function() {
		  if($('[id=yes_6]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_6 .no").removeClass();
		  } else if ($('[id=no_6]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_6 .yes").removeClass();
		  }
		});
		$('[name="yesno_7"]:radio').change( function() {
		  if($('[id=yes_7]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_7 .no").removeClass();
		  } else if ($('[id=no_7]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_7 .yes").removeClass();
		  }
		});
		$('[name="yesno_8"]:radio').change( function() {
		  if($('[id=yes_8]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_8 .no").removeClass();
		  } else if ($('[id=no_8]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_8 .yes").removeClass();
		  }
		});
		$('[name="yesno_9"]:radio').change( function() {
		  if($('[id=yes_9]').prop('checked')){
			$(this).parent().addClass("yes");
				  $(".yesno_9 .no").removeClass();
		  } else if ($('[id=no_9]').prop('checked')) {
				  $(this).parent().addClass("no");
				  $(".yesno_9 .yes").removeClass();
		  }
		});
	  });
	
	//formタグにエラー用classを付与する（mw wp form用）
	jQuery(function(jQuery) {
	  if ( jQuery('.error')[0] ) {
		jQuery('.mw_wp_form').addClass('mw_wp_form_error');
		jQuery('.mw_wp_form_business').addClass('mw_wp_form_error');
	  }
	});
	
	//span.errorの直近の親要素tdにclass「error-box」を付与する（mw wp form用）
	jQuery("span.error").closest("td").addClass('error-box');
	
	//フォームの自動補完を無効
	jQuery(function() {
		jQuery('form').attr('autocomplete', 'off');
	});
	
	//ご来店希望日にプレースホルダーを追加
	jQuery(function() {
		jQuery('.your-date1 input').attr('placeholder', '第一希望を選択');
		jQuery('.your-date2 input').attr('placeholder', '第二希望を選択');
		jQuery('.your-date3 input').attr('placeholder', '第三希望を選択');
	});
	
	//「パートナー診断」「資料請求」の来店日にプレースホルダーを追加
	jQuery(function() {
		jQuery('.your-date4 input').attr('placeholder', 'ご来店日を選択');
	});
	
	//ご来店希望日の時間(selectタグ)の最初のoptionタグを選択できないようにする
	jQuery(function() {
		jQuery('.your-time1 select option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('.your-time2 select option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('.your-time3 select option:first-of-type').prop('disabled', 'true').css('display','none');
	});
	
	//【リニューアル】ご来店希望日の時間(selectタグ)の最初のoptionタグを選択できないようにする
	jQuery(function() {
		jQuery('select[name="select"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_age"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_zodiac"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_1"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_2"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_3"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_4"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_5"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_6"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_7"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_8"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_9"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_10"] option:first-of-type').prop('disabled', 'true').css('display','none');
		jQuery('select[name="select_11"] option:first-of-type').prop('disabled', 'true').css('display','none');
	});
	
	//セレクト要素の値が変更されたとき、色を変更する
	jQuery(function() {
		jQuery("select").change(function() {
			jQuery(this).css('color','#333');
			jQuery(this).css('opacity','1');
		});
	});

	//日付(date)要素の値が変更されたとき、色を変更する
	jQuery(function() {
		jQuery('input[type="date"]').change(function() {
			jQuery(this).css('color','#333');
		});
	});

	//【リニューアル】メールアドレス入力欄をクリックすると、注意事項を表示させる。
	jQuery('input[type="email"]').focus(function() {
		jQuery('.email-notice').css('display', 'block');
	});
	
	//フォームのカレンダーが表示されるinputにフォーカスしたときに、キーボードを表示させない
	jQuery('input[name="your-date1"],input[name="your-date2"],input[name="your-date3"],input[name="your-date4"]').click(function(){
		jQuery('input[name="your-date1"],input[name="your-date2"],input[name="your-date3"],input[name="your-date4"]').blur();
	});
	
	//パートナー診断の来店質問で「今すぐ」or「1週間後」にチェックしたとき、指定箇所にページ内スクロール＆CSS変更
	jQuery(function(){
		jQuery('input[name="your-answer20"]').change(function() {
			if (jQuery('input[name="your-answer20"]:checked').val() == '今すぐ' || jQuery('input[name="your-answer20"]:checked').val() == '1週間後'){
	/*
			// value値取得
			var val = jQuery(this).val();
			// コンソールログで確認
			console.log(val);
	
			// 指定のクラス-20pxの位置までページ内スクロール
			var p = jQuery(".mw_wp_form_business .coming-box").offset().top;
			jQuery('html,body').animate({ scrollTop: p-20 }, 'slow');
	*/
			jQuery('.mw_wp_form_business .coming-box').addClass('notice');
			return false;
			} else{
			jQuery('.mw_wp_form_business .coming-box').removeClass('notice');
			}
		});
	});
	
	//【リニューアル】伸縮するテキストエリア */
	jQuery(function(){
		jQuery('.wpcf7 span[data-name="FlexTextarea"]').prepend('<div class="FlexTextarea__dummy" aria-hidden="true"></div>'); //対象要素内の先頭に要素を追加
	
		function flexTextarea(el) {
		const dummy = el.querySelector('.FlexTextarea__dummy')
		el.querySelector('.FlexTextarea__textarea').addEventListener('input', e => {
			dummy.textContent = e.target.value + '\u200b'
		})
		}
		document.querySelectorAll('span[data-name="FlexTextarea"]').forEach(flexTextarea)
	});
	
	// 同意するチェックボックスにチェックが入ったとき
	jQuery('input[type=checkbox].agreement_wp').change(function() {
		if(jQuery(this).prop('checked')){
			$(this).parent().parent().parent().parent().parent().addClass("agreement");
		}else{
			$(this).parent().parent().parent().parent().parent().removeClass("agreement");
		}
	});
	
	//【リニューアル】戻るボタンを押すと、class（custom-wpcf7c-confirmed）削除
	jQuery(function(){
		jQuery('input.wpcf7c-btn-back[type="button"]').click(function() {
			jQuery('form').removeClass('custom-wpcf7c-confirmed');
	   });
	});
	
	//【リニューアル】確認するボタンを押すと、value値が空の特定要素にclass追加
	jQuery(function(){
		jQuery('input.wpcf7c-btn-confirm[type="submit"]').click(function() {
			let date1 = $('input[name="txt_other"]').val();
			if(date1 == null || date1 == '' ){
				jQuery('input[name="txt_other"]').addClass('transparent');
			}
			let date2 = $('input[name="date"]').val();
			if(date2 == null || date2 == '' ){
				jQuery('input[name="date"]').addClass('transparent');
			}
			let date3 = $('select[name="select"]').val();
			if(date3 == null || date3 == '' ){
				jQuery('select[name="select"]').addClass('transparent');
			}
		});
	});
	
	// フォームの日付カレンダーで水曜日を選択するとアラートを出す
	jQuery(function(){
		if(jQuery('input#date_limit').length) { //特定の要素(input#date_limit)が存在するかどうかを判別
			document.querySelector('#date_limit').addEventListener('change', () => {
				let elem = document.querySelector('#date_limit');
				let date = new Date(elem.value);
				let dayOfWeek = date.getDay()
				if (dayOfWeek === 3) { // 複数曜日なら、|| を使って併記していく
					alert("水曜日は休業日となります。選択しなおしてください。");
					elem.value = "";
				}
			});
		}
	});

	// 【リニューアル】 郵便番号から住所の自動入力
	jQuery(function($){
		if(jQuery('input[name="txt_number"]').length) { //特定の要素(input[name="txt_number"])が存在するかどうかを判別
			$.getScript("https://ajaxzip3.github.io/ajaxzip3.js");
			$('.btn_address').click(function() {
				AjaxZip3.zip2addr('txt_number', '', 'txt_prefectures', 'txt_address');
			});
		}
	});
























	
	/*
	jQuery(function($) {
		$('input[name="date"]').datepicker({
		  beforeShowDay: function(date) {
			// 日曜日
			if (date.getDay() == 0) {
			  return [false, ''];
		  }
			// 水曜日
			if (date.getDay() == 3) {
				return [false, ''];
			}
			// 土曜日
			if (date.getDay() == 6) {
			  return [false, ''];
		  }
			return [true, ''];
		  }
		});
	});
	*/
	
	
	
	
	});