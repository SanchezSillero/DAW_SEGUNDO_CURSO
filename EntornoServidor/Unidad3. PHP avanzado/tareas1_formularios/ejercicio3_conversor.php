<!-- 3.- Realiza un conversor de Kb a Mb. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Kb - Mb</title>
</head>

<body>
    <h2> Conversor Kb Mb </h2>
    <?php
    $kb = $mb = '';

    if (isset($_GET["convertir"])) {
        if ((!empty($_GET["kb"]))) {
            $kb = $_GET["kb"];
            $mb = $kb / 1024;
        } elseif (!empty($_GET["mb"])) {
            $mb = $_GET["mb"];
            $kb = $mb * 1024;
        }
    }
    ?>


    <form action="" method="get">
        <label>Kilobytes (KB)</label>
        <input type="number" name="kb" value="<?= isset($_GET['kb']) ? htmlspecialchars($_GET['kb']) : '0' ?>" min="0" step="1">
        <br><br>

        <label>Megabytes (MB)</label>
        <input type="number" name="mb" value="<?= isset($_GET['mb']) ? htmlspecialchars($_GET['mb']) : '0' ?>" min="0" step="any">
        <br><br>

        <input type="submit" name="convertir" value="Convertir">
    </form>


</body>

</html>