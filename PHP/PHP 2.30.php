<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 30</title>
</head>

<body>
    <?php

    $sueldo1 = 10;

    $horas1 = 35;
    $horas2 = 42;

    $cobro1 = 10 * $horas1;
    $cobro2 = (40 * $sueldo1) + (($horas2 - 40) * $sueldo1 * 1.5);

    echo " A un trabajador le pagan según sus horas trabajadas y la tarifa está a un valor por hora. Si la
cantidad de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 50%
para las horas extras.<br> Calcular el salario del trabajador dadas las horas trabajadas y la tarifa<br><br>";

    echo "La primera semana el trabajador hecho 35 horas, la segunda semana hecho 42 horas, este trabajador cobra 10 euros la hora<br><br>";
    echo "La primera semana trabajo $horas1 horas, por lo que le pagan= $cobro1 <br>";
    echo "La segunda semana trabajo $horas2 horas, por lo que le pagan= $cobro2";
    ?>
</body>

</html>