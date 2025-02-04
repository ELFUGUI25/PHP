<!DOCTYPE html>
<html>
<head>
    <title>Operación con Tres Números</title>
</head>
<body>
    <h2>Operación con Tres Números</h2>
    <form method="post">
        <label for="num1">Primer número:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Segundo número:</label>
        <input type="number" name="num2" required>
        <br>
        <label for="num3">Tercer número:</label>
        <input type="number" name="num3" required>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        $num3 = intval($_POST['num3']);
        
        if ($num1 < 0) {
            $resultado = $num1 * $num2 * $num3;
            echo "<h3>El producto de los tres números es: $resultado</h3>";
        } else {
            $resultado = $num1 + $num2 + $num3;
            echo "<h3>La suma de los tres números es: $resultado</h3>";
        }
    }
    ?>
</body>
</html>
