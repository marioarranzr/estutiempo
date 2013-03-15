<?php
function generatePass(){
	//We define a new char string
	$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	//We get the length os the string
	$longitudCadena=strlen($cadena);

	//We define the variable which is containing the password
	$pass = "";
	//Password length definition
	$longitudPass=8;

	//We create the password
	for($i=1 ; $i<=$longitudPass ; $i++){
		//We define a random number between 0 and the char string length -1
		$pos=rand(0,$longitudCadena-1);

		//We are making the password in each iteration adding to $pass the char in position $pos from $cadena
		$pass .= substr($cadena,$pos,1);
	}
	return $pass;
}
