<?php 
	$dbserver = "localhost";
	$dbusername ="root";
	$dbpassword = "";
	$dbname = "cruisedb";

	$con = mysqli_connect($dbserver, $dbusername,$dbpassword,$dbname);
	
    if(!$con)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>