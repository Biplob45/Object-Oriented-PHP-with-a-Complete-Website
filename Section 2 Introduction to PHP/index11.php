<?php
// PHP Alternative Control Structure Syntax................
$number = 10;
/*
if ($number == 12){
    echo "12";
}else if ($number == 10)
{
    echo "10";
}else {
    echo "not found";
}
*/


if ($number == 12): ?>
    <h1><?php echo "12"; ?></h1>
<?php elseif ($number == 10): ?>
    <h1><?php echo "10" ;?></h1>
<?php else: ?>
    <h1><?php echo "Not found"; ?></h1>

<?php endif; ?>

<?php
switch($number):
    case 10:
        echo "10";
        break;
    case 12:
        echo "12";
        break;
    default:
        echo "Not found";


endswitch;
?>

<?php for($count = 1; $count <=10; $count++): ?>
    <h1><?php echo $count; ?></h1>

<?php endfor ?>


<?php 

//PHP Isset   ..........................................

$name = "Biplob";
if (isset($name)){
    echo "ALL OK";
}





$name = NULL;
if (isset($name)){
    echo "ALL OK";
}else
{
    echo "Problem";
}

?>