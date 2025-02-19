<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 4.6</title>
</head>
<body>
<?php
$variable = "Hola";

if (isset($variable)) {
    echo "La variable está definida y no es nulo.";
} else {
    echo "La variable no está definida o es nulo.";
}
?>

</body>
</html>