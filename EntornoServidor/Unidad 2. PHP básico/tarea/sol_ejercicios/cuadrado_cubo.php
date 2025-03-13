<!DOCTYPE html>
<html>
<head>
    <title>Números Aleatorios, Cuadrados y Cubos</title>
</head>
<body>
    <h1>Números Aleatorios, Cuadrados y Cubos</h1>
    <table border="1">
        <tr>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>
        <?php
        for ($i = 0; $i < 5; $i++) {
            // Generar un número aleatorio entre 5 y 20
            $numero = rand(5, 20);
            $cuadrado = $numero * $numero;
            $cubo = $numero * $numero * $numero;

            // Mostrar los datos en la tabla
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>$cuadrado</td>";
            echo "<td>$cubo</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>






