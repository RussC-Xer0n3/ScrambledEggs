<?php
function disconnect ($a) {
	$a = preg_match("/.*$/", $a); //All connections
	mysqli_close($a);
	exit();
}
?>