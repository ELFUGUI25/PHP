<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 34</title>
</head>

<body>
    <?php

    $v = 90;
    $t = 1;
    $min = $t * 60;
    $seg = $min * 60;
    $d = $v * $t;


    echo "Voy a calcular la la distancia que recorre un coche a $v km/h en $t hora<br><br>";

    echo "Hago el calculo con la formula de la distancia que es d= v * t<br>";
    echo "El resultado seria que ha recorrido $d km en $t hora<br>";
    echo "Tambien podriamos decir que ha recorrido $d km en $min min o en $seg segundos ";


    ?>
</body>

</html>