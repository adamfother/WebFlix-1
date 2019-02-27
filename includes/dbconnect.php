
<?php
//set connectoion variables to match DB details
$host = "";
$username = "";
$password = "";
$database = "";
//connect to database
$dbconnection = mysqli_connect($host, $username, $password, $database);
//check if connected, exit if not
if(!$dbconnection) {
	exit("Database could not be connected.");
}
