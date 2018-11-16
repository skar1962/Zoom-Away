<?php
    session_start();

    // initializing variables
    $uname = "";
    $email    = "";
    $psw = "";
    $errors = array(); 
    $query = "";
    
    // open a log file to trap errors
    $logfile = fopen("error.log", "w");
    $txt = "New ----------";
    fwrite($logfile, $txt);
    
    // connect to the db
    require_once('../../sqlconnect/mysqli_login.php');
    
    $txt = "db connected";
    fwrite($logfile, $txt);

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $uname = $_POST["username"];
        $psw = $_POST["password"];
    
        if (empty($uname)) {
            array_push($errors, "Username is required");
        }
        if (empty($psw)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            // Search for username
            $query = "SELECT * FROM users WHERE username='$uname'";
            $results = mysqli_query($dbc, $query);

            // if we find a match on username, load record into variables
            if (mysqli_num_rows($results) == 1) {
                while($row = $results->fetch_assoc()) {
                    $dbusername=$row["username"];
                    $dbpasswd=$row["passwd"];
                    $dbforename=$row["forename"];
                    $dbsurname=$row["surname"];
                    $dbdatecreated=$row["datecreated"];
                    $dbdateamended=$row["dateamended"];
                    $dblastloggedin=$row["lastloggedin"];
                         
                }
                
                //Decrypt the password and see if it matches
                if (password_verify($psw, $dbpasswd)) {
                    $_SESSION['session_username'] = $uname;
                    $_SESSION['session_success'] = "You are now logged in";
                    $query="UPDATE users SET lastloggedin = CURRENT_TIMESTAMP() WHERE username = '$dbusername'";
                    $results =  @mysqli_query($dbc, $query);
                    header('location: http://sudeshpatel.com/' );
                } else {
                    array_push($errors, "Wrong username/password combination");
                }

            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $uname = $_POST["username"];
        $email = $_POST["email"];
        $password_1 = $_POST["password_1"];
        $password_2 = $_POST["password_2"];
    
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($uname)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        }
    
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $query = "SELECT * FROM users WHERE username='$uname' OR email='$email' LIMIT 1";
        $results = mysqli_query($dbc, $query);
        $user = mysqli_fetch_assoc($results);
        
        if ($user) { // if user exists
            if ($user['username'] === $uname) {
                array_push($errors, "Username already exists");
            }
    
            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }
    
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = password_hash($password_1, PASSWORD_DEFAULT); //encrypt the password before saving in the database
            $query = "INSERT INTO users (username, email, passwd) VALUES('$uname', '$email', '$password')";
            if (mysqli_query($dbc, $query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " .$query. "<br>" . mysqli_error($dbc);
            }
            $_SESSION['session_username'] = $uname;
            $_SESSION['session_success'] = "You are now logged in";
            header('location: index.php');
        }
    }
    // Close connection to the database
    mysqli_close($dbc); 
    fclose ($logfile) 
?>
