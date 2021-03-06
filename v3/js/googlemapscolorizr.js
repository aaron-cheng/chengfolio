/*
Name:       Google Maps Colorizr
Version:    0.1.5 (01.11.2011)
Author:     Marc Köster
Support:    http://stadtwerk.org

Licence:    Google Maps Colorizr is licensed under a Creative Commons 
            Attribution-Noncommercial 3.0 Unported License 
            (http://creativecommons.org/licenses/by-nc/3.0/).

            You are free:
                + to Share - to copy, distribute and transmit the work
                + to Remix - to adapt the work

            Under the following conditions:
                + Attribution. You must attribute the work in the manner specified by the author or licensor 
                  (but not in any way that suggests that they endorse you or your use of the work). 
                + Noncommercial. You may not use this work for commercial purposes. 

            + For any reuse or distribution, you must make clear to others the license terms of this work.
            + Any of the above conditions can be waived if you get permission from the copyright holder.
            + Nothing in this license impairs or restricts the author's moral rights.
*/



function googlemapcolorizer()
{
	var styles;
	var map;
	var index;
	var googleBaseValues;

	// var kk = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#146474"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#021019"}]}];
	



	// initialise map and class
	this.init = function()
	{



		//initialise map
		var options = {
			mapTypeControlOptions: {
				mapTypeIds: [ 'Styled']

			},


			center: new google.maps.LatLng(37.74869169564006, -122.41571655273435),
			zoom: 13,

			mapTypeId: 'Styled',
			disableDefaultUI: true,
			tilt:0,

			// styles: kk,

        };
        
        var div = document.getElementById('map');
        this.map = new google.maps.Map(div, options);
        var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
        this.map.mapTypes.set('Styled', styledMapType);


		//initialise class
		this.setGoogleBaseValues();
		this.index = 0;
		this.styles=[];
		this.isValidColor = [];
		this.addEventHandler();
		this.appendItemDiv();
		this.writeCode();
		this.getValuesFromUrl();
		
		
		//initialise Zeroclipboard
		var clip = new ZeroClipboard.Client();
		clip.addEventListener( 'mouseDown', function(client) { 
			clip.setText( document.getElementById('json').innerHTML );
		} );
		clip.glue( 'copy' );
		
	};


	this.addEventHandler = function()
	{
		google.maps.event.addListener(this.map, 'zoom_changed', function() {
			gmc.writeCode();
		});
		google.maps.event.addListener(this.map, 'mouseup', function() {
			gmc.writeCode();
		});
	

// apply pre-made map1
		document.getElementById("gmc_premade_map_clean_grey").addEventListener("click", premade_map_clean_grey);
            function premade_map_clean_grey() {	
 

            	var style_new = [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#e3e3e3"}]},{"featureType":"landscape.natural","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#cccccc"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#FFFFFF"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]}];
            	// clean the url before apply new premade map
            	gmc.deleteAllItemDiv();
            	window.location.hash = "";

				gmc.setGoogleBaseValues();
				gmc.index = 0;
				gmc.styles=[];
				gmc.isValidColor = [];
				gmc.appendItemDiv();
            	
            	window.location.hash = style_new_url(style_new);
		        gmc.getValuesFromUrl();
		        gmc.renderStyle();
            }
// apply pre-made map2
		document.getElementById("gmc_premade_map_blue_water").addEventListener("click", premade_map_blue_water);
            function premade_map_blue_water() {
				
            	var style_new = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}];
            	// clean the url before apply new premade map
            	gmc.deleteAllItemDiv();
            	window.location.hash = "";

				gmc.setGoogleBaseValues();
				gmc.index = 0;
				gmc.styles=[];
				gmc.isValidColor = [];
				gmc.appendItemDiv();
            	
            	window.location.hash = style_new_url(style_new);
		        gmc.getValuesFromUrl();
		        gmc.renderStyle();
            }
// apply pre-made map midnight commander
		document.getElementById("gmc_premade_map_midnight_commander").addEventListener("click", premade_map_midnight_commander);
            function premade_map_midnight_commander() {
				
            	var style_new = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#146474"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#021019"}]}];
            	// clean the url before apply new premade map
            	gmc.deleteAllItemDiv();
            	window.location.hash = "";

				gmc.setGoogleBaseValues();
				gmc.index = 0;
				gmc.styles=[];
				gmc.isValidColor = [];
				gmc.appendItemDiv();
            	
            	window.location.hash = style_new_url(style_new);
		        gmc.getValuesFromUrl();
		        gmc.renderStyle();
            }
// apply pre-made map4
		document.getElementById("gmc_premade_map_endless_atlas").addEventListener("click", premade_map_endless_atla);
            function premade_map_endless_atla() {
				
            	var style_new = [{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#D1D3D4"},{"saturation":-88},{"lightness":-7},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"hue":"#939598"},{"saturation":-91},{"lightness":-34},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#414042"},{"saturation":-98},{"lightness":-60},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#E3EBE5"},{"saturation":-61},{"lightness":57},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"hue":"#E3EBE5"},{"saturation":-100},{"lightness":57},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"hue":"#E3EBE5"},{"saturation":-100},{"lightness":81},{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"hue":"#E3EBE5"},{"saturation":-100},{"lightness":81},{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"geometry","stylers":[{"hue":"#FFFFFF"},{"saturation":0},{"lightness":100},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels","stylers":[{"hue":"#939598"},{"saturation":2},{"lightness":59},{"visibility":"on"}]},{"featureType":"administrative.neighborhood","elementType":"labels","stylers":[{"hue":"#939598"},{"saturation":-100},{"lightness":16},{"visibility":"on"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"hue":"#939598"},{"saturation":-100},{"lightness":16},{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#939598"},{"saturation":-100},{"lightness":16},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#939598"},{"saturation":-98},{"lightness":-8},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"hue":"#FFFFFF"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#6D6E71"},{"saturation":-98},{"lightness":-43},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#FFFFFF"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"hue":"#FFFFFF"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]}];

            	// clean the url before apply new premade map
            	gmc.deleteAllItemDiv();
            	window.location.hash = "";

				gmc.setGoogleBaseValues();
				gmc.index = 0;
				gmc.styles=[];
				gmc.isValidColor = [];
				gmc.appendItemDiv();
            	
            	window.location.hash = style_new_url(style_new);
		        gmc.getValuesFromUrl();
		        gmc.renderStyle();
            }
// apply pre-made map5
		document.getElementById("gmc_premade_map_grey_shades").addEventListener("click", premade_map_grey_shades);
            function premade_map_grey_shades() {
				
            	var style_new = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":0},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];
            	// clean the url before apply new premade map
            	gmc.deleteAllItemDiv();
            	window.location.hash = "";

				gmc.setGoogleBaseValues();
				gmc.index = 0;
				gmc.styles=[];
				gmc.isValidColor = [];
				gmc.appendItemDiv();
            	
            	window.location.hash = style_new_url(style_new);
		        gmc.getValuesFromUrl();
		        gmc.renderStyle();
            }
// apply pre-made map end

        //googlemap - setup dimension
        $(".btn--customizablemap").on('tap', function(){
			google.maps.event.trigger(gmc.map, "resize");	
		});

		$("#btn--apply-dimension").on('tap', function(){
		  var width = $( "#input--map-width" ).val()+'px';
		  // var width = parseInt(width1) + 250;
		  var height = $( "#input--map-height" ).val()+'px';
		  // if ($("#map").css("display") == "inline") {
				$("#map").css("width",width);
				$("#map").css("height",height);

			// } else {
			
			// }
			google.maps.event.trigger(gmc.map, "resize");

		});

	};



	
	// sets the base saturation and lightness from google maps
	this.setGoogleBaseValues = function()
	{
		this.googleBaseValues = new Array();
		this.googleBaseValues[0] = new Array("water", 45, 76);
		this.googleBaseValues[1] = new Array("landscape", 27, 89);
		this.googleBaseValues[2] = new Array("landscape.man_made", 27, 89);
		this.googleBaseValues[3] = new Array("landscape.natural", 15, 95);
		this.googleBaseValues[4] = new Array("poi", 43, 78);
		this.googleBaseValues[5] = new Array("poi.medical", 41, 87);
		this.googleBaseValues[6] = new Array("poi.school", 48, 83);
		this.googleBaseValues[7] = new Array("poi.business", 15, 85);
		this.googleBaseValues[8] = new Array("poi.government", 15, 85);
		this.googleBaseValues[9] = new Array("poi.place_of_worship", 15, 85);
		this.googleBaseValues[10] = new Array("poi.sports_complex", 15, 85);
		this.googleBaseValues[11] = new Array("poi.park", 43, 78);
		this.googleBaseValues[12] = new Array("poi.attraction", 43, 78);
		this.googleBaseValues[13] = new Array("road", 100, 64);
		this.googleBaseValues[14] = new Array("road.highway", 100, 64);
		this.googleBaseValues[15] = new Array("road.arterial", 100, 77);
		this.googleBaseValues[16] = new Array("road.local", 100, 100);
		this.googleBaseValues[17] = new Array("administrative", 0, 51);
		this.googleBaseValues[18] = new Array("administrative.country", 0, 51);
		this.googleBaseValues[19] = new Array("administrative.land_parcel", 0, 51);
		this.googleBaseValues[20] = new Array("administrative.locality", 0, 0);
		this.googleBaseValues[21] = new Array("administrative.neighborhood", 0, 51);
		this.googleBaseValues[22] = new Array("administrative.province", 0, 51);
		this.googleBaseValues[23] = new Array("transit", 0, 75);
		this.googleBaseValues[24] = new Array("all", 0, 0);
	};

	//appends a new Style
	this.appendItemDiv = function()
	{
		document.getElementById("items").appendChild(this.getItemDiv());
		this.addStyle();
		this.index++;
	};
	
	//deletes a style
	this.deleteItemDiv = function(button)
	{
		var item = button.parentNode.parentNode.parentNode;
		document.getElementById("items").removeChild(item);
		this.deleteStyle(parseInt(item.firstChild.value));
	};

	//deletes all style
	this.deleteAllItemDiv = function()
	{
		var myNode = document.getElementById("items");
		while (myNode.firstChild) {
		    myNode.removeChild(myNode.firstChild);
		}
	};	

	//when clicked on a drop down Item (with mouse)
	this.selectedDropDownItem = function(option)
	{
		var itemdiv = option.parentNode.parentNode.parentNode.parentNode;
		this.checkColor(itemdiv);
	};
	
	//when Changes a drop down list (with keyboard)
	this.selectedDropDown = function(option)
	{
		var itemdiv = option.parentNode.parentNode.parentNode;
		this.checkColor(itemdiv);
	};
	
	//when changed the color
	this.changedColor = function(input)
	{
		var itemdiv = input.parentNode.parentNode.parentNode;
		this.checkColor(itemdiv);
	};
	
	
	//adds a default style to style Array
	this.addStyle = function()
	{
		this.styles.push([])
		this.styles[this.index] = {
          featureType: 'water',
          elementType: 'all',
          stylers: [],
        };
	};
	
	//delete a style from style Array
	this.deleteStyle = function(id)
	{
		if(id < this.index-1)
		{
			this.changeHtmlIds(id);
		}
		this.styles.splice(id, 1);
		this.deleteURLParameter(id);
		this.index--;
		this.renderStyle();
	};
	
	//changes the IDs of the HTML Style divs to be equal with Style Array IDs
	this.changeHtmlIds = function(deletedId)
	{
		for(var i = deletedId+1; i < this.index; i++)
		{
			itemdiv = document.getElementById("item"+i.toString());
			hiddeninput = itemdiv.firstChild;
			itemdiv.setAttribute("id", "item"+(i-1));
			hiddeninput.setAttribute("value", i-1);
		}
	};
	
	//returns a new HTML Item Div
	this.getItemDiv = function()
	{
		value = '<input type="hidden" name="id" value="'+this.index+'">';
		value += '<div class="divider--horizontal--even item__divider"></div>';
		value += '<div class="wrap">';
		value += '	<div class="headcolor"><div id="dot'+this.index+'" class="dot"></div><input type="button" value="×" onclick="gmc.deleteItemDiv(this)" /></div>';
		value += '	<div class="left txt--item">Feature: </div>';
		value += '	<div class="right">';
		value += '		<select name="featureTyp" onchange="gmc.selectedDropDown(this)" >';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">water</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">landscape</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">landscape.man_made</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">landscape.natural</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">road</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">road.highway</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">road.arterial</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">road.local</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi.park</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi.business</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi.attraction</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi.medical</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi.school</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi.government</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">poi.place_of_worship</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">administrative</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">administrative.country</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">administrative.land_parcel</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">administrative.locality</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">administrative.neighborhood</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">administrative.province</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">transit</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">all</option>';
		value += '		</select>';
		value += '	</div>';
		value += '</div>';
		value += '<div class="wrap">';
		value += '	<div class="left txt--item">Element: </div>';
		value += '	<div class="right">';
		value += '		<select name="elementType" onchange="gmc.selectedDropDown(this)">';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">all</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">geometry</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">geometry.fill</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">geometry.stroke</option>';				
		value += '			<option onclick="gmc.selectedDropDownItem(this)">labels</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">labels.icon</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">labels.text</option>';		
		value += '			<option onclick="gmc.selectedDropDownItem(this)">labels.text.fill</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">labels.text.stroke</option>';							
		value += '		</select>';
		value += '	</div>';
		value += '</div>';
		value += '<div class="wrap">';
		value += '	<div class="left txt--item">Visibility: </div>';
		value += '	<div class="right">';
		value += '		<select name="visibility" onchange="gmc.selectedDropDown(this)">';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">on</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">simplified</option>';
		value += '			<option onclick="gmc.selectedDropDownItem(this)">off</option>';
		value += '		</select>';
		value += '	</div>';
		value += '</div>';
		value += '<div class="wrap">';
		value += '	<div class="left hexcode txt--item" title="Hex codes are the 3 or 6-character codes that are often used in HTML and CSS to tell the browser what colors to display. So for example, #FFFFFF is the color white and #000000 is the color black.">HEX Color:</div>';
		value += '	<div class="right"><input type="text" name="RGBValue" onchange="gmc.changedColor(this)" placeholder="Try 000 for Black" onkeyup="gmc.changedColor(this)"/></div>';
		value += '</div>';		
		newItemDiv = document.createElement('div');
		newItemDiv.setAttribute('id',"item"+this.index);
		newItemDiv.setAttribute('class',"item");
		newItemDiv.innerHTML = value;
		return newItemDiv;
	};
	
	//checks if color is valid rgb
	this.checkColor = function(item)
	{
		var id = item.firstChild.value;
		var input = item.getElementsByTagName("input")[2];
		var color = input.value;
		
		if(color.substring(0,1) == "#")
			color = color.substring(1,color.length);
		if(!isNaN("0x"+color) && (color.length == 0 || color.length == 3 || color.length == 6)){
			this.isValidColor[id] = true;
			if(color.length ==3){
				color = color.substring(0,1)+color.substring(0,1)+color.substring(1,2)+color.substring(1,2)+color.substring(2,3)+color.substring(2,3);
			}
			document.getElementById("dot"+id).style.backgroundColor="#"+color;
			input.className="";
			this.Calculate(item, color);
		}else{
			input.className="red";
			this.styles[id].stylers = [];
			if(this.isValidColor[id] == true)
				this.renderStyle();
			this.isValidColor[id] = false;
		}
	};

	//calculates HSL values and merge with google base values to get the real color and add them to style Array
	this.Calculate=function(item, color){
		var id = item.firstChild.value;
		var RGB = color;
		var featureType = item.getElementsByTagName("select")[0].value;
		var elementType = item.getElementsByTagName("select")[1].value;
		var visibility = item.getElementsByTagName("select")[2].value;
		
		//calculate HSL values
		var R = parseInt(RGB.substring(0,2), 16)/255;
		var G = parseInt(RGB.substring(2,4), 16)/255;
		var B = parseInt(RGB.substring(4,6), 16)/255;

		var min = Math.min(Math.min(R, G), B);
		var max = Math.max(Math.max(R, G), B);
		var L = ((max+min)/2)*100;
		var S;
		if(min==max){
			S=0;
		}else{
			if(L<50){
				S = ((max-min)/(max+min))*100;
			}else{
				S = ((max-min)/(2-max-min))*100;
			}
		}
		
		
		//get base values
		for (var i=0, item; item=this.googleBaseValues[i]; i++) {
		   if (this.googleBaseValues[i][0] === featureType) {
			 var Lbase = this.googleBaseValues[i][2];
			 var Sbase = this.googleBaseValues[i][1];
		   } 
		}
		
		//merge HSL and base values
		var googleL;
		var googleS;
		if(L<Lbase){
			googleL = L*100/Lbase-100;
		}else if(L>Lbase){
			googleL = (L-Lbase)*100/(100-Lbase);
		}else{
			googleL = Lbase;
		}
		
		if(S<Sbase){
			googleS = S*100/Sbase-100;
		}else if(S>Sbase){
			googleS = (S-Sbase)*100/(100-Sbase);
		}else{
			googleS = Sbase;
		}
		
		// add to URL
		this.addUrlParameter(id,featureType,elementType,color,visibility);
		
		//add to style Array
		this.styles[id].featureType = featureType;
		this.styles[id].elementType = elementType;
		this.styles[id].stylers = [];
		if(color.length > 0)
		{
			this.styles[id].stylers.push({hue: "#"+color});
			this.styles[id].stylers.push({saturation: Math.round(googleS)});
			this.styles[id].stylers.push({lightness: Math.round(googleL)});
		}
		this.styles[id].stylers.push({visibility: visibility});
		this.renderStyle();
	};
	
	//update map Style
	this.renderStyle = function()
	{

		var styledMapType = new google.maps.StyledMapType(this.styles, { name: 'Styled' });

        this.map.mapTypes.set('Styled', styledMapType);
		this.writeCode();
	};





	this.writeCode = function()
	{
		
		var center = this.map.getCenter();
		var zoom = this.map.getZoom();
		output = "var styles = "
		output += this.getJson();
		output += "\nvar options = {\n"
		output += "	mapTypeControlOptions: {\n"
		output += "		mapTypeIds: [ 'Styled']\n"
		output += "	},\n"
		output += "	center: new google.maps.LatLng("+center.lat()+", "+center.lng()+"),\n"
		output += "	zoom: "+zoom+",\n"
		output += "	mapTypeId: 'Styled'\n"
        output += "};\n"
        output += "var div = document.getElementById('map');\n"
        output += "var map = new google.maps.Map(div, options);\n"
        output += "var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });\n"
        output += "map.mapTypes.set('Styled', styledMapType);\n"
		
		document.getElementById('json').innerHTML=output;
	};
	
	
	//writes Json
	this.getJson = function()
	{
		var jsonStyles = [];
		for (var i = 0; i < this.styles.length; i++) {
			jsonStyles[i] = "{\n"
			jsonStyles[i] += "		featureType: '" + this.styles[i].featureType + "',\n";
			jsonStyles[i] += "		elementType: '" + this.styles[i].elementType + "',\n";
			jsonStyles[i] += "		stylers: [\n";
			var jsonStylers = []
			for (var j = 0; j < this.styles[i].stylers.length; j++) {
				for (var p in this.styles[i].stylers[j]) {
					switch (p) {
						case 'hue':
							jsonStylers[j] = "			{ " + p + ": '" + this.styles[i].stylers[j][p] + "' }";
							break;
						case 'visibility':
							jsonStylers[j] = "			{ " + p + ": '" + this.styles[i].stylers[j][p] + "' }";
							break;
						default:
							jsonStylers[j] = '			{ ' + p + ': ' + this.styles[i].stylers[j][p] + ' }'
					}
				}
			}
			jsonStyles[i] += jsonStylers.join(',\n');
			jsonStyles[i] += '\n		]\n';
			jsonStyles[i] += '	}';
		}
		var json = '[\n	' + jsonStyles.join(',') + '\n];';
		return json;
	}
	
	this.getValuesFromUrl = function()
	{
		var strParam = window.location.hash.substr(1);
		if(strParam.length > 0)
		{
			var param = strParam.split("/");
			var id = 0;
			for(var i=0; i<param.length; i=i+4)
			{
				if(i != 0)
				{
					this.appendItemDiv();
				}
				itemdiv = document.getElementById("item"+id.toString());
				itemdiv.getElementsByTagName("select")[0].value = param[i];
				itemdiv.getElementsByTagName("select")[1].value = param[i+1];
				itemdiv.getElementsByTagName("select")[2].value = param[i+3];
				itemdiv.getElementsByTagName("input")[2].value = param[i+2];
				this.checkColor(itemdiv);
				id++;
			}
		}
	};
	
	this.addUrlParameter = function(id, feature, element, color, visibility)
	{
		var strParam = window.location.hash.substr(1);
		if(strParam.length > 0){
			var param = strParam.split("/");
			param[id*4] = feature;
			param[id*4+1] = element;
			param[id*4+2] = color;
			param[id*4+3] = visibility;
			window.location.hash = "#"+param.toString().replace(/,/g,"/");
		}else{
			window.location.hash = "#"+feature+"/"+element+"/"+color+"/"+visibility;
		}
	}
	this.deleteURLParameter = function(id)
	{
		var strParam = window.location.hash.substr(1);
		var param = strParam.split("/");
		param.splice(id*4,4);
		window.location.hash = "#"+param.toString().replace(/,/g,"/");
	}
}

var gmc = new googlemapcolorizer();



