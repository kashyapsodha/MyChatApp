<!DOCTYPE>
<html>
	<head>
		<title>Login to your account</title>
		<meta charset = "utf-8">
		<meta http-equiv="X_UA_Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifio:400,700">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>
	<body>
		<div class="signin-form">
			<form action="" method="post">
				<div class="form-header">
					<h2>Sign In</h2>
					<p>Login to MyChatApp</p>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="someone@site.com" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control" placeholder="Enter your password" autocomplete="off" required>
				</div>
				<div class="small">
					Forgot Password? <a href="forgot_pass.php">Click here</a>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
				</div>

				<?php include('signin_user.php'); ?>

				<div class="text-center small" style="color: #67428B;">Don't have an account? <a href="signup.php">Create one</a></div>
			</form>
		</div>
	</body>
</html>