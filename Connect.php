<?php
function connect($dbname) {
	$servername = "127.0.0.1";
	$port = "3306";
	$server = $servername.":".$port;
	$username = "someuser";
	$password = "somepass";
	$connect = mysqli_connect($server . $username . $password . $dbname);
	if($connect->connect_errno){
		echo "Error connecting: " . $connect->connect_error;
		exit();
	}
}
?>