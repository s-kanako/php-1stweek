<?PHP
    $cars = array("VOLVO","BMW","TOYOTA");

    echo "I like".$cars[0]." , ".$cars[1]." , ".$cars[2];

    echo"<br>";

    $num = array (1,2,3,4.6);
    echo $num[2];
    echo"<br>";
    echo $num[3];
    echo"<br>";


    $cars = array("VOLVO","BMW","TOYOTA",2);
    echo"<br>";
    var_dump($cars);
    echo count($cars);
    echo"<br>";



    $arrylengh = count($cars);
    for($x = 0;$x < $arrylengh; $x++) {
        echo $cars[$x] ."<br>";
    } 



    $arr = array("Kanako","Rekha","Sho",1,2.3,NULL,4);
    
    echo count($arr);

    $lengh = count($arr);
    for($x = 2;$x<$lengh; $x++) {

        echo"<br>";
        echo $arr[$x];
    }
    
    ?>