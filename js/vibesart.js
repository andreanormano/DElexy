$(document).ready(function(){
	$('.vibesart').hide();
	$(".openVibesArt").click(function() {
				
				$(".vibesart").show();
				$(".vibesart").addClass('animated slideInLeft ').delay(3000).queue(function(next){
					$(".vibesart").addClass('animated slideOutUp').delay(1000).queue(function(next1){
						$(".vibesart").removeClass('animated slideInLeft slideOutUp');
						$(".vibesart").hide();
						next1();
					});
					next();
				});
		
	});
});