<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Contacto</title>
</head>

<body>
    <?php
    $fichContactos = "contactos.txt";
    if (isset($_POST["agregar"])) {
        $nombre = strip_tags(trim($_POST["nombre"]));
        $apellido1 = strip_tags(trim($_POST["apellido1"]));
        $apellido2 = strip_tags(trim($_POST["apellido2"]));
        $telefono = strip_tags(trim($_POST["telefono"]));
        $mail = strip_tags(trim($_POST["mail"]));

        if (empty($nombre) || empty($apellido1) || empty($apellido2) || empty($telefono) || empty($mail)) {
            echo "Ingrese todos los campos por favor";
        } elseif (!is_numeric($telefono)) {
            echo "Introduzca un numero de telefono correcto";
        } else {

            $archivo = fopen($fichContactos, "a");

            $contacto = "$nombre;$apellido1;$apellido2;$telefono;$mail" . PHP_EOL;

            fputs($archivo, $contacto);

            fclose($archivo);

            echo "Contacto anadido correctamente";
        }
    } else {
    ?>
        <form action="" method="post">
            Introduzca su nombre: <input type="text" name="nombre"><br><br>
            Introduzca su primer apellido: <input type="text" name="apellido1"><br><br>
            Introduzca su segundo apellido: <input type="text" name="apellido2"><br><br>
            Introduzca su telefono: <input type="tel" name="telefono"><br><br>
            Introduzca su email: <input type="email" name="mail"><br><br>
            <input type="submit" name="agregar" value="Agregar Contacto">
            <input type="reset" value="Borrar datos"><br><br>
        </form>
    <?php
    }
    ?>
    <br><br>
    <a href="index.php">Volver al menu de inicio</a>
</body>

</html>