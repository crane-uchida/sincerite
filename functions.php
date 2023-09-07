<?php
add_filter('xmlrpc_enabled', false);

add_theme_support('post-thumbnails');

function replaceImagePath($arg) {
	$content = str_replace('"images/', '"' . get_template_directory_uri() . '/images/', $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');

function my_excerpt_more($post) {
	return '<a href="'. get_permalink($post->ID) . '">' . '…続きを読む' . '</a>';
}
add_filter('excerpt_more', 'my_excerpt_more');



add_theme_support('menus');

/*カスタムメニューのIDやクラスを簡略化*/
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    $newArray = is_array($var) ? array_intersect($var, array('current-menu-item')) : array();
    array_push($newArray, 'menu-single');
    return $newArray;
}



add_filter('nav_menu_item_id', 'my_css_id_filter', 100, 1);

function my_css_id_filter($var) {
    return '';
}





//add_action('admin_init', 'hide_editor' );
//
//function hide_editor() {
//    // Get the Post ID.
//    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
//    if( !isset( $post_id ) ) return;

//    // Hide the editor on the page titled 'MyCustom'

//    $homepgname = get_the_title($post_id);
//    if($homepgname == 'MyCustom'){
//        remove_post_type_support('page', 'editor');
//    }
//    // Hide the editor on a page with a specific page template
//    // Get the name of the Page Template file.
//    $template_file = get_post_meta($post_id, '_wp_page_template', true);

//    if($template_file == 'page-custom.php'){ // the filename of the page template
//        remove_post_type_support('page', 'editor');
//    }

//}







function my_enqueue( $hook ) {
    if ('post.php' !== $hook && 'post-new.php' !== $hook) {
        return;
    }
    wp_enqueue_script( 'my_custom_script', get_template_directory_uri() . '/scripts/admin-script.js' );
}

add_action('admin_enqueue_scripts', 'my_enqueue');




//固定ページではビジュアルエディタを利用できないようにする
function disable_visual_editor_in_page(){
  global $typenow;
  if( $typenow == 'page' ){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter(){
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );

//ページネーション
function responsive_pagination($pages = '', $range = 4){
	$showitems = ($range * 2)+1;

	global $paged;
	if(empty($paged)) $paged = 1;

	//ページ情報取得
	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}

	if(1 != $pages) {
		echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
		echo '<li class="allpage"><span>Page '.$paged.' of '.$pages.'</span></li>';
		if($paged > 1) {
		    //先頭へ
		    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
		    //1つ戻る
		    echo '<a href="'.get_pagenum_link($paged - 1).'" class="pagination-link prev"><img src="/wp-content/themes/sincerite/images_new/common/pagi-arw.svg" width="32" height="32" loading="lazy" alt="arrow left"
                class="img-fluid"></a></li>';
		}

		//番号つきページ送りボタン
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? '<a class="pagination-link active">'.$i.'</a>':'<a href="'.get_pagenum_link($i).'" class="pagination-link">'.$i.'</a>';
			}
		}

		//1つ進む
		if ($paged < $pages)  {
			echo '<a href="'.get_pagenum_link($paged + 1).'" class="pagination-link next"><img src="/wp-content/themes/sincerite/images_new/common/pagi-arw.svg" width="32" height="32" loading="lazy" alt="arrow left"
                class="img-fluid"></a>';
			echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
		}
		 echo '</ul>';
	}
}

/**
 * mwform_admin_mail add ip
 */
add_filter( 'mwform_admin_mail_mw-wp-form-288', 'my_admin_mail' );
add_filter( 'mwform_admin_mail_mw-wp-form-408', 'my_admin_mail' );
add_filter( 'mwform_admin_mail_mw-wp-form-425', 'my_admin_mail' );
add_filter( 'mwform_admin_mail_mw-wp-form-432', 'my_admin_mail' );
add_filter( 'mwform_admin_mail_mw-wp-form-437', 'my_admin_mail' );
add_filter( 'mwform_admin_mail_mw-wp-form-442', 'my_admin_mail' );
function my_admin_mail( $Mail ) {
$Browser = $_SERVER["HTTP_USER_AGENT"];
$Ip = $_SERVER["REMOTE_ADDR"];
$Host = gethostbyaddr($Ip);
$Mail->body .= "\n\n--------------------\n【送信者情報】\n・ブラウザー：" .$Browser. "\n・送信元IPアドレス：" .$Ip. "\n・送信元ホスト名：" .$Host;
return $Mail;
}

function SearchFilter($query) {
 if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
  $query->set( 'post_type', 'post' );
 }
}

add_action( 'pre_get_posts','SearchFilter' );

 //blog sidebar
if ( function_exists('register_sidebar') ) {
    register_sidebar();
}




