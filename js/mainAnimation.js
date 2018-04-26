function EasyPeasyParallax() {
	scrollPos = $(this).scrollTop();
	
	if(scrollPos > 160){
		$('.navbar-fixed-top').addClass('scroll-navbar');
		$('.navbrand-image').addClass('scroll-brand');
		}
		else{
			$('.navbar-fixed-top').removeClass('scroll-navbar');
		$('.navbrand-image').removeClass('scroll-brand');
			}
	
}
$(document).ready(function(){
	$(window).scroll(function() {
		EasyPeasyParallax();
	});
});