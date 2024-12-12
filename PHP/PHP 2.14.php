<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 14</title>
</head>

<body>
    <?php
    $segundos = 60;
    //Se utiliza la función intdiv() para dividir los segundos entre 60, ya que hay 60 segundos en un minuto
    $total_minutos = intdiv($segundos, 60);
    $horas = intdiv($total_minutos, 60);
    $minutos_restantes = $total_minutos % 60;
    $segundos_restantes = $segundos % 60;


    echo "Por favor, ingresa una cantidad de segundos: $segundos <br>";
    echo "Equivalente en horas: $horas horas, $minutos_restantes minutos y $segundos_restantes segundos.";
    ?>

</body>

</html>