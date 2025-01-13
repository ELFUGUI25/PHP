<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3.1</title>
</head>
<body>
<?php

$numero = 5;

echo "Tabla de multiplicar del número $numero: <br>";

// bucle for para calcular la tabla de multiplicar
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado";
}
?>


</body>
</html>