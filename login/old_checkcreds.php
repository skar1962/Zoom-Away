<?php

$uname = $_POST["uname"];
$psw = $_POST["psw"];

// Show me which script is being run
// echo $_SERVER['PHP_SELF'];

// Get a connection for the database
require_once('../../sqlconnect/mysqli_login.php');

// Create a query for the database
$query = "SELECT username, passwd FROM users";

// Get a response from the database by sending the connection and the query
$response = @mysqli_query($dbc, $query);

// if we do not get anything in the response variable
if ($response) {
    // Successful connection so lets do something
    // build a query
    $query = "SELECT username, passwd, forename, surname, userid, datecreated, dateamended, lastloggedin FROM users WHERE username='$uname'";

    //run the query and store the result array in $response
    $response = @mysqli_query($dbc, $query);

    // check if the $response array has a record
    if ($response -> num_rows > 0) {
        // we have found a match
        while($row = $response->fetch_assoc()) {
            $dbusername=$row["username"];
            $dbpasswd=$row["passwd"];
            $dbforename=$row["forename"];
            $dbsurname=$row["surname"];
            $dbuserid=$row["userid"];
            $dbdatecreated=$row["datecreated"];
            $dbdateamended=$row["dateamended"];
            $dblastloggedin=$row["lastloggedin"];
                 
        }
        // Check if password match
        //echo "dbpasswd=".$dbpasswd."<p>";
        if ($psw == $dbpasswd) {
            echo "Access Allowed <p>";
            // Store last login date
            $query="UPDATE users SET lastloggedin = CURRENT_TIMESTAMP() WHERE userid = '$dbuserid'";
            $response =  @mysqli_query($dbc, $query);
            header('location: http://sudeshpatel.com/' );
            
        } else { 
            // put up a modal window to say that access is denied 
            header('location: accessdenied.html' );

        }

    } else {
        
        echo "<script type='text/javascript'>;
            alert('No such user');
            window.location.href = './index.php';
        </script>"; 
    }

} else {
    echo "** Failed to connect to database **";
}


// Close connection to the database
mysqli_close($dbc);
?>

