<?php

$cuadros = $_POST["cuadro"];

echo "<h1>Resultado Final</h1>";

// Definir Ganador
/*
[0][1][2]
[3][4][5]
[6][7][8]
*/

$cuadroganador = [];
$Simbolo = [];

// Comprobar ganador
// Horizontal
if ($cuadros[0] == $cuadros[1] && $cuadros[0] == $cuadros[2]) {
    $cuadroganador = [0, 1, 2];
} else if ($cuadros[3] == $cuadros[4] && $cuadros[3] == $cuadros[5]) {
    $cuadroganador = [3, 4, 5];
} else if ($cuadros[6] == $cuadros[7] && $cuadros[6] == $cuadros[8]) {
    $cuadroganador = [6, 7, 8];
}

// Vertical
if ($cuadros[0] == $cuadros[3] && $cuadros[0] == $cuadros[6]) {
    $cuadroganador = [0, 3, 6];
} else if ($cuadros[1] == $cuadros[4] && $cuadros[1] == $cuadros[7]) {
    $cuadroganador = [1, 4, 7];
} else if ($cuadros[2] == $cuadros[5] && $cuadros[2] == $cuadros[8]) {
    $cuadroganador = [2, 5, 8];
}

// Diagonal
if ($cuadros[0] == $cuadros[4] && $cuadros[0] == $cuadros[8]) {
    $cuadroganador = [0, 4, 8];
} else if ($cuadros[2] == $cuadros[4] && $cuadros[2] == $cuadros[6]) {
    $cuadroganador = [2, 4, 6];
}

// Imprimir resultado
echo "<h1>";
for ($i = 0; $i < 9; $i++) {
    $cuadro = $cuadros[$i];
    if ($cuadroganador && in_array($i,$cuadroganador)) {
        echo "<span style='color: green;'>[$cuadro]</span>";
        $Simbolo = $cuadro;
    } else {
        echo "[$cuadro]";
    }
    if ($i == 2 || $i == 5) {
        echo "<br>";
    }
}
echo "</h1>";

// Imprimir mensaje de ganador o empate
if (!empty($cuadroganador)) {
    echo "<h1 style='color: green;'>¡El Ganador Es: $Simbolo!</h1>";
} else {
    echo "<h1>Empate</h1>";
}

?>