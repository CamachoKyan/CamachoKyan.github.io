<?php

   $Pregunta01 = $_POST["Pregunta01"];
   $Pregunta02 = $_POST["Pregunta02"];
   $Pregunta03 = $_POST["Pregunta03"];
   $Pregunta04 = $_POST["Pregunta04"];
   $Pregunta05 = $_POST["Pregunta05"];
   $Pregunta06 = $_POST["Pregunta06"];
   $Pregunta07 = $_POST["Pregunta07"];
   $Pregunta08 = $_POST["Pregunta08"];
   $Pregunta09 = $_POST["Pregunta09"];
   $Pregunta10 = $_POST["Pregunta10"];

   $Calificacion = 0;

   if(Pregunta01 == "C"){
    $Calificacion++;
    echo "Respuesta Correcta ✔";
   }else{
    echo "Respuesta Incorrecta ✘";
   }
   



?>