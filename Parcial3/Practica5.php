<?php

$cuadros = $_POST["cuadro"];

$RedFlag = 0;

//var_dump($cuadros);

/*
[0][1][2]
[3][4][5]
[6][7][8]
*/

//Horizontal
if($cuadros[0] == $cuadros[1] && $cuadros[0] == $cuadros[2]){
    echo "<h1>Gana " .$cuadros[0] ."</h1>";
}else

if($cuadros[3] == $cuadros[4] && $cuadros[3] == $cuadros[5]){
    echo "<h1>Gana " .$cuadros[3] ."</h1>";
}else

if($cuadros[6] == $cuadros[7] && $cuadros[6] == $cuadros[8]){
    echo "<h1>Gana " .$cuadros[6] ."</h1>";
}else
//Horizontal

/*
[0][1][2]
[3][4][5]
[6][7][8]
*/

//Vertical
if($cuadros[0] == $cuadros[3] && $cuadros[0] == $cuadros[6]){
    echo "<h1>Gana " .$cuadros[0] ."</h1>";
}else

if($cuadros[1] == $cuadros[4] && $cuadros[1] == $cuadros[7]){
    echo "<h1>Gana " .$cuadros[1] ."</h1>";
}else

if($cuadros[2] == $cuadros[5] && $cuadros[2] == $cuadros[8]){
    echo "<h1>Gana " .$cuadros[2] ."</h1>";
}else
//Vertical

/*
[0][1][2]
[3][4][5]
[6][7][8]
*/

//Diagonal
if($cuadros[0] == $cuadros[4] && $cuadros[0] == $cuadros[8]){
    echo "<h1>Gana " .$cuadros[0] ."</h1>";
}else

if($cuadros[2] == $cuadros[4] && $cuadros[2] == $cuadros[6]){
    echo "<h1>Gana " .$cuadros[2] ."</h1>";
}else{
    echo "<h1>Empate</h1>";
}
//Diagonal

?>