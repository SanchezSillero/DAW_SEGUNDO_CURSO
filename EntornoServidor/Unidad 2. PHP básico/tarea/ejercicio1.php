<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $i = 0;
    while ($i < 101) {
        if ($i % 5 == 0) {
            echo "$i<br>";
        }
        $i++;
    }
    ?>
</body>

</html>