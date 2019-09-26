<?php

$servername = "localhost";
$login_username = "root";
$login_password = "";
$database_name = "mychatapp";

// Create connection using MySQLi Procedural
$con = mysqli_connect($servername, $login_username, $login_password, $database_name) or die("Connection was not established." .mysqlli_connect_error());

// if(!$con) {
// 	die("Connection failed: " .mysqlli_connect_error());
// }




?>