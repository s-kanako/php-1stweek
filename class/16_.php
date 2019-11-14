<?php
    $text = "PHP";
    $text = preg_replace('/(\b[a-z])/i','<span style="color:red">\1</spaan>', $text);
    echo $text;

    echo"<br>";

    echo strlen("Hello");
    echo"<br>";

    echo str_word_count("Hello s world kanako");
    echo"<br>";

    echo strrev("Hello world!");
    echo"<br>";

    echo strpos("Hello world kanako","kanako");
    echo"<br>";

    echo str_replace("world","Dolly","Hello world");
    echo"<br>";

    




?>