<!DOCTYPE html>
<html>
<head>
	<title>Striim - Flow Designer</title>

<?php include '../component/head.php';?>

<?php include '../component/style.php';?>

</head>

<body>

<?php include '../component/nav.php';?>
	<div class="container-fluid box--no_padding hidden-sm hidden-xs">
		<div class="row">
			<div class="col-md-12" >
				<img src="/img/work/striim_flow_designer/hero.jpg" class="img-responsive center-block" alt="Hero image">
			</div>
		</div>
	</div>	

	<div class="container-fluid box--no_padding hidden-md hidden-lg">
		<div class="row">
			<div class="col-md-12" >
				<img src="/img/work/striim_flow_designer/hero_mobile.jpg" class="img-responsive center-block" alt="Hero image">
			</div>
		</div>
	</div>
		
	<div class="container work__header__wrapper">
<!-- 		<div class="row">
			<div class="col-md-3 col-md-offset-1 margin--element_top">
				<img src="/img/work/striim_flow_designer/striim_flow_designer_logo.png" class="img-responsive center-block margin--element_top" alt="Striim Logo">
			</div>			

			<div class="col-md-8 margin--element_top_sm">
				<img src="/img/work/work_img_striim_fd.png" class="img-responsive center-block" alt="Striim Flow Designer Screenshot">
			</div>
		</div> -->

		<div class="row">
			<div class="col-md-12 margin--element_top">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-left txt--title">Striim - Flow Designer</h1>
						<p class="margin--element_top_sm">Flow designer is one of Striim’s core products. It allows users building data pipeline to ingest high-speed streaming data from a wide variety of sources and deliver it to many different types of systems. </br></br>

 I joined as the lead designer when the company was rebranding its entire product. The goal of this project is to improve the overall user experience of the flow designer and define the new UI infrastructure to accommodate all the current and future products, and deliver simple and consistent user experience across the entire platform.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_top_lg margin--section_top">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-12">
							<p class="txt--primary_on_light">Flow designer is the first project I worked on after I joined Striim and also my first enterprise software design. I have to learn a lot of big data related concepts and understand all Striim’s products. However, I really enjoyed this challenging yet interesting task and would like to share my design process with you.</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6 margin--element_top_lg">
							<div class="img__wrapper">
								<div class="web-view__browser_head">
									<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
								</div>
								<div class="divider--horizontal--even"></div>

								<img src="/img/work/striim_flow_designer/previous_flow_designer.jpg" class="img-responsive center-block" alt="Previous Flow Designer">
							</div>	
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Previous Flow Designer</p>
						</div>

						<div class="col-md-6 margin--element_top_lg">
							<div class="img__wrapper">
								<div class="web-view__browser_head">
									<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
								</div>
								<div class="divider--horizontal--even"></div>

								<img src="/img/work/striim_flow_designer/new_flow_designer.jpg" class="img-responsive center-block" alt="New Flow Designer">
							</div>	
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">New Flow Designer</p>
						</div>				
					</div>
				</div>		
			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-12">
							<h2 class="txt--subtitle">Step 1: Understand the System</h2>
							<p class="txt--primary_on_light margin--element_top_xs">Many UX designers tend to begin the design by storyboarding a critical user path and one interaction flow will lead to the design of another interaction flow. After they have all the flows, the next step is to define the layout, navigation, color scheme and etc. But the problem is while working on a single flow, we can’t see the big picture of the entire system and how various objects relate to one another.</br></br>

So when I started working on the Flow Designer, instead of diving directly to the actual design, I worked with the PMs and engineers to create an object map showing all the objects with their actions and nest objects. This map tells 3 things about the system: </br></br>
What objects are in the product? </br>
What can each object do?</br>
How does each object relate to other objects?
</p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-10 col-md-offset-1 margin--element_top" >
							<img src="/img/work/striim_flow_designer/object_map.png" class="img-responsive center-block" alt="Object map">
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">An object map showing objects with their actions & nest objects</p>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 margin--element_top">
							<p class="txt--primary_on_light">The next step is to prioritize the objects and actions. There are three types of objects in Flow Designer: App, Flow, and Component. Component is the base unit of a data pipeline and editing components is the most important interaction in Flow designer. Flow is simply a collection of Components, which is the least important object in the system. App is the data pipeline composed of multiple flows and components. App has only global actions that have no direct impact to the components, so together with Flow, we can consider them as the secondary interactions. The reordered object map can help me make design decisions when I design the Flow Designer.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-10 col-md-offset-1 margin--element_top" >
							<img src="/img/work/striim_flow_designer/reordered_object_map.png" class="img-responsive center-block" alt="Reordered object map">
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Reordered based on how important each element is.</p>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container padding--element_top_lg">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="row">
					<div class="col-md-12">
						<h2 class="txt--subtitle">Step 2: Define the UI Architecture for the Entire Platform</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="txt--primary_on_light margin--element_top_xs">Now I have a better understanding of the system and it is the time to design the UI. However, since the new UI will be used for not only the Flow Designer but also other Striim products, I need to study all the existing interfaces/interactions and define a consistent UI architecture across the entire platform.</br></br>

