$(document).ready(function(){
	//slideshow 		
			var speed = 5000;
			var active = $('#rotator .slideshowphoto:first');
			var activebutton=$('.dotbutton:first');
			var done = false;
			
			function startshow(){
			setTimeout(nextSlide,speed);
			activebutton.fadeTo(100,.5);
			$('.dotbutton').css("border-color","yellow");
			activebutton.css("border-color","rgb(255, 177, 0)");
			}
			
			startshow();
			
			function nextSlide()
			{
				if ( done ) return;
				next = (active.next().length > 0)? active.next(): $('#rotator .slideshowphoto:first');
				nextbutton = (activebutton.next().length > 0)? activebutton.next(): $('.dotbutton:first');
				active.fadeOut(1000);
				activebutton.fadeTo(100,1);	
				activebutton.css("border-color","yellow");
				next.fadeIn(1000);
				nextbutton.fadeTo(100,0.5);
				nextbutton.css("border-color","rgb(255, 177, 0)");
				active = next;
				activebutton=nextbutton;
				setTimeout(nextSlide, speed);
				
			}
			//button 
			$('.dotbutton').mouseenter(function(){
				$(this).fadeTo(100,0.5);	
				
			});
			
			$('.dotbutton').mouseleave(function(){
				if($(this).css('border-color') === 'rgb(255, 177, 0)'){ //jQuery color css method returns a rgb value!! 
				$(this).fadeTo(100,0.5);
				}else{
				$(this).fadeTo(100,1);
				}						 
			});
			
			$('#dotbutton1').click(function(){
				done = true;
				if($(this).css('border-color') !== 'rgb(255, 177, 0)'){
				active.fadeOut(1000);
				activebutton.fadeTo(100,1);
				activebutton.css("border-color","yellow");
				$("#dotbutton1").css("border-color","rgb(255, 177, 0)");
				$("#slideshowphoto1").fadeIn(1000);
				$("#dotbutton1").fadeTo(100,0.5);
				active = $("#slideshowphoto1");
				activebutton=$("#dotbutton1");
				}
			});
			
			$('#dotbutton2').click(function(){
				done = true;
				if($(this).css('border-color') !== 'rgb(255, 177, 0)'){
				$("#dotbutton2").css("border-color","rgb(255, 177, 0)");
				active.fadeOut(1000);
				activebutton.fadeTo(100,1);
				activebutton.css("border-color","yellow");
				$("#dotbutton2").css("border-color","rgb(255, 177, 0)");
				$("#slideshowphoto2").fadeIn(1000);
				$("#dotbutton2").fadeTo(100,0.5);
				active = $("#slideshowphoto2");
				activebutton=$("#dotbutton2");
				}
			});
			
			$('#dotbutton3').click(function(){
				done = true;
				if($(this).css('border-color') !== 'rgb(255, 177, 0)'){
				$("#dotbutton3").css("border-color","rgb(255, 177, 0)");
				active.fadeOut(1000);
				activebutton.fadeTo(100,1);
				activebutton.css("border-color","yellow");
				$("#dotbutton3").css("border-color","rgb(255, 177, 0)");
				$("#slideshowphoto3").fadeIn(1000);
				$("#dotbutton3").fadeTo(100,0.5);
				active = $("#slideshowphoto3");
				activebutton=$("#dotbutton3");
				}
			});
	//slideshow end

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
	//click
	$('.slideshowphoto').mouseenter(function(){
		$(this).find(".clickproject").fadeIn(400);
	});
			
	$('.slideshowphoto').mouseleave(function(){
		$(this).find(".clickproject").fadeOut(400);			
	});
		
	
			
	
});