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

function startsWith(str, prefix) {
	return str.lastIndexOf(prefix, 0) === 0;
}




//convert Google HSL to Regular HSL
function google2Hsl(item){
	var gLbase;
	var gSbase;	
	var regularh;
	var regulars;	
	var regularl;
// sets the base saturation and lightness from google maps
var googleBaseValues = new Array();
	googleBaseValues[0] = new Array("water", 45, 76);
	googleBaseValues[1] = new Array("landscape", 27, 89);
	googleBaseValues[2] = new Array("landscape.man_made", 27, 89);
	googleBaseValues[3] = new Array("landscape.natural", 15, 95);
	googleBaseValues[4] = new Array("poi", 43, 78);
	googleBaseValues[5] = new Array("poi.medical", 41, 87);
	googleBaseValues[6] = new Array("poi.school", 48, 83);
	googleBaseValues[7] = new Array("poi.business", 15, 85);
	googleBaseValues[8] = new Array("poi.government", 15, 85);
	googleBaseValues[9] = new Array("poi.place_of_worship", 15, 85);
	googleBaseValues[10] = new Array("poi.sports_complex", 15, 85);
	googleBaseValues[11] = new Array("poi.park", 43, 78);
	googleBaseValues[12] = new Array("poi.attraction", 43, 78);
	googleBaseValues[13] = new Array("road", 100, 64);
	googleBaseValues[14] = new Array("road.highway", 100, 64);
	googleBaseValues[15] = new Array("road.arterial", 100, 77);
	googleBaseValues[16] = new Array("road.local", 100, 100);
	googleBaseValues[17] = new Array("administrative", 0, 51);
	googleBaseValues[18] = new Array("administrative.country", 0, 51);
	googleBaseValues[19] = new Array("administrative.land_parcel", 0, 51);
	googleBaseValues[20] = new Array("administrative.locality", 0, 0);
	googleBaseValues[21] = new Array("administrative.neighborhood", 0, 51);
	googleBaseValues[22] = new Array("administrative.province", 0, 51);
	googleBaseValues[23] = new Array("transit", 0, 75);
	googleBaseValues[24] = new Array("all", 0, 0);
	//if 'color' exists
	for (i = 0; i < item.stylers.length; i++) {
		if ("color" in item.stylers[i]) {
			return item.stylers[i].color.substr(1);
		}
		// alert('fk');
	}

	//get base values
	for (i = 0; i <= 24; i++) {
		if(item.featureType == googleBaseValues[i][0]){
			 gLbase = googleBaseValues[i][2];
			 gSbase = googleBaseValues[i][1];				
		}
	}
	//get hue
	for (i = 0; i < item.stylers.length; i++) {
		if ("hue" in item.stylers[i]) {
			regularh = color2color(item.stylers[i].hue, "hsl" );
		}
		if ("saturation" in item.stylers[i]) {
			googles = item.stylers[i].saturation;
		}
		if ("lightness" in item.stylers[i]) {
			googlel = item.stylers[i].lightness;
		}			
	}
	//get lightness
	if (googlel < 0) {
		regularl = (googlel +100)*gLbase/100;
	}else if(googlel > 0){
		regularl = googlel + gLbase - gLbase*googlel/100;
	}else{
		regularl = googlel;
	}
	//get saturation
	if (googles < 0) {
		regulars = (googles +100)*gSbase/100;
	}else if (googles > 0) {
		regulars = googles + gSbase - gSbase*googles/100;
	}else{
		regulars = googles;
	}

	hsl = "hsl(" + regularh + "," + Math.round(regulars).toString() + "%," + Math.round(regularl).toString() + "%)";

	return color2color(hsl, "hex");
}

