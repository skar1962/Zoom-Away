<?php
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', '');
	DEFINE ('DB_NAME', 'caravansites');
	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				
	// Check connection
	if(mysqli_connect_errno()) {
		die("Could not connect to MySQL: " .mysqli_connect_error());
	} else {
		// echo "Connection to ".DB_NAME." successful <p>";
	}
?>
