<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Condicional IF 2</title>
</head>
<body>
<?php
if (4 > 2) {echo '<p>Sí, 4 es mayor que 2 <br>';}

# If simple con dos expresiones
if ( (4 > 2) && ( 8 > 4) ) {echo '4 es mayor que 2 y 8 es mayor que 4<br>';}

# Ejemplo if_else
if (4 > 8) {echo '4 es mayor que 8 <br>';}
else {echo '4 es menor que 8 <br>';}

#ejemplo if_elseif_else
if (4 > 8) {echo 'Esta prueba es True </p>';}
elseif (8 > 4) {echo 'Prueba alternativa es True </p>';}
else {echo 'ambas prienas son False </p>';}

?>
</body>
</html>