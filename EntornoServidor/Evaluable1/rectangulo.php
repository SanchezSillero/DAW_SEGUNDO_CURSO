<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectángulo con PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    //generamos los numeros aleatorios en dos variables
    $numero1 = rand(5, 15);
    $numero2 = rand(5, 15);

    //mostramos las dimensiones del cuadrado a dibujar
    echo "<p>Alto: $numero1</p>";
    echo "<p>Ancho: $numero2</p>";

    //Con dos bucles, uno anidado dentro del otro generamos el rectangulo deseado
    echo '<div class="rectangle">';
    for ($i = 0; $i < $numero1; $i++) {
        for ($j = 0; $j < $numero2; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo '</div>';
    ?>
</body>

</html>