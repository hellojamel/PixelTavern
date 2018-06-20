<?php 

$con = mysqli_connect("localhost", "root", "Beck5687$", "pixeltavern"); // "servername", "username," "password" "dbname"

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}

// This stops SQL injections in POST vars

foreach ($_POST as $key => $value) {
	$_POST[$key] = mysqli_real_escape_string($con, $value);
}

// This stops SQL injections in GET vars

foreach ($_GET as $key => $value) {
	$_GET[$key] = mysqli_real_escape_string($con, $value);
}



 ?>