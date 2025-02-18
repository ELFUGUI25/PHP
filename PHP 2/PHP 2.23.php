<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 23</title>
</head>

<body>
    <?php
    $viagra = 5;
    $desc_viagra = 5 * 0.1;
    $total_viagra = $viagra - $desc_viagra;
    $proteccion = 10;
    $desc_protecc = 10 * 0.1;
    $total_protecc = $proteccion - $desc_protecc;

    echo "Se va a hacer un descuento en la farmacia <br>";
    echo "Los productos seran rebajados un 10% <br>";
    echo "Las pastillas para la ereccion costaban 5 euros, ahora cuestan: $total_viagra <br>";
    echo "La proteccion para el gusanillo costaban 10 euros, ahora cuestan: $total_protecc <br>";
    ?>
</body>

</html>