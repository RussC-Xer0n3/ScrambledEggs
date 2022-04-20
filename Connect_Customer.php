<?php
function connect_customer($dbname) {
	$servername = "127.0.0.1";
	$port = "3306";
	$server = $servername.":".$port;
	$username = "someuser";
	$password = "somepass";
	$connect_customer = mysqli_connect($server . $username . $password . $dbname);
	if($connect_customer->connect_errno){
		echo "Error connecting: " . $connect_customer->connect_error;
		exit();
	}
}
?>