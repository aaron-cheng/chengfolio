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

		<div id="middle">
			<div id="left">
				<div class="sidebar--item__title"><p class="txt--md txt--regular">Customize Map Style</p></div>
				<div id="items"></div>
				<div class="sidebar__btn-add-wrapper"><input id="add" type="button" name="addStyle" value="ADD" onclick="gmc.appendItemDiv()"></div>
			</div>
			<div id="map"></div>
			<div id="map--satellite"></div>

			<!-- external webpage -->
			<iframe class="excontent" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&t=h&z=6&output=embed"></iframe>

			<div id="right" style="display:none;">
				<div id="json"></div>
			</div>
		</div>

		<div class="siderbar--logo">
			<div class="row">
				<div class="col-xs-2">
					<img src="/img/gmc/gmc_icon_menu.png" class="block-center sidebar__btn--close" alt="close">	
				</div>
				<div class="col-xs-10">
					<h1 class="txt--md txt--bold text-left txt--primary_on_light siderbar--logo__txt">Google Map Customizer</h1>
				</div>
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
					<a class="btn--customizablemap btn--map-toggle" href="#customizablemap"><p class="txt--default">CUTOMIZABLE MAP</p></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a class="btn--satellitemap btn--map-toggle" href="#satellitemap"><p class="txt--default">SATELLITE MAP</p></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a class="btn--customlink btn--map-toggle" href="#customlink"><p class="txt--default">CUSTOM URL</p></a>
				</div>
			</div>

			<div class="row margin--element_top_sm">
				<div class="col-md-12">
					<p class="txt--default">Set the dimension of your map:</p>
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
					<input id="btn--apply-dimension" class="btn box--full_width" type="button" value="Set Dimension">
				</div>
			</div>

			<div class="sidebar--main__customlink-wrapper">
			<div class="row margin--element_top_sm">
				<div class="col-md-12">
					<p class="txt--default">Enter the URL to display:</p>
				</div>
			</div>
			<div class="row margin--element_top_xs">
				<div class="col-md-12">
					<input id="input--customlink" class="padding--input-box box--full_width" type="text" placeholder="https://mapsengine.google.com/map/u/0/embed?mid=zN7vz9dJuw7E.kx0wWPz-5Vpg">
				</div>
			</div>
			<div class="row margin--element_top_xs">
				<div class="col-md-12">
					<input id="btn--apply-url" class="btn box--full_width" type="button" value="Apply">
				</div>
			</div>
			</div>

			<div class="sidebar--main__premade-map-wrapper">
				<div class="row margin--element_top_sm">
					<div class="col-md-12">
						<p class="txt--default">Select from premade style:</p>
					</div>
				</div>
				<div class="sidebar--main__premade-map">		
					<div class="row">
						<div class="col-md-12">
							<img src="/img/gmc/gmc_premade_map1.png" id="gmc_premade_map_clean_grey" class="img-responsive center-block btn--premade-map" alt="premade map">
						</div>
					</div>
					<div class="row margin--element_top_xs">
						<div class="col-md-12">
							<img src="/img/gmc/gmc_premade_map2.png" id="gmc_premade_map_blue_water" class="img-responsive center-block btn--premade-map" alt="premade map">
						</div>
					</div>
					<div class="row margin--element_top_xs">
						<div class="col-md-12">
							<img src="/img/gmc/gmc_premade_map3.png" id="gmc_premade_map_midnight_commander" class="img-responsive center-block btn--premade-map" alt="premade map">
						</div>
					</div>
					<div class="row margin--element_top_xs">
						<div class="col-md-12">
							<img src="/img/gmc/gmc_premade_map4.png" id="gmc_premade_map_endless_atlas" class="img-responsive center-block btn--premade-map" alt="premade map">
						</div>
					</div>
					<div class="row margin--element_top_xs">
						<div class="col-md-12">
							<img src="/img/gmc/gmc_premade_map5.png" id="gmc_premade_map_grey_shades" class="img-responsive center-block btn--premade-map" alt="premade map">
						</div>
					</div>
				</div>
			</div>

			<div class="sidebar--main__footer">
				<div class="row">
					<div class="col-xs-12">
						<a class="pull-left" href="/blog/how_to_customize_google_map_and_export_high_quality_images_using_google_map_customizer">
							<img src="/img/gmc/gmc_help.png" class="pull-left" alt="help">	
							<p class="txt__color--regular txt--default pull-left">&#160; How to Use?</p>
						</a>
						<a class="pull-right" href="/">
							<p class="txt__color--regular txt--default pull-right">© Aaron Cheng</p>
						</a>
					</div>
				</div>
			</div>
		</div>

<?php include 'component/script.php';?>


	<script src="/js/color2color.js" type="text/javascript"></script> 
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