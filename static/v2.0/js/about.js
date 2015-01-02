$(document).ready(function(){
	

	
	//home $ about me
	$('.navtxt').mouseenter(function(){
		$(this).fadeTo(200,0.5);
	});
			
	$('.navtxt').mouseleave(function(){
		$(this).fadeTo(200,1);			
	});
	
	//icons
	$('.projecticon').mouseenter(function(){
		$(this).fadeTo(100,0.5);
		$(this).siblings(".navprojecttxt").fadeTo(300,1);
	});
			
	$('.projecticon').mouseleave(function(){
		$(this).fadeTo(100,1);	
		$(this).siblings(".navprojecttxt").fadeTo(300,0);		
	});
	
	//social icons
	$('.socialicon').mouseenter(function(){
		$(this).fadeTo(100,0.5);
		$(this).siblings(".socialname").fadeTo(300,1);
	});
			
	$('.socialicon').mouseleave(function(){
		$(this).fadeTo(100,1);	
		$(this).siblings(".socialname").fadeTo(300,0);		
	});
	
	//scroll animate
	$(".iconcontainer1").click(function(){
	$('html,body').animate({scrollTop: 0},'slow');
	});
	$(".iconcontainer2").click(function(){
	$('html,body').animate({scrollTop: $("#philosophy").offset().top},'slow');
	});
	$(".iconcontainer3").click(function(){
	$('html,body').animate({scrollTop: $("#resume").offset().top},'slow');
	});
	$(".iconcontainer4").click(function(){
	$('html,body').animate({scrollTop: $("#contact").offset().top},'slow');
	});
	
});