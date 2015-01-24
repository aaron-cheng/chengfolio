/* ************************************************
**************************************************

Website Name: BorderX Lab
Website URL: borderxlab.com
Website Author: Aaron Cheng
Author URL: chengfolio.com
Copyright 2014. All Rights Reserved.

************************************************ */

/* ***********************************************
*************************************************
0. General -------------------- All Files
*************************************************
*********************************************** */

$(document).ready(function(){	
/*----------------------------------------------
------------------------------------------------
0. General
------------------------------------------------
----------------------------------------------*/	
	$(".btn__menu_expand").on('tap', function(){
		if ($(".nav__menu--mobile").css("display") == "none") {
			$(".nav__menu--mobile").css("display","block");
		} else {
			$(".nav__menu--mobile").css("display","none");
		}
	});

//set video heigth based on its width
	var video_height = $(".video--full-width").width()*0.5625;

	$(".video--full-width").css("height",video_height);

//Resize&Reposition video height when resive window		
	$(window).resize(function(){
		var video_height = $(".video--full-width").width()*0.5625;
			
		$(".video--full-width").css("height",video_height);
	});

/*----------------------------------------------
------------------------------------------------
1. Home Page js
------------------------------------------------
----------------------------------------------*/	

});