<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 12 - Temperaturas</title>
</head>
<body>
    <h2>Temperaturas</h2>

    <?php
    $temperaturas = [];

    for ($i = 0; $i < 10; $i++) {
        $temperaturas[$i] = rand(1, 30);
    }

    $media = array_sum($temperaturas) / count($temperaturas);
    $maxima = max($temperaturas);
    $minima = min($temperaturas);

    echo "<h3>Temperaturas registradas</h3>";

    foreach ($temperaturas as $posicion => $temperatura) {
        echo "Posicion $posicion: {$temperatura} C <br>";
    }

    echo "<br>";
    echo "<h3>Resultados</h3>";
    echo "Temperatura media: " . round($media, 2) . " C <br>";
    echo "Temperatura maxima: {$maxima} C <br>";
    echo "Temperatura minima: {$minima} C <br>";
    ?>

</body>
</html>
