<?php
    echo date('h:i:s')."\n";
    sleep(10);
    echo"<br>";
    echo date('h:i:s')."\n";


    echo"<br>";
    echo "Last modified:" .date("F d Y H:i:s.",getlastmod());//
    echo"<br>";
    

?>
