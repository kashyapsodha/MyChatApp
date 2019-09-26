<!DOCTYPE>
<html>
	<head>
		<title>Create new account</title>
		<meta charset = "utf-8">
		<meta http-equiv="X_UA_Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifio:400,700">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>
	<body>
		<div class="signup-form">
			<form action="" method="post">
				<div class="form-header">
					<h2>Sign Up</h2>
					<p>Create an account on MyChatApp to Chat with friends</p>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user_name" class="form-control" placeholder="example" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="user_pass" class="form-control" placeholder="Enter your password" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" name="user_email" class="form-control" placeholder="someone@site.com" autocomplete="off" required>
				</div>

				<!-- Creating a dropdown for country -->
				<div class="form-group">
					<label>Country</label>
					<select class="form-control" name="user_country">
						<option disabled="">Select a country</option>
						<option>India</option>
						<option>US</option>
						<option>Canada</option>
						<option>Australia</option>
						<option>UK</option>
					</select>
				</div>

				<!-- Creating a dropdwon for gender -->
				<div class="form-group">
					<label>Gender</label>
					<select class="form-control" name="user_gender">
						<option disabled="">Select your gender</option>
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					</select>
				</div>
				<div class="form-group">
					<label class="checkbox-inline">
						<input type="checkbox" required> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy.</a>
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
				</div>

				<?php include('signup_user.php'); ?>

				<div class="text-center small" style="color: #67428B;">Already have an account? <a href="signin.php">Signin here</a></div>
			</form>
		</div>
	</body>
</html>