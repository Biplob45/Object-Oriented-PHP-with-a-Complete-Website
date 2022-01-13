<?php 
//PHP Advanced Break
for ($count = 1; $count <=10; $count++)  //no 2 loop
{
    echo "List $count<br />";
    for ( $counts = 1; $counts <=4; $counts++ )   //no 1 loop
    {
        echo ".............List $counts <br />";

        if ($count == 2 && $counts == 2)
        {
            break 2;  //this 2 means no 2 loop
        }
    }
}

echo "End";

?>