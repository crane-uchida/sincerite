jQuery(function() {


$("[data-media]").on("click", function(e) {


    e.preventDefault();
    var $this = $(this);
    var videoUrl = $this.attr("data-media");
    var popup = $this.attr("href");


	var str_iframe = '<div class="media"><iframe width="100%" height="300" src="'+videoUrl+'"  frameborder="0" id="video_iframe"></iframe><span class="round_btn"></span></div>';

	$("#overlay").css('opacity',1);

    $("#overlay").css('background','rgba(0,0,0,.7)');

    $("#overlay").css('z-index','999999');

    $("#overlay").html(str_iframe);

	$this.closest(".media").addClass("show-popup");

});



$("#overlay").on("click", function(e) {


	$('#video_iframe').remove();

	$(".round_btn").hide();

	$("#overlay").css('opacity',0);

	$("#overlay").css('z-index','-1');


});






});
