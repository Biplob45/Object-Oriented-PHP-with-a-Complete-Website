<?php 

$first_name = "biplob";
$last_name  = "orton";
$roll_number= 35785;


/*$html_block = "<div>
	<h1>". ucwords($first_name). "</h1>
	<h2>" . ucwords($last_name). "</h2>
</div>";

echo $html_block;
*/

$html_block  = "<div>

	<h1>%s</h1>
	<h2>%s</h2>
	<h3>%d</h3>
</div>";

printf($html_block, ucwords($first_name), ucwords($last_name), $roll_number);

 ?>