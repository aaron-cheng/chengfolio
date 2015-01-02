$(document).ready(function(){	
	
	//Nav - desktop
	$(".navbar .menu-wrapper").mouseenter(function(){
		$(this).find(".menu").css("display","block");
	});
			
	$(".navbar .menu-wrapper").mouseleave(function(){
		$(this).find(".menu").css("display","none");		
	});
		
	//Nav list
	$(".navbar .menu-wrapper a").mouseenter(function(){
		$(this).css("color","#000");
		$(this).parents("li").css("background-color","#fff");
	});
			
	$(".navbar .menu-wrapper a").mouseleave(function(){
		$(this).css("color","#808a97");
		$(this).parents("li").css("background-color","#000");
	});
	//Menu mobile click anywhere to close menu
	$(".maskwrapper").on('tap', function(){
		$(".menu-mobile .work").css("display","none");
		$(".menu-mobile .me").css("display","none");
		$(".menu-mobile .more").css("display","none");
		$(".settingmenu").css("display","none");
		$(this).css("display","none");
	});
	//Menu mobile toggle - work
	$(".navbar .work img").on('tap', function(){
		$(".menu-mobile .me").css("display","none");
		$(".menu-mobile .more").css("display","none");
		if ($(".menu-mobile .work").css("display") == "none") {
			$(".menu-mobile .work").css("display","block");
			$(".maskwrapper").css("display","block");
		} else {
			$(".menu-mobile .work").css("display","none");
			$(".maskwrapper").css("display","none");
		}
	});
	
	//Menu mobile toggle - me
	$(".navbar .me img").on('tap', function(){
		$(".maskwrapper").css("display","block");
		$(".menu-mobile .work").css("display","none");
		$(".menu-mobile .more").css("display","none");
		if ($(".menu-mobile .me").css("display") == "none") {
			$(".menu-mobile .me").css("display","block");
			$(".maskwrapper").css("display","block");
		} else {
			$(".menu-mobile .me").css("display","none");
			$(".maskwrapper").css("display","none");
		}
	});
	
	//Menu mobile toggle - more
	$(".navbar .more img").on('tap', function(){
		$(".maskwrapper").css("display","block");
		$(".menu-mobile .work").css("display","none");
		$(".menu-mobile .me").css("display","none");
		if ($(".menu-mobile .more").css("display") == "none") {
			$(".menu-mobile .more").css("display","block");
			$(".maskwrapper").css("display","block");
		} else {
			$(".menu-mobile .more").css("display","none");
			$(".maskwrapper").css("display","none");
		}
	});
	
	//carousel stop cycling after clicked
	$( ".carousel-indicators li" ).click(function() {
		$('#slideshow').carousel({interval: false});
	});
	
	//social icons
	$('.socialicon').mouseenter(function(){
		$(this).fadeTo(100,0.5);
		$(this).siblings(".socialname").css("visibility","visible");
	});
			
	$('.socialicon').mouseleave(function(){
		$(this).fadeTo(100,1);	
		$(this).siblings(".socialname").css("visibility","hidden");		
	});
	
	//googlemap - url hash
	var hashVal = location.hash;
	if (hashVal == '#customizablemap') {
			$(".excontent").css("display","inline");			
			$(".setting").css("display","none");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
		} if (hashVal == '#satellitemap') {
			$(".excontent").css("display","inline");
			$(".setting").css("display","none");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
		} if (hashVal == '#about')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
		} if (hashVal == '#customlink')  {
			$(".excontent").css("display","inline");			
			$(".setting").css("display","none");
			$(".customlink").css("display","block");
			$(".dimension").css("display","none");
		} if (hashVal == '#screenshottools')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
			$('html,body').animate({scrollTop: $("#screenshottools").offset().top},'slow');
		} if (hashVal == '#hexcode')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$('html,body').animate({scrollTop: $("#hexcode").offset().top},'slow');
		}if (hashVal == '#embedcode')  {
			$(".excontent").css("display","none");
			$(".setting").css("display","block");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
			$('html,body').animate({scrollTop: $("#anchor-embedcode").offset().top},'slow');
		}
	
	//googlemap - setup dimension
	$( "#googlebtn" ).click(function() {
	  var width1 = $( "#pagewidth" ).val();
	  var width = parseInt(width1) + 250;
	  var height = $( "#pageheight" ).val();
	  if ($(".excontent").css("display") == "inline") {
			$(".excontent").css("width",width);
			$(".excontent").css("height",height);
		} else {
		
		}
	});
	
	//googlemap - custom link
	$( "#applylinkbtn" ).click(function() {
	  var customlink = $( "#input_customlink" ).val();
	  $(".excontent").attr('src', customlink);
	  $(".customlink").css("display","none");
	  $(".dimension").css("display","block");
	  $(".excontent").css("display","inline");
	  $(".setting").css("display","none");
	  //window.location.hash = '#food';
	});
	
	//googlemap menu - mobile
	$(".helpbtn").on('tap', function(){
		$(".maskwrapper").css("display","block");
		if ($(".settingmenu").css("display") == "none") {
			$(".settingmenu").css("display","block");
		} else {
			$(".settingmenu").css("display","none");
		}
	});
	
	//google menu - desktop
	$(".helpbtn").mouseenter(function(){
		$(".settingmenu").css("display","block");
	});
			
	$(".helpbtn").mouseleave(function(){
		$(".settingmenu").css("display","none");		
	});
	
	$(".settingmenu").mouseenter(function(){
		$(".settingmenu").css("display","block");
	});
	
	$(".settingmenu ul").mouseleave(function(){
		$(".settingmenu").css("display","none");		
	});
	
	//googlemap menu list
	$(".settingmenu a").mouseenter(function(){
		$(this).css("color","#000");
		$(this).parents("li").css("background-color","#fff");
	});
			
	$(".settingmenu a").mouseleave(function(){
		$(this).css("color","#808a97");
		$(this).parents("li").css("background-color","#000");
	});
	
	
	//googlemap menu toggle among maps
	$(".colorizr-btn").on('tap', function(){
		$(".excontent").css("display","inline");
		$(".setting").css("display","none");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
		$(".excontent").attr('src', "http://www.chengfolio.com/GoogleMapsColorizr/index.html");
	});
	
	$(".satellite-btn").on('tap', function(){
		$(".excontent").css("display","inline");
		$(".setting").css("display","none");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
		$(".excontent").attr('src', "https://maps.google.com/?ie=UTF8&t=h&z=6&output=embed");
	});
	
	$( ".customlink-btn" ).click(function() {
		$(".dimension").css("display","none");
		$(".customlink").css("display","block");
	});
	
	$(".help-btn").on('tap', function(){
		$(".excontent").css("display","none");
		$(".setting").css("display","block");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
	});
	
	$(".chengfolio-btn").on('tap', function(){
		window.location = 'index.html';
	});
	
	//googlemap menu list click to close the menu
	$(".settingmenu li").on('tap', function(){
		$(".settingmenu").css("display","none");
	});
	
	//googlemap close message
	$(".googlemapmsg .closeicon").on('tap', function(){
		$(".googlemapmsgcontents").css("display","none");
	});
	
	//googlemap message go to screenshottool
	$(".googlemapmsg #screengrabtool").on('tap', function(){
		$(".excontent").css("display","none");
		$(".setting").css("display","block");
		$('html,body').animate({scrollTop: $("#screenshottools").offset().top},'slow');
		$(".googlemapmsgcontents").css("display","none");
	});
	
	//googlemap go to embedcode
	$("#embedcode").on('tap', function(){
		$(".excontent").css("display","none");
		$(".setting").css("display","block");
		$('html,body').animate({scrollTop: $("#anchor-embedcode").offset().top},'slow');
	});
	
});