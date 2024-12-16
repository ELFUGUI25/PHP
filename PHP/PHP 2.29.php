<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 29</title>
</head>

<body>
    <?php

    $compra1 = 367;
    $compra2 = 198;
    $compra3 = 236;

    $descuento = 0.15;

    $descuento1 = 367 * 0.15;
    $descuento2 = 198 * 0.15;
    $descuento3 = 236 * 0.15;

    $calc1 = $compra1 - $descuento1;
    $calc2 = $compra2 - $descuento2;
    $calc3 = $compra3 - $descuento3;


    echo "La tienda ha aplicado un 15% de descuento a sus 3 primeras compras del mes<br><br>";

    echo "La primera compra fue de $compra1 y despues del descuento se quedo en: $calc1  <br>";
    echo "La segunda compra fue de $compra2 y despues del descuento se quedo en: $calc2  <br>";
    echo "La tercera compra fue de $compra3 y despues del descuento se quedo en: $calc3 <br>";

    ?>

</body>

</html>