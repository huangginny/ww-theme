/**
 * Scroll to resize header
 */
window.onscroll = function() {
 	var customLogoLinks = document.getElementsByClassName("custom-logo-link");
 	var logoImgs = document.getElementsByClassName("custom-logo");
 	if (customLogoLinks.length == 0 || logoImgs.length == 0) {
 		return;
 	}
 	var link = customLogoLinks[0];
 	var img = logoImgs[0]
 	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
 		// scrolled down
 		link.style.height = "4em";
 		img.style.height = "4em";
 		img.style.width = "10em";
 	} else {
 		// scrolled up
 		link.style.height = "100px";
 		img.style.height = "100px";
 		img.style.width = "250px";
 	}
};

/**
 * Front page carousel
 */
/*(function($){
    $(document).ready(function(){
        $('#carouselHomepage').on('slide.bs.carousel', function (e) {
			/*
				CC 2.0 License Iatek LLC 2018 - Attribution required
			/
			console.log('carousel on slide.bs.carousel');
			var $e = $(e.relatedTarget);
			var idx = $e.index();
			var itemsPerSlide = 5;
			var totalItems = $('.carousel-item').length;

			if (idx >= totalItems-(itemsPerSlide-1)) {
				var it = itemsPerSlide - (totalItems - idx);
				for (var i=0; i<it; i++) {
					// append slides to end
					if (e.direction=="left") {
						$('.carousel-item').eq(i).appendTo('.carousel-inner');
					} else {
						$('.carousel-item').eq(0).appendTo('.carousel-inner');
					}
				}
			}
		});
    });
})(jQuery);*/
