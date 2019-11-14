<?php

    $colors = array("red","pink","blue","green","orange","black");

    foreach ($colors as $val) {
        echo $val."<br>";
    }

    echo"<br>";
    
    $age = array("Kanako"=>"20","Rekha"=>"21","Sho"=>"22");

    foreach($age as $name => $age) {
        echo "$name"."$age";
    } 
?>