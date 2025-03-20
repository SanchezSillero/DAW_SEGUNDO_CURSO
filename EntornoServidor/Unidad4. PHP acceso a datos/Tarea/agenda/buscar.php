<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Contacto</title>
</head>

<body>
    <?php
    if (isset($_POST["buscar"])) {
        $nombreBusqueda = strtolower(trim($_POST["nombre"]));
        $fichContactos = "contactos.txt";

        if (file_exists($fichContactos)) {
            $archivo = fopen($fichContactos, "r");
            $encontrado = false;

            while (($linea = fgets($archivo)) !== false) {
                $datos = explode(";", trim($linea));

                if (strpos(strtolower(implode(" ", $datos)), $nombreBusqueda) !== false) {
                    echo "Nombre: {$datos[0]}<br>";
                    echo "Apellidos: {$datos[1]} {$datos[2]}<br>";
                    echo "Telefono: {$datos[3]}<br>";
                    echo "Email: {$datos[4]}<br><hr>";
                    $encontrado = true;
                }
            }
            fclose($archivo);

            if (!$encontrado) {
                echo "No se ha encontrado ningun contacto con ese nombre";
            }
        } else {
            echo "No hay contactos guardados aun";
        }
    } else {
    ?>
        <form action="" method="post">
            Nombre del contacto <input type="text" name="nombre">
            <input type="submit" name="buscar" value="Buscar">
        </form>
    <?php
    }
    ?>
    <br><br>
    <a href="index.php">Volver al menu de inicio</a>
</body>

</html>