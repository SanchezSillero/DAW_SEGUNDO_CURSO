<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaNombre</title>
</head>

<body>
    <h3>Nombre y Apellidos</h3>
    <?php
    if (isset($_SESSION["nombre"]) && isset($_SESSION["apellidos"])) {
        echo "Su nombre es " . $_SESSION["nombre"] . " y sus apellidos son " . $_SESSION["apellidos"];
    } elseif (isset($_SESSION["nombre"]) && !isset($_SESSION["apellidos"])) {
        echo "Su nombre es " . $_SESSION["nombre"] . " y aun no ha introducido sus apellidos.";
    } elseif (!isset($_SESSION["nombre"]) && isset($_SESSION["apellidos"])) {
        echo "Sus apellidos son " . $_SESSION["apellidos"] . " y aun no ha introducido su nombre.";
    } else {
        echo "No ha introducido ni su nombre ni sus apellidos";
    }
    ?>
    <br><br>
    <a href="ejercicio2_1_sesiones.php">Volver a la pagina de inicio</a>
</body>

</html>