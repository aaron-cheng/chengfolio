<!DOCTYPE html>
<html>
<head>
	<title>Blog - The place I share my thoughts, design works and useful tools.</title>

<?php include '../component/head.php';?>

<?php include '../component/style.php';?>

</head>

<body>

<?php include '../component/nav.php';?>

<article>
	<div class="container padding--element_lg">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-12">
						<h1 class="txt--regular txt--xxl txt--primary_on_light">How to customize Google Map and export high-quality images using Google Map Customizer?</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">What does Google Map Customizer do?</h2>
					<p class="margin--element_top">1. Google Map Customizer is made by Aaron Cheng. The code is based on <a class="txt--blog_highlight txt--regular" href="https://maps.google.com/">Google Maps</a> and <a class="txt--blog_highlight txt--regular" href="http://software.stadtwerk.org/google_maps_colorizr/">Google Maps Colorizr</a>.</br></br>

					2. Google Map Customizer lets you customize the colors on a Google Map. You can select customizations for any map aspects you want, such as the natural landscape. For this aspect you can enter the HEX code of the color you want it to be filled with.</br></br> 

					3. Google Map Customizer lets you get large, high resolution satellite maps, typical Google maps and custom maps made by Google Map Engine. You can simply zoom into the level of detail you want and setup the window dimensions big enough to capture the site area you need. Then all you need to do is to grab the screen shot.</br></br>
					<a id="screenshottools" href="#screenshottools"><p>&ensp;</p></a></p>
					<p>There are many third-party tools:</br>
					<a class="txt--blog_highlight txt--regular" href="https://addons.mozilla.org/en-US/firefox/addon/fireshot/">FireShot</a> plugin for Firefox; <a class="txt--blog_highlight txt--regular" href="https://chrome.google.com/webstore/detail/awesome-screenshot-captur/alelhddbbhepgpmgidjdcjakblofbmce">Awesome Screenshot</a> for Chrome or Adobe Acrobat’s <a class="txt--blog_highlight txt--regular" href="http://www.adobe.com/products/acrobat/convert-html-to-pdf.html">PDF toolbar</a> to convert HTML to PDF.</p>
				</div>
			</div>
		</div>	
	</div>

<!-- 	<div class="work__background--differentiator"> -->
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">How to use Google Map Customizer?</h2>					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<iframe class="center-block video--full-width margin--element_top_lg" width="100%" height="" src="//www.youtube.com/embed/pp1h4m8LDWw" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-offset-1 col-lg-1">
					<div class="circle--number">1</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-5 col-lg-4">
					<p>Select the map type</p>
				</div>
				<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10 col-md-offset-0 col-md-6 col-lg-5">
					<img src="/img/blog/google_map_customizer/menu.png" class="img-responsive center-block" alt="Select Map">
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-offset-1 col-lg-1">

				</div>
				<div class="col-xs-10 col-sm-10 col-md-5 col-lg-4">
					<p>If you select 'Custom URL', paste your map's URL here.</br></br></p>
				</div>
				<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10 col-md-offset-0 col-md-6 col-lg-5">
					<img src="/img/blog/google_map_customizer/customlink.png" class="Custom URL" alt="customlink window">
				</div>
				<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10 col-md-offset-1 col-md-11 col-lg-offset-2 col-lg-9">
					<p>Note: To properly display your map, there are 2 things you need to do:</br> 1. <a href="https://support.google.com/mapsenginelite/answer/3024935?hl=en">make your map public and get the embed code</a></br>
					2. copy and paste the URL from the embed code NOT the one from your browser address bar.</br>
					the URL is within src="...", eg: https://mapsengine.google.com/map/u/0/embed?mid=zN7vz9dJuw7E.kx0wWPz-5Vpg</p>
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-offset-1 col-lg-1">
					<div class="circle--number">2</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-5 col-lg-4">
					<p>Customize the color in the map.</br>(Skip this step if not using Customizable Map)</p>
				</div>
				<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10 col-md-offset-0 col-md-6 col-lg-5">
					<img src="/img/blog/google_map_customizer/customize.jpg" class="img-responsive center-block" alt="Change the color of google map">
					<a id="anchor-embedcode" href="#anchor-embedcode"><p>&ensp;</p></a>
				</div>
			</div>
					
			<div class="row margin--element_top_lg">
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-offset-1 col-lg-1">
					<div class="circle--number">3</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-5 col-lg-4">
					<p>Zoom into the level of detail you want.</p>
				</div>
				<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10 col-md-offset-0 col-md-6 col-lg-5">
					<img src="/img/blog/google_map_customizer/zoom.jpg" class="img-responsive center-block" alt="Zoom">
				</div>
			</div>
					
			<div class="row margin--element_top_lg">
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-offset-1 col-lg-1">
					<div class="circle--number">4</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-5 col-lg-4">
					<p>Setup the width and height of the map image.</p>
				</div>
				<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10 col-md-offset-0 col-md-6 col-lg-5">
					<img src="/img/blog/google_map_customizer/dimension.png" class="img-responsive center-block" alt="Setup Dimension">
				</div>
			</div>
					
			<div class="row margin--element_top_lg">
				<div class="col-xs-2 col-sm-2 col-md-1 col-lg-offset-1 col-lg-1">
					<div class="circle--number">5</div>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-5 col-lg-4">
					<p>Grab the screen shot.</br>(Awesome Screenshot for Chrome)</p>
				</div>
				<div class="col-xs-offset-2 col-xs-10 col-sm-offset-2 col-sm-10 col-md-offset-0 col-md-6 col-lg-5">
					<img src="/img/blog/google_map_customizer/screen.jpg" class="img-responsive center-block" alt="Grab Screen">
				</div>
			</div>
		</div>	
<!-- 	</div> -->

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Attribution</h2>
					<p class="margin--element_top">In Google Maps Customizer you can find two types of maps: satellite map and customizable map. The data behind these two layers come from different places:</br></br>
					Google Maps: I make use of Google Maps V3 to display the satellite map.</br></br>
					Marc Köster: Marc produces Google Maps Colorizr. Google Maps Colorizr is licensed under a Creative Commons Attribution-Noncommercial 3.0 Unported License (http://creativecommons.org/licenses/by-nc/3.0/). The customizable map is a modification of Google Maps Colorizr.</p>
				</div>
			</div>
		</div>	
	</div>

</article>

<!-- <div class="work__background--differentiator"> -->
	<div class="container padding--element_lg">

<?php include '../component/social.php';?>

	</div>
<!-- </div> -->

<?php include '../component/footer.php';?>

<?php include '../component/script.php';?>

</body>
</html>