// JavaScript Document

jQuery(function($){

	$(window).load(function () {
		$('#page_template').change(function(){
			var currentPage = $(this).val();
			if (currentPage === 'page-custom.php') {
				$('#postdivrich').css('display', 'none');
			} else {
				$('#postdivrich').css('display', 'block');
			}
		});
	});


} (jQuery));