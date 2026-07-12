<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 15 - Inicializar array</title>
</head>
<body>
    <h2>Inicializar array con numeros aleatorios</h2>

    <?php
    function inic_array($n_elementos, $min, $max)
    {
        $numeros = [];

        for ($i = 0; $i < $n_elementos; $i++) {
            $numeros[$i] = rand($min, $max);
        }

        return $numeros;
    }

    $n_elementos = 10;
    $min = 1;
    $max = 100;

    $arrayNumeros = inic_array($n_elementos, $min, $max);

    echo "Cantidad de elementos: {$n_elementos} <br>";
    echo "Valor minimo: {$min} <br>";
    echo "Valor maximo: {$max} <br>";

    echo "<br>";
    echo "<h3>Valores del array</h3>";

    foreach ($arrayNumeros as $posicion => $valor) {
        echo "Posicion {$posicion}: {$valor} <br>";
    }
    ?>

</body>
</html>
