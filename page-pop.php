<?php
/*
Template Name: ポップテスト
*/

get_header();


?>


<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/syalert/syalert.min.css" />

<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/syalert/syalert.min.js"></script>
  
<style>

.sy-close{text-align:left;}

.sy-close a{width:35px;height:35px;display:inline-block;z-index:99999;position:relative;top:20px;}

.sy-alert .sy-content{background:#74bdd0;padding:30px;font-size:16px;color:#fff;}

.sy-logo img{width:200px;max-width:200px;}

.sy-tit{padding:20px 0px;color:#fff;font-size:16px;border-bottom:1px solid #fff;width:90%;margin:0 auto;}

.sy-tit2{padding:20px 0px;color:#fff;font-size:16px;}


.sy-alert .sy-date{font-size:35px;padding-bottom:20px;border-bottom:1px solid #fff;width:90%;margin:0 auto;}

.sy-alert .sy-content{padding:20px 0px;line-height:130%;}

.sy-button{width:35px;height:35px;line-height:35px;border:0px;font-size:20px;}

.sy-button:hover{cursor:pointer;}


@media screen and (max-width: 768px) {

.sy-alert .sy-tit {padding:20px;}
.sy-alert .sy-content{padding:20px;font-size:14px;}

#alert2{top:50%;}


}

</style> 






<script>
	$(document).ready(function() {

		syalert.syopen('alert2');	
	
	});
	
	function closeAlert(id){
		syalert.syhide(id);	
	}
	
</script>
  
  

<?php
	
	$holiday = get_option('holiday');
	
	if(time() > strtotime($holiday['200']) ){
?>


<div class="sy-alert sy-alert-alert animated" sy-enter="zoomIn" sy-leave="zoomOut" sy-type="alert" sy-mask="true" id="alert2">

	<div class="sy-close">
		
		<a href="javascript:;" onClick="closeAlert('alert2')" class="sy-button">
		
			<img src="<?= get_template_directory_uri(); ?>/images/maru.png" alt="" width="35" />
	
		</a>
		
	</div>
	
  <div class="sy-content">
  
		<div class="sy-logo">
			<img src="<?php echo get_template_directory_uri() ?>/images/frontpage/logo.png" />
		</div>
		
		<?php
		
		
		if($holiday['500']){
			
			$s_day = '(' . date('w', strtotime($holiday[100])) . ')';
			
			$e_day = '(' . date('w', strtotime($holiday[200])) . ')';
			
		}else{
			
			$s_day='';
			
			$e_day='';
			
		}
		
		
			$week = [
			  '日', //0
			  '月', //1
			  '火', //2
			  '水', //3
			  '木', //4
			  '金', //5
			  '土', //6
			];
 
			$start_time = substr( date('Y年m月d日',strtotime($holiday[100])) . $week[$s_day] . $s_day , 7);
		
			$end_time = substr( date('Y年m月d日',strtotime($holiday[200])) . $week[$s_day] . $e_day ,7 );

		?>
		
		<div class="sy-tit"><?php echo $holiday[0]; ?></div>

		<div class="sy-tit2"><?php echo $holiday[1] ?></div>

		<div class="sy-date"><?php echo $start_time; ?> - <?php echo $end_time; ?></div>

		<div class="sy-content">
		
		
		<?php echo nl2br($holiday[2]); ?>
	
		
		</div>
	
	
  </div>
  
  
</div>



<?php
	
	}

?>







<?php

get_footer();
?>
