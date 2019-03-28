<?php 
include("inc/header.php");
include("inc/form_handlers/settings_handler.php");
?>


<div class="main-wrap col-md-12">
<div class="main_column column settings-div col-md-6 col-md-offset-3">

	<h1 style="color:#1f1f1f">Account Settings</h1>
	<br>
	<?php
	echo "<img class='img-responsive' src='" . $user['profile_pic'] ."' id='small_profile_pics'>";
	?>
	<br>
	<a href="upload.php">Upload new profile picture</a> <br><br><br>

	<h4>Modify the values and click 'Update Details'</h4>
	
	<br>

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	
	?>

	<form action="settings.php" method="POST">
		<div class="row">
			<div class="col-md-2"><p class="setting-place">First Name:</p></div>
			<div class="col-md-6 setting-field"><input type="text" name="first_name" value="<?php echo $first_name; ?>"></div>
		
		</div>
		<br>
		<div class="row">
			<div class="col-md-2"><p class="setting-place">Last Name:</p></div>
			<div class="col-md-6 setting-field"><input type="text" name="last_name" value="<?php echo $last_name; ?>"></div>
		
		</div>
		<br>
		<div class="row">
			<div class="col-md-2"><p class="setting-place">Email:</p></div>
			<div class="col-md-6 setting-field"><input type="text" name="email" value="<?php echo $email; ?>"></div>
		
		</div>
		<br>
		
	
		<?php echo $message; ?>
<div class="col-md-2 col-md-offset-4">
		<input type="submit" name="update_details" id="save_details" value="Update Details"><br>
	</form>
</div>
	<br>
	<br>
	<h4>Change Password</h4>
	<form action="settings.php" method="POST">
		
		<div class="row">
			<div class="col-md-2"><p class="setting-place">Old Password:</p></div>
			<div class="col-md-6 setting-field"><input type="password" name="old_password"></div>
		
		</div>
		<br>
		<div class="row">
			<div class="col-md-2"><p class="setting-place">New Password:</p></div>
			<div class="col-md-6 setting-field"><input type="password" name="new_password_1"></div>
		
		</div>
		<br>
		<div class="row">
			<div class="col-md-2"><p class="setting-place">Confirm New Password:</p></div>
			<div class="col-md-6 setting-field"><input type="password" name="new_password_2"></div>
		
		</div>
		
		
		<?php echo $password_message; ?>
		<div class="col-md-2 col-md-offset-4">
		<input type="submit" name="update_password" id="save_details" value="Update Password"><br>
	</form>
		</div>
	<br>
	<br>
	<h4>Close Account</h4>
	<form action="settings.php" method="POST">
		<p>Click the button to close your WebFlix account. Your account will be deactivated but you can log back into your account anytime to re-activate your account.</p>
		<div class="col-md-2 col-md-offset-4">
		<input type="submit" name="close_account" id="close_account" value="Close Account">
		</div>
	</form>

	</div>
	<br> 
<br>
</div>
<br> 
<br>