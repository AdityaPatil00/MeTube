<?php
$servername = "";		//all the details have been removed for security
$username = "";
$password = "";
$dbname = "";
try{			  
	$dbconn = new PDO('mysql:host=mysql1.cs.clemson.edu;dbname=dfsdafnl', //dfsdafnl is just a placeholder for the actual name
                  $username,
                  $password,
                  array(PDO::ATTR_PERSISTENT => true));
	}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}	
?>
