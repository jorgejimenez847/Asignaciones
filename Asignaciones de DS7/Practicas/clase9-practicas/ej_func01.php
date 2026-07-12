<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parametros en PHP</title>
</head>
<body>
<?php
function drink( string $tmp = 'caliente' , string $bebida = 'té' )
{
    echo "Tomando $bebida $tmp .<br>" ;
}
drink();
drink('frío');
drink('fría', 'límonada');

function add( int ...$numbers) //uso operador splat
{
    $total = 0;
    foreach ($numbers as $num) 
    {
        $total += $num;
    }
    echo "<hr>Total : $total" ;
    return $total;
}
$x = add(1, 2, 3);
echo "<br> Este es el resultado: $x"
?>
</body>
</html>

