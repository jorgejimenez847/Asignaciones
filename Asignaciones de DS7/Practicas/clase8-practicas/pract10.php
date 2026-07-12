<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Practica 10 - Estación Meteorológica - David, Chiriquí</title>
</head>
<body>
    <h2>Estación Meteorológica - David, Chiriquí</h2>

    <?php
    $temperaturas = [28, 31, 27, 33, 30, 29, 32];

    $suma = 0;
    foreach ($temperaturas as $temp) {
        $suma += $temp;
    }
    $promedio = $suma / count($temperaturas);

    $diasSuperiores30 = 0;

    foreach ($temperaturas as $dia => $temp) {
        $numero = $dia + 1;
        $comparacion = $temp > $promedio ? "por encima" : "por debajo";
        echo "Dia $numero: {$temp}°C - $comparacion del promedio <br>";

        if ($temp > 30) $diasSuperiores30++;
    }

    $maxTemp = max($temperaturas);
    $minTemp = min($temperaturas);
    $promedioRedondeado = round($promedio, 2);
    $porcentaje = round(($diasSuperiores30 / count($temperaturas)) * 100, 2);

    echo "<br>";
    echo "<h3>Resumen semanal</h3>";
    echo "Temperatura mas alta: {$maxTemp}°C <br>";
    echo "Temperatura mas baja: {$minTemp}°C <br>";
    echo "Promedio semanal: {$promedioRedondeado}°C <br>";
    echo "Dias que superaron los 30°C: $diasSuperiores30 de 7 ($porcentaje%) <br>";
    ?>

</body>
</html>
