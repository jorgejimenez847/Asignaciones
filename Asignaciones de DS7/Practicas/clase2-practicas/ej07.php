<!DOCTYPE html>
<html lang="en">
    <head>
        <meta = charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejemplo cadenas de texto</title>
    </head>
    <body>
        <?php
            $titulo = 'Ejemplo';
            $union = 'unión';
            $preposicion = 'de';
            $sujeto = 'cadenas';
            $espacio = ' ';
            $resultado1 = $titulo;
            $resultado2 = "$titulo $preposicion $union $preposicion $sujeto";
            echo "<h1><b>$resultado2</b></h1>";
            echo "<hr>";
        ?>
    </body>
</html>