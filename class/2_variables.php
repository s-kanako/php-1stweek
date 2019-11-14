<html>
    <head>
    </head>

    <body>
        <?php
            $text = "Hello World";
            $x = 5;
            $y = 10.1;

            echo $text;
            echo "<br>";
            echo $x;
            echo "<br>";
            echo $y;

            #invalid variables
            /*
            $5 = "kanako";   ←only numbers
            $%&& = "kanako"; ←special characters
            */

            //valid variables
            $var_1 = "kanako";
            $lower = "kanako";
            $LOWER = "kanako";
            $Lower = "kanako";
            $_name ="kanako";
            $name2 = "kanako";

            echo "<br>";
            echo $var_1;
            echo "<br>";
            echo $LOWER;
            
        ?>
    </body>
</html>