<?php
$servername = "";		//server name has been removed
$username = "";		//The name has been deleted for security purposes
$password = "";   //The password has been deleted
$dbname = "";		//Not required

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
try{			  
	$dbconn = new PDO('mysql:host=mysql1.cs.clemson.edu;dbname=dfskbsdbjk', //here dfskbsdbjk is a random name and the actual name has been removed
                  $username,
                  $password,
                  array(PDO::ATTR_PERSISTENT => true));
	}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}	

?>
