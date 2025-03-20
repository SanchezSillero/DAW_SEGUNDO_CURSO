<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>

<body>
    <h2>Lista de Contactos</h2>

    <?php
    $fichContactos = "contactos.txt";

    if (file_exists($fichContactos)) {
        $archivo = fopen($fichContactos, "r");
        while (($linea = fgets($archivo)) !== false) {
            $datos = explode(";", trim($linea));
            echo "Nombre: {$datos[0]}<br>";
            echo "Apellidos: {$datos[1]} {$datos[2]}<br>";
            echo "Telefono: {$datos[3]}<br>";
            echo "Email: {$datos[4]}<br><hr>";
        }
        fclose($archivo);
    } else {
        echo "Aun no has añadido ningun contacto a la agenda";
    }
    ?>

    <br><br>
    <a href="index.php">Volver al menu de inicio</a>
</body>

</html>