<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 35</title>
</head>

<body>
    <?php

    $comportamiento = 0.20;
    $deberes = 0.30;
    $examen = 0.50;

    $nota1 = 7.5;
    $nota2 = 8;
    $nota3 = 6;

    $notaFinal = ($nota1 * $comportamiento) + ($nota2 * $deberes) + ($nota3 * $examen);
    echo "El comportamiento cuenta un 20%, las tareas un 30% y el examen un 50%<br>";
    echo "El alumno tiene un 7.5 en actitud, un 8 en las tareas realizadas y un 6 en los examenes<br>";
    echo "La nota final del alumno es: $notaFinal";

    ?>
</body>

</html>