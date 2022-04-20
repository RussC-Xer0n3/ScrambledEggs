<?php
include_once('connect.php');
include_once('connect_pass.php');

$email = null;
$pass = null;
$error = null;
$email = preg_replace('/[^A-Za-z0-9\-\.\@\_]/', '', $email);
//From <https://www.bing.com/search?q=php+sanitise+email+address&cvid=14351206762440db85ae4faf3ad7623d&aqs=edge..69i57j69i64.6838j0j1&pglt=299&FORM=ANNTA1&PC=U531>
		
function checker($email, $pass) {
	//First we want to connect to a separate DB which purely handles the scrambling
	$dbname = "scrambledeggs";
	//Connecting calls out the function stored in the DB
	connect_pass($dbname);
	$result = 'select eggs from scrambledeggs;';
	//Set the password as the new scrambled password from the scrambledeggs DB returned function.
	$pass = $result.scramble($pass);
	/* We have the new password stored in a variable so immediately disconnect from the
	* scrambledeggs DB which closes the function for this user login request.
	*/
	disconnect(connect_pass);
	/*Now since we haven't overloaded the standard server with X login requests we can pass    * the variable '$pass' which should be the same as what is stored on the 'users' server ($dbname "users")..
	* Because the standards for algorithms are the same, same input > same algo > same scramble > matches the key to value pair of user to password in the user DB.
	*/
	$dbname = "users";
	connect($dbname);
	$result = 'select ID from users where email is '.$email.' and password = '.$pass.'';
	if(empty(($email || $pass))) {
		$loggedin == false;
		$error = "Username or Password are empty.";
		return false;
	} else if ($result == FALSE) {
		$loggedin == false;
		$error = "Username or Password are incorrect.";
		return $loggedin;
	} else if ($result == NULL) {
		$loggedin == false;
		$error = "Account does not exist.";
		return $loggedin;
	} else if ($pass == TRUE && $email == TRUE && $result == TRUE) {
		$loggedin == true;
		return $loggedin;
		$fname = 'select fname from users where email is '.$email.''; //Foreign Key
		$customer = 'select customer from users where email is '.$email.''; //Foreign Key
		if($customer == (Y || TRUE)) {
			loggedin_customer($email);
		} else {
			loggedin_user($email);
		}
	} else {
		$loggedin == false;
		$error = 'Username and password do not match.';
		return $loggedin;
	}
}
?>
