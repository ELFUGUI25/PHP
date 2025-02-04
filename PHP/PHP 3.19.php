<!DOCTYPE html>
<html>
<head>
    <title>Clasificación por Edad</title>
</head>
<body>
    <h2>Clasificación por Edad</h2>
    <form method="post">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" name="edad" required>
        <br>
        <input type="submit" name="clasificar" value="Clasificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = intval($_POST['edad']);
        
        if ($edad < 14) {
            $categoria = "Infancia";
        } elseif ($edad >= 14 && $edad <= 26) {
            $categoria = "Juventud";
        } elseif ($edad >= 27 && $edad <= 59) {
            $categoria = "Adultez";
        } else {
            $categoria = "Personas Mayores";
        }
        
        echo "<h3>La persona pertenece a la etapa: $categoria</h3>";
    }
    ?>
</body>
</html>
