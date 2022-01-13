<?php 
//PHP GOTO...........
for ($count = 1; $count <=10; $count++)  //no 2 loop
{
    echo "List $count<br />";
    for ( $counts = 1; $counts <=4; $counts++ )   //no 1 loop
    {
        echo ".............List $counts <br />";

        if ($count == 2 && $counts == 2)
        {
            goto jump;
        }
    }
}

jump:   //bookmark

echo "End<br />";

?>

<?php 

echo "Biplob";

goto jaitehobe;

echo "EMA";



jaitehobe:  //bookmark
echo " hujaifah";




?>