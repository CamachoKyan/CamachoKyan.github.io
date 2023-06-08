<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ahorcado</title>
</head>
<body>
    <?php
    $nombre = $_POST["jugador"]; $palabra = $_POST["palabra"]; $vidas = $_POST["vidas"]; 
    ?>
    <div class="container">
        <div class="row">

            <h1>Juego Del Ahorcado</h1>
            <hr>
            <h3>Nombre Del Jugador: <?php echo $nombre; ?></h3>
            <br>
            <h4>Nombre de Vidas: <?php echo $nombre; ?></h4>
            <br>
            <?php
            $letras= str_split($palabra);
            for ($i=0; $i< (count($letras)); $i++) {
                echo "<input type='text' name='frase[]' style='width: 5%;'>"; 
            }
            ?>
            <input type="text" name="letra" style="width: 10%">
            <input type="submit" value="Enviar Letra" class="btn btn-primary" style="width: 10%">
        </div>
    </div>
</body>
</html>