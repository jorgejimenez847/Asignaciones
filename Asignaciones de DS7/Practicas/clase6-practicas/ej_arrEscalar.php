<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo Escalar</title>
</head>
<body>
<?php
$colores = ["rojo", "verde", "azul"];

$meses = [];
$meses[1] = "Enero";
$meses[2] = "Febrero";
$meses[3] = "Marzo";

// Agregar elementos al final
$colores[] = "amarillo";
echo $colores[3];
// Tamaño del arreglo
echo count($colores);
?>
</body>
</html>
