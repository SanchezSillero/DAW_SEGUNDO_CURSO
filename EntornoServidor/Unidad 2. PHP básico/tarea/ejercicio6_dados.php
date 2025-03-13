<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Jugador1
    echo "Dados del jugador 1:<br>";
    $dado1 = rand(1, 6);
    echo "<img src='dados/$dado1.jpg' width=100> ";
    $dado2 = rand(1, 6);
    echo "<img src='dados/$dado2.jpg' width=100> ";
    $dado3 = rand(1, 6);
    echo "<img src='dados/$dado3.jpg' width=100><br>";
    $suma1 = $dado1 + $dado2 + $dado3;
    echo "Puntuacion del jugador 1: $suma1<br><br><br>";

    //Jugador2
    echo "Dados del jugador 2:<br>";
    $dado1 = rand(1, 6);
    echo "<img src='dados/$dado1.jpg' width=100> ";
    $dado2 = rand(1, 6);
    echo "<img src='dados/$dado2.jpg' width=100> ";
    $dado3 = rand(1, 6);
    echo "<img src='dados/$dado3.jpg' width=100><br>";
    $suma2 = $dado1 + $dado2 + $dado3;
    echo "Puntuacion del jugador 2: $suma2<br><br><br>";

    if ($suma1 > $suma2) {
        echo "El jugador 1 gana: $suma1 > $suma2";
    } else {
        echo "El jugador 2 gana: $suma2 > $suma1";
    }

    ?>
</body>

</html>