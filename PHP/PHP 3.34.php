<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invertir Número de 4 Cifras</title>
</head>
<body>
    <h1>Ingrese un número entero de 4 cifras</h1>
    <form method="POST">
        <label for="numero">Número de 4 cifras:</label>
        <input type="number" id="numero" name="numero" min="1000" max="9999" required><br><br>
        <button type="submit">Invertir Número</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];

            // Verificar que el número tiene 4 cifras
            if ($numero >= 1000 && $numero <= 9999) {
                // Invertir el número
                $numero_invertido = strrev($numero);
                echo "<h2>El número invertido es: $numero_invertido</h2>";
            } else {
                echo "<h2>Por favor, ingrese un número válido de 4 cifras.</h2>";
            }
        }
    ?>
</body>
</html>
