<!DOCTYPE html>
<html>
  <head>
    <title>Google Map Customizer</title>
	<meta name="description" content="Customize the colors on a Google Map and get large, high resolution images."/>

<?php include 'component/head.php';?>

<?php include 'component/style.php';?>

	<!-- My css-->
	<link href="/css/gmc.css" rel="stylesheet">

  </head>
  <body>
	<!-- mask creates a trigger to close menu when tap anywhere on the screen -->
	<div class="maskwrapper">
		<div class="mask visible-xs visible-sm"></div>
	</div>
	<div class="customizer-header">
		<div class="background visible-sm">
		</div>
		<div class="background-mobile visible-xs">
		</div>
		<div class="container">
			<!-- header displays dimension settings-->
			<div class="row dimension">
				<a class="col-xs-10 col-sm-12 col-md-3" href="/google_map_customizer">
					<h2>Google Map Customizer</h2>
					<p>By Aaron Cheng</p>
				</a>
				<div class="col-xs-2 visible-xs">
					<img class="helpbtn center-block" src="/img/gmc/setting.png" alt="Settings">
				</div>
				<label class="col-xs-2 col-sm-1 col-md-1" for="pagewidth">Width</label>
				<div class="col-xs-4 col-sm-3 col-md-2">
					<input id="pagewidth" type="text" value="1920">
				</div>
				
				<label class="col-xs-2 col-sm-1 col-md-1" for="pageheight">Height</label>
				<div class="col-xs-4 col-sm-3 col-md-2">
					<input id="pageheight" type="text" value="1080">
				</div>
				
				<div class="col-sm-2 col-md-2 hidden-xs">
					<input id="googlebtn" type="button" value="Apply">
				</div>
				
				<div class="col-xs-12 col-sm-2 col-md-1 hidden-xs helpbtn">
					<img class="center-block" src="/img/gmc/setting.png" alt="Settings">
				</div>
			</div>
			
			<div class="dimension row">
				<div class="col-xs-12 visible-xs">
					<input id="googlebtn" type="button" value="Apply">
				</div>
			</div>
			<!-- header displays url settings-->
			<div class="row customlink">
				<a class="col-xs-10 col-sm-12 col-md-3" href="/google_map_customizer">
					<h2>Google Map Customizer</h2>
					<p>By Aaron Cheng</p>
				</a>
				
				<div class="col-xs-2 visible-xs">
					<img class="helpbtn center-block" src="/img/gmc/setting.png" alt="Settings">
				</div>
				
				<label class="col-xs-2 col-sm-2 col-md-1" for="input_customlink">
					<div class="pull-left">URL:</div>
					<div id="embedcode" class="pull-left help-circle" title="If you use Google Map Engine, you have to get the URL from the embed code NOT the one from browser address bar." href="#embedcode">?</div>
				</label>
				
				<div class="col-xs-10 col-sm-6 col-md-5">
					<input id="input_customlink" type="text" placeholder="https://mapsengine.google.com/map/u/0/embed?mid=zN7vz9dJuw7E.kx0wWPz-5Vpg">
				</div>
				
				<div class="col-sm-2 col-md-2 hidden-xs">
					<input id="applylinkbtn" type="button" value="Confirm">
				</div>
				
				<div class="col-xs-12 col-sm-2 col-md-1 hidden-xs helpbtn">
					<img class="center-block" src="/img/gmc/setting.png" alt="Settings">
				</div>
			</div>

			<div class="customlink row">
				<div class="col-xs-12 visible-xs">
					<input id="applylinkbtn" type="button" value="Confirm">
				</div>
			</div>
			
			<div class="row settingmenu">
				<div class="col-sm-offset-8 col-sm-4 col-md-offset-9 col-md-3 col-lg-offset-10 col-lg-2">
					<div class="row">
						<div class="col-xs-offset-10 col-xs-2 col-sm-offset-6 col-sm-6 col-md-offset-8 col-md-4 col-lg-offset-6 col-lg-6">
							<div class="arrow-up center-block"></div>
						</div>
					</div>
					<ul class="text-center">
						<li>Settings</li>
						<li class="divider"></li>
						<li><a class="colorizr-btn" href="#customizablemap">Customizable Map</a></li>
						<li><a class="satellite-btn" href="#satellitemap">Satellite Map</a></li>
						<li><a class="customlink-btn" href="#customlink">Custom URL</a></li>
						<li><a class="help-btn" href="/blog/how_to_customize_google_map_and_export_high_quality_images_using_google_map_customizer">How To Use</a></li>
						<li><a class="chengfolio-btn" href="/">Aaron Cheng Portfolio</a></li>
						<li><span></span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="googlemapmsg hidden-xs">
		<div class="googlemsgtopper visible-sm"></div>
		<div class="googlemapmsgcontents container">
			<div class="row">
				<p class="col-sm-10 col-md-11">Customize the colors on a Google Map and get large, high resolution images. (<a id="screengrabtool">third-party plugin</a> required)<a class="help-btn pull-right hidden-sm" href="/blog/how_to_customize_google_map_and_export_high_quality_images_using_google_map_customizer">Learn More</a></p>
				<div class="col-sm-2 col-md-1">
					<div class="closeicon center-block">X</div>
					<a class="help-btn visible-sm" href="#about">Learn More</a>
				</div>
			</div>

<!-- 			<div class="row">
				<a href="http://igg.me/at/reclink">
					<div class="col-sm-2">
						<img src="/img/gmc/reclink.png" class="img-responsive" alt="Reclink">
					</div>
					<p class="col-sm-9">Please take a look at my design on Indiegogo: RecLink - portable USB cable with powerbank that fits your pocket. Thx!</p>

				</a>

				<div class="col-sm-1">
					<div class="closeicon center-block">X</div>
				</div>
			</div> -->
		</div>
	</div>
	
	<div class="googlemaptopper visible-sm">
	</div>
	
	<div class="googlemaptopper-mobile visible-xs">
	</div>
	
	<!-- external webpage -->
	<iframe class="excontent" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="/GoogleMapsColorizr"></iframe>
	
<?php include 'component/script.php';?>

	<script src="/js/gmc.js" type="text/javascript"></script> 
  </body>
</html>