
$(document).ready(function() {
	// WOW Plugin Trigger
	new WOW().init();
	
	// Fixed Navbar Code
	var aboveHeight = $('.header-contents').outerHeight();
	$(window).scroll(function(){
		if ($(window).scrollTop() > aboveHeight){
			$('.header-wrapper').addClass('fixed').css('top','0').next().css('padding-top','60px');
		} else {
			$('.header-wrapper').removeClass('fixed').next().css('padding-top','0');
		}
		if ($(window).scrollTop() > 300){
			$('.top-arrow').addClass('show');
		} else {
			$('.top-arrow').removeClass('show');
		}
	});
	
	// Business Page Buttons Hover Effect
	$(".pillars a, .hover-span").hover(function() {
		$(this).addClass("s");
		$(".s span").fadeIn(300);
	},
	function () {
		$(".s span").fadeOut(300);
		$(".s").removeClass("s");
	}
	);
	
	// Arrow Code
	$(".top-arrow").click(function() {
		//$("body").animate({scrollTop:0}, 1000);
		var divPosition = $('.main-contents').offset();
		$('html, body').animate({scrollTop: divPosition.top}, "slow");
		return false;
	});
	
	// Business Page Jquery Animation
	$(".pillars a").click(function() {
		var id = this.id;
		var divPosition = $('.'+id).offset();
		$('html, body').animate({scrollTop: divPosition.top}, "slow");
		return false;	
	});
	
	// Lightbox Plugin Code
	$(".lightbox-content").fadeOut();
	
	$(".lightbox").click(function() {
		var target = this.id;
		$(".layover").fadeIn().css("display","block !important");
		$("." + target).fadeIn().css("display","block !important");
		return false;
	}); 
	
	$(".layover, .remove").click(function() {
		$(".lightbox-content").fadeOut();
		$(".layover").fadeOut();
		return false;	
	});
});