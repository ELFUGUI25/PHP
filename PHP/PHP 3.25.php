<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Números y Romanos</title>
</head>
<body>
    <h1>Conversión de Números a Letras y Números Romanos</h1>

    <h2>Conversión de Número a Letra</h2>
    <form method="POST">
        <label for="numero">Ingrese un número de un solo dígito (0-9):</label>
        <input type="number" id="numero" name="numero" min="0" max="9" required>
        <button type="submit">Convertir</button>
    </form>

    <?php
        // Conversión de número a letra
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
            $numero = $_POST["numero"];

            $numeros_a_letras = [
                0 => "Cero",
                1 => "Uno",
                2 => "Dos",
                3 => "Tres",
                4 => "Cuatro",
                5 => "Cinco",
                6 => "Seis",
                7 => "Siete",
                8 => "Ocho",
                9 => "Nueve"
            ];

            echo "<p>El número $numero en letra es: " . $numeros_a_letras[$numero] . "</p>";
        }
    ?>

    <h2>Conversión de Número Romano</h2>
    <form method="POST">
        <label for="romano">Ingrese un número romano (de un solo carácter):</label>
        <input type="text" id="romano" name="romano" maxlength="1" required>
        <button type="submit">Convertir</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["romano"])) {
            $romano = strtoupper($_POST["romano"]);  // Convertir a mayúsculas

            // Mapa de números romanos de un solo carácter
            $romanos_a_decimales = [
                "I" => 1,
                "V" => 5,
                "X" => 10,
                "L" => 50,
                "C" => 100,
                "D" => 500,
                "M" => 1000
            ];

            if (array_key_exists($romano, $romanos_a_decimales)) {
                echo "<p>El número romano $romano equivale a: " . $romanos_a_decimales[$romano] . "</p>";
            } else {
                echo "<p>$romano no es un número romano válido.</p>";
            }
        }
    ?>
</body>
</html>
