/**
 * Scroll to resize header
 */
window.onscroll = function() {
 	var customLogoLinks = document.getElementsByClassName("custom-logo-link");
 	var logoSvgs = document.getElementsByClassName("custom-logo");
	
 	if (customLogoLinks.length == 0 || logoSvgs.length == 0) {
 		return;
 	}
 	var link = customLogoLinks[0];
 	var svg = logoSvgs[0];
	if (svg.children.length == 0) {
		return;
	}
	var img = svg.children[0];
	
 	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
 		// scrolled down
 		link.style.height = "55px";
 		svg.style.height = "55px";
 		svg.style.width = "165px";
		img.style.height = "38px";
		img.style.width = "117px";
 	} else {
 		// scrolled up
 		link.style.height = "105px";
 		svg.style.height = "105px";
 		svg.style.width = "290px";
		img.style.height = "76px";
		img.style.width = "233px";
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
