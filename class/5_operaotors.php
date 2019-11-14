<?php

    echo "Arithmetic operation";
    $x = 10;
    $y = 4;

    echo ($x+$y)."<br>";//
    echo ($x-$y)."<br>";//
    echo ($x*$y)."<br>";//
    echo ($x/$y)."<br>";//
    echo ($x%$y)."<br>";//



    echo "<br>";
    echo "assignment operations"."<br>";

    $x = 30;
    $y = 20;
    $x += $y; //$x =$x + $y;
    echo $x."<br>";

    $x = 40;
    $y = 10;
    $x -= $y;//$x = $x-$y;
    echo $x."<br>";

    $x = 30;
    $y = 2;
    $x *= $y; //$x = $y*$x
    echo $x."<br>";

    $x = 60;
    $y = 20;
    $x /= $y;
    echo $x."<br>";

    $x = 30;
    $y = 22;
    $x %= $y;
    echo $x."<br>";



    echo "<br>";
    echo "Comparision operations."."<br>";

    $x = 25;
    $y = 35;
    $z = "25";
    $a="kanako";
    $b="kanako";

    var_dump($a === $b)."<br>"; //　記号三つはバリュータイプ

    var_dump($x == $y)."<br>";

    var_dump($x != $y)."<br>";

    var_dump($x !== $z)."<br>";

    var_dump($x > $y)."<br>";

    var_dump($x <= $y)."<br>";

    var_dump($z === $b)."<br>";

    var_dump($z == $b)."<br>";

    echo "<br>";
    echo "<br>";



    echo "Incrementing and Decrementing"."<br>";

    $x = 10; //pre;
    echo ++$x."<br>";
    echo $x."<br>";

    echo "<br>";

    $x = 10;
    echo $x++."<br>";  //post この段階ではまだ++されない　→10;
    echo $x."<br>"; //このechoで始動 →11;

    echo "<br>";

    $x = 10;
    echo --$x."<br>"; //pre;
    echo $x."<br>";

    echo "<br>";

    $x = 10;
    echo $x--."<br>"; //post;
    echo $x."<br>";
?>
