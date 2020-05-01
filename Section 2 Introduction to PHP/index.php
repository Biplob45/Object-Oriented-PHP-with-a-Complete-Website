<?php
/* 

		//Variables, Arrays & Loops

	//$varName = "Hello";

	//echo $varName. " World";
	
	//$numbers = array(4,1,6,8,7);

	//$numbers1 = [45,12,56,74];

	//print_r($numbers);	
	//var_dump($numbers);

	//echo $numbers[3];
	//print_r($numbers);
	//var_dump($numbers);


	$ages = array(

		'John' => 35,
		'Mary' => 27,
		'Bob'  => 55
	);
	array_pop($ages);
	//echo count($ages);
	print_r($ages);



for ($i=0; $i <= 5; $i++) { 
	echo $i;
}
	$i = 0;
	while ( $i <= 10) {
		echo "Number: ".$i. '<br />';
		$i++;
	}


	$ages = array(

		'John' => 35,
		'Mary' => 27,
		'Bob'  => 55
	);

	foreach ($ages as $age) {
		echo  $age. '<br />';
	}


	foreach ($ages as $name => $age) {
		echo $name.' is '.$age.' Years old'.'<br />';
	}


			//Functions & Conditionals  ()  $  &

	function greet(){
		echo "Biplob "."World  ".'<br />';
	}

	greet();


	function greet1($name){

		echo "Biplob".$name.'<br />';
	}

	greet1('Orton');


	function greet2($greeting,$name = 'Biplob'){

		echo strtoupper($greeting.' '.$name.'<br />');
	}

	greet2('Whats up','Orton');
*/

	$num1 = 3;
	$num2 = 20;

	if ($num1 == 10) {
		echo "Correct";
	}elseif ($num2 == 20) {
		echo "Equal";
	}else{
		echo "Not";
	}

	if ($num1 == 3 || $num2==13) {
		echo "True";
	}else{
		echo "false";
	}

?>