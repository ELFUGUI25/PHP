<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM 3</title>
</head>

<body>

    <p>
        <?php
        echo 'Bienvenido ' . $_POST['nombre'] . ' ' . $_POST['apellidos']
            . '<br/>';
        echo 'Tu edad es ' . $_POST['edad'] . ' años' . '<br/>';
        echo 'Tu color favorito es el' . $_REQUEST['color'] . '<br/>';
        echo ' y te describes como ' . $_REQUEST['descripcion']
            ?>
    </p>
</body>

</html>