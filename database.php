<?php

$hostname     = "localhost"; // enter your hostname
$username     = "root";  // enter your table username
$password     = "Trepce83";   // enter your password
$databasename = "registration";  // enter your database
// Create connection 
$conn = new mysqli($hostname, $username, $password,$databasename);
 // Check connection 
if ($conn->connect_error) { 
die("Unable to Connect database: " . $conn->connect_error);
 }
?>