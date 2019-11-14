<?php
function write() {
    echo "Hello world";
}
write();
echo"<br>";
write();
echo"<br>";
kanako();
write();
echo"<br>";

function kanako () {
    echo "kanako";
    echo "sugita";
}
echo"<br>";
kanako();
echo"<br>";
write();


function name($fname="Asami",$lname = "Sato") {
    echo "$fname and $lname";
}
echo"<br>";
name("Kanako","Sugita"); 
echo"<br>";
name("Asako");
echo"<br>";

name();


function myfun() {
    return(10);
}
myfun(10);
echo"<br>";


function  fun($a,$b){

    $sum = $a + $b;
    echo $sum;
}

fun (10,30);
fun (40,300);


?>