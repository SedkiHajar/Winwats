<?php  
// Database configuration  
//$dbHost     = "localhost";  
//$dbUsername = "winwatsc";  
//$dbPassword = "Cpannelwinwats2020@..";  
//$dbName     = "winwatsc_new2020";  
  

$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "winwats"; 
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  

// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}



// Check connection

