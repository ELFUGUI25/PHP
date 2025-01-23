<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Suma</title>
</head>
<body>
    <form method="GET" action="">
        <label for="numero">Escriba el número que desea sumar:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];

        $suma = 0;
        for ($i = 1; $i <= 100; $i++) {
            $suma += $numero + $i;
        }

        echo "<h2>Resultado de la suma de los 100 primeros números:</h2>";
        echo "<p>El número ingresado es: $numero</p>";
        echo "<p>La suma final es: $suma</p>";
    }
    ?>
</body>
</html>
