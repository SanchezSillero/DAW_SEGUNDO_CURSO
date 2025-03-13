<?php
$numero = rand(0, 9999);
$digitos = 0;
if ($numero < 10) {
    $digitos = 1;
} elseif ($numero < 100) {
    $digitos = 2;
} elseif ($numero < 1000) {
    $digitos = 3;
} elseif ($numero < 10000) {
    $digitos = 4;
}
echo "Numero aleatorio: $numero<br>";
echo "Cantidad de digitos: $digitos";
