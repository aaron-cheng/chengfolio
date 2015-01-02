/* ************************************************
**************************************************

Website Name: fluc
Website URL: fluc.com
Website Author: Aaron Cheng
Author URL: chengfolio.com
Copyright 2014. All Rights Reserved.

************************************************ */

$(document).ready(function(){	
	//Resize&Reposition background img - direct from other pages
			var win_width = $(window).width()+21;
			var win_height = $(window).height()+21;
			var aspectRatio = 0.54;

			$(".img_background").css("width",win_width);
			$(".img_background").css("height",win_height);
			
			if (win_height/win_width <= aspectRatio) {
				$(".img_background img").css("width",win_width);
				$(".img_background img").css("height",win_width*aspectRatio);
			}else{
				$(".img_background img").css("height",win_height);
				$(".img_background img").css("width",win_height/aspectRatio);
				$(".img_background img").css("left",-(win_height/aspectRatio-win_width)/2);
			}
		
		$(window).resize(function(){
			var win_width = $(window).width();
			var win_height = $(window).height();
			var aspectRatio = 0.54;
			
			$(".img_background").css("width",win_width);
			$(".img_background").css("height",win_height);
			
			if (win_height/win_width <= aspectRatio) {
				$(".img_background img").css("width",win_width);
				$(".img_background img").css("height",win_width*aspectRatio);
			}else{
				$(".img_background img").css("height",win_height);
				$(".img_background img").css("width",win_height/aspectRatio);
				$(".img_background img").css("left",-(win_height/aspectRatio-win_width)/2);
			}
		});

});