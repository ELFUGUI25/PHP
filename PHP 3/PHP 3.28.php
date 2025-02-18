<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Áreas de Dos Triángulos</title>
</head>
<body>
    <h1>Comparar Áreas de Dos Triángulos</h1>
    <form method="POST">
        <h2>Primer Triángulo</h2>
        <label for="base1">Base del primer triángulo:</label>
        <input type="number" id="base1" name="base1" step="any" required><br><br>

        <label for="altura1">Altura del primer triángulo:</label>
        <input type="number" id="altura1" name="altura1" step="any" required><br><br>

        <h2>Segundo Triángulo</h2>
        <label for="base2">Base del segundo triángulo:</label>
        <input type="number" id="base2" name="base2" step="any" required><br><br>

        <label for="altura2">Altura del segundo triángulo:</label>
        <input type="number" id="altura2" name="altura2" step="any" required><br><br>

        <button type="submit">Calcular Áreas</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los valores de base y altura de los dos triángulos
            $base1 = $_POST["base1"];
            $altura1 = $_POST["altura1"];
            $base2 = $_POST["base2"];
            $altura2 = $_POST["altura2"];

            // Calcular el área de cada triángulo
            $area1 = ($base1 * $altura1) / 2;
            $area2 = ($base2 * $altura2) / 2;

            // Mostrar las áreas de los dos triángulos
            echo "<p>El área del primer triángulo es: $area1</p>";
            echo "<p>El área del segundo triángulo es: $area2</p>";

            // Comparar las áreas y determinar cuál es mayor
            if ($area1 > $area2) {
                echo "<p>El primer triángulo tiene mayor área.</p>";
            } elseif ($area1 < $area2) {
                echo "<p>El segundo triángulo tiene mayor área.</p>";
            } else {
                echo "<p>Ambos triángulos tienen el mismo área.</p>";
            }
        }
    ?>
</body>
</html>
