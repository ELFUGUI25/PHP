<!DOCTYPE html>
<html>
<head>
    <title>Solución de Ecuación Cuadrática</title>
</head>
<body>
    <h2>Calculadora de Ecuaciones de Segundo Grado</h2>
    <form method="post">
        <label for="a">Coeficiente a:</label>
        <input type="number" name="a" step="any" required>
        <br>
        <label for="b">Coeficiente b:</label>
        <input type="number" name="b" step="any" required>
        <br>
        <label for="c">Coeficiente c:</label>
        <input type="number" name="c" step="any" required>
        <br>
        <input type="submit" name="calcular" value="Calcular Soluciones">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = floatval($_POST['c']);
        
        $discriminante = $b * $b - 4 * $a * $c;
        
        if ($discriminante > 0) {
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
            echo "<h3>Las soluciones son: x1 = $x1 y x2 = $x2</h3>";
        } elseif ($discriminante == 0) {
            $x = -$b / (2 * $a);
            echo "<h3>La única solución es: x = $x</h3>";
        } else {
            echo "<h3>No tiene solución real.</h3>";
        }
    }
    ?>
</body>
</html>
