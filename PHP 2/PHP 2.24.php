<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 24</title>
</head>

<body>
    <?php
    $niños = 17;
    $niñes = 1;

    $total = $niños + $niñes;

    $porc_niño = (100 * $niños) / $total;
    $porc_niñe = (100 * $niñes) / $total;

    echo "Esta es la clase de 2 año de ASIR <br>";
    echo "En esta clase hay $niños niños y $niñes niñes <br><br>";
    echo "El porcentaje de cada niños de esta clase es, $porc_niño % <br>";
    echo "El porcentaje de cada niñes de esta clase es, $porc_niñe % <br>";
    ?>

</body>

</html>