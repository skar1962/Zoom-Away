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
						<img class="second-slide" src="./images/stall.jpg" alt="Farm Shop">
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

			<!-- Card Deck 1 -->
			<div class="card-deck">
				<!-- Who are we Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Who are we?</h5>
						<a href="#whoarewe" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/logo.jpg" alt="Our logo">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">We are a family run farm shop in Kent providing a range of local products and services.</p>
							More..
						</a>
					</div>
				</div>

				<!-- Food Produce Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Food Produce</h5>
						<a href="#foodproduce" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/morefarm.jpg" alt="Food produce">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">We provide fresh, seasonal fruit and vegetables as well as eggs from our free range hens. </p>
							More..
						</a>
					</div>
				</div>

				<!-- Pet Supplies Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Pet Supplies</h5>
						<a href="#petsupplies" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/horsecatdog.jpg" alt="Pet Supplies">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">We offer a range of pet supplies including pet food, bedding, hutches and more.</p>
							More..
						</a>
					</div>
				</div>

				<!-- Garden Produce Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Garden Produce</h5>
						<a href="#gardenproduce" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/plants.jpg" alt="Garden Produce">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">We provide a range of garden products such as compost, manure and plants.</p>
							More..
						</a>
					</div>
				</div>
			</div> <!-- Card Deck 1 -->

			<p></p>
			<!-- Card Deck 2-->
			<div class="card-deck">
				<!-- Fuels Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Fuels</h5>
						<a href="#fuels" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/fuels2.jpg" alt="Fuels">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">We offer a range of fuels including BBQ fuels and Calor.</p>
							More..
						</a>
					</div>
				</div>

				<!-- Caravan Storage Card -->
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title">Caravan Storage</h5>
						<a href="#caravanstorage" class="card-link" data-toggle="modal">
							<img class="card-img-top" src="./images/caravanstorage.jpg" alt="Caravan Storage">
							<!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
							<p class="card-text">We have a secure storage facility for storing of caravans and motorhomes.</p>
							More..
						</a>
					</div>
				</div>
			</div>	<!-- Card Deck 2 -->

			<!-- Modals -->
			<!-- Who Are We Modal -->
			<div class="modal fade" id="whoarewe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Who are we?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/owners2.jpg" alt="Our logo">
							<h3> Nothing tastes better than home-grown fresh produce, and here at Featherbed Farm Shop, that is exactly what we offer. </h3>
							<p>
								Our extensive range of products include fresh, seasonal fruit and vegetables, free range eggs, potatoes, juices and many more.
								Established over 30 years ago, our family run farm and shop take pride in producing and sourcing the freshest, tastiest local goods, 
								We are always on hand to offer help and advice.
							</p>
							<h2>Why you should visit our farm shop? </h2>
							<ul>
								<li>Family run farm and shop</li>
								<li>Over 50 years farming experience</li>
								<li>Farm shop established for over 30 years'</li>
								<li>Helpful and friendly service</li>
								<li>Excellent local produce</li>
								<li>Free advice</li>
							</ul>
							<hr>
							<h2>Areas nearby</h2>
							<ul>
								<li>Sittingbourne</li>
								<li>Maidstone</li>
								<li>Gillingham</li>
								<li>Canterbury</li>
								<li>Ashford</li>
								<li>Chatham</li>
								<li>Towns within Kent</li>
							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Food Produce Modal -->
			<div class="modal fade" id="foodproduce" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Food Produce</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/veg.jpg" alt="Fresh Veg">
							<h3>At Featherbed Farm Shop, we grow a variety of fresh, seasonal fruit and vegetables as well as providing fresh eggs from our free range hens. </h3>
							<br>
							<p>We also stock a large number of goods from other local farms as well as garden plants and furniture. This is accompanied by a selection of pet and livestock feed.</p>
							<h2>Our fresh farm shop goods include:</h2>
							<ul>
								<li>Genuine free range eggs</li>
								<li>Home grown seasonal fruit and vegetables</li>
								<li>Jams, pickles and preserves</li>
								<li>Biscuits and cookies</li>
								<li>Hand pressed apple juice and cordials</li>
								<li>Stockist of Kent crisp</li> 
								<li>Gift hampers</li>
								<li>Confectionery </li>
								<li>Variety of teas and coffees Olive oil</li>
							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Pet Supplies Modal -->
			<div class="modal fade" id="petsupplies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Pet Supplies</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/catanddogfeeding.jpg" alt="Pet Supplies">
							<h3>At Featherbed Farm Shop, we offer a range of pet supplies including pet food, bedding, hutches, bird tables and more</h3>
							<p>We also stock a large number of other items such as garden plants, furniture and food produce.</p>
							<br>
							<h2>Our pet supplies include:</h2>
							<ul>
								<li>Pet foods</li>
								<li>Dry food</li>
								<li>Wild bird feeds</li>
								<li>Hay straw bedding</li>
								<li>Dog food</li>
								<li>Cat food</li>
								<li>Small animal feed</li>
								<li>Hutches</li>
								<li>Bird tables</li>
								<li>Livestock food</li>
								<li>Hutches</li>
							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Garden Produce Modal -->
			<div class="modal fade" id="gardenproduce" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Garden Produce</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/gardenproduce3" alt="Garden Produce">
							<h3>At Featherbed Farm Shop, we also provide a range of garden products such as compost, manure and plants.</h3>
							<br>
							<h2>Our garden producs include:</h2>
							<ul>
								<li>Compost and manure’s</li>
								<li>Plants</li>
								<li>Bedding plants</li>
								<li>Bird tables</li>
							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Fuels Modal -->
			<div class="modal fade" id="fuels" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Fuels</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/logs.jpg" alt="Logs">
							<h3>We stock a range of fuels including BBQ and Calor gas.</h3>
							<br>
							<h2>Come to us for:</h2>
							<ul>
								<li>Coals, logs and kindling</li>
								<li>Winter fuels</li>
								<li>BBQ fuels</li>
							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Caravan storage Modal -->
			<div class="modal fade" id="caravanstorage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Caravan Storage</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="card-img-top" src="./images/storage2.jpg" alt="Caravan Storage">
							<h3>We offer a secure compound for the storage of up to 30 Caravans, Motorhomes, Boats or other prized vehicles</h3>
							<br>
							<h2>Our facilities include:</h2>
							<ul>
								<li>Locked and gated area</li>
								<li>Surveillance cameras</li>
								<li>Pre-allocated parking area</li>
								<li>24 hour manning</li>
							</ul>
							<p>Contact us for more information</p?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Modals -->

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