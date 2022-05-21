<style>
/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}
/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}
/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: aliceblue;
    color: teal;
  }
  /* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: teal;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: aliceblue;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<nav class="w3-container w3-teal w3-center w3-margin-top">
    <div class="dropdown">
        <button class="dropbtn">Projects
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="https://russc-xer0n3.github.io/Tumor-Probability">Tumor probability</a>
          <a href="https://russc-xer0n3.github.io/NetPCaC">NetPCaC</a>
          <a href="https://russc-xer0n3.github.io/LANDROVER">LANDROVER</a>
          <a href="https://russc-xer0n3.github.io/MAC">MAC Address</a>
          <a href="https://russc-xer0n3.github.io/SCRUD">SCRUD</a>
          <a href="https://russc-xer0n3.github.io/Remove">Code Syntax Removal</a>
          <a href="https://russc-xer0n3.github.io/PassGen">PassGen</a>
          <a href="https://russc-xer0n3.github.io/C_Shapes">C Programming Shapes</a>
          <a href="https://russc-xer0n3.github.io/Shapes---python">Python Shapes and space</a>
          <a href="https://russc-xer0n3.github.io/The-old-Fusion-Repository">Fusion?</a>
          <a href="https://russc-xer0n3.github.io/The-Russian-Wedding-Rings">The Russian Wedding Rings</a>
          <a href="https://russc-xer0n3.github.io/QBit-and-GParticulates">QBit and GParticulates</a>
          <a href="https://russc-xer0n3.github.io/Thyme-old">Thyme</a>
          <a href="https://russc-xer0n3.github.io/IP-Port">IP and Ports</a>
          <a href="https://russc-xer0n3.github.io/Xer0n3">Xer0n3</a>
          <a href="https://russc-xer0n3.github.io/ScrambledEggs">ScrambledEggs</a>
          <a href="https://russc-xer0n3.github.io/Py">Python Code</a>
        </div>
    </div>
    <br>
      <a href="https://www.facebook.com/profile.php?id=100075972987666"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/russellclarke821"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="https://www.pinterest.co.uk/russellclarke821/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
      <a href="https://twitter.com/Developing821"><i class="fa fa-twitter w3-hover-opacity"></i></a>
      <a href="https://www.linkedin.com/in/russell-clarke-09a1a5238"></a><i class="fa fa-linkedin w3-hover-opacity"></i>
      <br><a href="https://russc-xer0n3.github.io">My CV and additional information</a>
    <br>
</nav>
# ScrambledEggs
##  A website to write and test login methods

Herein the project was purely designed to look at a method for storing and retreiving login details and working with PHP to do so.

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

we would say something like
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
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <meta name="description" content="Projects and Portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQLi, Python, Java, C, C++, C#, Time, Shapes">
    <meta name="author" content="Russell Clarke">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <a href="https://www.facebook.com/profile.php?id=100075972987666"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://www.instagram.com/russellclarke821"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.pinterest.co.uk/russellclarke821/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
  <a href="https://twitter.com/Developing821"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a href="https://www.linkedin.com/in/russell-clarke-09a1a5238"></a><i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
