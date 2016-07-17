<!DOCTYPE html>
<html>
<head>
	<title>A Study of Advanced Searching and Filtering</title>

<?php include '../component/head.php';?>

<?php include '../component/style.php';?>

</head>

<body>

<?php include '../component/nav.php';?>

<article>
	<div class="container padding--element_lg">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-12">
						<h1 class="txt--regular txt--xxl txt--primary_on_light">A Study of Advanced Searching and Filtering</h1>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p>‘My Object‘ is a new feature we recently added to the Striim’s platform. It is essentially a list of different types of objects. However, the challenging part is the design of the filter and search functionality. During the process, I came up with 3 different options and it is quite interesting to see how the design evolved.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4">
					<img src="/img/blog/my_objects/my_objects_v1.png" class="img-responsive center-block" alt="My Objects Option 1 Screenshot">			
					<p class="text-center">Option 1</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/my_objects/my_objects_v2.png" class="img-responsive center-block" alt="My Objects Option 2 Screenshot">			
					<p class="text-center">Option 2</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/my_objects/my_objects_v3.png" class="img-responsive center-block" alt="My Objects Option 3 Screenshot">			
					<p class="text-center">Option 3</p>
				</div>				
			</div>
			<div class="row margin--element_top">
				<div class="col-md-8 col-md-offset-2">
					<p>Before I start to design anything, the first thing I do is to extract all the related objects and study their relationship and properties. At Striim, there are 3 types of objects: Namespace, App and Components. ‘Namespace’ acts like a folder used to organize ‘Apps’ and ‘Component’, which can only be filtered by ‘Object Type‘. ‘App‘ is a data pipeline that consists of different ‘Components‘. It can be filtered by both ‘Object Type ‘ and ‘Namespace‘. There are 7 types of ‘Components‘: Source, Cache, Window, CQ, WactionStore, Alert and Type. All ‘Components’ can be filtered by ‘Object Type‘, ‘Namespace‘ or ‘App‘.
					</p>
				</div>
			</div>

			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/my_objects/filter_relationship_diagram.png" class="img-responsive center-block" alt="Filter relationship diagram">			
				</div>			
			</div>
			<div class="row margin--element_top">
				<div class="col-md-8 col-md-offset-2">
					<p>To measure the functionality of the design, I created 3 user tasks from simple to complex:</br></br>

<b>Single filter</b>: Show all the Caches with the keyword ‘merchant‘.</br></br>

<b>Multiple filters</b>: Show all the Caches under ‘myNameSpace‘ with the keyword ‘merchant‘.</br></br>

<b>Multiple criteria</b>: Show all the Caches under ‘myNameSpace‘ with the keyword ‘merchant‘ and all the Sources under any Namespace.
					</p>
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Option 1: Single filter</h2>
					<p class="margin--element_top_xs">Since the ‘Object Type‘ is the only filter that can be applied to all objects, the idea of Option 1 is to emphasize this filter and make it really easy to use. So I lists all the object types on top, which allows users quickly filtering any object type by one simple click. But this design is limited to single filter and users can’t filter objects by ‘Namespace‘ or ‘App‘. </p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/my_objects/my_object_option1_flow.png" class="img-responsive center-block" alt="Option 1 flow chart">			
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Option 2: Multiple filters</h2>
					<p class="margin--element_top_xs">In Option 2, I replaced those object icons with 3 filter buttons below the search box. Users can create multiple filters by clicking any button and multi-select the options in the dropdown list. However, this design still has 2 major problems. The first one is those filters are all in ‘AND‘ relation, so there is no way to do something like “Show all the Caches under ‘myNameSpace‘ and all the Sources under any Namespace“. The second problem is the interface only shows the number of the applied filters.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/my_objects/my_object_option2_flow.png" class="img-responsive center-block" alt="Option 2 flow chart">			
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Option 3: Multiple criteria</h2>
					<p class="margin--element_top_xs">Filter with multiple criteria requires complicated interactions. What Option 2 does is merely a single criteria. To enable multiple-criteria filtering based on Option 2’s design logic, I will have to provide an ‘Add‘ button somewhere and ask users to repeat the flow every time they add a new criteria. The process works but the problem is those filters can potentially take a big chunk of space and users will see less objects in the list.</br></br>     

To solve the problem, I integrated the filter with the search bar. (If you think about it, search is actually a type of filter, so it makes perfect sense to put them together!) When users click the search bar, a drop down will list 3 categories of filter and then users can follow the similar process in Option 2 to keep adding more ‘AND’ filters until they hit ‘Enter‘, which will end the current criteria and put it under the search bar. Users can add more ‘OR‘ criteria by repeating the previous process. Compared with the other 2 options, Option 3 solves the most complicated problem with the simplest UI - a search bar. </p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/my_objects/my_object_option3_flow.png" class="img-responsive center-block" alt="Option 3 flow chart">			
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