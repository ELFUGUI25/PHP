<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Notas Mayores o Iguales a 7</title>
</head>
<body>
    <h1>Ingrese las 10 notas de los alumnos</h1>
    <form method="POST">
        <?php
            // Generar los campos de entrada para las 10 notas
            for ($i = 1; $i <= 10; $i++) {
                echo "<label for='nota$i'>Nota $i:</label>";
                echo "<input type='number' id='nota$i' name='nota$i' step='any' required><br><br>";
            }
        ?>
        <button type="submit">Contar Notas</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mayores_7 = 0;
            $menores_7 = 0;

            // Contar cuántas notas son mayores o iguales a 7 y cuántas son menores
            for ($i = 1; $i <= 10; $i++) {
                $nota = $_POST["nota$i"];
                if ($nota >= 7) {
                    $mayores_7++;
                } else {
                    $menores_7++;
                }
            }

            // Mostrar los resultados
            echo "<h2>Resultados:</h2>";
            echo "<p><strong>Notas mayores o iguales a 7:</strong> $mayores_7</p>";
            echo "<p><strong>Notas menores a 7:</strong> $menores_7</p>";
        }
    ?>
</body>
</html>
