<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Condicional IF</title>
</head>
<body>
<?php
$num = 8 ; # practica
if ( $num > 5) { echo "$num es mayor que 5 <br>" ; }
if ( $num <= 5) { echo "$num es menor que 6 <br>" ; }
if ( $num % 2 == 0) { echo "$num es par <br>" ; }
if ( $num % 2 != 0) { echo "$num es impar <br>" ; }

$numo = 3 ; # test personal
if ( $numo > 5) { echo "$numo es mayor que 5 <br>" ; }
if ( $numo <= 5) { echo "$numo es menor que 6 <br>" ; }
if ( $numo % 2 == 0) { echo "$numo es par <br>" ; }
if ( $numo % 2 != 0) { echo "$numo es impar <br>" ; }
?>
</body>
</html>