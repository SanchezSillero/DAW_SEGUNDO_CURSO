<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = rand(1, 10);
    echo "<table border=1 width=400px>";

    echo "<caption>Tabla de Multiplicar del " . $num . "</caption>";
    echo '<tr>';
    echo '<th>Multiplicador</th>';
    echo '<th>Resultado</th>';
    echo '</tr>';
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo '<tr>';
        echo "<td> $num x $i</td>";
        echo "<td> $resultado</td>";
        echo '</tr>';
    }
    echo "</table>";

    ?>
</body>

</html>