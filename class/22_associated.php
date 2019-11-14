<?php

 $aar = array("Kanako"=>20,"Rekha"=>21,"Sho"=>22) ;//keyとvalue
 echo $aar["Kanako"]."<br>";
 echo $aar["Sho"]."<br>";


 $age = array("Kanako"=>20,"Rekha"=>21,"Sho"=>22);
 foreach ($age as $x => $xvalue) {
     echo "Key is".$x.", value is".$xvalue."<br>";
 }



?>