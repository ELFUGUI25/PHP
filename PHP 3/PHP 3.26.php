<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
</head>
<body>
    <h1>Calculadora Básica</h1>
    <form method="POST">
        <label for="numero1">Ingrese el primer número:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Ingrese el segundo número:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <label for="operacion">Seleccione la operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $operacion = $_POST["operacion"];
            $resultado = 0;

            switch ($operacion) {
                case "suma":
                    $resultado = $numero1 + $numero2;
                    echo "<p>La suma de $numero1 y $numero2 es: $resultado</p>";
                    break;
                case "resta":
                    $resultado = $numero1 - $numero2;
                    echo "<p>La resta de $numero1 y $numero2 es: $resultado</p>";
                    break;
                case "multiplicacion":
                    $resultado = $numero1 * $numero2;
                    echo "<p>La multiplicación de $numero1 y $numero2 es: $resultado</p>";
                    break;
                case "division":
                    if ($numero2 == 0) {
                        echo "<p>Error: No se puede dividir entre cero.</p>";
                    } else {
                        $resultado = $numero1 / $numero2;
                        echo "<p>La división de $numero1 entre $numero2 es: $resultado</p>";
                    }
                    break;
                default:
                    echo "<p>Operación no válida.</p>";
                    break;
            }
        }
    ?>
</body>
</html>
