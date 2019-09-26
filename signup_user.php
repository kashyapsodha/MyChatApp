<?php

include('include/connection.php');

	if(isset($_POST['sign_up'])) {
		$name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
		$pass = htmlentities((mysqli_real_escape_string($con, $_POST['user_pass'])));
		$email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
		$country = htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));
		$gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
		//$rand = rand(1,2); // To include avataar

		// Check if name is entered or not
		if($name == '') {
			echo"<script>alert('Enter name.')</script>";
		}

		// Check password length
		if(strlen($pass) < 8) {
			echo"<script>alert('Password must be minimum 8 characters long.')</script>";
			exit();
		}

		// Check for existing user
		$check_email = "select * from users where user_email = '$email'";
		$run_email = mysqli_query($con, $check_email);

		$check = mysqli_num_rows($run_email);
		
		if($check > 0) {
			echo"<script>alert('Record already exists with this email.')</script>";
			echo"<script>window.open('signin.php','_self')</script>"; // Open signin page on the same page, thus _self.
			exit();
		}

		// Get Avatar for selected gender
		if($gender == 'Male') {
			$profile_pic = "images/Male_Avatar.png";
		} else if($gender == 'Female') {
			$profile_pic = "images/Female_Avatar.png";
		} else if($gender == 'Others') {
			$profile_pic = "images/Others_Avatar.png";
		}

		$insert = "insert into users (user_name, user_pass, user_email, user_profile, user_country, user_gender) values('$name', '$pass', '$email', 
			'$profile_pic', '$country', '$gender')";

		// Pass the query to the database
		$query = mysqli_query($con, $insert);

		if($query) {
			echo"<script>alert('Congratulations $name Your account has been created successfully.')</script>";
			echo"<script>window.open('signin.php', '_self')</script>"; // Open signin page on the same page, thus _self.
		}
		else {
			echo"<script>alert('Failed due to error. Please try again.')</script>";
			//echo "<script>'Error: ' . $insert . '<br>' . $con->error</script>";
			echo"<script>window.open('signup.php', '_self')</script>";
		}
	}

?>