<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 11 - Numeros aleatorios</title>
</head>
<body>
    <h2>Numeros aleatorios</h2>

    <?php
    $numeros = [];

    for ($i = 0; $i < 10; $i++) {
        $numeros[$i] = rand(1, 30);
    }

    echo "<h3>Valores del array</h3>";

    foreach ($numeros as $posicion => $valor) {
        echo "Posicion {$posicion}: {$valor} <br>";
    }
    ?>

</body>
</html>
