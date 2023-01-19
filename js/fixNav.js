/* ナビゲーションが、スクロール中は表示されず、止まったら表示される。
(function($){
	$(function() {
		$.util.fixNav();
	});

	$.util = {
		fixNav:function(){
			var $window = $(window),
			$document = $(document),
			timerId;

			$window.bind("scrollFinish", function (event, scrollTop) {
				if(scrollTop > 0){
					$('body').addClass('scrolled');
				}
			});

			$window.bind("scroll touchmove", function () {
				$('body').removeClass('scrolled');
				var scrollTop = $document.scrollTop();
				if (timerId) {
					clearTimeout(timerId);
				}

				timerId = setTimeout(function () {
					timerId = null;
					$window.trigger("scrollFinish", [scrollTop]);
				}, 1000);
			});

			$window.unload(function () {
				$window.unbind("scroll scrollFinish");
			});

			$window.scroll();
		},

	};
})(jQuery);
*/



/* ナビゲーションがページ上部から1pxを超えた場合に表示されて固定される。 */
(function($){
$(function() {
        $(function () {
            $(window).scroll(function () {

                if ($(this).scrollTop() > 1) {
                    $('body').addClass('scrolled');
                } else {
                    $('body').removeClass('scrolled');
                }
            });
        });
});
})(jQuery);