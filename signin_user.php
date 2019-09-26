<?php

session_start();

include('include/connection.php');

	// Check if the button is pressed
	if(isset($_POST['sign_in'])) {
		$email = htmlentities((mysqli_real_escape_string($con, $_POST['email'])));
		$pass = htmlentities((mysqli_real_escape_string($con, $_POST['pass'])));

		$select_user = "select * from users where user_email = '$email' and user_pass = '$pass'";

		$query = mysqli_query($con, $select_user);

		$check_user = mysqli_num_rows($query);

		// Check if user is found in data
		if($check_user == 1) {
			// Start the session with given email
			$_SESSION['user_email'] = $email;

			// Update users status to Online
			$update_status = "update users set log_in = 'Online' where user_email = '$email'";

			$update_msg = mysqli_query($con, $update_status);

			// Fetch user name from the database
			$user = $_SESSION[user_email];
			$get_user = "select * from users where user_email = '$user'";
			$run_user = mysqli_query($con, $get_user);
			$row = mysqli_fetch_array($run_user);
			$user_name = $row['user_name'];

			echo"<script>window.open('home.php?user_name=$user_name', '_self')</script>";
		}
		else {
			echo"<script>alert('Check your email and password.')</script>";
		}
	}





?>