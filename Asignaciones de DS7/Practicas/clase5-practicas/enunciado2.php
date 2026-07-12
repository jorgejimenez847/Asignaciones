<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$numMayor = 0;

echo "<h1> Enunciado 2 </h1>";

#Comparar primer número
if ($num1 > $num2 && $num1 > 0 && $num2 % 2 == 0){
    echo ("<h3> El $num1 es mayor que el $num2 y es positivo. El segundo número es par </h3>");
} 
elseif ($num1 > $num2 && $num1 < 0 && $num2 % 2 != 0){
    echo ("<h3> El $num1 es mayor que el $num2 y es un número negativo. El segundo número es impar</h3>");

} elseif ($num1 > $num2 && $num1 > 0 && $num2 % 2 != 0 ){
    echo ("<h3> El $num1 es mayor que el $num2 y es un número positivo. El segundo número es impar </h3>");
}
#Comparar segundo número 
else if ($num2 > $num1 && $num2 > 0 && $num1 % 2 == 0){
    echo ("<h3> El $num2 es mayor que el $num1 y es un número positivo. El segundo número es par </h3>");
} 
else if ($num2 > $num1 && $num2 < 0 && $num1 % 2 != 0){
    echo ("<h3> El $num2 es mayor que el $num1 y es un número negativo. El segundo número es impar </h3>");
}
else if ($num2 > $num1 && $num2 > 0 && $num1 % 2 != 0){
    echo ("<h3> El $num2 es mayor que el $num1 y es un número positivo. El segúndo número es impar </h3>");
}
if ($num1 + 1 >= $num2){
    echo "Al incrementar este número: $num1 por uno seguirá siendo mayor o igual al segundo número";
}