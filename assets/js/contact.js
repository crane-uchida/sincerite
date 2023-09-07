var validate = function() {

	var flag = true;

	removeElementsByClass("error");
	removeClass("error-form");

	// お名前の入力をチェック
	if(document.form.name.value == ""){
		errorElement(document.form.name, "姓が入力されていません");
		flag = false;
	}
	// お名前の入力をチェック2
	if(document.form.name2.value == ""){
		errorElement(document.form.name2, "名が入力されていません");
		flag = false;
	}

	// フリガナの入力をチェック
	if(document.form.furigana.value == ""){
		errorElement(document.form.furigana, "フリガナ入力されていません");
        	flag = false;
	} //else {
		// フリガナの形式をチェック
		//if(!validateKana(document.form.furigana.value)){
			//errorElement(document.form.furigana, "カタカナ以外の文字が入っています");
      //      			flag = false;
		//}
	//}
	// フリガナの入力をチェック
	if(document.form.furigana2.value == ""){
		errorElement(document.form.furigana2, "フリガナ入力されていません");
        	flag = false;
	}// else {
		// フリガナの形式をチェック
		//if(!validateKana(document.form.furigana2.value)){
			//errorElement(document.form.furigana2, "カタカナ以外の文字が入っています");
      //      			flag = false;
		//}
	//}

	// メールアドレスの入力をチェック
	if(document.form.email.value == ""){
		errorElement(document.form.email, "メールアドレスが入力されていません");
		flag = false;
	} else {
		// メールアドレスの形式をチェック
		if(!validateMail(document.form.email.value)){
			errorElement(document.form.email, "メールアドレスが正しくありません");
			flag = false;
		}
	}
	// メールアドレスの入力をチェック2
	if(document.form.email2.value == ""){
		errorElement(document.form.email2, "メールアドレスが入力されていません");
		flag = false;
	} else {
		// メールアドレスの形式をチェック2
		if(!validateMail(document.form.email2.value)){
			errorElement(document.form.email2, "メールアドレスが正しくありません");
			flag = false;
		}
	}

	// 電話番号の入力をチェック
	if(document.form.tel.value == ""){
		errorElement(document.form.tel, "入力されていません");
		flag = false;
	} else {
		// 電話番号の形式をチェック
		if(!validateNumber(document.form.tel.value)){
			errorElement(document.form.tel, "半角数字のみを入力してください");
			flag = false;
		}
	}
	// 電話番号の入力をチェック2
	if(document.form.tel2.value == ""){
		errorElement(document.form.tel2, "入力されていません");
		flag = false;
	} else {
		// 電話番号の形式をチェック2
		if(!validateNumber(document.form.tel2.value)){
			errorElement(document.form.tel2, "半角数字のみを入力してください");
			flag = false;
		}
	}
	// 電話番号の入力をチェック3
	if(document.form.tel3.value == ""){
		errorElement(document.form.tel3, "入力されていません");
		flag = false;
	} else {
		// 電話番号の形式をチェック3
		if(!validateNumber(document.form.tel3.value)){
			errorElement(document.form.tel3, "半角数字のみを入力してください");
			flag = false;
		}
	}


	// 郵便番号をチェック
	if(document.form.zip01.value == ""){
		errorElement(document.form.zip01, "郵便番号が入力されていません");
		flag = false;
	}
	// 住所をチェック1
	if(document.form.pref01.value == ""){
		errorElement(document.form.pref01, "住所が入力されていません");
		flag = false;
	}
	// 住所をチェック2
	if(document.form.addr01.value == ""){
		errorElement(document.form.addr01, "住所が入力されていません");
		flag = false;
	}
	// お問い合わせ内容の入力をチェック
	//if(document.form.content.value == ""){
		//errorElement(document.form.content, "お問い合わせ内容が入力されていません");
		//flag = false;
	//}

	return flag;
}



var errorElement = function(form, msg) {
	form.className = "error-form";
	var newElement = document.createElement("div");
	newElement.className = "error";
	var newText = document.createTextNode(msg);
	newElement.appendChild(newText);
	form.parentNode.insertBefore(newElement, form.nextSibling);
}


var removeElementsByClass = function(className){
	var elements = document.getElementsByClassName(className);
	while (elements.length > 0){ 
		elements[0].parentNode.removeChild(elements[0]);
	}
}

var removeClass = function(className){
	var elements = document.getElementsByClassName(className);
	while (elements.length > 0) {
		elements[0].className = "";
	}
}

var validateMail = function (val){
	if (val.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)==null) {
		return false;
	} else {
		return true;
	}
}


var validateNumber = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}


var validateTel = function (val){
	if (val.match(/^[0-9-]{6,13}$/) == null) {
		return false;
	} else {
		return true;
	}
}


var validateKana = function (val){
	if (val.match(/^[ァ-ン]+$/) == null) {
		return false;
	} else {
		return true;
	}
}


