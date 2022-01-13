<?php 

$count = 1;

do{
    echo $count. "<br />";
    $count++;
}while($count <= 5);
?>


<!DOCTYPE html>
<head>
    <title>

</title>
</head>
<body>
<ul>
<?php 

for ( $number_count = 1; $number_count <= 100; $number_count++ )
{
?>
    
    <li>Count <?php echo $number_count; ?> </li>

    <?php if ($number_count == 40)
    {
        break;
    } ?>

<?php   
}

?>



</body>