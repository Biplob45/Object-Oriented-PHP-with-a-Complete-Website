
<?php 
/*
//PHP While Loop ................

$year = 2000;

while ( $year <= 2050 ){
    echo $year."<br />";
    $year++;
}
*/
?>

<!DOCTYPE html>
<html>
<body>

<form action="" id="">
    Year
    <select id="">
    <?php 
        $years = 2000;
        while ( $years <= 2050 ) {   
    ?>
    <option value="<?php echo $years; ?>"><?php echo $years; ?></option>
    <?php 
    $years++;
    }    
    ?>

    </select>
</form>

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<form action="" id="">
    Year
    <select id="">
    <?php 
        $yearss = 2000;
        while ( $yearss <= 2050 ) {
            echo "<option value='$yearss'>$yearss</option>";
            $yearss++;
        }
    
    ?>

    </select>
</form>

</body>
</html>