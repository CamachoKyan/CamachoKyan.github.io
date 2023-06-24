<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7 - Serpientes y Escaleras</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <style>
        .casilla {
            color: yellow;
            height: 64px;
            width: 64px;
            font-weight: bold;
            background-image: url("Ground-Vine.png");
            background-size: cover;
        }
        .escalera {
            background-image: url('Ladder-Vine.gif');
            background-size: cover;
        }
        .serpiente {
            background-image: url('Snake-Vine.gif');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .Jugador {
            background-image: url("Ja.jpg");
        }
        .numero-esquina {
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Práctica 7 - Tablero de serpientes y escaleras</h1><hr>
        <?php
            $Tabla = array();
            $Con = 0;

            for ($i = 0; $i < 10; $i++) {
                $rt = array();
                for ($j = 0; $j < 10; $j++) {
                    $rt[] = ++$Con;
                }
                $Tabla[] = $rt;
            }

            $Jugador = $_POST['Jugador'] ?? 0;
            $UltimoDado = $_POST['UltimoDado'] ?? 0;

            if (isset($_POST['Dado'])) {
                $dado = rand(1, 6);
                $Jugador += $dado;
                $Jugador = max(0, min(100, $Jugador));
                $UltimoDado = $dado;

                if ($Jugador == 100) {
                    ob_clean(); // Limpiar el búfer de salida

                    echo "<h2>¡Has ganado!</h2>";
                    echo "<form action='' method='POST'>";
                    echo "<input type='submit' name='Reiniciar' value='Jugar de nuevo'>";
                    echo "</form>";

                    // Reiniciar el juego si se presiona el botón "Jugar de nuevo"
                    if (isset($_POST['Reiniciar'])) {
                        $Jugador = 0;
                    }

                    exit; // Salir del script después de mostrar el mensaje
                }
            }

            echo "<form action='' method='POST'>";
            echo "<div class='row'>";
            $Tabla = array_reverse($Tabla);
            foreach ($Tabla as $Fila) {
                echo "<div class='row'>";
                foreach ($Fila as $Val) {
                    echo "<div class='col-1 card m-1'>";
                    echo "<div class='casilla" . ((in_array($Val, [4, 9, 33, 28, 40, 80, 71, 77])) ? " escalera" : '') . ((in_array($Val, [17, 54, 58, 64, 87, 93, 95, 99, 36])) ? " serpiente" : '') . (($Val == $Jugador) ? " Jugador" : '') . "'>";
                    echo "<span class='numero-esquina'>" . $Val . "</span>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            }
            echo "</div>";
            echo "<p>Último dado: " . $UltimoDado . "</p>";
            echo "<input type='hidden' name='Jugador' value='$Jugador'>";
            echo "<input type='hidden' name='UltimoDado' value='$UltimoDado'>";
            echo "<input type='submit' name='Dado' value='Lanzar Dado'>";
            echo "</form>";
        ?>
    </div>
</body>
</html>
