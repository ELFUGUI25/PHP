<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Múltiplos de 3, 5 y Ambos</title>
</head>
<body>
    <h1>Ingrese 10 números enteros</h1>
    <form method="POST">
        <?php
            // Generar los campos de entrada para los 10 números
            for ($i = 1; $i <= 10; $i++) {
                echo "<label for='numero$i'>Número $i:</label>";
                echo "<input type='number' id='numero$i' name='numero$i' required><br><br>";
            }
        ?>
        <button type="submit">Contar Múltiplos</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $multiplo_3 = 0;
            $multiplo_5 = 0;
            $multiplo_3_y_5 = 0;

            // Contar los múltiplos de 3, 5 y de ambos
            for ($i = 1; $i <= 10; $i++) {
                $numero = $_POST["numero$i"];

                if ($numero % 3 == 0 && $numero % 5 == 0) {
                    $multiplo_3_y_5++;
                } elseif ($numero % 3 == 0) {
                    $multiplo_3++;
                } elseif ($numero % 5 == 0) {
                    $multiplo_5++;
                }
            }

            // Mostrar los resultados
            echo "<h2>Resultados:</h2>";
            echo "<p><strong>Múltiplos de 3:</strong> $multiplo_3</p>";
            echo "<p><strong>Múltiplos de 5:</strong> $multiplo_5</p>";
            echo "<p><strong>Múltiplos de ambos (3 y 5):</strong> $multiplo_3_y_5</p>";
        }
    ?>
</body>
</html>
