<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Zoom-Away Campsite Launch pad</title>
		<link rel="stylesheet" type="text/css" href="styles.css" > 
	</head>

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