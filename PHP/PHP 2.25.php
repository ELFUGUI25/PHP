<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 25</title>
</head>

<body>
    <?php
    $interes = 0.2;
    $usuario1 = 1000;
    $usuario2 = 5000;
    $usuario3 = 23000;

    $cal_ant = $usuario1 * 0.2;
    $cal_pd = $usuario2 * 0.2;
    $cal_fran = $usuario3 * 0.2;

    $interes_ant = $usuario1 + $cal_ant;
    $interes_pedr = $usuario2 + $cal_pd;
    $interes_fran = $usuario3 + $cal_fran;

    echo "El banco va a aplicar un 20% de interes a sus usuarios <br>";
    echo "Hay 3 usuarios, Antonio con $usuario1 euros, Pedro con $usuario2 euros y Fran con $usuario3, deberian haber pagado hace unos meses <br><br>";
    echo "El precio final a deber con el porcentaje añadido seria:  <br><br>";

    echo "Para Antonio: $interes_ant  <br>";
    echo "Para Pedro: $interes_pedr  <br>";
    echo "Para Fran: $interes_fran <br>";
    ?>
</body>

</html>