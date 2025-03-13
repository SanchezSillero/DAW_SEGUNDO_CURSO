<?php
echo "<table border=1 width=200>";
echo "<tr>";
echo "<th>Numero</th>";
echo "<th>Cuadrado</th>";
echo "<th>Cubo</th>";
echo "</tr>";
for ($i = 0; $i <= 5; $i++) {
    $num = rand(5, 20);
    $numCuadr = $num * $num;
    $numCubo = $num * $num * $num;
    echo "<tr>";
    echo "<td>$num</td>";
    echo "<td>$numCuadr</td>";
    echo "<td>$numCubo</td>";
    echo "</tr>";
}
echo "<table>";
