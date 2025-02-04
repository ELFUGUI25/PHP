<!DOCTYPE html>
<html>
<head>
    <title>MCD - Algoritmo de Euclides</title>
</head>
<body>
    <h2>Calculadora del Máximo Común Divisor (MCD)</h2>
    <form method="post">
        <label for="num1">Ingrese el primer número:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Ingrese el segundo número:</label>
        <input type="number" name="num2" required>
        <br>
        <input type="submit" name="calcular" value="Calcular MCD">
    </form>

    <?php
    function calcularMCD($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        
        if ($num1 > 0 && $num2 > 0) {
            $mcd = calcularMCD($num1, $num2);
            echo "<h3>El Máximo Común Divisor de $num1 y $num2 es: $mcd</h3>";
        } else {
            echo "<h3>Por favor, ingrese números enteros positivos.</h3>";
        }
    }
    ?>
</body>
</html>
