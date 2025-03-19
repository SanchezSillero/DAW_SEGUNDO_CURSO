<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
</head>

<body>
    <h3>Borrar Nombre y Apellidos</h3>
    <?php
    unset($_SESSION["nombre"]);
    unset($_SESSION["apellidos"]);
    ?>
    <p>Los datos han sido borrados</p>
    <br><br>
    <a href="ejercicio2_1_sesiones.php">Volver a la pagina de inicio</a>
</body>

</html>