<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>

<body>
    <h1>Combining HTML and PHP</h1>
    <p>This is a static HTML paragraph.</p>

    <?php
    // Aquí empieza el código PHP
    echo "<p>This line is generated using PHP.</p>";

    // Aquí puedes incluir cualquier lógica PHP adicional
    $currentDate = date("Y-m-d");
    echo "<p>Today's date is: $currentDate</p>";
    // Aquí termina el código PHP
    ?>
</body>

</html>