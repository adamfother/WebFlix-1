<!doctype html>
<?php

include( 'inc/dbconnect.inc.php' );


//if user is not logged in return to register.php
if ( isset( $_SESSION[ 'username' ] ) ) {
	$userLoggedIn = $_SESSION[ 'username' ];
	$user_details_query = mysqli_query( $con, "SELECT * FROM users WHERE username='$userLoggedIn'" ); //fetches user data
	$user = mysqli_fetch_array( $user_details_query );
} else {
	header( "Location: register.php" );
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>This is the homepage</h1>
</body>
</html>
