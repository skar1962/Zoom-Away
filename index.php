<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Zoom-Away Campsite Launch pad</title>
		<link rel="stylesheet" type="text/css" href="styles.css" > 
	</head>

	<header>
		<div class="nav-bar">
			<div class="wrap-nav zerogrid">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="logo"><a href="#"><img src="images/logo.png"/></a></div>	
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
		<div class="wrap-header">
			<h1>see the word differently</h1>
			<span>Request,design and book travel experiences as unique as you are</span>
			<center><div class="search-form">
				<form method="get" action="/search" id="search" class="f-right">
					<input name="q" type="text" size="40" placeholder="Where are you going ?" />
					<input type="submit" name="Submit" value="Search">
				</form>
			</div></center>
		</div>
	</header>

	<body>
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



				<p> Please select Camp site from list: </p> 
				
				<!-- Display a list of caravan sites taken from the database -->
				<!-- <select id="caravansites" name="caravansites" onchange="doSelected()"> -->
				<select id="caravansites" name="caravansites">
					<?php foreach($response as $row) { ?>
				    		<option value="<?= $row['siteid'] ?>"><?= $row['longname']; ?></option>
					<?php } ?>
				</select>
				
				<input type="submit" value="Submit">
				</p>
			</section>		
		</form>
	</body>
</html>