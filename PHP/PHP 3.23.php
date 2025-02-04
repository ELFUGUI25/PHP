<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Fahrenheit a Celsius</title>
</head>
<body>
    <h1>Convertir Fahrenheit a Celsius</h1>
    <form method="POST">
        <label for="fahrenheit">Ingrese la temperatura en grados Fahrenheit (999 para finalizar):</label>
        <input type="number" id="fahrenheit" name="fahrenheit" required>
        <button type="submit">Convertir</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fahrenheit = $_POST["fahrenheit"];

            if ($fahrenheit == 999) {
                echo "<p>Programa finalizado.</p>";
            } else {
                $celsius = 5/9 * ($fahrenheit - 32);
                echo "<p>$fahrenheit °F equivale a " . round($celsius, 2) . " °C.</p>";
            }
        }
    ?>
</body>
</html>
