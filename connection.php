<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "google_new";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
	echo "Successful";
} else{
	echo "Unsuccessful";

}


?>