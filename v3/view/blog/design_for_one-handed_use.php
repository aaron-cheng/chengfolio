<!DOCTYPE html>
<html>
<head>
	<title>Mobile UI Design Pattern for One-handed Use</title>

<?php include '../component/head.php';?>

<?php include '../component/style.php';?>
<style type="text/css">
	.zone_base{
		cursor: pointer;
	}
	.zone_overlay{
		cursor: pointer;
		display: none;
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
						<h1 class="txt--regular txt--xxl txt--primary_on_light">Mobile UI Design Pattern for One-handed Use</h1>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_top_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p>I remember before the smart phone was invented, I could use only one hand to type text messages and make calls. But now I have to use two hands to finish some tasks on my iPhone. The main reason is that the screen gets bigger and it is hard to reach the upper part. It sounds like an obvious problem, but why do we still insist putting those buttons at those awkward locations? I guess the answer from most people is ‘because everybody is doing that.‘ Well, I think now it is time to break the rule and start doing the right thing. I happen to be redesigning an e-commerce app recently and it is the perfect opportunity to explore the possibility of creating a one-handed use design pattern for mobile apps. </p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_discovery.jpg" class="img-responsive center-block" alt="Discovery Page">			
					<p class="text-center">Discovery Page</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_search.jpg" class="img-responsive center-block" alt="Search Page">			
					<p class="text-center">Search Page</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_shopping_bag.jpg" class="img-responsive center-block" alt="Shopping Bag">			
					<p class="text-center">Shopping Bag</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_me.jpg" class="img-responsive center-block" alt="Me Page">			
					<p class="text-center">Me Page</p>
				</div>				
			</div>
		</div>	
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Identify the ‘safe zone‘</h2>
					<p class="margin--element_top_xs">Before we jump into the design, we need to figure out the ‘safe zone‘ on the screen. I use iPhone 6 for the test. Because if the design works on iPhone 6 and it should work better on smaller screens. Those smart phones bigger than iPhone 6 are designed for two-handed use and there is no need to worry about them. </br></br>

The green color indicates the ‘safe zone‘ in which it is easy to move my thumb around. Within the blue area, it gets a little bit harder, but I am still able to reach any spot. The red zone is the area that is impossible for me to reach without moving my other fingers. So in our design, we should put all the buttons and other interactive elements within the green and blue area and stay away from the red zone.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/green_zone.jpg" class="img-responsive center-block" alt="Easy zone">			
					<p class="text-center">Easy</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/blue_zone.jpg" class="img-responsive center-block" alt="Ok zone">			
					<p class="text-center">Ok</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/red_zone.jpg" class="img-responsive center-block" alt="Hard zone">			
					<p class="text-center">Hard</p>
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Find the problems</h2>
					<p class="margin--element_top_xs">Now let’s take a look at some examples and find the problems we are gonna solve. Basically, there are 4 types of interactive elements often being used in the red zone: List of items, Back button, Sub navigation and Action buttons.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/fancy_screenshot.jpg" class="img-responsive center-block" alt="Fancy screenshot">			
					<p class="text-center">Back button (Fancy: Detail)</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/spring_screenshot.jpg" class="img-responsive center-block" alt="Spring screenshot">			
					<p class="text-center">Sub Navigation (Spring: Shop)</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/facebook_new_feed_screenshot.jpg" class="img-responsive center-block" alt="Facebook news feed">			
					<p class="text-center">Buttons (Facebook: News Feed)</p>
				</div>	
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/facebook_screenshot.jpg" class="img-responsive center-block" alt="Facebook screenshot">			
					<p class="text-center">List of items (Facebook: More)</p>
				</div>			
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Solution for ‘Back button’: Popover window</h2>
					<p class="margin--element_top_xs">Back button is one of the most used buttons on mobile app. Android phone even makes it a fixed physical key. However, it is placed at the top-left corner of the screen in iOS, which is extremely hard to reach. The idea of the solution comes from the popover window on desktop: to close the popover, we tend to click anywhere outside the popover other than the close button. In the new detail page design, I put the detail info in a big popover, which is actually the same size as the old design, but the dimmed status bar and tab bar makes it look like floating above the previous page.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/old_detail_overlay.jpg" class="img-responsive center-block zone_overlay" alt="old detail page with overlay">
					<img src="/img/blog/one_handed_use/old_detail.jpg" class="img-responsive center-block zone_base" alt="old detail page">
					<p class="text-center">Detail (Previous)</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_detail_overlay.jpg" class="img-responsive center-block zone_overlay" alt="new detail page with overlay">
					<img src="/img/blog/one_handed_use/new_detail.jpg" class="img-responsive center-block zone_base" alt="new detail page">			
					<p class="text-center">Detail (New)</p>
				</div>	
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_detail_flow.gif" class="img-responsive center-block" alt="new detail flow">			
					<p class="text-center">Detail Flow (New)</p>
				</div>							
			</div>
<!-- 			<div class="row margin--element_top">
				<div class="col-md-8 col-md-offset-2">
					<img src="/img/blog/one_handed_use/detail_flow.png" class="img-responsive center-block" alt="Detail page flow">
					<p class="text-center">Flow</p>
				</div>		
			</div> -->

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Solution for ‘Sub navigation’: Enable left-right swiping</h2>
					<p class="margin--element_top_xs">It is relatively easy to solve this problem. All we need to do is to enable users swiping left and right to switch among different tabs. In the new ‘Discovery’ design, I changed the style of the sub navigation to make it look like more swipeable. </p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/old_discovery_overlay.jpg" class="img-responsive center-block zone_overlay" alt="old discovery page with overlay">
					<img src="/img/blog/one_handed_use/old_discovery.jpg" class="img-responsive center-block zone_base" alt="old discovery page">
					<p class="text-center">Discovery (Previous)</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_discovery_overlay.jpg" class="img-responsive center-block zone_overlay" alt="new discovery page with overlay">
					<img src="/img/blog/one_handed_use/new_discovery.jpg" class="img-responsive center-block zone_base" alt="new discovery page">			
					<p class="text-center">Discovery (New)</p>
				</div>		
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_discovery_flow.gif" class="img-responsive center-block" alt="new search page flow">		
					<p class="text-center">Discovery Flow (New)</p>
				</div>		
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Solution for ‘Action buttons’: Move everything to the tab bar</h2>
					<p class="margin--element_top_xs">Back button is one of the most used buttons on mobile app. Android phone even makes it a fixed physical key. However, it is placed at the top-left corner of the screen in iOS, which is extremely hard to reach. The idea of the solution comes from the popover window on desktop: to close the popover, we tend to click anywhere outside the popover other than the close button. In the new detail page design, I put the detail info in a big popover, which is actually the same size as the old design, but the dimmed status bar and tab bar makes it look like floating above the previous page.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/old_search_overlay.jpg" class="img-responsive center-block zone_overlay" alt="old search page with overlay">
					<img src="/img/blog/one_handed_use/old_search.jpg" class="img-responsive center-block zone_base" alt="old search page">
					<p class="text-center">Search (Previous)</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_search_overlay.jpg" class="img-responsive center-block zone_overlay" alt="new search page with overlay">
					<img src="/img/blog/one_handed_use/new_search.jpg" class="img-responsive center-block zone_base" alt="new search page">			
					<p class="text-center">Search (New)</p>
				</div>		
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_search.gif" class="img-responsive center-block" alt="new search page flow">		
					<p class="text-center">Search Flow (New)</p>
				</div>	
			</div>
<!-- 			<div class="row margin--element_top">
				<div class="col-md-10 col-md-offset-1">
					<img src="/img/blog/one_handed_use/search_flow.png" class="img-responsive center-block" alt="search page flow">
					<p class="text-center">Flow</p>
				</div>		
			</div> -->

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Solution for ‘list of items’: Make the first item bigger or add informative content</h2>
					<p class="margin--element_top_xs">List items stack from top to bottom. To avoid placing them in the red zone, we need to push them down. There are 2 ways of doing this without leaving an empty space: 

1. Make the first item big enough so the bottom part can reach the safe zone. In the redesigned ‘Me‘ page, the user’s avatar is enlarged and the user can click its bottom part to edit the profile image. 

2. Add informative content to the top. In the new shopping cart design, I moved shipping and tax fees on the top of the page to push the first item to the safe zone. However, you can notice that only the bottom part of the item is in the safe zone, to make it easy for users to click the ‘X‘ icon, I move it to the bottom and change it to ‘REMOVE‘.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4 col-md-offset-2">
					<img src="/img/blog/one_handed_use/old_me_overlay.jpg" class="img-responsive center-block zone_overlay" alt="old me page with overlay">
					<img src="/img/blog/one_handed_use/old_me.jpg" class="img-responsive center-block zone_base" alt="old me page">
					<p class="text-center">Me (Previous)</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_me_overlay.jpg" class="img-responsive center-block zone_overlay" alt="new me page with overlay">
					<img src="/img/blog/one_handed_use/new_me.jpg" class="img-responsive center-block zone_base" alt="new me page with">			
					<p class="text-center">Me (New)</p>
				</div>			
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4 col-md-offset-2">
					<img src="/img/blog/one_handed_use/old_shopping_bag_overlay.jpg" class="img-responsive center-block zone_overlay" alt="old shopping bag with overlay">
					<img src="/img/blog/one_handed_use/old_shopping_bag.jpg" class="img-responsive center-block zone_base" alt="old shopping bag">
					<p class="text-center">Shopping Bag (Previous)</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/new_shopping_bag_overlay.jpg" class="img-responsive center-block zone_overlay" alt="new shopping bag with overlay">
					<img src="/img/blog/one_handed_use/new_shopping_bag.jpg" class="img-responsive center-block zone_base" alt="new shopping bag with overlay">			
					<p class="text-center">Shopping Bag (New)</p>
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
	$( ".zone_overlay" ).mouseleave(
	  function() {
	    $( ".zone_base" ).css("display","block");
	    $( ".zone_overlay" ).css("display","none");
	  }
	);
	$( ".zone_base" ).mouseenter(
	  function() {
	    $( ".zone_base" ).css("display","none");
	    $( ".zone_overlay" ).css("display","block");
	  }
	);	
</script>

</body>
</html>