Let’s take a break from the Flow Designer for awhile.</p>
					</div>
				</div>

				<div class="row margin--element_top">
					<div class="col-md-6 margin--element_top_sm">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/previous_fd_design.jpg" class="img-responsive center-block" alt="Flow Designer (Previous design)">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Flow Designer (Previous design)</p>
					</div>

					<div class="col-md-6 margin--element_top_sm">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/previous_dashboard_design.jpg" class="img-responsive center-block" alt="Dashboard (Previous design)">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Dashboard (Previous design)</p>
					</div>

					<div class="col-md-6 margin--element_top_sm">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/previous_monitor_design.jpg" class="img-responsive center-block" alt="Health Monitor (Previous design)">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Health Monitor (Previous design)</p>
					</div>

					<div class="col-md-6 margin--element_top_sm">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/previous_admin_design.jpg" class="img-responsive center-block" alt="Management (Previous design)">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Management (Previous design)</p>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="txt--primary_on_light margin--element_top">Striim has 4 major products: Flow Designer, Dashboard, Health Monitor and Management. The existing products still have many things to improve, but they give me some rough ideas about the functionality and the possible interactions/interfaces I can expect. </br></br>

Based on the research, I was able to create the modularized UI architecture and define the usage and style for each module.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container padding--element_bottom_lg">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="row">
					<div class="col-md-12 margin--element_top" >
						<img src="/img/work/striim_flow_designer/architecture_layout.png" class="img-responsive center-block" alt="UI Architecture - Layout">
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Define the usage of each module style.</p>	
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 margin--element_top_lg" >
						<img src="/img/work/striim_flow_designer/architecture_color.png" class="img-responsive center-block" alt="UI Architecture - Color">
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Define the style of each module style: Smaller number has darker color and higher elevation.</p>	
					</div>
				</div>
			</div>
		</div>

		<div class="row margin--element_top">
			<div class="col-md-offset-4 col-md-4">
				<a class="btn btn--primary btn--highlight" href="http://www.chengfolio.com/work/striim_style_guide"><p class=" ">View Striim's Style Guide</p></a>
			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="txt--subtitle">Step 3: Bind Objects to the UI Architecture</h2>
							<p class="txt--primary_on_light margin--element_top_xs">The final step is to bind all the objects to the new UI architecture. All the flows and components are placed at the center of the canvas. The left tool bar lists the component icons, which can be dragged and dropped on the canvas to create new components. The right side panel shows the detail info of the selected component.</p>
						</div>
					</div>

