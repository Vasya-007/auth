<?php 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//  $dbhost = "database-1-instance-1.co9nfp3dgzws.eu-north-1.rds.amazonaws.com";
//  $dbuser = "admin";
//  $dbpass = "QyZGsBIUyzFiV6hg2vZk";
//  $db = "db_vasya";
//  $connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
$dbhost = "localhost";
$dbuser = "test";
$dbpass = "12345";
$db = "new";
$connect = mysqli_connect($dbhost,  $dbuser,  $dbpass, $db);
// if(!$connect) { 
//    die("Failed to connect to the server: " . mysqli_connect_error()); 
// } else { 
//    echo "Connected\n"; 
// } 
// if(!@mysqli_select_db($connect, 'new')) { 
//    die("Failed to connect to the database: " . mysqli_error($connect)); 
// } else { 
//    echo "DB found\n <br>"; 
// } 
 
?>