function style_new_url(item){
	var url_hash = "#";

	// organize the style info		

	for (i = 0; i < item.length; i++) { 

		var lightness_in = 0;
		var hue_in = 0;
		var saturation_in = 0;
		var color_in = 0;
		var visibility_in = 0;
		var color_hue;
		var color_hue_num;
		var color_hue_s;
		var color_hue_l;

		if (startsWith(item[i].featureType, "transit")) {
			item[i].featureType = "transit";
		}

		for (j = 0; j < item[i].stylers.length; j++) {
			if ("visibility" in item[i].stylers[j]) {
				visibility = item[i].stylers[j].visibility;
				visibility_in = 1;
				if (item[i].stylers[j].visibility == "off") {
					item[i].stylers.push({"color": "#444444"});     				
				}
			}
			//if color exists
			if ("color" in item[i].stylers[j]) {
				color_in = 1;
				hue_in = 1;
				color_hue = item[i].stylers[j].color;
				color_hue_num = j;
			}			
			//if lightness exists
			if ("lightness" in item[i].stylers[j]) {
				lightness_in = 1;
				color_hue_l = item[i].stylers[j].lightness;
			}			
			//if hue exists
			if ("hue" in item[i].stylers[j]) {
				lightness_in = 1;
			}			
			//if saturation exists
			if ("saturation" in item[i].stylers[j]) {
				saturation_in = 1;
				color_hue_s = item[i].stylers[j].saturation;
			}
		}	
		//if neither color or hue exists 
		if (color_in === 0 && hue_in === 0) {
			item[i].stylers.push({"color": "#bbbbbb"});
		}	
		//if visibility doesnt exist add visibity 
		if (visibility_in === 0) {
			item[i].stylers.push({"visibility": "on"});
		}			
		//if color exists and visibity doesnt, add visibility = on
		if (color_in === 1 && visibility_in === 0) {
			item[i].stylers.push({"visibility": "simplified"});
		}
		//if no lightness add 0
		if (lightness_in === 0) {
			item[i].stylers.push({"lightness": 0});
			color_hue_l = 0;
		}
		//if no hue add #000
		if (hue_in === 0) {
			item[i].stylers.push({"hue": "#0ffff0"});
		}
		//if no saturation add 0
		if (saturation_in === 0) {
			item[i].stylers.push({"saturation": 0});
			color_hue_s = 0;
		}	
		//if color and lightness both exist, 
		if (color_in === 1 && lightness_in === 1) {
			color_hsl = "hsl(" + color2color("#" + color_hue, "hsl") + "," + color_hue_s + "%," + color_hue_l + "%)";
			color_hex = color2color(color_hsl, "hex");
			// alert(color_hex);
			item[i].stylers[color_hue_num] = {"color": "#" + color_hex};
			// pp = item[i].stylers[color_hue_num].hue;
			// alert(pp);
		}
	}


	// alert(item[12].stylers[3].color);
	// var test_h;
	// var test_l;
	// var test_s;
	// var test_c;

	// 	for (b = 0; b < item[12].stylers.length; b++) {
	// 		if ("hue" in item[12].stylers[b]) {
	// 			test_h = item[12].stylers[b].hue;
	// 		}	
	// 		if ("saturation" in item[12].stylers[b]) {
	// 			test_s = item[12].stylers[b].saturation;
	// 		}	
	// 		if ("lightness" in item[12].stylers[b]) {
	// 			test_l = item[12].stylers[b].lightness;
	// 		}	
	// 		if ("color" in item[12].stylers[b]) {
	// 			test_c = item[12].stylers[b].color;
	// 		}			
	// 	}

	// xxx = {"featureType":"water","elementType":"geometry","stylers":[{"hue":"#000000"},{"lightness":17},{"saturation":0}]};
	// ddd = google2Hsl(xxx);
	// alert(test_s);
	// generate url	
	for (m = 0; m < item.length; m++) { 
		var visibility;
		var hex = google2Hsl(item[m]);

		// for (x = 0; x < item[m].stylers.length; x++) {

		// 	//if color exists
		// 	if ("color" in item[m].stylers[x]) {
		// 		alert(m);
		// 	}			

		// }


		for (n = 0; n < item[m].stylers.length; n++) {
			if ("visibility" in item[m].stylers[n]) {
				visibility = item[m].stylers[n].visibility;
			}
		}

	    if (url_hash == '#') {
    		url_hash += item[m].featureType + "/" +  item[m].elementType + "/" + hex + "/" + visibility;	
    	}else{
    		url_hash += "/" + item[m].featureType + "/" +  item[m].elementType + "/" + hex + "/" + visibility;					    		
    	}  
	}

	return url_hash;
}


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