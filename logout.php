<?php

session_start();


session_destroy();

// Resume back to signin page
header("Location: signin.php");



?>