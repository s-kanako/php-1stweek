<?php

    $color = array("orange","pink","blue");

    foreach ($color as $c) {
        echo $c."<br>";
    } 
    echo "<br>";

    sort($color);
    echo "<ol type = 1>";
    foreach ($color as $d) {
        echo "<li>$d</li><br>";
    }
    echo "</ol>";




?>