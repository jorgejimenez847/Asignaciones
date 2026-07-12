<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio funcion 02</title>
</head>
<body>
<?php
function supply(): array
{
    return [75, 3.142, 'Super PHP', True];
}

$array = supply();
foreach ($array as $data) {
    echo "Valor encontrado: $data <br>";
}
?>
</body>
</html>
