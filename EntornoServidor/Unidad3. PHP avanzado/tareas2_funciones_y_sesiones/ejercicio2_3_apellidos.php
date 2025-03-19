<?php
session_start();

if (isset($_POST["guardar"])) {
    $_SESSION["apellidos"] = trim(strip_tags($_POST["apellidos"]));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apellidos</title>
</head>

<body>
    <h3>Apellidos</h3>
    <p>Escriba sus apellidos: </p>
    <form action="" method="post">
        Apellidos: <input type="text" name="apellidos"><br><br>
        <input type="submit" name="guardar" value="Guardar">
        <input type="reset" value="Borrar">
    </form>
    <br><br>
    <a href="ejercicio2_1_sesiones.php">Volver a la pagina de inicio</a>
</body>

</html>