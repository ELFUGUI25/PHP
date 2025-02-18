<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 26</title>
</head>

<body>
    <?php
    $aumento1 = 0.13;
    $aumento2 = 0.26;
    $aumento3 = 0.39;
    $usuario1 = 1300;
    $usuario2 = 1100;
    $usuario3 = 900;

    $cal_ant = $usuario1 * $aumento1;
    $cal_pd = $usuario2 * $aumento2;
    $cal_fran = $usuario3 * $aumento3;

    $aumento_ant = $usuario1 + $cal_ant;
    $aumento_pedr = $usuario2 + $cal_pd;
    $aumento_fran = $usuario3 + $cal_fran;

    echo "La empresa va a aumentar el sueldo de los trabajdores dependiendo del esfuerzo que hayan hecho durante un año <br>";
    echo "Hay 3 empleados a destacar, Antonio con $usuario1 euros, Pedro con $usuario2 euros y Fran con $usuario3, deberian haber pagado hace unos meses <br><br>";

    echo "Para Antonio habara un aumento del 13%, su sueldo actual es 1300 euros, por lo que aumentaria a: $aumento_ant  <br>";
    echo "Para Pedro habara un aumento del 26%, su sueldo actual es 1100 euros, por lo que aumentaria a: $aumento_pedr  <br>";
    echo "Para Fran habara un aumento del 36%, su sueldo actual es 900 euros, por lo que aumentaria a: $aumento_fran  <br>";
    ?>
</body>

</html>