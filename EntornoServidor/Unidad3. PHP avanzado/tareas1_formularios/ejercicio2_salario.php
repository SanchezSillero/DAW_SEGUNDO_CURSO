<!-- 2.-Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas. Se pagarán 12euros por hora. Las horas se piden en un formulario. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora salario</title>
</head>

<body>
    <?php
    if (isset($_POST["calcular"])) {
        $horas = $_POST["horas"];
        echo "Su salario de esta semana es " . ($horas * 12) . " euros";
    } else {
    ?>
        <form action="" method="post">
            Horas trabajadas esta semana <input type="number" name="horas" required><br>
            <input type="submit" name="calcular" value="Calcular Salario">
        </form>
    <?php
    }
    ?>
</body>

</html>