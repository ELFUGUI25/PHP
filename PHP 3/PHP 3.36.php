<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con Memoria</title>
</head>
<body>
    <h1>Calculadora con Memoria de Resultados</h1>
    <form method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" value="<?php echo isset($numero1) ? $numero1 : ''; ?>" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" value="<?php echo isset($numero2) ? $numero2 : ''; ?>"><br><br>

        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion">
            <option value="sumar" <?php if (isset($operacion) && $operacion == 'sumar') echo 'selected'; ?>>Sumar</option>
            <option value="restar" <?php if (isset($operacion) && $operacion == 'restar') echo 'selected'; ?>>Restar</option>
            <option value="multiplicar" <?php if (isset($operacion) && $operacion == 'multiplicar') echo 'selected'; ?>>Multiplicar</option>
            <option value="dividir" <?php if (isset($operacion) && $operacion == 'dividir') echo 'selected'; ?>>Dividir</option>
            <option value="potencia" <?php if (isset($operacion) && $operacion == 'potencia') echo 'selected'; ?>>Elevar a potencia</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
        session_start();

        // Si ya existe un resultado almacenado en la sesión, lo recuperamos
        if (!isset($_SESSION['resultado'])) {
            $_SESSION['resultado'] = 0;
        }

        // Verificamos si los valores fueron enviados y asignamos los datos
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];

            switch ($operacion) {
                case 'sumar':
                    $resultado = $numero1 + $numero2;
                    break;

                case 'restar':
                    $resultado = $numero1 - $numero2;
                    break;

                case 'multiplicar':
                    $resultado = $numero1 * $numero2;
                    break;

                case 'dividir':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        $resultado = "Error: División por cero";
                    }
                    break;

                case 'potencia':
                    $resultado = pow($numero1, $numero2);
                    break;

                default:
                    $resultado = "Operación no válida";
                    break;
            }

            // Guardar el resultado en la memoria
            $_SESSION['resultado'] = $resultado;

            // Mostrar el resultado de la operación
            echo "<h2>Resultado: $resultado</h2>";
            echo "<h3>Memoria de resultados: " . $_SESSION['resultado'] . "</h3>";
        }

        // Mostrar el resultado guardado en la memoria si está disponible
        if (isset($_SESSION['resultado'])) {
            echo "<h3>Resultado en memoria: " . $_SESSION['resultado'] . "</h3>";
        }
    ?>

    <h2>Usa el resultado anterior en la siguiente operación si lo deseas.</h2>
    <form method="POST">
        <label for="numero1_memoria">Número 1 (Memoria):</label>
        <input type="number" id="numero1_memoria" name="numero1" value="<?php echo $_SESSION['resultado']; ?>" required><br><br>

        <label for="numero2_memoria">Número 2:</label>
        <input type="number" id="numero2_memoria" name="numero2"><br><br>

        <label for="operacion_memoria">Operación:</label>
        <select id="operacion_memoria" name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="potencia">Elevar a potencia</option>
        </select><br><br>

        <button type="submit">Calcular con Memoria</button>
    </form>
</body>
</html>
