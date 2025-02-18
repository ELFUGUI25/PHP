<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 33</title>
</head>

<body>
    <?php

    $c1 = 10;
    $c2 = 7;

    $c12 = $c1 * $c1;
    $c22 = $c2 * $c2;



    echo "Voy a calcular la hipotenusa de un triangulo<br><br>";

    echo "La suma de los catetos al cuadrado es igual a la hipotenusa al cuadrado: <br>";
    echo "El primer cateto es $c1 y el segundo es $c2, elevados serian $c12 y $c22 <br>";

    echo "La hipotenusa es: " . pow($c1, 2) + pow($c2, 2) . "<br>";
    ?>
</body>

</html>