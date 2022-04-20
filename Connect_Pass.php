<?php
function connect_pass($dbname) {
	$servername = "127.0.0.1";
	$port = "3306";
	$server = $servername.":".$port;
	$username = "someuser";
	$password = "somepass";
	$connect_pass = mysqli_connect($server . $username . $password . $dbname);
	if($connect_pass->connect_errno){
		echo "Error connecting: " . $connect_pass->connect_error;
		exit();
	}
}
?>