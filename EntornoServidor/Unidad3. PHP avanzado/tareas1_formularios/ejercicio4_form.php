<!-- 4.- Ejercicio formulario completo. Comprobar que todos los campos estén rellenos y que mostrarlo en otra pagina: -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: left;
            justify-content: left;
            width: 700px;
        }

        .checkboxes-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            width: 300px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST["enviar"])) {
        //Nombre
        if (empty($_POST["nombre"])) {
            echo "No ha escrito su nombre.<br>";
        } else {
            $nombre = strip_tags(trim($_POST["nombre"]));
            echo "Su nombre es <b>$nombre</b>.<br><br>";
        }

        //Apellidos
        if (empty($_POST["apellidos"])) {
            echo "No ha escrito sus apellidos.<br>";
        } else {
            $apellidos = strip_tags(trim($_POST["apellidos"]));
            echo "Sus apellidos son <b>$apellidos</b>.<br><br>";
        }

        //Edad
        $edad = $_POST["edad"];
        if ($edad == "-1") {
            echo "No ha indicado su edad";
        } elseif ($edad == "0") {
            echo "Usted tiene <b>menos de 20 años</b>";
        } elseif ($edad == "1") {
            echo "Usted tiene <b>entre 20 y 39 años</b>";
        } elseif ($edad == "2") {
            echo "Usted tiene <b>entre 40 y 59 años</b>";
        } elseif ($edad == "3") {
            echo "Usted tiene <b>entre 60 y 79 años</b>";
        } elseif ($edad == "4") {
            echo "<b>Usted tiene más de 80 años</b>";
        }
        echo "<br><br>";

        //Peso
        if (empty($_POST["peso"])) {
            echo "No ha introducido su peso.<br>";
        } else {
            $peso = $_POST["peso"];
            echo "Su peso es de <b>$peso</b> kg.<br><br>";
        }

        //Sexo
        if (isset($_POST["sexo"])) {
            $sexo = $_POST["sexo"];
            if ($sexo == "hombre") {
                echo "Es un <b>hombre</b>.<br><br>";
            } elseif ($sexo == "mujer") {
                echo "Es una <b>mujer</b>.<br><br>";
            }
        } else {
            echo "No ha seleccionado su sexo.<br><br>";
        }

        // Estado Civil
        if (isset($_POST["estadocivil"])) {
            $estadocivil = $_POST["estadocivil"];
            echo "Su estado civil es <b>$estadocivil</b>.<br><br>";
        } else {
            echo "No ha indicado su estado civil.<br><br>";
        }

        //Aficiones
        if (isset($_POST["aficiones"])) {
            $aficiones = implode(", ", $_POST["aficiones"]);
            echo "Le gusta <b>$aficiones</b>.<br><br>";
        } else {
            echo "No ha indicado sus aficiones.<br><br>";
        }

        //Link al formulario
        echo '<a href="' . $_SERVER["PHP_SELF"] . '">Volver al formulario</a>';
    } else {
    ?>
        Escriba los datos siguientes:<br><br>

        <form action="" method="post">

            <div class="form-container">
                <div class="form-item">
                    <label for="nombre"><b>Nombre:</b><br></label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div class="form-item">
                    <label for="apellidos"><b>Apellidos:</b><br></label>
                    <input type="text" name="apellidos" id="apellidos">
                </div>
                <div class="form-item">
                    <label for="edad"><b>Edad:</b><br></label>
                    <select name="edad" id="edad">
                        <option value="-1" selected>...</option>
                        <option value="0">Menor de 20</option>
                        <option value="1">Entre 20 y 39</option>
                        <option value="2">Entre 40 y 59</option>
                        <option value="3">Entre 60 y 79</option>
                        <option value="4">Mayor de 79</option>
                    </select>
                </div>
            </div>


            <div class="form-container">
                <div class="form-item peso">
                    <label for="peso"><b>Peso:</b><br></label>
                    <input type="number" name="peso" id="peso" style="width: 80px" step="1" min="0"> kg
                </div>
                <div class="form-item">
                    <label for="sexo"><b>Sexo:</b><br></label>
                    <input type="radio" name="sexo" id="hombre" value="hombre">
                    <label for="hombre">Hombre</label>
                    <input type="radio" name="sexo" id="mujer" value="mujer">
                    <label for="mujer">Mujer</label>
                </div>
                <div class="form-item">
                    <label for="estadocivil"><b>Estado Civil:</b><br></label>
                    <input type="radio" name="estadocivil" id="soltero" value="soltero">
                    <label for="soltero">Soltero</label>
                    <input type="radio" name="estadocivil" id="casado" value="casado">
                    <label for="casado">Casado</label>
                    <input type="radio" name="estadocivil" id="otro" value="otro">
                    <label for="otro">Otro</label>
                </div>
            </div>
            <br>


            <div class="label-container">
                <label for="aficiones"><b>Aficiones:</b></label>
            </div>
            <div class="checkboxes-container">
                <div class="checkbox-item">
                    <input type="checkbox" id="cine" name="aficiones[]" value="cine">
                    <label for="cine">Cine</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="literatura" name="aficiones[]" value="literatura">
                    <label for="literatura">Literatura</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="tebeos" name="aficiones[]" value="tebeos">
                    <label for="tebeos">Tebeos</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="deportes" name="aficiones[]" value="deportes">
                    <label for="deportes">Deportes</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="musica" name="aficiones[]" value="musica">
                    <label for="musica">Música</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="television" name="aficiones[]" value="television">
                    <label for="television">Televisión</label>
                </div>
            </div>

            <br>
            <div class="form-container">
                <div class="form-item">
                    <input type="submit" name="enviar" value="Enviar">
                    <input type="reset" name="borrar" value="Borrar">
                </div>
            </div>
        </form>
    <?php
    }
    ?>


</body>

</html>