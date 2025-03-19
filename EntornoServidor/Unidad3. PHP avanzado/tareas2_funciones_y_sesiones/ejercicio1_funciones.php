<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function mayorNumero($x, $y, $z)
    {
        return max($x, $y, $z);
    }

    if (isset($_REQUEST["calcular"])) {
        $n1 = $_REQUEST["n1"];
        $n2 = $_REQUEST["n2"];
        $n3 = $_REQUEST["n3"];

        if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3)) {
            $mayorNumero = mayorNumero($n1, $n2, $n3);
            echo "El mayor de los numeros introducidos es $mayorNumero";
        } else {
            echo "<h3 style='color: red;'>Por favor, introduzca valores numéricos válidos.</h3>";
        }
    } else {
    ?>
        <h4>Introduzca 3 numeros para calcular el mayor de ellos</h4>
        <form action="" method="post">
            Numero1<input type="number" name="n1" required><br>
            Numero2<input type="number" name="n2" required><br>
            Numero3<input type="number" name="n3" required><br><br>
            <input type="submit" name="calcular" value="Calcular">
        </form>
    <?php
    }
    ?>
</body>

</html>