<!-- 					<div class="row">
						<div class="col-md-12 margin--element_top" >
							<img src="/img/work/striim_flow_designer/architecture_flow_designer.png" class="img-responsive center-block" alt="UI Architecture - Flow Designer">
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Striim's product sitemap</p>	
						</div>
					</div> -->

					<div class="row">
						<div class="col-md-10 col-md-offset-1 margin--element_top" >
							<img src="/img/work/striim_flow_designer/define_flow_designer_canvas.png" class="img-responsive center-block" alt="Define the canvas layout">
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Important interactions are placed in the center of the page.</p>	
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<p class="txt--primary_on_light margin--element_top">All the secondary interactions are placed on the sub nav bar. Start/Stop is the most important action to an App, so it is centered in the sub nav bar. All other objects/actions are placed on the right side except for the flow map, which has relatively complicated settings and thus is positioned on the left side.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-10 col-md-offset-1 margin--element_top" >
							<img src="/img/work/striim_flow_designer/define_flow_designer_sub_nav.png" class="img-responsive center-block" alt="Define the sub navigation bar layout">
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Secondary interactions are place on the sub nav bar.</p>	
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="container padding--element_top_lg">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="txt--subtitle">Edit Components</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-10 col-md-offset-1 margin--element_top" >
						<img src="/img/work/striim_flow_designer/side_panel.gif" class="img-responsive center-block" alt="Animation showing how the side panel works">
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">How the side panel works</p>	
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p class="txt--primary_on_light margin--element_top">Editing components is the most important as well as the most frequent interaction. The problem of the previous design is: the component’s settings are in a popover. In order for the users to edit another component, they have to close current popover first and then click another component. To solve this problem, in the new design, the popover is replaced by the side panel. If users want to edit a different component, they can simply click that component and the content in the side panel will change accordingly. Moreover, since the side panel only takes a small portion of the screen, users can still see the overall data pipeline while they are editing an individual component. </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid padding--element_bottom_lg">
		<div class="row">
			<div class="col-md-12">

				<div class="row">
					<div class="col-md-12 margin--element_top_lg" >
						<img src="/img/work/striim_flow_designer/old_flow.png" class="img-responsive center-block" alt="Flow of the previous design">
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">In previous design, It takes 5 steps to edit 2 components.</p>	
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 margin--element_top_lg" >
						<img src="/img/work/striim_flow_designer/new_flow.png" class="img-responsive center-block" alt="Flow of the new design">
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">In the new design, It takes only 2 steps to edit 2 components.</p>	
					</div>
				</div>
			</div>		
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_top_lg">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-8">
							<h2 class="txt--subtitle">App Status</h2>
	<!-- 						<p class="txt--primary_on_light margin--element_top_xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non magna quis tortor egestas dignissim sit amet quis ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec dignissim quam pretium fermentum varius. Curabitur nec rutrum erat. Vivamus ut risus lorem. Nullam consequat sollicitudin efficitur. Suspendisse potenti. Integer aliquet dolor lectus, quis dictum arcu accumsan sit amet. Integer cursus gravida auctor. </p> -->
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_bottom_lg">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-8">
<!-- 							<p class="txt--primary_on_light margin--element_top_xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non magna quis tortor egestas dignissim sit amet quis ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec dignissim quam pretium fermentum varius. Curabitur nec rutrum erat. Vivamus ut risus lorem. Nullam consequat sollicitudin efficitur. Suspendisse potenti. Integer aliquet dolor lectus, quis dictum arcu accumsan sit amet. Integer cursus gravida auctor. </p> -->
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 margin--element_top" >
							<div class="img__wrapper">
								<div class="web-view__browser_head">
									<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
								</div>
								<div class="divider--horizontal--even"></div>

								<img src="/img/work/striim_flow_designer/undeployed_status.png" class="img-responsive center-block" alt="Undeployed status">	
							</div>	
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Undeployed status</p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 margin--element_top" >
							<div class="img__wrapper">
								<div class="web-view__browser_head">
									<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
								</div>
								<div class="divider--horizontal--even"></div>

								<img src="/img/work/striim_flow_designer/deployed_status.png" class="img-responsive center-block" alt="Deployed status">	
							</div>	
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Deployed status</p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 margin--element_top" >
							<div class="img__wrapper">
								<div class="web-view__browser_head">
									<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
								</div>
								<div class="divider--horizontal--even"></div>

								<img src="/img/work/striim_flow_designer/running_status.png" class="img-responsive center-block" alt="Running status">	
							</div>	
							<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Running status</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="container padding--element_top_lg">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="row">
					<div class="col-md-8">
						<h2 class="txt--subtitle">Edit & Navigate Flow</h2>
<!-- 						<p class="txt--primary_on_light margin--element_top_xs">During the business card design, I thought it would be extremely cool if all the information is aligned in one line. So I put the name and title on the front of the card and contact info on the back. The unique but elegant design perfectly matches Boutique Sui's overall style.</p> -->
					</div>
				</div>			
			</div>
		</div>
	</div>

	<div class="container-fluid padding--element_bottom_lg">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12 margin--element_top_lg">

						<a href="/img/work/striim_flow_designer/flow_chart.png"><img src="/img/work/striim_flow_designer/flow_chart.png" class="img-responsive center-block" alt="The flow chart of Flow"></a>

						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">The flow chart of Flow</p>
					</div>									
				</div>
			</div>		
		</div>
	</div>

<!-- 	<div class="container padding--element_top_lg">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="row">
					<div class="col-md-8">
						<h2 class="txt--subtitle">App List Page</h2>
						<p class="txt--primary_on_light margin--element_top_xs">During the business card design, I thought it would be extremely cool if all the information is aligned in one line. So I put the name and title on the front of the card and contact info on the back. The unique but elegant design perfectly matches Boutique Sui's overall style.</p>
					</div>
				</div>			
			</div>
		</div>
	</div>

	<div class="container-fluid padding--element_bottom_lg">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6 margin--element_top_lg">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/app_list.jpg" class="img-responsive center-block" alt="App list">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">App list</p>
					</div>

					<div class="col-md-6 margin--element_top_lg">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/app_list_hover.jpg" class="img-responsive center-block" alt="Business Card Front">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Hover App</p>
					</div>

					<div class="col-md-6 margin--element_top_lg">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/app_list_new_app.jpg" class="img-responsive center-block" alt="Boutique Sui Home Page Design - Black version">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">New App</p>
					</div>	


					<div class="col-md-6 margin--element_top_lg">
						<div class="img__wrapper">
							<div class="web-view__browser_head">
								<img src="/img/global/icon_browser_head.png" class="img-responsive" alt="Browser head">
							</div>
							<div class="divider--horizontal--even"></div>

							<img src="/img/work/striim_flow_designer/app_list_upload.jpg" class="img-responsive center-block" alt="Business Card Front">
						</div>	
						<p class="txt--primary_on_light margin--element_top_xs txt--img_caption">Upload App</p>
					</div>										
				</div>
			</div>		
		</div>
	</div> -->


	<div class="work__background--differentiator">
		<div class="container padding--element_lg">

<?php include '../component/social.php';?>

		</div>
	</div>

<?php include '../component/footer.php';?>

<?php include '../component/script.php';?>

</body>
</html>