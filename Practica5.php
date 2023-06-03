<?php

$cuadros = $_POST["cuadro"];

$RedFlag = 0;

var_dump($cuadros);

//Horizontal
if($cuadros[0] == $cuadros[1] && $cuadros[2]){
    echo "Gana " .$cuadros[0];
}else

if($cuadros[3] == $cuadros[4] && $cuadros[5]){
    echo "Gana " .$cuadros[3];
}else

if($cuadros[6] == $cuadros[7] && $cuadros[8]){
    echo "Gana " .$cuadros[6];
}else
//Horizontal

//Vertical
if($cuadros[0] == $cuadros[3] && $cuadros[6]){
    echo "Gana " .$cuadros[0];
}else

if($cuadros[1] == $cuadros[4] && $cuadros[7]){
    echo "Gana " .$cuadros[1];
}else

if($cuadros[2] == $cuadros[5] && $cuadros[8]){
    echo "Gana " .$cuadros[2];
}else
//Vertical

?>