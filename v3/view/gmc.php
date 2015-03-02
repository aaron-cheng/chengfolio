<!DOCTYPE html>
<html>
	<head>
<?php include 'component/head.php';?>

<?php include 'component/style.php';?>

		<link href="/css/gmc.css" rel="stylesheet">

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="/js/ZeroClipboard.js"></script>
		<script type='text/javascript' src="/js/googlemapscolorizr.js"></script>
	</head>
	<body onload="gmc.init()">
		<div id="menu-toggle" style="color:#3f33f3; z-index:99999;">ggggggggg</div>
		<div id="middle">
			<div id="left">
				<div id="items"></div>
				<input id="add" type="button" name="addStyle" value="+" onclick="gmc.appendItemDiv()">
			</div>
			<div id="map">
			</div>
			<div id="right" style="display:none;">
				<div id="json"></div>
			</div>
		</div>

		<div class="sidebar--main">
			<div class="row">
				<div class="col-xs-10">
					<h1 class="txt--md text-left">Google Map Customizer</h1>
				</div>
				<div class="col-xs-2">
					<img src="/img/gmc/gmc_icon_close.png" class="pull-right sidebar__btn--close" alt="close">	
				</div>
			</div>

			<div class="row margin--element_top_sm">
				<div class="col-md-12">
					<a class="btn--customizablemap" href="#customizablemap">CUTOMIZABLE MAP</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a class="btn--satellitemap" href="#satellitemap">SATELLITE MAP</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a class="btn--customlink" href="#customlink">CUSTOM URL</a>
				</div>
			</div>

			<div class="row margin--element_top_sm">
				<div class="col-md-12">
					<p>Set the dimension of your map:</p>
				</div>
			</div>
			<div class="row margin--element_top_xs">
				<div class="col-md-12">
					<input id="input--map-width" class="padding--input-box box--full_width" type="text" placeholder="width">
				</div>
			</div>
			<div class="row margin--element_top_xs">
				<div class="col-md-12">
					<input id="input--map-height" class="padding--input-box box--full_width" type="text" placeholder="height">
				</div>
			</div>
			<div class="row margin--element_top_xs">
				<div class="col-md-12">
					<input id="btn--apply-dimension" class="btn box--full_width" type="button" value="Apply">
				</div>
			</div>

			<div class="row margin--element_top_sm">
				<div class="col-md-12">
					<p>Select from premade style:</p>
				</div>
			</div>
			<div class="sidebar--main__premade-map">		
				<div class="row">
					<div class="col-md-12">
						<img src="/img/gmc/gmc_premade_map.jpg" class="img-responsive center-block" alt="premade map">
					</div>
				</div>
				<div class="row margin--element_top_xs">
					<div class="col-md-12">
						<img src="/img/gmc/gmc_premade_map.jpg" class="img-responsive center-block" alt="premade map">
					</div>
				</div>
				<div class="row margin--element_top_xs">
					<div class="col-md-12">
						<img src="/img/gmc/gmc_premade_map.jpg" class="img-responsive center-block" alt="premade map">
					</div>
				</div>
			</div>

			<div class="sidebar--main__footer">
				<div class="row">
					<div class="col-xs-12">
						<a class="pull-left" href="/blog/how_to_customize_google_map_and_export_high_quality_images_using_google_map_customizer">
							<img src="/img/gmc/gmc_help.png" class="pull-left" alt="help">	
							<p class="txt__color--regular pull-left">&#160; How to Use?</p>
						</a>
						<a class="pull-right" href="/">
							<p class="txt__color--regular pull-right">© Aaron Cheng</p>
						</a>
					</div>
				</div>
			</div>
		</div>

<?php include 'component/script.php';?>

	<script src="/js/gmc.js" type="text/javascript"></script> 

	<!-- Menu Toggle Script -->
    <script>
    // $("#menu-toggle").click(function(e) {
    //     e.preventDefault();
    //     $("#middle").toggleClass("toggled");
    // });
    </script>
	</body>
</html>