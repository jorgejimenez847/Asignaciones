<?php
function calcular_promedio($numeros)
{
    $suma = 0;

    foreach ($numeros as $numero) {
        $suma += $numero;
    }

    return $suma / count($numeros);
}

$numeros = [80, 75, 90, 68, 100];
$promedio = calcular_promedio($numeros);

echo "<h2>Promedio de numeros enteros</h2>";

echo "Numeros del arreglo: ";
foreach ($numeros as $numero) {
    echo "{$numero} ";
}

echo "<br>";
echo "Promedio: " . round($promedio, 2);
?>
