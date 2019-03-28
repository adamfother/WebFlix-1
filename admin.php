
<?php
//session_start();

//if ($_SESSION['user_level']!='admin') {
	//header('location: index.php');
//}

include( "inc/header.php" );
?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Mr Cartridge</title>



	<!-- Bootstrap -->

	<link href="css/bootstrap.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">

	<?php 

	include("inc_scriptpackage.inc.php");

	?>



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

	<?php 

	

	include("inc_nav.inc.php");

	

	?>

	<div class="container">

		<div class="row">
			
            
			<div class="col-md-10 col-md-offset-1 adminformparent">

	




<img src="images/cartridgefavi.png" class="img-responsive cartridgeicon" width="70" alt=""/>
<h1 class="checkoutheader">Insert Product</h1>
	
	<form method="post" enctype="multipart/form-data" action="mng_movies.php"><br />
		<input type="hidden" name="action" value="insert"/><br />
		<h3>Movie Name:</h3><input class="adminfield" type="text" name="movie_name"/>
		<br />
		<h3>Movie Description:</h3><input class="adminfield" type="text" name="movie_description"/>
		<br />
		<h3>Movie Genre:</h3><input class="adminfield" type="text" name="movie_genre"/>
		<br />
		<h3>Movie Release Year:</h3><input class="adminfield" type="text" name="movie_release_date"/>
		<br />
		<h3>Movie Thumbnail:</h3><input type="file" name="thumb" /> 
		<br />
		<h3>Movie Main Image:</h3><input type="file" name="main" />
		<br />
		<input type="submit" class="adminsubmit" value="Insert Movie" />
	</form>

				






			</div>



		</div>

	</div>



	<hr>

	<?php 

	

	include("footer.php");

	

	?>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<!--<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>-->

	<!--<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>-->



	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<script src="js/bootstrap.js"></script>

</body>

</html>