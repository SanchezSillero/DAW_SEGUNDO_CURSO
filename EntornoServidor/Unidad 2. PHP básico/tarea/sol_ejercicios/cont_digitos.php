<?php
// Generar un número aleatorio entre 0 y 9999
$numero = rand(0, 9999);
echo "Número aleatorio: $numero<br>";
// Inicializar una variable para contar los dígitos
$cont = -1;

// Contar los dígitos usando un bucle while
while ($numero > 0) {
    $cont++;
    $numero = (int)$numero / 10; //dividimos entre 10 para quitar un digito.
}
// Mostrar la cantidad de dígitos
echo "Cantidad de dígitos: $cont";
?>