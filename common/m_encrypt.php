<?php
function encrypt($password){
	// We make the Xt3mP encryption style.
$pass_encriptada1 = md5 ($password); //Level 1 encryption
$pass_encriptada2 = crc32($pass_encriptada1); //Level 1 encryption
$pass_encriptada3 = crypt($pass_encriptada2, "xtemp"); //Level 2 encryption
$pass_encriptada4 = sha1("xtemp".$pass_encriptada3); //Level 3 encryption
// Here it will be too hard to reach the true password
	return $pass_encriptada4;
}




