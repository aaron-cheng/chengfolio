$(document).ready(function(){
	//icons
	$('.projecticon').mouseenter(function(){
		$(this).fadeTo(100,0.5);
		$(this).siblings(".navprojecttxt").fadeTo(300,1);
	});
			
	$('.projecticon').mouseleave(function(){
		$(this).fadeTo(100,1);	
		$(this).siblings(".navprojecttxt").fadeTo(300,0);		
	});

	
	//home $ about me
	$('.navtxt').mouseenter(function(){
		$(this).fadeTo(200,0.5);
	});
			
	$('.navtxt').mouseleave(function(){
		$(this).fadeTo(200,1);			
	});
	
	

	
});



