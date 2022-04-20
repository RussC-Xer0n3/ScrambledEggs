<?php
$path = $_SERVER['DOCUMENT_ROOT'].'\XerOne\'';
//$path.=''.preg_match("/[A-z][.php]/", $path);'';
include_once('disconnect.php');
//include_once('login_check.php');
//include_once('register.php');
include_once('loggedin_user.php');
include_once('loggedin_customer.php');

$fname = null;
$email = null;
$password = null;
$welcome = null;
$login = null;
$loggedin = false;

$login_form = '<div id="login">	
	<form action="'.checker($email, $pass).'" method="post" enctype="application/x-www-form-urlencoded" 
	accept-charset="utf-8">
		<label for="userid">ID / Email:</label>
		<input type="email" id="userid" name="userid" value='.$email.'><br>
		<p id="userid" class="error">'.$error.'</p>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" value="'.$pass.'"><br>
		<p id="password" class="error">'.$error.'</p>
		<input type="submit" value="Submit">
	</form>
</div>';

$register_form = '<div id="registration"><form action="'.register($fname, $lname, $email, $pass, $pass2).'" method="post" enctype="application/x-www-form-urlencoded" accept-charset="utf-8">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" value='.$fname.'><br>
		<p id="fname" class="error">'.$fnerror .'</p><br>
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value='.$lname.'><br>
		<p id="lname" class="error">'.$lnerror.'</p><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value='.$email.'><br>
		<p id="fname" class="error">'.$emerror.'</p><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" value='.$pass.'><br>
		<p id="fname" class="error">'.$perror.'</p><br>
		<label for="password">Confirm Password:</label>
		<input type="password" id="password" name="password" value='.$pass2.'><br>
		<p id="fname" class="error">'.$perror2.'</p><br>
		<input type="submit" value="Submit">
		<h4>'.$error.'</h4>
	</form>
</div>';

$welcome = '<div class="user_welcome">
				<div class="account">
					<h3 class="welcome" id="welcome">Hello '.$fname.' welcome.</h3>
				</div>
			</div>';
	
$login = '<div class="sign">
			<button id="login" onClick="'.$login_form.'">LOGIN</button>
			<button id="register" onClick="'.$register_form.'">REGISTER</button>
		</div>';

$profile_button = '<button type="button" id="profile" onclick="show_profile()">PROFILE</button>';

$profile_divider = '<div id="user_profile">
					<div>';
					
$settings_button = '<button type="button" id="settings" onclick="show_settings()">SETTINGS</button>';

$settings_divider = '<div id="user_settings">
						<form action="'.account_settings().'" method="post" enctype="application/x-www-form-urlencoded">
							<!---Rest of form here check boxes etc --->
						</form>
					<div>';

$logout_button = '<button id="logout" onclick="'.logout($loggedin == true, $email).'">LOGOUT</button>';

$hr_dividing_line = '<hr class="side_splitter"></hr>';
			
$user_info_links = '<hr class="side_splitter"></hr>
					<ul>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
						<a href="#">someinfo</a>
					</ul>
					<hr class="side_splitter"></hr>
					<ul>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
						<a href="#">someotherinfo</a>
					</ul>';

function logout($loggedin, $email) {
	disconnect($a);
	$loggedin == false;
	return $loggedin;
}
function loggedin($loggedin) {
	switch ($loggedin) {
		case false:
			$loggedin == false;
			break;
		case true && false:
			$loggedin == false;
			break;
		case false && customer:
			$loggedin == false;
			break;
		case true:
			$loggedin == true;
			$fname == $fname;
			$email == $email;
			break;
		case true && customer:
			$loggedin == true;
			$fname == $fname;
			$email == $email;
			customer();
			break;
		default:
			$loggedin == false;
			break;
		}
	return $loggedin;
}
loggedin($loggedin);

