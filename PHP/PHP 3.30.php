<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar y Promediar 10 Valores</title>
</head>
<body>
    <h1>Ingrese 10 valores</h1>
    <form method="POST">
        <?php
            // Generar los campos de entrada para los 10 valores
            for ($i = 1; $i <= 10; $i++) {
                echo "<label for='valor$i'>Valor $i:</label>";
                echo "<input type='number' id='valor$i' name='valor$i' step='any' required><br><br>";
            }
        ?>
        <button type="submit">Calcular Suma y Promedio</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $suma = 0;
            // Sumar los valores ingresados
            for ($i = 1; $i <= 10; $i++) {
                $suma += $_POST["valor$i"];
            }

            // Calcular el promedio
            $promedio = $suma / 10;

            // Mostrar los resultados
            echo "<h2>Resultados:</h2>";
            echo "<p><strong>Suma de los valores ingresados:</strong> $suma</p>";
            echo "<p><strong>Promedio de los valores ingresados:</strong> $promedio</p>";
        }
    ?>
</body>
</html>
