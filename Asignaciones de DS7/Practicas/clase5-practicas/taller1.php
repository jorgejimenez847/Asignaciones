<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Círculo</title>
</head>
<body>

<h2>Calculadora de Círculo</h2>

<?php
$pi = 3.141592;

if (isset($_GET['radio'])) {
    $radio = $_GET['radio'];

    $area = $pi * $radio * $radio;
    $longitud = 2 * $pi * $radio;

    echo "<p>Radio: $radio</p>";
    echo "<p>Área: $area</p>";
    echo "<p>Longitud: $longitud</p>";
} else {
    echo "<p>Ingrese el radio en la URL."; // ?radio=5
}
?>

</body>
</html>
