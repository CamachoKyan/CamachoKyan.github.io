<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Juego De La Loteria</h1>
        <form action="Practica8.php" method="POST">

            <?php
                if(isset($_POST["carta1"])){
                    $carta1= $_POST["carta1"];
                    $carta2= $_POST["carta2"];
                    //Logic
                    $carta = rand(1,54);
                    echo "<h2>Carta dada <img src='fotos_loteria/".$carta.".jpeg' class='img-fluid' width='100px'></h2>";
                }else{
                    $carta1 = [];
                    $total = 0;
                    while($total < 16){
                        $numero = rand(1,54);
                        if(array_search($numero,$carta1) === false){
                            $carta1[$total] = $numero;
                            $total ++;
                        }
                    }
                    $carta2 = [];
                    $total = 0;
                    while($total < 16){
                        $numero = rand(1,54);
                        if(array_search($numero,$carta2) === false){
                            $carta2[$total] = $numero;
                            $total ++;
                        }
                    }
                }      
            ?>
            <input type="submit" value="Dar Carta" name="carta" class="btn btn-primary">
            <div class="row">
            <div class="col-6">
            <div class="row m-1">
                        <?php
                    //Cartón
                    for($i=0; $i<16; $i++){
                        
                        echo "<div class='col-3 p-0'><img src='fotos_loteria/".$carta1[$i].".jpeg' class='img-thumbnail'></div>";
                        echo "<input type='hidden' name='carta1[]' value='".$carta1[$i] ."'>";
                    }
                    ?>
                    </div>
                </div>

                <div class="col-6">
                    <div class="row m-1">
                        <?php
                    //Cartón
                    for($i=0; $i<16; $i++){
                        
                        echo "<div class='col-3 p-0'><img src='fotos_loteria/".$carta2[$i].".jpeg' class='img-thumbnail'></div>";
                        echo "<input type='hidden' name='carta2[]' value='".$carta2[$i] ."'>";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>