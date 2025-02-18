<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Factorial</title>
</head>
<body>
    <h2>Calculadora de Factorial</h2>
    <form method="post">
        <label for="n">Ingrese un número entero:</label>
        <input type="number" name="n" required>
        <br>
        <input type="submit" name="calcular" value="Calcular Factorial">
    </form>

    <?php
    function factorial($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        }
        return $n * factorial($n - 1);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST['n']);
        
        if ($n >= 0) {
            $resultado = factorial($n);
            echo "<h3>El factorial de $n es: $resultado</h3>";
        } else {
            echo "<h3>Por favor, ingrese un número entero no negativo.</h3>";
        }
    }
    ?>
</body>
</html>
