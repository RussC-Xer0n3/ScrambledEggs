# Xer0n3

##  A website to write and test login methods

Herein the project was purel;y designed to look at a method for storing and retreiving login details and working with PHP to do so.

When we look at the initial registration methods, we can see the validators being used in the logic

### Validators
```
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
'''

After validation, the password is stored and scrambled. Let's take a look at the scrambling method;

### Scrambling method
'''
<?php
function scramble($pass){
/*Scramble the password from the user ready for insert into DB or ready for login.
 * The scrambles password will be the same when or if this function is called at login
 * too so the backend will still 'see' the same scrambled data on receipt
 */
//Function which is stored
	$algo = PASSWORD_DEFAULT;
	$eggs = password_hash($pass, $algo);
	$pass = $eggs;
	return $pass;
}
```

What's interesting is, we can store and call the method in a tuple or a column inside a database and use escape characters to get the code to run as a function when called into the php script as oppposed to just calling the php method from a script it could be securely stored in a database with additional security;

### Calling escape characters
```
//Converted for the tuple and store it somewhere
function scramble($pass){\n\t$algo = PASSWORD_DEFAULT;\n\t$eggs = password_hash($pass, $algo);\n\t$pass = $eggs;\n\treturn $pass;\n}\r}
```

we would say somethiig like
```
mysqli.connect($EGGS);
$pass = "SELECT scrambledeggs FROM EGGS";
//then decrypt or encrypt according to which direction is required per calling script (login / register);
```

and of course there's the check-up for the requested user login

### User Login Checker
```
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
```
