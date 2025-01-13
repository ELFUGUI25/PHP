<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Pedimos al usuario que introduzca un número
echo "Introduce un número entero: ";
$numero = intval(trim(fgets(STDIN))); // Leemos la entrada del usuario y convertimos a entero

$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma += $numero + $i; 
}
echo "La suma de los 100 números siguientes a $numero es: $suma\n";
?>

</body>
</html>