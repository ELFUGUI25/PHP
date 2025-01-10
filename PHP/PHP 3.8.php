<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3.1</title>
</head>
<body>
    <?php
      $var = 1;
      echo "se van a escribir los cuadrados de los primeros 30 numeros naturales<br>";
      while ($var <= 30) {
        $cuadrado = $var * $var;
        echo "El cuadrado de $var es: $cuadrado<br>";
        $var++; 
    }
    ?>
</body>
</html>