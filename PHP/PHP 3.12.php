<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numero = 1;

$suma = 0;
$contador = 1;

while ($contador <= 100) {
    $suma += $numero + $contador; 
    $contador++;  
}

echo "La suma de los 100 números siguientes es: $suma";
?>

</body>
</html>