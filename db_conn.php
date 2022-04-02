<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "poster";

$conn = mysqli_connect($servername, $username, $password, $db_name);
	if (!$conn) {
		echo "Connection Failed!";
		exit();
	}

?>