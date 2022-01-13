<?php 

$name = "Biplob";

if ($name == "Ema"){
	echo "Ema";
} elseif ($name == "Hujaifa") {
	echo "Hujaifa";
} elseif ($name == "Biplob"){
	echo "Yes, it's Biplob.";
} else{
	echo "Not found";
}


//Ternary Operator ...........................

$value1 = 10;
$value2 = 20;

$final_value = ( $value1 == 10 ) ? $value1 : $value2;

echo $final_value;


$another_value = 30;

$another_final_value = ( $another_value == 20 ) ? $value1 : $value2;

echo $another_final_value;



//Or operator..................................

if ($value1 == 3 || $value2==13) {
	echo "True";
}else{
	echo "false";
}


//AND operator..................................

if ($value1 == 3 && $value2==13) {
	echo "True";
}else{
	echo "false";
}


// PHP Not Operator ............................

$pass = "Njg&6_87";

$pass_length = strlen($pass);

if ( !($pass_length >= 3 && $pass_length <=5) )
{
	echo " Invalid Password.";
}else {
	echo "Valid Password.";
}


//PHP Nested If .................................

$user_name = "Omuk";
$password  = 1265;

if ( $user_name == "Omuk" ){
	if ( $password == 1265 ){
		echo "Valid username and password";
	}else {
		echo "Invalid password";
	}
}else {
	echo "Invalid username";
}


?>