function initialize()
{
  var mapProp = {
    center: new google.maps.LatLng(54.32, 10.10),
    zoom:11,
    panControl:false,
    zoomControl:false,
    mapTypeControl:true,
    scaleControl:false,
    streetViewControl:false,
    overviewMapControl:false,
    rotateControl:false,  
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };
  map = new google.maps.Map(document.getElementById("map--satellite"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);



$(document).ready(function(){	
// toggle the sidebar's visibility animation
	$(".sidebar__btn--close").click(function(){
	    $(".sidebar--main").animate({left: '-280px'});
	    $("#left").animate({right: '-280px'});
	    // $("#left").animate({opacity: '0'});
	    setTimeout(function() { 
		    $("#left").css('display', 'none'); 
		}, 400);
	}); 

	$(".siderbar--logo").click(function(){
		$("#left").css('display', 'inline');
	    $(".sidebar--main").animate({left: '0px'},{queue: false});
	    $("#left").animate({right: '0px'},{queue: false});
	    $("#left").css('display', 'inline');
	}); 


///////////////////////////////////////////////////////
	$( "#menu-toggle" ).click(function() {

	  $("#map").css("right","100px");
	  //window.location.hash = '#food';
	});

	// googlemap - url hash
	var hashVal = location.hash;
	if (hashVal == '#customizablemap') {
			$("#map").css("display","inline");
			$("#map--satellite").css("display","none");
			$(".excontent").css("display","none");
			$("#left").css("display","block");
			$(".sidebar--main__premade-map-wrapper").css("display","block");
			$(".sidebar--main__customlink-wrapper").css("display","none");	
			$(".btn--customizablemap").css("color","#00b7eb");	
			$(".btn--satellitemap").css("color","#fff");	
			$(".btn--customlink").css("color","#fff");	
		} if (hashVal == '#satellitemap') {
			$("#map--satellite").css("display","inline");
			$("#map").css("display","none");
			$("#left").css("display","none");
			$(".sidebar--main__premade-map-wrapper").css("display","none");
			$(".customlink").css("display","none");
			$(".dimension").css("display","block");
			$(".sidebar--main__customlink-wrapper").css("display","none");
			$(".btn--customizablemap").css("color","#fff");	
			$(".btn--satellitemap").css("color","#00b7eb");	
			$(".btn--customlink").css("color","#fff");	
			google.maps.event.trigger(map, "resize");

		} if (hashVal == '#customlink')  {
			$("#left").css("display","none");
			$(".sidebar--main__customlink-wrapper").css("display","inline");
			$(".sidebar--main__premade-map-wrapper").css("display","none");
			$(".btn--customizablemap").css("color","#fff");	
			$(".btn--satellitemap").css("color","#fff");	
			$(".btn--customlink").css("color","#00b7eb");			
		}
	
	
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
	$(".btn--customizablemap").on('tap', function(){
		$("#map").css("display","inline");
		$("#map--satellite").css("display","none");
		$(".excontent").css("display","none");
		$("#left").css("display","block");
		$(".sidebar--main__premade-map-wrapper").css("display","block");
		$(".sidebar--main__customlink-wrapper").css("display","none");	
		$(".btn--customizablemap").css("color","#00b7eb");	
		$(".btn--satellitemap").css("color","#fff");	
		$(".btn--customlink").css("color","#fff");		
	});
	
	$(".btn--satellitemap").on('tap', function(){
		$("#map--satellite").css("display","inline");
		$("#map").css("display","none");
		$("#left").css("display","none");
		$(".sidebar--main__premade-map-wrapper").css("display","none");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
		$(".sidebar--main__customlink-wrapper").css("display","none");
		$(".btn--customizablemap").css("color","#fff");	
		$(".btn--satellitemap").css("color","#00b7eb");	
		$(".btn--customlink").css("color","#fff");
		google.maps.event.trigger(map, "resize");
		// $(".excontent").attr('src', "https://maps.google.com/?ie=UTF8&t=h&z=6&output=embed");
	});
	
	$( ".btn--customlink" ).click(function() {
		$("#left").css("display","none");
		$(".sidebar--main__customlink-wrapper").css("display","inline");
		$(".sidebar--main__premade-map-wrapper").css("display","none");
		$(".btn--customizablemap").css("color","#fff");	
		$(".btn--satellitemap").css("color","#fff");	
		$(".btn--customlink").css("color","#00b7eb");	
	});

	//googlemap - custom link
	$( "#btn--apply-url" ).click(function() {
		$(".excontent").css("display","inline");
		$("#map").css("display","none");
		$("#map--satellite").css("display","none");
		var customlink = $( "#input--customlink" ).val();
		$(".excontent").attr('src', customlink);
	});


	$(".help-btn").on('tap', function(){
		$(".excontent").css("display","none");
		$(".setting").css("display","block");
		$(".customlink").css("display","none");
		$(".dimension").css("display","block");
	});
	
	$(".chengfolio-btn").on('tap', function(){
		window.location = '/';
	});
	
    //googlemap - setup dimension
	$("#btn--apply-dimension").on('tap', function(){
	  var width2 = $( "#input--map-width" ).val()+'px';
	  // var width = parseInt(width1) + 250;
	  var height2 = $( "#input--map-height" ).val()+'px';
	  // if ($("#map").css("display") == "inline") {
			$("#map--satellite").css("width",width2);
			$("#map--satellite").css("height",height2);
			$(".excontent").css("width",width2);
			$(".excontent").css("height",height2);
		// } else {
		// }
		google.maps.event.trigger(map, "resize");
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
		window.location = '/blog/how_to_customize_google_map_and_export_high_quality_images_using_google_map_customizer';
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