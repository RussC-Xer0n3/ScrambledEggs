<?php
include_once('connect.php');
include_once('connect_pass.php');
include_once('disconnect.php');

//errors
$fnerror = null;
$lnerror = null;
$emerror = null;
$perror = null;
$perror2 = null;
$error = null;

//Variables 
$fname= null;
$lname = null;
$email = null;
$pass = null;
$pass2 = null;

function password_check($pass, $pass2){
	if(empty($pass || $pass2)){
		$perror = 'A password field is empty';
		$perror2 = 'A password field is empty';
	}else if(!$pass == $pass2){
		$perror = 'Passwords do not match';
		$perror2 = 'Passwords do not match';
	}else{
		$pass = ($pass2 || $pass);
	}
return;
}
function fname_check($fname){
	if(!isset($_POST[$fname])){
		$fname = null;
		$fnerror = 'Name Fields cannot be empty.';
	}else if(preg_match("/^[a-zA-Z-' ]*$/", $fname)){
		$fname = null;
		$fnerror = 'Must not contain symbols or numbers.';
	}else{
		$fname = $fname;
	}
return;
}
function lname_check($lname){
	if(!isset($_POST[$lname])){
		$lname = null;
		$lnerror = 'Name Fields cannot be empty.';
	}else if(preg_match("/^[a-zA-Z-' ]*$/", $lname)){
		$lname = null;
		$fnerror = 'Must not contain symbols or numbers.';
	}else{
		$lname = $lname;
	}
return;
}
function email_check($email){
	$email = preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email);
	if(empty($email)){
		$emerror = 'Email Field cannot be empty.';
	} else if (!preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email)){
		$email = preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email);
	} else {
		$email = preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email);
	}
	
	$dbname = "users";
	$connect = connect($dbname);
	$result = 'select * from users where email is '.$email.'';
	if ($result == true) {
		$emerror = 'Account already exists.';
	} else {
		return $email;
	}
	disconnect($connect);
	return;
}
function register($fname, $lname, $email, $pass, $pass2){
	password_check($pass, $pass2);
	fname_check($fname);
	lname_check($lname);
	email_check($email);
	$dbname = scrambledeggs;
	$connect_pass = connect_pass($dbname);
	$s_pass = pass_scramble($pass);
	disconnect($connect_pass);
	$dbname = users;
	$connect = connect($dbname);
	/* switch or if else to check if exists already */
	$result = new mysqli_query($connect, 'insert into users (first_name, last_name, email, password) values ('.$fname.', '.$lname.', '.$email.', '.$spass.')', MYSQLI_USE_RESULT);
	disconnect();
	//Cancel and clear buttons pluss login filed to be displayed
}
?>
