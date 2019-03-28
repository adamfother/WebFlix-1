<!doctype html>
<?php

include( 'inc/dbconnect.inc.php' );
$id = $_GET[ 'id' ];




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
	<h1>Welcome to WebFlix</h1>
	<?php 
	$result = mysqli_query( $con,
	"SELECT *
			 FROM `movie`"
);

	//loop through each row from results
	while ($row=mysqli_fetch_array($result)) {
		
	?>
	
	
	<h2 class="productprice"><?php echo $row['movie_name']; ?><br/></h2>
	<p><?php echo $row['movie_description']; ?></p>
	<p>Genre: <?php echo $row['movie_genre']; ?></p>
	<?php
	}
	?>
</body>
</html>
