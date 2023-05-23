<?php

    echo "<h1>Hola Mundo</h1>";
    
    echo "<hr>";

    $nombre = "Kyan";
    $edad = 16;

    if($edad >= 18){
        echo $nombre . " Es Mayor De Edad";
    }else{
        echo $nombre . " Es Menor De Edad";
    }

    echo "<br><br>";

    for($i=1; $i<=10; $i++){
        echo $i . "<br>";
    }
?> 