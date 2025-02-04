<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos en un Rango</title>
</head>
<body>
    <h1>Ingrese un rango de números para encontrar los primos</h1>
    <form method="POST">
        <label for="limite_inferior">Límite inferior:</label>
        <input type="number" id="limite_inferior" name="limite_inferior" required><br><br>

        <label for="limite_superior">Límite superior:</label>
        <input type="number" id="limite_superior" name="limite_superior" required><br><br>

        <button type="submit">Encontrar Números Primos</button>
    </form>

    <?php
        // Función para verificar si un número es primo
        function esPrimo($numero) {
            if ($numero <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false; // No es primo
                }
            }
            return true; // Es primo
        }

        // Si el formulario es enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $limite_inferior = $_POST["limite_inferior"];
            $limite_superior = $_POST["limite_superior"];

            echo "<h2>Números primos entre $limite_inferior y $limite_superior:</h2>";
            echo "<ul>";

            // Recorrer el rango e imprimir los números primos
            for ($i = $limite_inferior; $i <= $limite_superior; $i++) {
                if (esPrimo($i)) {
                    echo "<li>$i</li>";
                }
            }

            echo "</ul>";
        }
    ?>
</body>
</html>
