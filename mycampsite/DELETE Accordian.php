<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Caravan Site Info v2.1</title>
		<link rel="stylesheet" type="text/css" href="styles.css" >

		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>  

		<!-- Link to a CDN verion of the jQuery UI library from the MS ASP.NET site.  You can also download the components that you need from the jQueryUI web site instead. -->
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="CaravanSite.js"></script>

		<!-- Link to an external style sheet, this one on the asp.net CDN site -->
		<!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/mint-choc/jquery-ui.css" />   -->
		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/cupertino/jquery-ui.css" /> 
	</head>
	
	
	<!-- Connect to the DB and pull out site details and store into variables 
	Do lots of stuff but dont display anything -->
	<?php
		// Connect to the database
		require_once('mysqli_connect.php');
		// Set the siteindex variable from the post that was called from the index page
		$siteindex=$_POST['caravansites'];

	
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


		// Create a query for the database
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

	<!-- Now we have all the site details lets display them.  -->
	
	<header style="background-image:url('<?= $picture_folder.$picture_name ?>')">

		<div id="navbar">
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
						<li><a href="#aboutMe">About Me</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>	
		
		<div id="randomMessage">
			<h1><?= $longname ?></h1>  
		</div>

	</header>
<!---------------------------------------->

<body>
  <div class="container">
    <ul class="accordion">
      <li class="tabs">
        <div class="social-links twitter-icon">
          <a href="https://twitter.com/renettarenula">Twitter</a>
        </div>
        <div class="paragraph">
          <h1>Twitter</h1>
          <p>My thoughts in 140 characters or less. Sometimes, I do not know how to correctly use Twitter.</p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links facebook-icon">
          <a href="https://facebook.com">Facebook</a>
        </div>
        <div class="paragraph">
          <h1>Facebook</h1>
          <p>Where I get to stalk my friends and let them stalk me. A place to get people to stroke your ego.</p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links linkedin-icon">
           <a href="https://my.linkedin.com/pub/aysha-anggraini/49/a82/a05/">LinkedIn</a>
        </div>
        <div class="paragraph">
          <h1>LinkedIn</h1>
          <p>I act totally professional on this one. It is what the recruiters see, you see.</p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links insta-icon">
          <a href="http://instagram.com/renettarenula">Instagram</a>
        </div>
        <div class="paragraph">
          <h1>Instagram</h1>
          <p>Where I post my duckface pictures. Occasionally, I would post pictures of my food and my cats.</p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links youtube-icon">
          <a href="https://youtube.com">Youtube</a>
        </div>
        <div class="paragraph">
          <h1>YouTube</h1>
          <p>Just kidding! I do not have a YouTube account. I'm not too fond of the camera.</p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links tumblr-icon">
          <a href="https://renettarenula.tumblr.com/">Tumblr</a>
        </div>
        <div class="paragraph">
          <h1>Tumblr</h1>
          <p>I have a tumblr but I don't really use it. I still prefer WordPress. I'm quite old-fashioned.</p>
        </div>
      </li>
      <li class="tabs">
        <div class="social-links dribbble-icon">
          <a href="http://dribbble.com">Dribbble</a>
        </div>
        <div class="paragraph">
          <h1>Dribbble</h1>
          <p>I do not have a Dribbble account. Would any of you be so kind and send me an invite? </p>
        </div>
      </li>
    </ul>
  </div>
</body>


















<!---------------------------------->


	<div id="aboutUs">
		<h1>About Us</h1>
		<div id="container">
			<div class="column">
				<div class="image"><a href="GeneralInfo.html" target="iframe1"><img src="./images/MagnifyingGlass2.png" alt="Site Details Image" /></div>
				<h2>Site Details</h2>
				
			</div>
			
			<div class="column">
				<div class="image"><img src="./images/Facilities2.jpg" alt="Facilities Image" /></div>
				<h2>Facilities</h2>
			</div>
			
			<div class="column">
				<div class="image"><img src="./images/Location.jpg" alt="Location Image" /></div>
				<h2>Location</h2>
			</div>
			<div class="column">
				<div class="image"><img src="./images/Pictures.jpg" alt="Pictures Image" /></div>
				<h2>Pictures</h2>
			</div>
			<div class="column">
				<div class="image"><a href="#tabsContact"><img src="./images/Contact.jpg" alt="Contact Image" /></div>
				<h2>Contact</h2>
			</div>
		</div>
	</div>

	<!-- Display a blank page in an iFrame -->
	<iframe height="400px" width="100%"> src="blank.html" name="iframe1"</iframe>
	

