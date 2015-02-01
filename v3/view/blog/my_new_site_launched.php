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
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-12">
						<h1 class="txt--regular txt--xxl txt--primary_on_light">My new website launched!</h1>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<img src="/img/blog/website_v3/v3_logo.png" class="img-responsive center-block" alt="Aaron Cheng Portfolio">	
					<p class="txt--md margin--element_top_xs text-right">New Logo for my website</p>				
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 margin--element_top_lg">
					<p>I had this idea of redesigning my website a couple of months ago. The purpose is to provide a place to quickly store and showcase my work and share ideas with those who are interested in design and technology. Today, I’ve published my new, redesigned and coded-from-scratch website.</p>
				</div>
			</div>
		</div>	
	</div>


	<div class="container-fluid work__background--differentiator">
		<div class="row">
			<div class="col-md-12">
				<img src="/img/blog/website_v3/v3_work_samples.png" class="img-responsive center-block" alt="Selected work samples">					
			</div>
		</div>
	</div>	

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Philosophy</h2>
					<p class="margin--element_top">I am not particularly interested in a specific style. Just like modernist architect Louis Sullivan said: ’Form follows function’, I think the purpose of design is to help users better use the product. In my case, the website design should be a platform to present my design works. Thus, the overall design is reduced to minimal but still maintains the functionality. I used typical navigation bar, footer and white/gray background that almost every web has, and gave up all the special effects and animation used in modern web design. The idea is to make the website disappear as much as possible and make the contents stand out. When a designer needs a background for his/her APP mockup, iPhone is always the first choice. Why? Because iPhone facilitates the presentation of the design without catching more attention than the content.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2 margin--element_top_lg">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Work</h2>
					<p class="margin--element_top">As a freelancer designer, I did a lot of part time job for some startups. The problem is I didn’t go through the entire process and can’t control the design quality. In my previous website, I have some projects like that and they are misleading to the visitors of my website. So in this version, I eliminated all those projects and keep only those that I think meet my standard. Even for those I kept, I completely redesigned the layout and added many more contents to better illustrate each project. </p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2 margin--element_top_lg">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Blog</h2>
					<p class="margin--element_top">It takes a long time to finish a project and organize the drawings until it is published online. It is important to update a website frequently to keep it active. Also, sometimes after hours of research about a technical or design question, I have a strong feeling to write it down and share the materials to benefit the others. In my latest website, I added the Blog section. This is the place I can quickly share my thoughts, in-progress design works and useful tools. So far, I don’t have many posts at this moment. But I have a list of things will be added shortly.</p>
				</div>
			</div>		


			<div class="row">
				<div class="col-md-8 col-md-offset-2 margin--element_top_lg">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Coding</h2>
					<p class="margin--element_top">I have not a programmer, but I know enough to do all the UI related front-end coding. I built this website from scratch and I feel the code is organized much better and more efficient than previous version. I would like to share some experience with those who are interested build their own websites. </br></br>
					Hosting – my website is hosted on Google App Engine. I got Google Apps for Work before Google started charging for that. There is nothing to complain about the free hosting on top tech giant’s server. The only drawback is that you have to configure the ‘app.yaml’ file, which is not as easy as drag/drop using other service like Godaddy.</br></br>
					CMS – I was thinking about using Wordpress, but eventually gave up because it requires Google Cloud Platform and it seems too clunky for such a simple and small website. What I did instead is a self-build “semi”-CMS: flat content containing files. PHP is definitely useful in terms of reusing the repetitive code, e.g. navigation bar, footer and etc. In fact you don’t need to know anything about PHP, all you need is to ‘include’ those files.</br></br>
					Bootstrap – Bootstrap really makes my life easier. ‘Fluid Container’ comes back to the latest Bootstrap, which is useful to add full-width image and create layout with variety. But I only recommend using its grid system, because the default style can’t meet my design requirements and it is extremely confusing to modify CSS.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2 margin--element_top_lg">
					<h2 class="txt--bold txt--lg txt--primary_on_light">What’s next?</h2>
					<p class="margin--element_top">I’m planning to redesign the Google Map Customizer. Since its launch, I have received a lot of feedback from my users, and there are over 100 users using it everyday. But I know there are so much more I can do.</br></br>
					Keep updated.</p>
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