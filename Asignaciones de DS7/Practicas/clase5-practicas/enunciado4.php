<?php
$numero = $_GET['numero'];
$iterador = 1;

echo "<h1> Enunciado 4 <h1>";

for ($iterador = 1; $iterador <= $numero; $iterador++){
    if ($iterador % 2 == 0){
        echo "<h2> El número $iterador es par </h2> <br>";
    }elseif ($iterador % 2 != 0){
        echo "<h2> El número $iterador es impar </h2> <br>";
    }

}