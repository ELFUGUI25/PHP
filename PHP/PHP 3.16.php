<!DOCTYPE html>
<html>
<head>
    <title>Comparador de Tres Números</title>
</head>
<body>
    <h2>Comparador de Tres Números</h2>
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
        <input type="submit" name="comparar" value="Comparar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        $num3 = intval($_POST['num3']);
        
        $mayor = max($num1, $num2, $num3);
        $menor = min($num1, $num2, $num3);
        
        echo "<h3>El número mayor es: $mayor</h3>";
        echo "<h3>El número menor es: $menor</h3>";
    }
    ?>
</body>
</html>
