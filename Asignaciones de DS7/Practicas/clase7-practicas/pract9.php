<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dulce Chiriquí</title>
</head>
<body>
    <h2>Pastelería Dulce Chiriquí</h2>

    <?php
    $productos = [
        "Cinnamon Rolls"      => 1.25,
        "Mamallena"           => 0.75,
        "Torta de Chocolate"  => 3.50,
        "Empanada de Piña"    => 0.50
    ];

    foreach ($productos as $nombre => $precio) {
        echo "Lleva un(a) $nombre por solo B/. $precio" . "<br>";
    }
    ?>

</body>
</html>
