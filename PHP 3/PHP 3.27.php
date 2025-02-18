<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Áreas</title>
</head>
<body>
    <h1>Calculadora de Áreas de Figuras Geométricas</h1>
    <form method="POST">
        <label for="figura">Seleccione la figura para calcular el área:</label>
        <select id="figura" name="figura" required>
            <option value="trapecio">Trapecio</option>
            <option value="triangulo">Triángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="circulo">Círculo</option>
        </select><br><br>

        <div id="campoTrapecio" style="display:none;">
            <label for="baseMayor">Base mayor:</label>
            <input type="number" id="baseMayor" name="baseMayor" step="any"><br><br>
            <label for="baseMenor">Base menor:</label>
            <input type="number" id="baseMenor" name="baseMenor" step="any"><br><br>
            <label for="alturaTrapecio">Altura:</label>
            <input type="number" id="alturaTrapecio" name="alturaTrapecio" step="any"><br><br>
        </div>

        <div id="campoTriangulo" style="display:none;">
            <label for="baseTriangulo">Base:</label>
            <input type="number" id="baseTriangulo" name="baseTriangulo" step="any"><br><br>
            <label for="alturaTriangulo">Altura:</label>
            <input type="number" id="alturaTriangulo" name="alturaTriangulo" step="any"><br><br>
        </div>

        <div id="campoCuadrado" style="display:none;">
            <label for="ladoCuadrado">Lado:</label>
            <input type="number" id="ladoCuadrado" name="ladoCuadrado" step="any"><br><br>
        </div>

        <div id="campoRectangulo" style="display:none;">
            <label for="baseRectangulo">Base:</label>
            <input type="number" id="baseRectangulo" name="baseRectangulo" step="any"><br><br>
            <label for="alturaRectangulo">Altura:</label>
            <input type="number" id="alturaRectangulo" name="alturaRectangulo" step="any"><br><br>
        </div>

        <div id="campoCirculo" style="display:none;">
            <label for="radioCirculo">Radio:</label>
            <input type="number" id="radioCirculo" name="radioCirculo" step="any"><br><br>
        </div>

        <button type="submit">Calcular Área</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $figura = $_POST["figura"];
            $area = 0;

            switch ($figura) {
                case "trapecio":
                    // Calcular el área de un trapecio
                    if (isset($_POST["baseMayor"]) && isset($_POST["baseMenor"]) && isset($_POST["alturaTrapecio"])) {
                        $baseMayor = $_POST["baseMayor"];
                        $baseMenor = $_POST["baseMenor"];
                        $alturaTrapecio = $_POST["alturaTrapecio"];
                        $area = (($baseMayor + $baseMenor) * $alturaTrapecio) / 2;
                        echo "<p>El área del trapecio es: $area</p>";
                    }
                    break;

                case "triangulo":
                    // Calcular el área de un triángulo
                    if (isset($_POST["baseTriangulo"]) && isset($_POST["alturaTriangulo"])) {
                        $baseTriangulo = $_POST["baseTriangulo"];
                        $alturaTriangulo = $_POST["alturaTriangulo"];
                        $area = ($baseTriangulo * $alturaTriangulo) / 2;
                        echo "<p>El área del triángulo es: $area</p>";
                    }
                    break;

                case "cuadrado":
                    // Calcular el área de un cuadrado
                    if (isset($_POST["ladoCuadrado"])) {
                        $ladoCuadrado = $_POST["ladoCuadrado"];
                        $area = $ladoCuadrado * $ladoCuadrado;
                        echo "<p>El área del cuadrado es: $area</p>";
                    }
                    break;

                case "rectangulo":
                    // Calcular el área de un rectángulo
                    if (isset($_POST["baseRectangulo"]) && isset($_POST["alturaRectangulo"])) {
                        $baseRectangulo = $_POST["baseRectangulo"];
                        $alturaRectangulo = $_POST["alturaRectangulo"];
                        $area = $baseRectangulo * $alturaRectangulo;
                        echo "<p>El área del rectángulo es: $area</p>";
                    }
                    break;

                case "circulo":
                    // Calcular el área de un círculo
                    if (isset($_POST["radioCirculo"])) {
                        $radioCirculo = $_POST["radioCirculo"];
                        $area = pi() * pow($radioCirculo, 2);
                        echo "<p>El área del círculo es: $area</p>";
                    }
                    break;

                default:
                    echo "<p>No es una figura geométrica válida.</p>";
                    break;
            }
        }
    ?>

    <script>
        // Mostrar campos según la figura seleccionada
        document.getElementById('figura').addEventListener('change', function() {
            var figuraSeleccionada = this.value;

            // Ocultar todos los campos
            document.getElementById('campoTrapecio').style.display = 'none';
            document.getElementById('campoTriangulo').style.display = 'none';
            document.getElementById('campoCuadrado').style.display = 'none';
            document.getElementById('campoRectangulo').style.display = 'none';
            document.getElementById('campoCirculo').style.display = 'none';

            // Mostrar campos según la figura seleccionada
            if (figuraSeleccionada === 'trapecio') {
                document.getElementById('campoTrapecio').style.display = 'block';
            } else if (figuraSeleccionada === 'triangulo') {
                document.getElementById('campoTriangulo').style.display = 'block';
            } else if (figuraSeleccionada === 'cuadrado') {
                document.getElementById('campoCuadrado').style.display = 'block';
            } else if (figuraSeleccionada === 'rectangulo') {
                document.getElementById('campoRectangulo').style.display = 'block';
            } else if (figuraSeleccionada === 'circulo') {
                document.getElementById('campoCirculo').style.display = 'block';
            }
        });

        // Inicialmente mostrar los campos correspondientes
        document.getElementById('figura').dispatchEvent(new Event('change'));
    </script>
</body>
</html>
