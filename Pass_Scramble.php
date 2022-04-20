<?php
function scramble($pass){
/*Scramble the password from the user ready for insert into DB or ready for login.
 * The scrambles password will be the same when or if this function is called at login
 * too so the backend will still 'see' the same scrambled data on receipt
 */
//Function which is stored
	$algo = "crc32c";
	$eggs = password_hash($pass, $algo);
	$pass = $eggs;
	return $pass;
}

//PHP: password_hash - Manual


//Converted for the tuple
//function scramble($pass){\n\t$algo = PASSWORD_DEFAULT;\n\t$eggs = password_hash($pass, $algo);\n\t$pass = $eggs;\n\treturn $pass;\n}\r}
?>