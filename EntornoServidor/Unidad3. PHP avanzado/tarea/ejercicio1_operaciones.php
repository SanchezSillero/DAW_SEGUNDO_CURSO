<!-- 1.-Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Aritmeticas</title>
</head>

<body>
    <?php
    if (isset($_POST["Calcular"])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        echo "La suma de $a y $b es " . ($a + $b) . "<br>";
        echo "La resta de $a y $b es " . ($a - $b) . "<br>";

        echo "La multiplicacion de $a y $b es " . ($a * $b) . "<br>";

        echo "La division de $a y $b es " . ($a / $b) . "<br>";
    } else {
    ?>
        <h2>Formulario para Operaciones Aritmeticas</h2>
        <form action="" method="post">
            Primer numero: <input type="number" name="a" required><br>
            Segundo numero: <input type="number" name="b" required><br><br>
            <input type="submit" name="Calcular" value="Calcular">
        </form>
    <?php }
    ?>
</body>

</html>