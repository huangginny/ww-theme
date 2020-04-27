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
}