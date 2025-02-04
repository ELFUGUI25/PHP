<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Decimal a Binario</title>
</head>
<body>
    <h1>Convertir un número decimal a binario</h1>
    <form method="POST">
        <label for="numero">Número decimal:</label>
        <input type="number" id="numero" name="numero" required><br><br>
        <button type="submit">Convertir</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero_decimal = $_POST["numero"];

            // Convertir el número decimal a binario
            $numero_binario = decbin($numero_decimal);

            echo "<h2>El número $numero_decimal en binario es: $numero_binario</h2>";
        }
    ?>
</body>
</html>
