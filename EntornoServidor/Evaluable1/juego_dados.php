<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Dados</title>
</head>

<body>

    <h2>Bienvenido al Juego de Dados</h2>

    <!-- Formulario para elegir el número de rondas -->
    <form method="POST" action="">
        <label for="rondas">¿Cuántas rondas deseas jugar? (1-10): </label>
        <input type="number" id="rondas" name="rondas" min="1" max="10" required>
        <input type="submit" value="Iniciar Juego">
    </form>
    <?php
    if (isset($_POST["rondas"])) {
        $totalRondas = $_POST['rondas'];
        $judador1 = [];
        $judador2 = [];
        $puntuacion1 = 0;
        $puntuacion2 = 0;
        $rondasJ1 = 0;
        $rondasJ2 = 0;

        //funcion tirar dados
        function tirarDados(&$judador)
        {
            $puntuacion = 0;
            for ($i = 0; $i < 5; $i++) {
                $dado = rand(1, 6);
                $judador[] = $dado;
                echo "<img src='img/$dado.jpg' width=100> ";
                $puntuacion += $dado;
            }
            return $puntuacion;
        }

        function jugarRonda(&$judador1, &$judador2, &$rondasJ1, &$rondasJ2)
        {


            //Tirada Judador1
            $puntuacion1 = tirarDados($judador1);
            echo "Puntuacion del Jugador1: $puntuacion1<br>";

            //Tirada Jugador 2
            $puntuacion2 = tirarDados($judador2);
            echo "Puntuacion del Jugador2: $puntuacion2<br>";

            //Determinacion del ganador de la ronda
            echo "<h2>Resultado</h2>";
            echo "Jugador 1: $puntuacion1<br>";
            echo "Jugador 2: $puntuacion2<br>";

            if ($puntuacion1 > $puntuacion2) {
                echo "El Jugador 1 gana y suma 1 punto<br>";
                $rondasJ1++;
            } elseif ($puntuacion2 > $puntuacion1) {
                echo "El Jugador 2 gana y suma 1 punto<br>";
                $rondasJ2++;
            } else {
                echo "Los dos Jugadores empataron";
            }
            // Mostrar el puntaje total de cada jugador
            echo "<br><strong>Rondas ganadas:</strong><br>";
            echo "Jugador 1: $rondasJ1 | Jugador 2: $rondasJ2<br>";
        }



        // Jugar múltiples rondas
        for ($i = 1; $i <= $totalRondas; $i++) {
            echo "<h2>Ronda $i</h2>";
            jugarRonda($judador1, $judador2, $rondasJ1, $rondasJ2);
            echo "<hr>";
        }

        // Determinar el ganador general
        echo "<h2>Resultado Final</h2>";
        if ($rondasJ1 > $rondasJ2) {
            echo "¡El Jugador 1 gana el juego con $rondasJ1 rondas ganadas!<br>";
        } elseif ($rondasJ2 > $rondasJ1) {
            echo "¡El Jugador 2 gana el juego con $rondasJ2 rondas ganadas!<br>";
        } else {
            echo "¡El juego terminó en empate con $rondasJ1 rondas ganadas para ambos jugadores!<br>";
        }

    ?>
        <br><br>
        <form method="POST" action="">
            <input type="submit" value="Volver a jugar">
        </form>
    <?php } ?>

</body>

</html>