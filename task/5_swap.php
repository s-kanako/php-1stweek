<html>

    <?php
    
        $x = 10;
        $y = 20;

        echo "x=".$x;
        echo "<br>";
        echo "y=".$y;
        echo "<br>";



        echo "<br>";


        $temp = $x;   //$temp = 10;
        $x = $y;      //$x = 20;
        $y = $temp;   //$y = 10;
 
        echo "x=".$x;
        echo "<br>";
        echo "y=".$y;
        echo "<br>";





    ?>

</html>