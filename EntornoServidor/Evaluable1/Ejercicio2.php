<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Dados</title>
</head>

<body>
    <?php

    $judador1 = [];
    $judador2 = [];
    $puntuacion1 = 0;
    $puntuacion2 = 0;
    $rondas1 = 0;
    $rondas2 = 0;

    //funcion tirar dados
    function tirarDados($judador)
    {
        $puntuacion = 0;
        for ($i = 0; $i < 5; $i++) {
            $dado = rand(1, 6);
            echo "<img src='img/$dado.jpg' width=100> ";
            $puntuacion += $dado;
        }
        return $puntuacion;
    }

    //Tirada Judador1
    $puntuacion1 = tirarDados($judador1);
    echo "Puntuacion del Jugador1: $puntuacion1<br>";

    //Tirada Jugador 2
    $puntuacion2 = tirarDados($judador2);
    echo "Puntuacion del Jugador2: $puntuacion2";
    echo "<br>";

    //Determinacion del ganador
    echo "<h2>Resultado</h2>";
    echo "Jugador 1: $puntuacion1<br>";
    echo "Jugador 2: $puntuacion2<br>";

    if ($puntuacion1 > $puntuacion2) {
        echo "El Jugador 1 gana y suma 1 punto<br>";
        $rondas1++;
        echo "Rondas ganadas = $rondas1";
    } elseif ($puntuacion2 > $puntuacion1) {
        echo "El Jugador 2 gana y suma 1 punto<br>";
        $rondas2++;
        echo "Rondas ganadas = $rondas2";
    } else {
        echo "Los dos Jugadores empataron";
    }

    ?>
</body>

</html>