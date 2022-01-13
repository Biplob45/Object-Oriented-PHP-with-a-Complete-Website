<?php 
//Inccrement or decrement operator.....

$number = 10;

//echo $number++."<br />";
echo ++$number."<br />";

echo $number;

//Concatenation operator......


$firstName = "Biplob";

$lastName  = "Orton";

$fullName  = $firstName." ".$lastName;

echo $fullName;


echo $firstName .= "Orton";


$number1 = 10;
$number2 = 20;

var_dump($number1 === $number2);

var_dump($number1 !== $number2); //check both data types and value....


//Spaceship Operator ......................  <=>

var_dump($number1 <=> $number2);    //  10 <=> 20  Ans = -1, 20 <=> 10  Ans = 1, 20 <=> 20  Ans = 0

 ?>