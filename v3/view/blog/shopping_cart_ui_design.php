<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart UI Design</title>

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
						<h1 class="txt--regular txt--xxl txt--primary_on_light">Shopping Cart UI Design</h1>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_top_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p>Recently I have been revamping the design of Bieyang’s mobile app. As an e-commerce application, the shopping cart is probably one of the most important pages to our users and it becomes critical for us to improve the users experience.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/shopping_cart/shopping_cart_ui.png" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Bieyang’s shopping cart design</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-8 col-md-offset-2">
					<p>Checkout is a long and complicated flow and I won’t cover everything in this article. Today I will only focus on the shopping cart page. Our goal was to simplify all the various inputs based on our users’ behavior, including:</br></br>
					1. Delete items</br>
					2. Edit quantity</br>
					3. View item detail</br></br>
					There are many shopping apps in the market and various shopping cart design. But basically the debate is alway between aesthetics and functionality(easy to use). We can put those designs into 2 categories. I will use Zara and Wish as the example of each category to analyze the difference of design intention.
					</p>
				</div>
			</div>


		</div>	
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Zara: Aesthetics first functionality second.</h2>
					<p class="margin--element_top_xs">Zara’s App uses ‘edit‘ button to view/hide ‘edit quantity’ and ‘delete item’ to keep a clean layout. However, the disadvantage is that users have to take extra clicks to edit quantity or delete items.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/shopping_cart/shopping_cart_zara.png" class="img-responsive center-block" alt="Selected work samples">			
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Wish: Functionality first aesthetics second.</h2>
					<p class="margin--element_top_xs">On the contrary, Wish’s App simply puts everything on the page. Users can modify almost anything with just one click. Please note the word - ‘Almost‘: for the ‘edit quantity‘ button, although it looks like it is a one-click action, it actually takes 3 clicks to finish the task. And of course, too many buttons make the layout less sophisticated.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/shopping_cart/shopping_cart_wish.png" class="img-responsive center-block" alt="Selected work samples">			
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Functionality or aesthetics? Data drives design.</h2>
					<p class="margin--element_top_xs">Personally, I am a big believer of ‘Form follows function.’ But a good design should not give up aesthetics because of functionality. Sounds like a dilemma? It is the challenge to the designers. Back to the topic, the problem I was facing is how to balance those 2 factors and deliver a product that meets our users’ need. To answer this question, I calculated the numbers of users who delete items, view item detail and edit quantity in the shopping cart page:</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/shopping_cart/shopping_cart_data.png" class="img-responsive center-block" alt="Selected work samples">			
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-8 col-md-offset-2">
					<p class="margin--element_top_xs">From the data above, we can easily see the weight of each action and the conclusion of the design: ‘delete items‘ and ‘view item detail‘ are commonly-used actions and users should use less clicks to accomplish the task; ‘Edit quantity‘ button is rarely used and it is ok to take extra steps. Looks like Wish is the winner? Yes and no. Yes, because it is easier to use functionality wise, and no, because its design can still be improved.</p>
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Bieyang: Data + innovation</h2>
					<p class="margin--element_top_xs">Based on the data and aesthetic requirement, I want the page to be both easy to use and cleanlooking. Here is my solution: I keep the ‘delete’ button on the page, so users can delete any item with one click. However, I removed the ‘edit quantity‘ button to keep the layout less noisy. Users can edit the quantity in the detail page after they click the item.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/shopping_cart/shopping_cart_bieyang.png" class="img-responsive center-block" alt="Selected work samples">			
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