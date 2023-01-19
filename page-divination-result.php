<?php
/*
Template Name: 結婚占い結果
*/


session_start();


get_header('divination');
?>

<main id="divination" class="result">
<div class="l-container">
  <div class="flower1"><img src="<?php echo get_template_directory_uri() ?>/images/divination/flower1.gif" alt="花"></div>
  <div class="ttlBox ta_c">
    <p class="ask fs18">貴女の未来の<br class="br-sp">結婚相手の職業は…？</p>
    <h1 class="mainTtl">結婚占い</h1>
  </div>

  <p class="ta_c fs18">ご回答ありがとうございました。</p>
  <p class="txt2 ta_c lh15">貴女にふさわしい<br>結婚相手は</p>
  <div class="vertical ellipsis fw_b">・・・</div>




<?php
// セッションに保存された値と一致する場合は正常なリクエストとして処理を行います
if (isset($_POST["csrf_token"]) && $_POST["csrf_token"] === $_SESSION['csrf_token']) {

	$divination = get_option('divination');

	$post_id = $divination[$_POST['birth_number']][$_POST['card_number']];


	$args = array(
		'post_type' => get_post_types(),
		'numberposts' => 1,
		'post__in' => array($post_id)
	);

	$posts = get_posts($args);


	foreach ($posts as $k=>$v){


		/*
			代表写真　get_the_post_thumbnail( $v->ID, 'full' );
			タイトル　get_the_title($v->ID)

			$custom_fields['title1'][0]
			$custom_fields['title2'][0]
			$custom_fields['content1'][0]
			$custom_fields['content2'][0]

			$file1
			$file2
			$file3
			$file4
			$file5

		*/


		echo '<div class="mv">'.get_the_post_thumbnail( $v->ID, 'full' ).'</div>';

		echo '<h2 class="ta_c fs30">'.get_the_title($v->ID).'です！</h2>';

	echo '<div class="wBox mb20">';

	get_template_part( 'inc/sns' );

	echo '</div>';


		$custom_fields = get_post_custom($v->ID);


		$file1 = get_field( 'file1', $v->ID );


		$file2 = get_field( 'file2', $v->ID );
		$file3 = get_field( 'file3', $v->ID );
		$file4 = get_field( 'file4', $v->ID );
		$file5 = get_field( 'file5', $v->ID );
    $file6 = get_field( 'file6', $v->ID );
    $file7 = get_field( 'file7', $v->ID );
    $file8 = get_field( 'file8', $v->ID );
    $file9 = get_field( 'file9', $v->ID );


		echo '<div class="content">';

		if($file1){
			echo '<div class="image"><img src="'.$file1.'" alt="" /></div>';
		}

		echo '<h3 class="fw_b">'.$custom_fields['title1'][0].'</h3>';

		if($file2){
			echo '<div class="image"><img src="'.$file2.'" alt="" /></div>';
		}

		echo '<p class="fs18">'.$custom_fields['content1'][0].'</p>';

		if($file3){
			echo '<div class="image"><img src="'.$file3.'" alt="" /></div>';
		}

		echo '<h3 class="fw_b">'.$custom_fields['title2'][0].'</h3>';

		if($file4){
			echo '<div class="image"><img src="'.$file4.'" alt="" /></div>';
		}

		echo '<p class="fs18">'.$custom_fields['content2'][0].'</p>';

		if($file5){
			echo '<div class="image"><img src="'.$file5.'" alt="" /></div>';
		}

    echo '<h3 class="fw_b">'.$custom_fields['title3'][0].'</h3>';

    if($file6){
      echo '<div class="image"><img src="'.$file6.'" alt="" /></div>';
    }

    echo '<p class="fs18">'.$custom_fields['content3'][0].'</p>';

    if($file7){
      echo '<div class="image"><img src="'.$file7.'" alt="" /></div>';
    }

    echo '<h3 class="fw_b">'.$custom_fields['title4'][0].'</h3>';

    if($file8){
      echo '<div class="image"><img src="'.$file8.'" alt="" /></div>';
    }

    echo '<p class="fs18">'.$custom_fields['content4'][0].'</p>';

    if($file9){
      echo '<div class="image"><img src="'.$file9.'" alt="" /></div>';
    }

		echo '</div>';


	}




//外部のフォームの場合に処理しない
}else {


	header('Location: /kekkon-uranai');
	exit;


}

?>

<div class="wBox mb50">
  <?php get_template_part( 'inc/sns' );?>
</div>


<div class="supervise ta_c">
  <div class="name">〈占い監修〉十田リコ</div>
  <p class="biography">京都在住の占い師・ライター。<br>心理学をベースにした女性向けの恋愛コラムや、<br class="br-sp-small">心理テストなどをこれまでに多数手掛けている。<br class="br-sp-small">ミュージシャンや写真家としての顔も持つ。</p>
</div>


</div>
</main>


<?php
get_footer('divination'); ?>