// 抜粋の文末に表示される文字列を変更する。デフォルトは […]が表示される。
// カスタム投稿タイプ「コラム」の時とそれ以外で条件分岐させている。
function new_excerpt_more($post) {
	if ( is_post_type_archive('column')) {
		return '...<a class="readmore" href="'. get_permalink($post->ID) . '">' . '>続きを読む' . '</a>';
	} else {
		return '<a href="'. get_permalink($post->ID) . '">' . '...続きを読む' . '</a>';
	}
}
add_filter('excerpt_more', 'new_excerpt_more');


// 抜粋する文字数を変更する。「WP Multibyte Patch」を有効化した時のデフォルトの抜粋文字数は110文字である。
// カスタム投稿タイプ「コラム」のときとそれ以外で条件分岐させている。
function change_excerpt_mblength($length) {
	if ( is_post_type_archive('column')) {
		return 110;
	} else {
		return 40;
	}
}
add_filter('excerpt_mblength', 'change_excerpt_mblength');





//2021/05/13 　　占いフィルター追加

add_action('admin_menu', 'custom_menu_page');
function custom_menu_page()
{
    add_menu_page('占い設定', '占い設定', 'manage_options', 'custom_menu_page', 'add_custom_menu_page', '
  dashicons-admin-generic', 4);
    add_action('admin_init', 'register_custom_setting');
}


function add_custom_menu_page()
{
    ?>
<style>
.postbox{padding:15px;}
.inside{border-collapse:collapse;}
.inside td{padding:10px;border:1px solid #ddd;}
</style>


<div class="wrap">
  <h2>占い設定</h2>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
    settings_fields('custom-menu-group');
    do_settings_sections('custom-menu-group');

	$divination = get_option('divination');

	?>

    <div class="metabox-holder">

	<h3>年度設定</h3>

	<div class="postbox ">

		<table cellpadding="0" cellspacing="0" width="100%" class="inside">
		<tr>
			<td bgcolor="#eee" width="200">開始年度</td>
			<td>
				<input type="text"  name="divination[100]" value="<?php echo $divination[100] ?>" />&nbsp;年
				&nbsp;&nbsp;~&nbsp;&nbsp;
				<input type="text"  name="divination[200]" value="<?php echo $divination[200] ?>" />&nbsp;年

			</td>

		</tr>
		</table>

	</div>


	<h3>結果設定</h3>

	<div class="postbox ">


		<table cellpadding="0" cellspacing="0" width="100%" class="inside">

		<?php
			for($i=1;$i<=3;$i++){
		?>
		<tr>
			<td bgcolor="#eee" width="150">[1,3,5,8]の結果 <?php echo $i;?></td>
			<td>
				<?php
					$args = array(
						'numberposts' => -1,
						'post_type' => 'occupation' // カスタム投稿タイプを指定
					);
					$customPosts = get_posts($args);

					if($customPosts) :

					foreach($customPosts as $post){

						if($divination[1358][$i] == $post->ID ){$checked='checked';}else{$checked='';}

						echo '<label><input type="radio" name="divination[1358]['.$i.']" '.$checked.' value="'.$post->ID.'"/>'.$post->post_title.'</label>';

					}

				endif;

				?>

			</td>
		</tr>
		<?php
			}
		?>




		<?php
			for($i=1;$i<=3;$i++){
		?>
		<tr>
			<td bgcolor="#eee" width="150">[2,4,6,9]の結果 <?php echo $i;?></td>
			<td>
				<?php

					if($customPosts) :

					foreach($customPosts as $post){

						if($divination[2469][$i] == $post->ID ){$checked='checked';}else{$checked='';}

						echo '<label><input type="radio" name="divination[2469]['.$i.']" '.$checked.' value="'.$post->ID.'"/>'.$post->post_title.'</label>';

					}

					endif;

				?>

			</td>
		</tr>
		<?php
			}
		?>





		<?php
			for($i=1;$i<=3;$i++){
		?>
		<tr>
			<td bgcolor="#eee" width="150">[7,11,22,33]の結果 <?php echo $i;?></td>
			<td>
				<?php

					if($customPosts) :

					foreach($customPosts as $post){

						if($divination[7][$i] == $post->ID ){$checked='checked';}else{$checked='';}

						echo '<label><input type="radio" name="divination[7]['.$i.']" '.$checked.' value="'.$post->ID.'"/>'.$post->post_title.'</label>';

					}

					endif;

				?>

			</td>
		</tr>
		<?php
			}
		?>



		<tr>
			<td bgcolor="#eee">エラーの場合</td>
			<td><textarea style="width:100%;height:100px;" name="divination[0]"><?php echo $divination[0]; ?></textarea></td>

		</tr>
		</table>


	</div>


    </div>

    <?php submit_button(); ?>
  </form>
</div>
<?php
}



function register_custom_setting()
{
	//
	register_setting('custom-menu-group', 'divination');

}




//占い計算
function get_divination($year,$month,$day){

	//return data
	$rdata  = array();


	$result=0;

	$nyear = str_split($year,1);

	$nmonth = str_split($month,1);

	$nday = str_split($day,1);


	foreach($nyear as $k=>$v){

		$result+=$v;

	}


	foreach($nmonth as $k=>$v){

		$result+=$v;

	}


	foreach($nday as $k=>$v){

		$result+=$v;

	}


	if( $result == 11 || $result == 22 || $result == 33 || $result == 44 || $result == 55 || $result == 66 || $result == 77 || $result == 88 || $result == 99 ){

		$rdata[0]='7';
		$rdata[1]=$result;
		return $rdata;

	}else{

		$new_num=0;


		$new_result = str_split($result,1);

		foreach($new_result as $k=>$v){

			$new_num+=$v;

		}


		//
		if($new_num >= 10){

			$new_num2=0;

			$new_result2 = str_split($new_num,1);

			foreach($new_result2 as $k=>$v){

				$new_num2+=$v;

			}

			$new_num = $new_num2;

		}




		if($new_num == 7 || $new_num == 11 || $new_num == 22 || $new_num == 33 || $new_num == 44 || $new_num == 55 || $new_num == 66 || $new_num == 77 || $new_num == 88 || $new_num == 99 ){

			$rdata[0]='7';
			$rdata[1]=$new_num;

			//「７，１１，２２，３３」の人はコチラ
			return $rdata;


		}else if($new_num == 1 || $new_num == 3 || $new_num == 5 || $new_num == 8){

			$rdata[0]='1358';
			$rdata[1]=$new_num;

			//「７，１１，２２，３３」の人はコチラ
			return $rdata;


		}else if($new_num == 2 || $new_num == 4 || $new_num == 6 || $new_num == 9){


			$rdata[0]='2469';
			$rdata[1]=$new_num;

			return $rdata;

		}else{

			return '0';

		}



	}


}







//職業追加  add post_type
function occupation_post_type()
{
    $labels = array(
            'name' => '職業追加',
            'singular_name' => 'occupation',
            'add_new' => '新規追加',
            'add_new_item' => '',
            'edit_item' => '',
            'new_item' => '',
            'view_item' => '',
            'search_items' => '',
            'not_found' => '',
            'not_found_in_trash' => '',
            'parent_item_colon' => '',
            'menu_name' => '職業一覧',
    );
    $args = array(
            'labels' => $labels,
            'description' => '',
			'menu_icon'     => 'dashicons-businessman', // このメニューで使用するアイコンの指定
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'except', 'custom-fields', 'comments', 'revisions'),
            'has_archive' => true,
            'taxonomies' => array('category', 'post_tag'),//支持的分类法
    );
    register_post_type('occupation', $args);
}

add_action('init', 'occupation_post_type');


global $wp_rewrite;
$wp_rewrite->flush_rules();






//ユーザー情報追加  add post_type
function userinfo_post_type()
{
    $labels = array(
            'name' => '顧客追加',
            'singular_name' => 'client',
            'add_new' => '新規追加',
            'add_new_item' => '',
            'edit_item' => '',
            'new_item' => '',
            'view_item' => '',
            'search_items' => '',
            'not_found' => '',
            'not_found_in_trash' => '',
            'parent_item_colon' => '',
            'menu_name' => '顧客一覧',
    );
    $args = array(
            'labels' => $labels,
            'description' => '',
			'menu_icon'     => 'dashicons-welcome-write-blog', // このメニューで使用するアイコンの指定
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'except', 'custom-fields', 'comments', 'revisions'),
            'has_archive' => true,
            'taxonomies' => array('category', 'post_tag'),//支持的分类法
    );
    register_post_type('client', $args);
}

