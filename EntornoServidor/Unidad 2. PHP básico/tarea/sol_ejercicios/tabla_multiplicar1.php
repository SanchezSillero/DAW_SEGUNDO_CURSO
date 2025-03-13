<!DOCTYPE html>
<html>

<head>
    <title>Tabla de Multiplicar</title>
</head>

<body>
    <h1>Tabla de Multiplicar</h1>
    <?php
    // Generar un número aleatorio entre 1 y 10
    $numero = rand(1, 10);

    // Comienza la tabla
    echo '<table border="1" width=400px>';
    echo '<caption>Tabla de Multiplicar del ' . $numero . '</caption>';

    // Encabezado de la tabla
    echo '<tr>';
    echo '<th>Multiplicador</th>';
    echo '<th>Resultado</th>';
    echo '</tr>';

    // Generar la tabla de multiplicar
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo '<tr>';
        echo "<td> $numero  x  $i  </td>";

        echo '</tr>';
    }

    // Cierra la tabla
    echo '</table>';
    ?>
</body>

</html>