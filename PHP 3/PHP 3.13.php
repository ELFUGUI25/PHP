<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Euros a Dólares</title>
</head>
<body>
    <h1>Conversor de Euros a Dólares</h1>
    <form method="get" action="">
        <label for="numero">Introduce la cantidad en euros:</label><br>
        <input type="number" id="numero" name="numero" step="0.01" placeholder="Cantidad en euros" required><br>
        <button type="submit">Convertir</button>
    </form>

    <?php
    
    //tasa de conversión de euros a dólares
    define('TASA_CONVERSION', 1.1);

    if (isset($_GET['numero'])) {
        $euros = floatval($_GET['numero']);
        
        $dolares = $euros * TASA_CONVERSION;
        
        echo "<div class='resultado'>" . number_format($euros, 2) . " euros equivalen a " . number_format($dolares, 2) . " dólares.</div>";
    }
    ?>
</body>
</html>
