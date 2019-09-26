<?php

$servername = "localhost";
$login_username = "root";
$login_password = "";
$database_name = "mychatapp";

$con = mysqli_connect($servername, $login_username, $login_password, $database_name) or die("Connection was not established.".mysqli_connect_error());

$user = "select * from users";
$run_user = mysqli_query($con, $user);

while($row_user = mysqli_fetch_array($run_user)) {
	$user_id = $row_user['user_id'];
	$user_name = $row_user['user_name'];
	$user_profile = $row_user['user_profile'];
	$login = $row_user['log_in'];

	echo "
		<li>
			<div class='chat-left-img'>
				<img src='$user_profile'>
			</div>
			<div class='chat-left-detail'>
				<p>
					<a href='home.php?user_name=$user_name'>$user_name</a>
				</p>";
				if($login == "Online") {
					echo "<span><i class='fa fa-circle' aria-hdden='true'></i> Online</span>";
				} else {
					echo "<span><i class='fa fa-circle-o' aria-hdden='true'></i> Offline</span>";
				}
				" 
			</div>
		</li>
		";

}

?>