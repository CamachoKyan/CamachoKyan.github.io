<?php

   $nombre = $_GET["nombre"];
   echo "Nombre: " .$nombre;
   echo "<br>";

   $edad = $_GET["edad"];
   echo "Edad: " .$edad;
   echo "<br>";

   $escuela = $_GET["escuela"];
   echo "Escuela: " .$escuela;
   echo "<br>";

   $fecha_ingreso = $_GET["fecha_ingreso"];
   echo "Fecha De Ingreso: " .$fecha_ingreso;
   echo "<br>";

   $direccion = $_GET["direccion"];
   echo "Direccion: " .$direccion;
   echo "<br>";

   if($edad >= 18){
    echo "Es Mayor De Edad" . "<br><br>";
   }else{
    echo "Es Menor De Edad" . "<br><br>";
   }

   if($escuela == "CETIS 107"){
    echo "<div style='background-color:blue;'>Cetis 107</div>";
   }else if($escuela == "CBTIS 224"){
    echo "<div style='background-color:red;'>CBTIS 224</div>";
   }else if($escuela == "COBAES"){
    echo "<div style='background-color:green;'>COBAES</div>";
   }
?> 