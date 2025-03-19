<?php
session_start();

if (isset($_POST["guardar"])) {
    $_SESSION["nombre"] = trim(strip_tags($_POST["nombre"]));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre</title>
</head>

<body>
    <h3>Nombre</h3>
    <p>Escriba su nombre: </p>
    <form action="" method="post">
        Nombre: <input type="text" name="nombre"><br><br>
        <input type="submit" name="guardar" value="Guardar">
        <input type="reset" value="Borrar">
    </form>
    <br><br>
    <a href="ejercicio2_1_sesiones.php">Volver a la pagina de inicio</a>
</body>

</html>