if ($loggedin == true) {
	echo $welcome;
	echo $profile_button;
	echo $profile_divider;
	echo $profile_script;
	echo $settings_button;
	echo $settings_divider;
	echo $settings_script;
	echo $hr_dividing_line;
	echo $logout_button;
	echo $hr_dividing_line;
	echo $user_info_links;
} else {
	echo $login;
	echo $user_info_links;
}
?>
<head>
<meta charset="UTF-8">
<meta name="description" content="html templates">  <meta name="keywords" content="HTML, CSS, JavaScript">  <meta name="XerOne" content="XerOne">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="base.css">
</head>
<body>
<content class="wrapper" id="w">
<header>
<h1 id="page_title">XerOne</h1>
</header>
<content class="main" id="m">
	<article class="articles" id="first">
		<?php 
			$login_form;
			$register_form;
			$customer_register_form;
		?>
	</article>
	<article class="articles" id="second">
		<h2 class="news">Todays Top News</h2>
		<div class="news_breaker" id="0">
			<h4 class="news_title">Some random writing on the wall</h4>
			<p class="news_text">A Random link which goes nowhere productive to accompany the writing on the wall should be <a href="#" target="_self">available here somewhere</a> and also whilst we\'re here, might as well do nothing else but laugh.</p>
		</div><br>
		<div class="news_breaker" id="1">
			<h4 class="news_title">Military across the Globe</h4>
			<p class="news_text">Military across the globe have begun to take action to, quite literally, underground threats to human captives, illegal drug factories being built underground and used, so called \'Whorenets\' (prostitution networks) and illegal Weapon silos. <a href="#" target="_self">More info here (must have a governement login)</a>.</p>
		</div><br>
		<div class="news_breaker" id="2">
			<h4 class="news_title">Some ransome ware delivered by XerOne</h4>
			<p class="news_text">A Ransome link which goes nowhere productive to accompany the writing on the wall should be <a href="#" target="_self">available here somewhere</a> and also whilst we\'re here, might as well do nothing else but laugh whilst the payload is delivered to meet their demands.</p>
		</div><br>
		<div class="news_breaker" id="3">
			<h4 class="news_title">Animals are better off when humans stop being nasty and emitting pollution</h4>
			<p class="news_text">Old studies from years ago <a href="#" target="_self">available here somewhere</a>, suggest and prove Humans are destroying their planet Earth. Also whilst we\'re here, Bill Gates is Furious, as are we.</p>
		</div><br>
		<div class="news_breaker" id="4">
			<h4 class="news_title">LGBT Gets better recognition</h4>
			<p class="news_text">Finally, it\'s about time. <a href="#" target="_self">Peadophiles still condemmed</a>. Probably or the best........Editor.</p>
		</div>
		<div class="news_breaker" id="5">
			<h4 class="news_title">Priti Patel</h4>
			<p class="news_text">Possibly sexiest woman in government media scope.......Editor.</p>
		</div>
    </article>
</content>
<footer>
	<li class="foot_info">
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
	</li>
	<li class="foot_info">
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
		<a class="foot_link" href="#">someinfo</a>
	</li>
	<li class="foot_info">
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
	</li>
	<li class="foot_info">
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
		<a class="foot_link" href="#">someotherinfo</a>
	</li>
<img src="" alt="" >
</footer>
<nav>
	<button id="menu" type="button" onclick="show_hide()">MENU</button>
		<?php 
			$welcome;
			$login;		
		?>
</nav>
<aside id="user_info">
	<button id="menu" type="button" onclick="show_hide()">MENU</button>
	<?php 
		$profile_button;
		$profile_divider;
		echo '<script type="text/javascript">,
				show_profile(), 
			</script>';
		$settings_button;
		$settings_divider;
		echo '<script type="text/javascript">,
				show_profile(), 
			</script>';
		$hr_dividing_line;
		$logout_button;
		$hr_dividing_line;
		$user_info_links; 
	?>
</aside>
<script>
	function show_hide() {
  		var x = document.getElementById("user_info");
  		if (x.style.visibility === "hidden") {
			x.style.width = "25%";
  			x.style.visibility = "visible";
			x.style.transition = "1s";
		} else {
			x.style.width = "0%";
    			x.style.visibility = "hidden";
			x.style.transition = "1s";
  		}
	}
</script>
<script src="profile_script.js"></script>
<script src="settings_script.js"></script>
</content>
</body>
</html>
<?php

?>