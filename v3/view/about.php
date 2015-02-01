<!DOCTYPE html>
<html>
<head>
	<title>About</title>

<?php include 'component/head.php';?>

<?php include 'component/style.php';?>

</head>

<body>

<?php include 'component/nav.php';?>

	<div class="container padding--element_lg">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row visible-sm visible-xs">
					<div class="col-sm-8 col-sm-offset-2">
						<img src="/img/about/img_portrait.png" class="img-responsive margin--element_bottom center-block" alt="Aaron Cheng's Portrait">	
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h1 class="txt--title">About</h1>
								<p class="margin--element_top">Welcome to Aaron Cheng's Portfolio.</br></br> This is the place I share my thoughts, design works and useful tools. I am a designer with a wide range of interests including architectural, industrial and visual design. Currently I am focusing on UI/UX design. Having graduated from Rice University, I moved to San Francisco Bay Area and worked with several startup companies on the user interface and website design. Design to me has much broader meaning than graphic, it is the combination of logic, technology and esthetics. </br></br>Everything is design.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 hidden-sm hidden-xs">
						<img src="/img/about/img_portrait.png" class="img-responsive margin--element_top center-block" alt="Aaron Cheng's Portrait">	
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- <div class="work__background--differentiator"> -->
	<div class="container padding--element_bottom_lg">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 class="txt--title">Contact</h1>
			</div>
		</div>	
		<div class="row">
<!-- 			<div class="col-md-5 col-md-offset-1">
				<form class="row margin--element_top" method="post" action="/view/formmail.php">
					<input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
					<input type="hidden" name="recipients" value="aaron@chengfolio.com" />
					<input type="hidden" name="subject"	value="[chengfolio-Contact-Form] You got a msg!" />
					<input type="hidden" name="required" value="EmailAddr:Your Email address,FirstName:Your first name,LastName:Your last name" />
					<input type="hidden" name="good_url"  value="/">
					<label class="col-xs-12 " for="FirstName">First Name:</label>
					<div class="col-xs-12">
						<input name="FirstName" type="text" class="margin--element_top_xxs margin--element_bottom_xs col-xs-12">
					</div>
			  		<label class="col-xs-12" for="LastName">Last Name:</label>
			  		<div class="col-xs-12">
			  			<input name="LastName" type="text" class="margin--element_top_xxs margin--element_bottom_xs col-xs-12">
			  		</div>
					<label class="col-xs-12" for="Email">Email:</label>
						<div class="col-xs-12">
			    	<input name="EmailAddr" type="text" class="margin--element_top_xxs margin--element_bottom_xs col-xs-12">
			    	</div>
			    	<label class="col-xs-12" for="Subject">Subject:</label>
			    	<div class="col-xs-12">
			    		<input name="Subject" type="text" class="margin--element_top_xxs margin--element_bottom_xs col-xs-12">
			    	</div>
					<label class="col-xs-12" for="Comments">Comments:</label>
					<div class="col-xs-12 margin--element_bottom_sm">
						<textarea name="Comments" class="col-xs-12 margin--element_top_xxs margin--element_bottom_xs" id="Comments" rows="8" cols="50"></textarea>
					</div>
					<div class="col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-8">
						<input type="submit" class="btn btn--primary" href="/" value="Submit">
					</div>
				</form>
			</div> -->

			<div class="col-md-5 col-md-offset-1">
				<p class="margin--element_top">If you have a project in mind or are simply interested in talking with me, get in touch and send me an email:</p>
				<!-- <p class="margin--element_top_xs">Mountain View, CA, 94043, USA</p> -->
				<p class="margin--element_top_xs">Aaron Cheng: <a href="mailto:aaron@chengfolio.com" class="txt--regular">contact@ChengFolio.com</a></p>
<!-- 				<p class="margin--element_top_xs">Website designed by Aaron Cheng</br>Copyright &#169 2015, Aaron Cheng's Portfolio, All rights reserved.</p> -->
			</div>
		</div>		
	</div>
<!-- </div> -->

<?php include 'component/footer.php';?>

<?php include 'component/script.php';?>

</body>
</html>