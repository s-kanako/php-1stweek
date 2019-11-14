
<?php
$cars = array("TOYOTA","BMW","VOLVO");
sort ($cars);
foreach ($cars as $c) {
    echo $c. "  ";
}
echo "<br>";
$numbers = array (10,2,80,400);
sort ($numbers);
foreach ($numbers as $num) {
    echo $num . " ";
}

echo "<br>";

$cars = array("TOYOTA","BMW","VOLVO");
rsort ($cars);    //逆
foreach ($cars as $d) {
    echo $d. " ";
}

echo "<br>";


#sort array (ascending order),acoording to value-asort

$age = array("Kanako"=>100,"Rekha"=>5,"Sho"=>20);

asort ($age);
foreach ($age as $x) {
    echo $x."<br>";
}

echo "<br>";


ksort ($age);
foreach ($age as $y) { //keyをみて、かつ逆になる
    echo $y."<br>";
}


?>
