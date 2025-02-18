<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.11</title>
</head>
<body>
<?php

$suma_cuadrados = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma_cuadrados += $i * $i; // Cuadrado del número actual
}

echo "La suma de los cuadrados de los 100 primeros números naturales es: $suma_cuadrados: <br>";
?>

</body>
</html>