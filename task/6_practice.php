<html>
    <?php
        
        $x = 30;
        $y = 10;

        $x += $y;
        echo $x;
        echo "<br>";
        $x = 30;
        $y = 10;

        $x *= $y;
        echo $x;
        echo "<br>";

        $x = 30;
        $y = 10;
        
        $x = ++$x;
        echo $x;
        echo "<br>";

        $x = $x++;
        echo $x;
        echo "<br>";

        $like = "white";
        switch ($like) {
            case "pink":
            echo "I like pink";
            break;
            case "blue":
            echo "I like blue";
            break;
            case "orange":
            echo "I like orange";
            break;
            default: 
            echo "Nothing";   
        }
    ?>

    <?php
        $x = 10;

        while ($x > 2) {
            echo $x."<br>";
            $x --;
        }


        $y = 10;
        while($y < 50) {
            if($y % 2 == 0 ) {
                echo "kanako<br>";
            }
            $y++;
         }


    //dowhile

    $z = 10;

    do {
        echo "happy☆<br>";
        $z += 5;
    } while ($z <= 100);
    

    for($b = 50;$b<=60;$b++) {
        echo "kanako<br>";
    }
    
    $world = array("France","Vietnam","India","Japan");

        foreach ($world as $place) {
            echo $place."<br>";
        }
    
        
    $z = 5; 
    while($z <= 100) {
        if ($z == 20) {
            echo "kanako";
        }
        $z ++;
    }
    ?>

    <?php
        $country = "VietNam";

        switch ($country) {
            case "VietNam":
                echo "I wanna go vietnam!";
            break;
            case "France":
                echo "I wanna go france!";
            break;
            case "Japan":
                echo "I wanna go Japan!";
            break;
            default: 
                echo "I wanna stay here.";
        }    
    
        $a = 10;
        while ($a <= 20) {
            echo $a;
            $a ++;
        }

        $b = 30;
        while($b>20) {
            if ($b< 50) {
                echo "かなこ";
            }
            $b--;
        }
    
        $c = 20;
        do {
            echo "This is do while";
            $c += 2;
        } while ($c<25);
    

        for($d=1;$d<=10;$d++) {
            echo "kanako";
        } 

        echo"<br>";

        $japan = array("Hokkaido","Osaka","Hiroshima");

        foreach($japan as $place) {
            echo $place;
        }
    
    
        $e = 5;
        while($e<10) {
            echo $e;
            $e++;
        }
        echo"<br>";
        $e=5;
        while($e>1) {
            echo $e;
            $e--;
        }
        $a = 10;
        do {
            echo "This is do while";
            $a += 4;
        }while($a <=13);

       $place = array("kanako"=>"japan","asami"=>"korea","nao"=>"china");

       foreach ($place as $parson=>$place) {
           echo "$person=>$place";
       }


    ?>

    <?php
    

    $a = 10;
    while($a<=20) {
        echo "kanako";
        $a ++;
    }
    
    
    
    ?>



</html>