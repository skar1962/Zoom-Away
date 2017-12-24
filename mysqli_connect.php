<?php

	// read data from creds.json file
	$creds = file_get_contents(('creds.json'));
	//decode the file
	$json = json_decode($creds,true);
	// read variables from file
	$user = $json['user'];
	$pw = $json['pw'];

	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_USER', $user);
	DEFINE ('DB_PASSWORD', $pw);
	DEFINE ('DB_NAME', 'caravansites');
	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


	// Check connection
	if(mysqli_connect_errno()) {
		die("Could not connect to MySQL: " .mysqli_connect_error());
	} else {
		// echo "Connection to ".DB_NAME." successful <p>";
	}
?>
