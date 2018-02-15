<?php

// Using Mailgun
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

$MailMessage = $_POST["Message"];
$MailFrom = $_POST["EmailAdd"];
$CustomerName = $_POST["CustomerName"];

// Show me which script is being run
// echo $_SERVER['PHP_SELF'];

# Instantiate the client.
$mgClient = new Mailgun('key-e537735965d8de9552b822001ecb9114');
$domain = "sandbox86cca1e146c542d9984c8ff26b1e7395.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
          array('from'    => $MailFrom,
                'to'      => 'sudesh <sudesh.patel@outlook.com>',
                'subject' => 'Web query from Sudesh.Patel web site',
                'text'    => $MailMessage));

// See the result of the client call                
//var_dump($result);

# You can see a record of this email in your logs: https://mailgun.com/app/logs .

# You can send up to 300 emails/day from this sandbox server.
# Next, you should add your own domain so you can send 10,000 emails/month for free.
        //https://www.mailgun.com/
echo "<p>";
echo "Thank you for your email ".$CustomerName;
echo "</p>";
// echo "<button onclick=history.go(-1) >Back </button>";

echo "<a href='JavaScript:window.close()'>Close</a>";


/*
echo "<button onclick=";
echo "history.go(-1);";
echo ">Back </button>";
*/

?>
