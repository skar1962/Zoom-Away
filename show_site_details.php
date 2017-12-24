<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Caravan Site Info v2.1</title>
		

		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

		<!-- Link to a CDN verion of the jQuery UI library from the MS ASP.NET site.  You can also download the components that you need from the jQueryUI web site instead. -->
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/jquery-ui.min.js"></script>
		
		<script type="text/javascript" src="./CaravanSite.js"></script>


		<!-- My own style sheet -->
		<link rel="stylesheet" type="text/css" href="styles.css" >

		<!-- Link to an external style sheet, this one on the asp.net CDN site -->
		<!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/mint-choc/jquery-ui.css" />   -->
		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/cupertino/jquery-ui.css" /> 
	</head>
	
	
	<!-- Connect to the DB and pull out site details and store into variables 
	Do lots of stuff but dont display anything -->
	<?php
		// Connect to the database
		require_once('mysqli_connect.php');
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
		$query = "SELECT add1, add2, add3, town, postcode, siteid FROM caravansites.siteaddress where siteid=".$siteindex;
		
		// Get a response from the database by sending the connection and the query
		$response = @mysqli_query($dbc, $query);
		
		if ($response) {
							
			// fetch an associated array from the query response
			$row=$response->fetch_assoc();
			
			$add1 = $row['add1'];
			$add2 = $row['add2'];
			$add3 = $row['add3'];
			$town = $row['town'];
			$postcode = $row['postcode'];
			$siteid=$row['siteid'];
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

	<!---------------------------------------------
		DISPLAY SITE DETAILS MAIN PAGE
	---------------------------------------------->
	<header style="background-image:url('<?= $picture_folder.$picture_name ?>')">
		<div id="NavBar">
			<div class="column1">
				<h1> 
					<a title="Zoom-Away" href="index.php">Zoom-Away</a>
				</h1>
			</div>
			<div class="column2">
				<h2>Caravan Site Details</h2>
			</div>
			<div class="column3">
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li> 
						<!-- <li><a href="#aboutMe">About Me</a></li>    -->
						<li><a href="#contact">Contact</a></li>
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

	
	<div id="subContainer">

		<!---------------------------------------------
		DISPLAY SITE DETAILS TEXT
		---------------------------------------------->
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

		<!---------------------------------------------
		DISPLAY FACILITIES DETAILS
		---------------------------------------------->
		<div id="tabsFacilities" class="tabcontent">
			<div id="tabHeading">
				<h1>Facilities</h1>
			</div>
			<table id="facilities">
				<tr>
					<th>Facility</th>
					<th>Details</th>
				</tr>
				<p>
					<tr>
						<td>EHU</td>
						<td><?= $ehu; ?></td>
					</tr>
					<tr>
						<td>Units Accepted</td>
						<td><?= $units_accepted; ?></td>
					</tr>
					<tr>
						<td>Drinking Water</td>
						<td><?= $drinking_water; ?></td>
					</tr>
					<tr>
						<td>Waste Water</td>
						<td><?= $waste_water; ?></td>
					</tr>
					<tr>
						<td>Access to site</td>
						<td><?= $access; ?></td>
					</tr>
					<tr>
						<td>Type of pitch</td>
						<td><?= $pitch_type; ?></td>
					</tr>
				</p>
			</table>
		</div>
		
		<!---------------------------------------------
		DISPLAY LOCATION MAPS
		---------------------------------------------->
		<div id="tabsLocation" class="tabcontent">
			<div id="tabHeading">
				<h1>Location</h1>
			</div>
			<h3>Shatterling Cottage </h3>
			<a href="https://www.bing.com/maps?osid=d4f4e8da-f780-4e8b-814b-b446620679fe&cp=51.20622~1.32751&lvl=11&v=2&sV=2&form=S00027" target="_blank">
				<div class="container2">
					<figure>
						<img src="osmap.jpg" alt="Ordinance Survey map of Shatterling">
						<figcaption>Ordinance Survey map of Shatterling</figcaption>
					</figure>
				</div>
				<!--	
				<figure>
					<img src="bingmap.jpg" alt="Map of Kent">
					<figcaption>Location in Kent</figcaption>
				</figure>
	-->
			</a>
			
			<br>		
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4722.282922861166!2d1.23841648105733!3d51.27857315485741!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1492099045485" width="450" height="350" allowfullscreen></iframe>
			<br>

			<h2>Directions</h2>
			<p>
				Turn left off the A257 (Canterbury to Sandwich) 1 mile past the signpost to Preston junction. 
				<br>Site entrance is immediately before Frog and Orange Public House.
			</p>
			<br>
		</div>


		<!---------------------------------------------
		DISPLAY PICTURES
		---------------------------------------------->
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

		<!---------------------------------------------
		DISPLAY CONTACT PAGE
		---------------------------------------------->
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
								<h3>Zoom-Away</h3>
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
	<footer>
		<br>
		<small>Copyright © 2017 Sudesh Patel</small>
		<a href="https://smallseotools.com/google-pagerank-checker/" title="PR checker by smallseotools"><img src="https://smallseotools.com/pr?style=2" align="absmiddle" alt="PR checker by smallseotools" border="0" /></a>
	</footer>
</html>




	

