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
    width: 40px;
    height: 40px;
    background-image: url(Snake.gif);
    background-size: cover; /* o ajusta según tus necesidades */
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

        if (isset($_POST['Dado'])) {
            $Jugador += rand(1, 6);
            $Jugador = max(0, min(100, $Jugador));
        }

        echo "<form action='' method='POST'>";
        echo "<table>";
        foreach ($Tabla as $Fila) {
            echo "<tr>";
            foreach ($Fila as $Val) {
                echo "<td" . (($Val == $Jugador) ? " class='Jugador'" : '') . ">" . $Val . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<input type='hidden' name='Jugador' value='$Jugador'>";
        echo "<input type='submit' name='Dado' value='Lanzar Dado'>";
        if($Jugador >= 100){
            echo "<h1>Has Ganado</h1>";
        }
        echo "</form>";
    ?>

</body>
</html>
