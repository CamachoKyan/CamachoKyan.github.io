<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <title>Serpientes Y Escaleras</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            width: 40px;
            height: 40px;
            position: relative;
            text-align: center;
        }
        .Jugador {
            background-color: transparent;
        }
        .Jugador:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 80%;
            background-color: green;
            border-radius: 50%;
        }
        .numero-esquina {
            position: absolute;
            top: 0;
            right: 0;
            padding: 5px;
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Serpientes Y Escaleras</h1>
    
    <?php
        $Tabla = array();
        $Con = 100;
            
        for($i = 10; $i >= 1; $i--){
            $rt = array();
            for($j = 10; $j >= 1; $j--){
                $rt[] = $Con--;
            }
            $Tabla[] = $rt;
        }

        $Jugador = $_POST['Jugador'] ?? 0;
        $UltimoDado = $_POST['UltimoDado'] ?? 0;

        if (isset($_POST['Dado'])) {
            $dado = rand(1, 6);
            $Jugador += $dado;
            $Jugador = max(0, min(99, $Jugador));
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
        echo "<table>";
        foreach ($Tabla as $Fila) {
            echo "<tr>";
            foreach ($Fila as $Val) {
                echo "<td" . (($Val == $Jugador) ? " class='Jugador'" : '') . ">";
                echo "<span class='numero-esquina'>$Val</span>";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<p>Último dado: " . $UltimoDado . "</p>";
        echo "<input type='hidden' name='Jugador' value='$Jugador'>";
        echo "<input type='hidden' name='UltimoDado' value='$UltimoDado'>";
        echo "<input type='submit' name='Dado' value='Lanzar Dado'>";
        echo "</form>";
    ?>

</body>
</html>
