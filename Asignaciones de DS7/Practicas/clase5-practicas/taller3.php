<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tipo de Triángulo</title>
</head>
<body>

<h2>Tipo de Triángulo</h2>

<?php
if (isset($_GET['lado1'], $_GET['lado2'], $_GET['lado3'])) {
    $lado1 = $_GET['lado1'];
    $lado2 = $_GET['lado2'];
    $lado3 = $_GET['lado3'];

    echo "<p>Lados: $lado1, $lado2, $lado3</p>";

    if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "<p>Tipo: Equilátero</p>";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "<p>Tipo: Isósceles</p>";
        } else {
            echo "<p>Tipo: Escaleno</p>";
        }
    } else {
        echo "<p>Los valores no forman un triángulo válido.</p>";
    }
} else {
    echo "<p>Ingrese los tres lados en la URL."; // ?lado1=5&lado2=5&lado3=8 
}
?>

</body>
</html>
