<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch con Bucle For</title>
</head>
<body>
    <h1>Ejemplo de Switch con Bucle For</h1>

    <?php
        // Bucle for que itera del 1 al 7 (representando los días de la semana)
        for ($dia = 1; $dia <= 7; $dia++) {
            echo "<p>Día número: $dia</p>";

            switch ($dia) {
                case 1:
                    echo "<p>Lunes: ¡Comienza la semana con energía!</p>";
                    break;
                case 2:
                    echo "<p>Martes: Vamos por más.</p>";
                    break;
                case 3:
                    echo "<p>Miércoles: ¡Mitad de semana!</p>";
                    break;
                case 4:
                    echo "<p>Jueves: Casi al fin.</p>";
                    break;
                case 5:
                    echo "<p>Viernes: ¡El fin de semana está cerca!</p>";
                    break;
                case 6:
                    echo "<p>Sábado: ¡Es hora de descansar!</p>";
                    break;
                case 7:
                    echo "<p>Domingo: Prepárate para la próxima semana.</p>";
                    break;
                default:
                    echo "<p>Este no es un día válido.</p>";
                    break;
            }
            echo "<hr>"; // Separador entre días
        }
    ?>

    <h2>Sin el break:</h2>

    <?php
        // Bucle for nuevamente, pero ahora sin break
        for ($dia = 1; $dia <= 7; $dia++) {
            echo "<p>Día número: $dia</p>";

            switch ($dia) {
                case 1:
                    echo "<p>Lunes: ¡Comienza la semana con energía!</p>";
                case 2:
                    echo "<p>Martes: Vamos por más.</p>";
                case 3:
                    echo "<p>Miércoles: ¡Mitad de semana!</p>";
                case 4:
                    echo "<p>Jueves: Casi al fin.</p>";
                case 5:
                    echo "<p>Viernes: ¡El fin de semana está cerca!</p>";
                case 6:
                    echo "<p>Sábado: ¡Es hora de descansar!</p>";
                case 7:
                    echo "<p>Domingo: Prepárate para la próxima semana.</p>";
                default:
                    echo "<p>Este no es un día válido.</p>";
            }
            echo "<hr>"; // Separador entre días
        }
    ?>
</body>
</html>
