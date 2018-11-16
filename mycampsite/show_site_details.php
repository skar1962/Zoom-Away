<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My Campsite</title>

		<link rel="stylesheet" type="text/css" href="styles.css" > 
		
	 	<!-- This script tag references the minified version of jQuery on the MS web site -->
	 	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>  

		<!-- Link to a CDN verion of the jQuery UI library from the MS ASP.NET site.  You can also download the components that you need from the jQueryUI web site instead. -->
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/jquery-ui.min.js"></script>

		<script type="text/javascript" src="script.js"></script>
	</head>

	<!-- Connect to the DB and pull out site details and store into variables 
	Do lots of stuff but dont display anything -->
	<?php
		// Connect to the database
		require_once('../../sqlconnect/mysqli_caravan.php');
		// Set the siteindex variable from the GET that was called from the index page
		$siteindex=$_REQUEST['caravansites'];

		/* --------------------------------------------
		GET SHORTNAME AND LONGNAME
		----------------------------------------------*/
		// Create a query for the database
		$query = "SELECT shortname, longname FROM caravansites.siteindex where siteid=".$siteindex;
		
		// Get a response from the database by sending the connection and the query
		$response = @mysqli_query($dbc, $query);
		
		if ($response) {
							
			// fetch an associated array from the query response
			$row=$response->fetch_assoc();
			
			$shortname = $row['shortname'];
			$longname = $row['longname'];
			// Clear the result set
			$response->free();
		} else {
			echo "Siteindex query failed";
		}


		/* --------------------------------------------
		GET ADDRESS
		----------------------------------------------*/
		// Create an address query for the database
		$query = "SELECT siteid, add1, add2, add3, town, postcode, bingurl, bingmapimage, googleurl, directions FROM caravansites.siteaddress where siteid=".$siteindex;
		
		// Get a response from the database by sending the connection and the query
		$response = @mysqli_query($dbc, $query);
		
		if ($response) {
							
			// fetch an associated array from the query response
			$row=$response->fetch_assoc();
			
			$siteid=$row['siteid'];	
			$add1 = $row['add1'];
			$add2 = $row['add2'];
			$add3 = $row['add3'];
			$town = $row['town'];
			$postcode = $row['postcode'];
			$bingurl = $row['bingurl'];
			$bingmapimage = $row['bingmapimage'];
			$googleurl = $row['googleurl'];
			$directions = $row['directions'];

			// Build up address string
			$fulladdress = $add1;	
			
			// If address line 2 is not empty..
			if (!empty($add2)) {
				$fulladdress = $fulladdress.", ".$add2;
			}	
			// If address line 3 is not empty..			
			if (!empty($add3)) {
				$fulladdress = $fulladdress.", ".$add3;
			}

			$fulladdress = $fulladdress.", ".$town."  ".$postcode;

			// Clear the result set
			$response->free();
		} else {
			echo "Address query failed";
		}
		

		
		/* --------------------------------------------
		GET FACILITIES
		----------------------------------------------*/
		// Create a query for the database
		$query = "SELECT EHU, units_accepted, drinking_water, waste_water, access, pitch_type, siteid FROM caravansites.sitefacilities where siteid=".$siteindex;
		
		// Get a response from the database by sending the connection and the query
		$response = @mysqli_query($dbc, $query);
		if ($response) {
			// fetch an associated array from the query response
			$row=$response->fetch_assoc();
			
			$ehu = $row['EHU'];
			$units_accepted = $row['units_accepted'];
			$drinking_water = $row['drinking_water'];
			$waste_water = $row['waste_water'];
			$access = $row['access'];
			$pitch_type=$row['pitch_type'];
			$site_id=$row['siteid'];
			// Clear the result set
			$response->free();
		} else {
			echo "Facilities query failed";

		}

		
		/* --------------------------------------------
		GET SITE DETAILS TEXT
		----------------------------------------------*/

		// Create a query for the database
		$query = "SELECT main_info, hilight_text, aside_text, siteid FROM caravansites.siteinfo where siteid=".$siteindex;

		// Get a response from the database by sending the connection and the query
		$response = @mysqli_query($dbc, $query);
		if ($response) {
			// fetch an associated array from the query response
			$row=$response->fetch_assoc();
			$main_info = $row['main_info'];
			$hilight_text = $row['hilight_text'];
			$aside_text = $row['aside_text'];
			$site_id=$row['siteid'];
			// Clear the result set
			$response->free();
		} else {
			echo "Site Info query failed";
		}



		/* --------------------------------------------
		GET PICTURES
		----------------------------------------------*/

		// Create a query for the database.  Get the main picture for the site.
		$query = "SELECT folder, picture_name, picture_desc, siteid, main FROM caravansites.siteimages where siteid=".$siteindex." and main='T'";
		// Get a response from the database by sending the connection and the query
		$response = @mysqli_query($dbc, $query);
		if ($response) {
			// fetch an associated array from the query response
			$row=$response->fetch_assoc();
			
			$picture_name = $row['picture_name'];
			$picture_desc = $row['picture_desc'];
			$picture_folder = $row['folder'];
			$site_id=$row['siteid'];
			$main_picture = $row['main'];
			
		/*		
			echo "Picture_name = ".$picture_name;
			echo " Picture_folder = ".$picture_folder;
			echo " Picture_desc = ".$picture_desc;
			echo " Site_id = ".$site_id; 
			echo " Main_picture = ".$main_picture;
		*/
		
			// Clear the result set
			$response->free();
		} else {
			echo "Site Pictures query failed";

		}

	?>

	<!-- ============================================
		DISPLAY SITE DETAILS MAIN PAGE
	============================================ -->
	<header style="background-image:url('<?= $picture_folder.$picture_name ?>')">
		<div id="NavBar">
			<div class="column1">
				<h1> 
					<a title="My Camp sites" href="index.php">My Camp Sites</a>

				</h1>
			</div>
			<div class="column2">
				<h2>Camp Site Details</h2>
			</div>
			<div class="column3">
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li> 
						<li><a href="../index.php">Zoom-Away</a></li>
						
					</ul>
				</nav>
			</div>
		</div>	
		
		<div id="randomMessage">
			<h1><?= $longname ?></h1>  
		</div>



		<div id="container">
			<div class="tab">
				<div class="column">
					<div class="image">
						<a href="#" class="tablinks" onclick="openTab(event, 'tabsGeneral')"><img src="./images/magnifyingglass2.png" alt="Site Details Image" />
							<h2>Site Details</h2>
						</a>
					</div>
				</div>
				
				<div class="column">
					<div class="image">
						<a href="#" class="tablinks" onclick="openTab(event, 'tabsFacilities')"><img src="./images/facilities.jpg" alt="Facilities Image" />
							<h2>Facilities</h2>
						</a>
					</div>
				</div>
				
				<div class="column">
						<a href="#" class="tablinks" onclick="openTab(event, 'tabsLocation')"><img src="./images/location.jpg" alt="Location Image" />
							<h2>Location</h2>
						</a>
				</div>

				<div class="column">
					<a href="#" class="tablinks" onclick="openTab(event, 'tabsPictures')"><img src="./images/pictures.jpg" alt="Pictures Image" />
						<h2>Pictures</h2>
					</a>
				</div>
				
				<div class="column">
					<a href="#" class="tablinks" onclick="openTab(event, 'tabsContact')"><img src="./images/contact.jpg" alt="Contact Image" />
						<h2>Contact</h2>
					</a>
				</div>
			</div>
		</div>
	</header>

	<body>
		<div id="subContainer">
			<!-- ============================================
			DISPLAY SITE DETAILS TEXT
			============================================ -->
			<div id="tabsGeneral" class="tabcontent">
				<div id="tabHeading">
					<h1>Site Details</h1>
				</div>
				<p>
					<?= $main_info; ?>
				<h3>	
					<?= $hilight_text; ?>
				</h3>
				<aside>
					<?= $aside_text; ?>
				</aside>
			</div>

			<!-- ============================================
			DISPLAY FACILITIES DETAILS
			============================================ -->

			<div id="tabsFacilities" class="tabcontent">
				<div id="tabHeading">
					<h1>Facilities</h1>
				</div>


				<table class="table1">
					<thead>
						<tr>
							<th scope="col" abbr="Facility">Facility</th>
							<th scope="col" abbr="Details">Details</th>
							<th scope="col" abbr="Facility">Facility</th>
						</tr>
					</thead>
					<tbody>
						
							<tr>
								<th scope="row">EHU</th>
								<td><?= $ehu; ?></td>
								<th scope="row">EHU</th>

							</tr>
							<tr>
								<th scope="row">Units Accepted</th>
								<td><?= $units_accepted; ?></td>
								<th scope="row">Units Accepted</th>
							</tr>
							<tr>
								<th scope="row">Drinking Water</th>
								<td><?= $drinking_water; ?></td>
								<th scope="row">Drinking Water</th>
							</tr>
							<tr>
								<th scope="row">Waste Water</th>
								<td><?= $waste_water; ?></td>
								<th scope="row">Waste Water</th>
							</tr>
							<tr>
								<th scope="row">Access to site</th>
								<td><?= $access; ?></td>
								<th scope="row">Access to site</th>
							</tr>
							<tr>
								<th scope="row">Type of pitch</th>
								<td><?= $pitch_type; ?></td>
								<th scope="row">Type of pitch</th>
							</tr>
						
					</tbody>
				</table>
			</div>
			
			<!-- ============================================
			DISPLAY LOCATION MAPS
			============================================ -->
			<div id="tabsLocation" class="tabcontent">
				<div id="tabHeading">
					<h1>Location</h1>
				</div>
				<?=$longname; ?>
				<br>
				<?=$fulladdress; ?>

				<h2>Directions</h2>
				<?= $directions; ?>
				<br>					

				<h2>Maps</h2>
				<div class="container3">
					<a href=<?= $bingurl; ?> target="_blank">	
						<figure>
							<img class="container3-img-top" src=<?= $bingmapimage; ?> alt="Ordinance Survey map of "<?= $longname; ?>> 
							<figcaption>Ordinance Survey map of <?= $longname; ?></figcaption>
						</figure>
					</a>	
				</div>
				<br>		
				<iframe src=<?= $googleurl; ?> width="450" height="350" allowfullscreen></iframe>
			</div>



			<!-- ============================================
			DISPLAY PICTURES
			============================================ -->

			<div id="tabsPictures" class="tabcontent">
				<div id="tabHeading">
					<h1>Pictures</h1>
				</div>
				
				<?php
					$numPictures = 0;
					// Build a query to count how many pitures there are.
					$query = "SELECT count(*) FROM caravansites.siteimages WHERE siteid=".$siteindex." AND main='F'";

					//Query the database with the above query
					$response = @mysqli_query($dbc, $query);

					// store the response as an array into the $row variable
					if ($response) {
							$row = mysqli_fetch_array($response);
							$numPictures = $row[0];
							$response->free();
					} else {
						echo "** Failed to connect to pictures database could not count number of pictures **";
					}	
					
					$query = "SELECT folder, picture_name, picture_desc, siteid, main FROM caravansites.siteimages where siteid=".$siteindex." and main='F'";
					// Get a response from the database by sending the connection and the query
					$response = @mysqli_query($dbc, $query);

					if ($response) {
						echo '<table id="pictureContainer">';
						echo '<tr>';
						//Create a number of columns using <th> based on the number of items returned from db query
						for ($num = 1; $num <= $numPictures; $num++){
							echo '<th>Thumbnail '.$num.'</th>';
						}	
						echo '</tr>';
						echo '<tr>';

						// Get all the picture details from the database
						// until no further data is available
						while($row = mysqli_fetch_array($response)){
							$picture_name = $row['picture_name'];
							$picture_desc = $row['picture_desc'];
							$picture_path = $row['folder'];
							$site_id=$row['siteid'];
							$main_picture = $row['main'];
							$num = 0;
							echo '<td>';
								echo '<div class="gallery">';
									echo '<figure>';
										echo '<a target="_blank" href='.$picture_path.$picture_name.'>';
										echo '<img src=';
										echo "$picture_path"."$picture_name"." width='200' height='200'>";
										echo '</a>';
									echo '</figure>';
								echo '</div>';
							echo '</td>';
						}
						echo '</tr>';
						echo '</table>';		
						// Clear the result set
						$response->free();
				
					} else {
						echo "** Failed to connect to pictures database **";
					}
					// Close connection to the database
					mysqli_close($dbc);
				?>
				<p>Click on any thumbnail image to view a full size image</p>
			</div>
			<!-- ============================================
			DISPLAY CONTACT PAGE
			============================================ -->
			<div id="tabsContact" class="tabcontent">
				<div id="tabHeading">
					<h1>Contact</h1>
				</div>

			
				<!-- Bring up contact form -->
				<div id="contact">
					<form id="contactform" method="POST" action="email.php" target="_blank">
					
					<!-- <h3>If you want to know more, please send a messsage</h3>
					-->
						<div id="container2">
							<div class="column1">
									<h3>Caravan Sites</h3>
									<p>sudesh.patel@outlook.com</p>
									<p>Sittingbourne, Kent, UK</p>
							</div>
					
							<div class="column2">
								<form name="contactForm">
									<p><input type="text" id="customerName1" name="CustomerName" required maxlength="40" placeholder="Full Name"></p>
									<p><input type="email" id="emailAdd1" name="EmailAdd" required maxlength="40" placeholder="Email"></p> 
									<p><textarea type="text" name="Message" id="message1" cols="40" rows="5" maxlength="500" placeholder="Your message"></textarea></p>
									<p><input class="button" type="submit" id="sendForm" value="Send"></p>
								</form>
							</div>
					
							<div class="column3">
									<h3>Some stuff</h3>
									<p>Perhaps working hours</p>
									<p>(or something else)</p>
							</div>
						</div> <!-- container2 -->
					</form>
				</div> <!-- contact -->
			</div>	<!-- tabsContact -->
		</div>	<!-- subContainer -->

	
	</body>
	<footer>
		<br>
		<small>Copyright © 2017 Sudesh Patel</small>
		<a href="https://smallseotools.com/google-pagerank-checker/" title="PR checker by smallseotools"><img src="https://smallseotools.com/pr?style=2" align="absmiddle" alt="PR checker by smallseotools" border="0" /></a>
	</footer>
</html>


	

