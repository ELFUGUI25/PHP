<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas y Respuestas sobre PHP</title>
</head>

<body>
    <h1>Preguntas y Respuestas sobre PHP</h1>
    <ol>
        <li>
            <strong>¿Dónde se ejecuta el código PHP: en el servidor o en el cliente?</strong>
            <p><?php echo "El código PHP se ejecuta en el servidor."; ?></p>
        </li>
        <li>
            <strong>¿Qué tipo de contenido puede generar PHP?</strong>
            <p><?php echo "PHP puede generar contenido como HTML, CSS, JavaScript, JSON, XML o archivos como imágenes y PDF."; ?>
            </p>
        </li>
        <li>
            <strong>¿Cuál es la diferencia entre PHP y JavaScript en términos de dónde se ejecutan?</strong>
            <p>
                <?php
                echo "PHP se ejecuta en el servidor, mientras que JavaScript se ejecuta en el cliente (navegador). ";
                echo "PHP se usa para manejar la lógica backend y generar contenido dinámico antes de enviarlo al cliente, ";
                echo "mientras que JavaScript manipula la página en tiempo real en el navegador.";
                ?>
            </p>
        </li>
    </ol>
</body>

</html>