<!--
		<div id="tabsGeneral">
			<h2>Information about our caravan site</h2>
			<p>
				<?= $main_info; ?>
			<h3>	
				<?= $hilight_text; ?>
			</h3>
			<br/>
			
			<aside>
				<?= $aside_text; ?>
			</aside>
		</div>

-->
		
<!--

		<div id="tabsFacilities">
			<table>
				<tr>
					<th>Facility</th>
					<th>Details</th>
				</tr>
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
					<td><?= $waste_water; ?><td>
				</tr>
				<tr>
					<td>Access to site</td>
					<td><?= $access; ?>
				</tr>
				<tr>
					<td>Type of pitch</td>
					<td><?= $pitch_type; ?>
				</tr>
			</table>
		</div>
		
		<div id="tabsLocation">
			<h3>Shatterling Cottage </h3>
			<a href="https://www.bing.com/maps?osid=d4f4e8da-f780-4e8b-814b-b446620679fe&cp=51.20622~1.32751&lvl=11&v=2&sV=2&form=S00027" target="_blank">
				<div class="container2">
					<figure>
						<img src="OSMap.jpg" alt="Ordinance Survey map of Shatterling">
						<figcaption>Ordinance Survey map of Shatterling</figcaption>
					</figure>
				</div>
					
				<figure>
					<img src="BingMap.jpg" alt="Map of Kent">
					<figcaption>Location in Kent</figcaption>
				</figure>
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

		<div id="tabsPictures">
			<?php
				// Create a query for the database.  Get other pictures for the site.
				$query = "SELECT folder, picture_name, picture_desc, siteid, main FROM caravansites.siteimages where siteid=".$siteindex." and main='F'";
				// Get a response from the database by sending the connection and the query
				$response = @mysqli_query($dbc, $query);
				if ($response) {
					// mysqli_fetch_array will return a row of data from the query
					// until no further data is available
					while($row = mysqli_fetch_array($response)){
						// TIDY UP //
						// Put up a row count //
						$picture_name = $row['picture_name'];
						$picture_desc = $row['picture_desc'];
						$picture_path = $row['folder'];
						$site_id=$row['siteid'];
						$main_picture = $row['main'];

						echo '<figure>';
						echo '<img src=';
						echo "$picture_path"."$picture_name".">";
						echo '</figure>';

						/*
						<figure>
							<img src=".\pictures\2_CaravanSitePic1.jpg" alt="Picture 1">
							<figcaption>Figure 1. Picture of caravan site</figcaption>
						</figure>

						$row['first_name'] . '</td><td align="left">' . 
						*/
						echo $picture_name;
					}	
					// Clear the result set
					$response->free();
				
				} else {
					echo "** Failed to connect to pictures database **";
				}
				// Close connection to the database
				mysqli_close($dbc);
			?>

			<!-- we now have an array containing all the picture paths.  We need to create a loop and display all the pictures -->

		</div>

		<div id="tabsContact">
			<!--
				<form method="POST" action="mailto:skar1962@googlemail.com" enctype="text/plain">
			-->	
				<p>
					<label>Full Name: <input type="text" id="customerName" name="customerName" maxlength="10" placeholder="Enter your name"> </label>
				</p>

				<fieldset>
					<legend>Address</legend>
					<label>House number or name : <input type="text" id="houseNumber"></label>
					<p>
						<textarea name="address1" id="address1" cols="50" rows="5" maxlength="1000" placeholder="Please enter your address"></textarea>
					</p>
					<Label>Post code : <input type="text" id="postCode" maxlength="7" placeholder="Enter a valid post code"></label>
				</fieldset>	
				<p>
				
				</p>
				<fieldset>
					<legend>Message</legend>
					<p>
						<textarea name="message1" id="message1" cols="50" rows="5" maxlength="1000" placeholder="Please enter your message"></textarea>
					</p>
					<Label>Your email address : <input type="email" id="emailAdd" placeholder="Enter your email address"></label>
				</fieldset>	
				<p><input type="submit" id="sendForm" value="Send"></p>
				<p><input type="reset" value="Reset form"></p>
			<!--
			</form>
			-->
			
		</div>
	</div>

				
	<footer>
		<small>Copyright © 2017 Sudesh Patel</small>
		<a href="https://smallseotools.com/google-pagerank-checker/" title="PR checker by smallseotools"><img src="https://smallseotools.com/pr?style=2" align="absmiddle" alt="PR checker by smallseotools" border="0" /></a>
	</footer>
</html>




	

