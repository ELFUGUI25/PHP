<!DOCTYPE html>
<html>
<head>
    <title>Números Impares Menores</title>
</head>
<body>
    <h2>Números Impares Menores que un Número</h2>
    <form method="post">
        <label for="num">Ingrese un número entero:</label>
        <input type="number" name="num" required>
        <br>
        <input type="submit" name="calcular" value="Mostrar Impares">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST['num']);
        
        echo "<h3>Números impares menores que $num:</h3><p>";
        for ($i = 1; $i < $num; $i += 2) {
            echo "$i ";
        }
        echo "</p>";
    }
    ?>
</body>
</html>