add_action('init', 'userinfo_post_type');


global $wp_rewrite;
$wp_rewrite->flush_rules();








add_action('admin_menu', 'holiday_menu_page');
function holiday_menu_page()
{
    add_menu_page('休業設定', '休業設定', 'manage_options', 'holiday_menu_page', 'holiday_custom_menu_page', '
  dashicons-admin-generic', 4);
    add_action('admin_init', 'register_holiday_setting');
}




function register_holiday_setting()
{
	//
	register_setting('custom-menu-group', 'holiday');

}




function holiday_custom_menu_page()
{
?>
<style>
.postbox{padding:15px;}
.inside{border-collapse:collapse;}
.inside td{padding:10px;border:1px solid #ddd;}
</style>


<div class="wrap">
  <h2>休業設定</h2>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
    settings_fields('custom-menu-group');
    do_settings_sections('custom-menu-group');

	$holiday = get_option('holiday');

	?>

    <div class="metabox-holder">

	<h3>休業設定</h3>
	<div class="postbox ">

		<table cellpadding="0" cellspacing="0" width="100%" class="inside">

		<tr>
			<td bgcolor="#eee">ポップ表示</td>
			<td>
				<label>
					<input type="checkbox"  name="holiday[300]" value="1"  <?php if($holiday[300]){ echo 'checked'; }?>  />&nbsp;
					チェック外すと画面に表示されないです。
				</label>
			</td>
		</tr>

		<tr>
			<td bgcolor="#eee">タイトル</td>
			<td>
				<textarea style="width:100%;height:100px;" name="holiday[0]"><?php echo $holiday[0]; ?></textarea>
			</td>
		</tr>

		<tr>
			<td bgcolor="#eee">期間名</td>
			<td>
				<input type="text"  name="holiday[1]"  value="<?php echo $holiday[1] ?>" style="width:100%;" />
			</td>
		</tr>

		<tr>
			<td bgcolor="#eee" width="200">休業期間</td>
			<td>
				<input type="date"  name="holiday[100]" value="<?php echo $holiday[100] ?>" />&nbsp;
				&nbsp;&nbsp;~&nbsp;&nbsp;
				<input type="date"  name="holiday[200]" value="<?php echo $holiday[200] ?>" />&nbsp;


				&nbsp;&nbsp;
				<label>

					<input type="checkbox"  name="holiday[500]"  value="1"  <?php if($holiday[300]){ echo 'checked'; }?> />
					日付の曜日を表示する
				</label>

			</td>
		</tr>

		<tr>
			<td bgcolor="#eee">休業内容</td>
			<td>
				<textarea style="width:100%;height:100px;" name="holiday[2]"><?php echo $holiday[2]; ?></textarea>
			</td>
		</tr>
		</table>

	</div>

	</div>


    <?php submit_button(); ?>
  </form>
</div>
<?php
}






function my_wp_ajax_val() {

	echo '123123';
	
  die();
  
  exit;
  
}
add_action( 'wp_ajax_my_ajax_val', 'my_wp_ajax_val' );
add_action( 'wp_ajax_nopriv_my_ajax_val', 'my_wp_ajax_val' );





/* メディアにSVG画像をアップできるようにする */
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');




/* コンタクトフォームの生年月日セレクトボックスの選択肢を動的に設定する */
add_filter( 'wpcf7_form_tag_data_option', 'custom_select_values', 10, 3 );
function custom_select_values( $values, $options, $args ) {
	if ( in_array( 'select_yy', $options ) ) {
		// $values = range( 2022, 1960 );
		for($i=2023;$i>=1951;$i--){
			$values[] = $i.'年';
		}
	}else if ( in_array( 'select_mm', $options ) ) {
		for($i=1;$i<=12;$i++){
			$values[] = $i.'月';
		}
	}else if ( in_array( 'select_dd', $options ) ) {
		for($i=1;$i<=31;$i++){
			$values[] = $i.'日';
		}
	}
	return $values;
}



// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}


//php読み込み
function my_php_Include($params = array()) { 
extract(shortcode_atts(array('file' => 'default'), $params)); 
ob_start(); include(STYLESHEETPATH . "/parts/$file.php"); return
ob_get_clean(); } add_shortcode('call_php', 'my_php_Include');


//次へ前へclass追加
function add_prev_post_link_class($output) {
return str_replace('<a href=', '<a class="news-detail__arw -prev" href=', $output); 
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_next_post_link_class($output) {
return str_replace('<a href=', '<a class="news-detail__arw -next" href=', $output); 
}
add_filter( 'next_post_link', 'add_next_post_link_class' );


//アーカイブタイトルカスタム

add_filter( 'get_the_archive_title', function ($title) {
  if(is_category()){
    $title = single_cat_title('',false); //カテゴリー：を消す
  }elseif(is_tag()){
	  $title = single_tag_title('',false);  //タグ：を消す
  }elseif(is_date()){
	  $title = get_the_time('Y年n月');  //月：を消す
  };
 
  return $title;
});


function my_form_tag_filter($tag) {
  if (!is_array($tag)) {
    return $tag;
  }

  // ラジオボタンの場合
  if (isset($_GET['selected'])) {
    if ($tag['name'] === 'm_houhou') { // nameの値を指定
      // TODO: エラー処理を加えたほうがいい
      $tag['options'][] = 'default:' . $_GET['selected'];

    }
  }

  //チェックボックスの場合
  if (isset($_GET['checked'])) {
    if ($tag['name'] === 'your-checkbox') { // nameの値を指定
      // TODO: エラー処理を加えたほうがいい
      $tag['options'][] = 'default:' . $_GET['checked'];
    }
  }

  return $tag;
}

add_filter('wpcf7_form_tag', 'my_form_tag_filter', 10);
?>