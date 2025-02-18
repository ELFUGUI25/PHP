<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos entre 1 y 100</title>
</head>
<body>
    <h1>Números Primos entre 1 y 100</h1>
    <p>
        <?php
            // Función para verificar si un número es primo
            function esPrimo($numero) {
                if ($numero <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($numero); $i++) {
                    if ($numero % $i == 0) {
                        return false; // No es primo
                    }
                }
                return true; // Es primo
            }

            // Imprimir los números primos entre 1 y 100
            echo "<ul>";
            for ($i = 1; $i <= 100; $i++) {
                if (esPrimo($i)) {
                    echo "<li>$i</li>";
                }
            }
            echo "</ul>";
        ?>
    </p>
</body>
</html>
