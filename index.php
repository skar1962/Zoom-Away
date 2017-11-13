<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Zoom-Away Campsite Launch pad</title>
		<link rel="stylesheet" type="text/css" href="styles.css" > 
		
	 	<!-- This script tag references the minified version of jQuery on the MS web site -->
	 	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>  

		<!-- Link to a CDN verion of the jQuery UI library from the MS ASP.NET site.  You can also download the components that you need from the jQueryUI web site instead. -->
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/jquery-ui.min.js"></script>
	
		<!-- Link to an external style sheet, this one on the asp.net CDN site -->
		<!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/mint-choc/jquery-ui.css" />   -->
		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/sunny/jquery-ui.css" >
	
		<script type="text/javascript" src="script.js"></script>

<!--
		<link rel="stylesheet" type "text/css" href="zerogrid.css">
		<link rel="stylesheet" href="css/responsive.css">
-->
	</head>

	<header>

		<div class="nav-bar">
			<div class="wrap-nav zerogrid">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
						<!--	<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>	-->
						</div>
					</div>
					<div class="col-2-3">
						<div class="wrap-col f-right">
							<div id="menu">
								<nav>
								<ul>
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="archive.html">Blog</a></li>
									<li><a href="single.html">About Us</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--	</header>

		<body>
-->

<h1>Freedom is a right</h1>  
		<form action="show_site_details.php" method="post">
			<section> 

				<?php
					// Get a connection for the database
					require_once('mysqli_connect.php');
					
					// Create a query for the database
					$query = "SELECT siteid, shortname, longname FROM siteindex";
					
					// Get a response from the database by sending the connection and the query
					$response = @mysqli_query($dbc, $query);
					
					// if we do not get anything in the response variable
					if (!$response) {
						echo "** Failed to connect to database **";
					}
					// Close connection to the database
					mysqli_close($dbc);
				?>




				<!-- <p> Please select Camp site from list: 
				-->

				<!-- Display a list of caravan sites taken from the database -->
				<!-- <select id="caravansites" name="caravansites" onchange="doSelected()"> -->
				<select id="caravansites" name="caravansites">
					<option disabled selected value> Where do you want to go? </option>
					<?php foreach($response as $row) { ?>
			    			<option value="<?= $row['siteid'] ?>"><?= $row['longname']; ?></option>
					<?php } ?>
				</select>
				<input type="submit" id="submit" name="submit" value="Go!">
			</section>		
		</form>
	</header>
<!--	</body>
					-->


		<section class="content-box boxstyle-2 box-2">
			<div class="zerogrid">
				<div class="row wrap-box" style="left: 0px; top: 0px"><!--Start Box-->
					<div class="header"><div class="wrapper">
						<h2>ABOUT US</h2>
						<div class="line"></div>
						<p>Nulla eget mauris quis elit mollis ornare vitae ut odio. Cras tincidunt, augue vitae sollicitudin commodo, 
						quam elit varius est, et ornare ante massa quis tellus. Mauris nec lacinia nisl. Curabitur tempus tellus et vulputate vestibulum.</p>
					</div></div>	
					<div class="row post">
						<div class="col-1-3">
							<div class="wrap-col">
								<center><div class="wrap-img1">
									<img src="images/Folded.png" />
								</div></center>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
								sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<center><div class="wrap-img1">
									<img src="images/Location.png" />
								</div></center>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
								sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<center><div class="wrap-img1">
									<img src="images/User.png" />
								</div></center>
								<h3><a href="#">Lorem ipsum dolor</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
								sed euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
							</div>
						</div>
					</div>
					<a class="button button01" href="#">MORE</a>
				</div>
			</div>
		</section>


</html>