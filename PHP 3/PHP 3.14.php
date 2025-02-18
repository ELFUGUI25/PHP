<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de un Rectángulo</title>
</head>
<body>
    <h2>Calculadora de Área de un Rectángulo</h2>
    <form method="post">
        <label for="altura">Altura:</label>
        <input type="number" step="0.01" name="altura" required>
        <br>
        <label for="anchura">Anchura:</label>
        <input type="number" step="0.01" name="anchura" required>
        <br>
        <input type="submit" name="calcular" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = floatval($_POST['altura']);
        $anchura = floatval($_POST['anchura']);
        
        if ($altura > 0 && $anchura > 0) {
            $area = $altura * $anchura;
            echo "<h3>El área del rectángulo es: " . number_format($area, 2) . " metros cuadrados.</h3>";
        } else {
            echo "<h3>Por favor, ingresa valores positivos.</h3>";
        }
    }
    ?>
</body>
</html>

