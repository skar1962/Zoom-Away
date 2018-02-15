<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Featherbed Farm</title>
		<meta charset="utf-8">

		<!-- meta tag required by Bootstrap fpr mobile first development-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		
		<!-- Custom styles for this template -->
		<link href="carousel.css" rel="stylesheet">
		
		
		<link rel="stylesheet" type="text/css" href="styles.css" > 
	
		<script type="text/javascript" src="script.js"></script>

<!--
	To Do:
-->

	</head>
	<body>
		<?php require_once 'includes/header.php'; ?>	

		<main role="main" class="container">

			<!-- Start of carousel -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			
				</ol>
				<div class="carousel-inner">

					<div class="carousel-item active">
						<img class="first-slide" src="./images/owners.jpg" alt="Owners">

						<div class="container">
							<div class="carousel-caption">
								<h1 class="bg-light">This is us</h1>
								<p>Mark and Kirsten Harding.</p>
								<!--								
								<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
								-->
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<img class="second-slide" src="./images/farmshopmain.jpg" alt="Farm Shop">
						<div class="container">
							<div class="carousel-caption">
								<h1 class="bg-light">This is our farm shop.</h1>
							</div>
						</div>
					</div>

					<div class="carousel-item">
						<img class="third-slide" src="./images/eggs.jpg" alt="Travel">
						<div class="container">
							<div class="carousel-caption">
								<h1 class="bg-light">We sell eggs.</h1>
							</div>
						</div>
					</div>


					<div class="carousel-item">
						<img class="fourth-slide" src="./images/morefarm.jpg" alt="Amateur Cook">
						<div class="container">
							<div class="carousel-caption">
								<h1 class="bg-light">and lots of freshly grown local veg.</h1>
							</div>
						</div>
					</div>
				</div> <!-- Carousel Inner -->
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- End of carousel -->

			<!-- Using Cards -->
			<div class="container-fluid"> -->
				<!-- Card Deck 1 -->
				<div class="card-deck">

					<div class="row">
						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/logo.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Who are we?</h5>
									<p class="card-text">
										We are a family run farm shop in Kent providing a range of local products and services.
									</p>
									<a href="whoarewe.html" class="btn btn-primary">More</a>
								</div>
							</div>
						</div>

						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/morefarm.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Food Produce</h5>
									<p class="card-text">
										We provide fresh, seasonal fruit and vegetables as well as eggs from our free range hens. 
									</p>
									<a href="contact.php" class="btn btn-primary">More</a>
								</div>
							</div>
						</div>
						
						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/horsecatdog.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Pet Supplies</h5>
									<p class="card-text">
									We offer a range of pet supplies including pet food, bedding, hutches and more.
									</p>
									<a href="travel.php" class="btn btn-primary">More</a>
								</div>
							</div>
						</div>

						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/plants.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Garden Produce</h5>
									<p class="card-text">
									We provide a range of garden products such as compost, manure and plants.
									</p>
									<a href="recipes.php" class="btn btn-primary">More</a>
								</div>
							</div>
						</div>
						
						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/fuels.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Fuels</h5>
									<p class="card-text">
									We offer a range of fuels including BBQ fuels and Calor.
									</p>
									<a href="recipes.php" class="btn btn-primary">More</a>
								</div>
							</div>
						</div>
						
						<div class="col-sm">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="./images/caravanstorage.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Caravan Storage</h5>
									<p class="card-text">
									We have a secure storage facility for storing of caravans and motorhomes.
									</p>
									<a href="recipes.php" class="btn btn-primary">More</a>
								</div>
							</div>
						</div>
					</div> <!-- Row -->
				</div> <!-- Card Deck -->
			</div> <!-- Container Fluid -->
		</main>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		
		<?php require_once 'includes/footer.php'; ?>
	</body>
	
</html>