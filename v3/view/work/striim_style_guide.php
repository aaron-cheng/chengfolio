<!DOCTYPE html>
<html>
<head>
	<title>Striim - Style Guide</title>

<?php include '../component/head.php';?>

<?php include '../component/style.php';?>
<style type="text/css">
	.zone_base{
		cursor: pointer;
		display: none;
	}
	.zone_overlay{
		cursor: pointer;
	}
</style>

</head>

<body>

<?php include '../component/nav.php';?>

<article>
	<div class="container padding--element_lg">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-12">
						<h1 class="txt--regular txt--xxl txt--primary_on_light">Striim - Style Guide</h1>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_top">
			<div class="row">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Input.jpg" class="img-responsive center-block" alt="Input">			
				</div>			
			</div>

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Buttons.jpg" class="img-responsive center-block" alt="Buttons">			
				</div>			
			</div>

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Color.jpg" class="img-responsive center-block" alt="Color">			
				</div>			
			</div>

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Typography.jpg" class="img-responsive center-block" alt="Typography">			
				</div>			
			</div>		

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/POPOVERS_TOOLTIPS_MODALS.jpg" class="img-responsive center-block" alt="POPOVERS_TOOLTIPS_MODALS">			
				</div>			
			</div>	

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Navigation.jpg" class="img-responsive center-block" alt="Navigation">			
				</div>			
			</div>		

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/List.jpg" class="img-responsive center-block" alt="List">			
				</div>			
			</div>		

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Tile.jpg" class="img-responsive center-block" alt="Tile">			
				</div>			
			</div>	

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Side Panel.jpg" class="img-responsive center-block" alt="Side Panel">			
				</div>			
			</div>

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/Side Panel - FD Components.jpg" class="img-responsive center-block" alt="Side Panel - FD Components">			
				</div>			
			</div>		

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/work/striim_style_guide/FD Left Sidepanel.jpg" class="img-responsive center-block" alt="FD Left Sidepanel">			
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

<script type="text/javascript">
	$( ".zone_overlay" ).mouseenter(
	  function() {
	    $( ".zone_base" ).css("display","block");
	    $( ".zone_overlay" ).css("display","none");
	  }
	);
	$( ".zone_base" ).mouseleave(
	  function() {
	    $( ".zone_base" ).css("display","none");
	    $( ".zone_overlay" ).css("display","block");
	  }
	);	
</script>

</body>
</html>