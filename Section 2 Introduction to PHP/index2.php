<?php 

$number = 71;
$another_number = 10;

$amount = 12.45;

$name = "Biplob";

printf("The number is: %c", $number); //ASCII value...

printf("The number is: %b", $number);  //binary value...

printf("The number is: %x", $another_number);  //hexadecimal number...


printf("The number is: %d another number is: %d", $number, $another_number);

printf("The number is: %2\$d another number is: %1\$d", $number, $another_number);  //variable swap one technique...
printf('The number is: %2$d another number is: %1$d', $number, $another_number);  //variable swap another technique...


printf('The number is: %1$d another number is: %1$d', $number); //


printf("The amount is: %.2f", $amount);

printf("[%10s]", $name);    // 10 means 10 chracter...
printf("[%-10s]", $name);  //left align
printf("[%010s]", $name); //fillup with 0000
printf("[%'*10s]", $name); //fillup with ****
printf("[%'*10.3s]", $name); //fillup with 
 ?>