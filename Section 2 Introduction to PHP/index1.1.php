<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>My Php code</h1>
<?php  

	$firstName = "Biplob ";
	$lastName = "Orton";
	$rollNumber = 12;
	$address = "Chittagong";

	//echo $firstName.' Vai '.$lastName; 
	//echo "Hello $firstName $lastName";
?> 

<h1>Hello <?php echo $firstName.$lastName; ?>, Your Roll Number is: <?php echo $rollNumber; ?></h1>

<h2>Your Home Address is: <?php echo $address; ?></h2>




	<?php 
		$ages = array(

			'Biplob' => 10,
			'Orton'  => 20,
			'Ema'    => 30,
			'Hujaifah' => 40
		);

		//echo count($ages);
		print_r($ages);

	 ?>


<?php
	//php constant...
	define("NAME", "Biplob");

	echo "<br />"."Your name is: ".NAME."<br />";
	echo constant("NAME");

	define("ROLL", 0571);

	echo ROLL;
	echo constant("ROLL");

 ?>



 <?php 
 	//$$  doluble dollar sign concept.....


 	$amarName = "amarChele";
 	$amarWife = "Ema";
 	$amarChele = "Hujaifah";

 	echo $$amarName;     //$amarName means "amarChele". abar $amarChele = "Hujaifah";   so output Hujaifah.

 	define("AMARMEYE", "Nursa");

 	$text = "constant";

 	echo $text("AMARMEYE");


  ?>



  <?php  

  	echo "Biplob ", "sddbdb";
  	print " Biplob";

  	echo '<h1 class="text-color">Biplob</h1>';
  
  	echo '<h1 class=\"text-color\">Biplob</h1>';
  ?>


  <?php 

  	$word = "biplob";

  	//$change_word = ucwords($word);

  	//echo ucwords($word);

  	printf("Hello %s %s %d", ucfirst($word), "ok", 10);

   ?>

</body>
</html>

