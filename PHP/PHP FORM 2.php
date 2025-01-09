<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM 2</title>
</head>

<body>
    <p>
    <form method="post" action="ejemplo19.php" name="form">
        Nombre <input type="text" name="nombre" /><br />
        Apellidos <input type="text" name="apellidos" /><br />
        Edad <input type="text" name="edad" /><br />
        Color preferido <select name="color">
            <option value="rojo">rojo</option>
            <option value="verde">verde</option>
        </select>

        <br />
        Me gusta el cine <input type="checkbox" name="cine" /><br />
        Descripción <textarea cols="20" rows="3" name="descripcion"></textarea><br />
        <input type="submit" value="enviar" />
    </form>
    </p>

</body>

</html>