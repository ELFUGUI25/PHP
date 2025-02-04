<!DOCTYPE html>
<html>
<head>
    <title>Comparador de Números</title>
</head>
<body>
    <h2>Comparador de Números</h2>
    <form method="post">
        <label for="num1">Primer número:</label>
        <input type="number" step="0.01" name="num1" required>
        <br>
        <label for="num2">Segundo número:</label>
        <input type="number" step="0.01" name="num2" required>
        <br>
        <input type="submit" name="comparar" value="Comparar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        
        if ($num1 > $num2) {
            echo "<h3>El número mayor es: $num1</h3>";
            echo "<h3>El número menor es: $num2</h3>";
        } elseif ($num2 > $num1) {
            echo "<h3>El número mayor es: $num2</h3>";
            echo "<h3>El número menor es: $num1</h3>";
        } else {
            echo "<h3>Ambos números son iguales.</h3>";
        }
    }
    ?>
</body>
</html>
