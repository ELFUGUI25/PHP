<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.1</title>
</head>
<body>
<?php
$resultado = 1;

for ($i = 1; $i <= 20; $i++) {
    $resultado *= $i; // Multiplico el acumulado por el número actual
}

echo "El producto de los primeros 20 números naturales es: $resultado <br>";
?>

</body>
</html>