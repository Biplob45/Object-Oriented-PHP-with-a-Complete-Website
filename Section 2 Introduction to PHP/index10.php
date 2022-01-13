<?php 

//PHP Switch Statement


$name = "Biplob";

switch ($name){
    case "Nusrat":
        echo "Nusrat";
        break;
    case "Hujaifah":
        echo "Hujaifah";
        break;
    case "Biplob":
        echo "Biplob";
        break;
    default:
        echo "Not found";
}


/*
$name = "Biplob";

switch (true){
    case false:
        echo "Nusrat";
        break;
    case "Hujaifah":
        echo "Hujaifah";
        break;
    case "Biplob":
        echo "Biplob";
        break;
    default:
        echo "Not found";
}
*/

?>




<?php
// sprintf  = save the output in a variable............
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt;
?> 