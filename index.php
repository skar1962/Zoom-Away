<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Zoom-Away v2.3</title>
		<link rel="stylesheet" type="text/css" href="styles.css" > 
		
	 	<!-- This script tag references the minified version of jQuery on the MS web site -->
	 	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>  

		<!-- Link to a CDN verion of the jQuery UI library from the MS ASP.NET site.  You can also download the components that you need from the jQueryUI web site instead. -->
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/jquery-ui.min.js"></script>


		<!-- Link to an external style sheet, this one on the asp.net CDN site -->
		<!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/mint-choc/jquery-ui.css" />   -->
		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/sunny/jquery-ui.css" > 
		<!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/cupertino/jquery-ui.css" /> -->
	
		<script type="text/javascript" src="script.js"></script>

<!--
	To Do:
	1. Allow it so that you can type Zoom-Away/Shatterling to get to a sub site
	2. Add some text or images to bottom of home page
	5. Tidy up Location maps


	Look at grabaperch.com for users to create their own site.
	look at steugenesps.com as example
-->
	</head>

	<header style="background-image:url('background1.jpg')">
		<div id="NavBar">
			<!-- <div class="logo"><a href="#"><img src="logo.png"/></a></div> -->
			<div class="column1">
				<h1> 
					<a title="Zoom-Away" href="index.php">Zoom-Away</a>
				</h1>
			</div>
			<div class="column2">
				<h2>Portal to launch Caravan site details</h2>
			</div>
			<div class="column3">
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li> 
						<li><a href="featherbed/index.php">Featherbed (Dev)</a></li> 
						<li><a href="rickypatel/index.php">Rickypatel (Dev)</a></li>
						<li><a href="http://sudeshpatel.com/" target="_blank">About Me</a></li>
					</ul>
				</nav>
			</div>
		</div>



		<div id="randomMessage">
			<h1>See the world differently</h1>  
		</div>
		<form action="show_site_details.php" method="get">
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
			<div ID="selectBox"> 
				<!-- Display a list of caravan sites taken from the database -->
				<select id="caravansites" required name="caravansites">
					<option disabled selected value> Where do you want to go? </option>
					<?php foreach($response as $row) { ?>
			    			<option value="<?= $row['siteid'] ?>"><?= $row['longname']; ?></option>
					<?php } ?>
				</select>
				<input type="submit" id="submit1" name="submit1" value="Go!">
			</div>		
		</form>
	</header>

<!--
	<div id="aboutUs">
		<h1>About Us</h1>
		<div id="container">
			<div class="column">
				<div class="image"><img src="./images/MagnifyingGlass2.png" alt="Site Details Image" class="disabled" /></div>
				<h2>Site Details</h2>
			</div>
			
			<div class="column">
				<div class="image"><img src="./images/Facilities2.jpg" alt="Facilities Image" class="disabled" /></div>
				<h2>Facilities</h2>
			</div>
			
			<div class="column">
				<div class="image"><img src="./images/Location.jpg" alt="Location Image" class="disabled" /></div>
				<h2>Location</h2>
			</div>
			<div class="column">
				<div class="image"><img src="./images/Pictures.jpg" alt="Pictures Image" class="disabled" /></div>
				<h2>Pictures</h2>
			</div>
			<div class="column">
				<div class="image"><img src="./images/Contact.jpg" alt="Contact Image" class="disabled" /></div>
				<h2>Contact</h2>
			</div>
		</div>
	</div>
					
-->
	<footer>
		<small>Copyright © 2017 Sudesh Patel</small>
		<a href="https://smallseotools.com/google-pagerank-checker/" title="PR checker by smallseotools"><img src="https://smallseotools.com/pr?style=2" align="absmiddle" alt="PR checker by smallseotools" border="0" /></a>
	</footer>
</html>