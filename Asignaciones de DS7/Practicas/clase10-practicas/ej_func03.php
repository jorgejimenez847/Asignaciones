<?php
// Ejemplo 1 (ambito de variables)
$num = 1;
echo "Global: $num<br>";

function show_local()
{
    $num = 100;
    echo "Local: $num<hr>";
}

show_local();

// Ejemplo 2 (ambito de variables)
$nivelGlobentrendor = 5;

function mejorarPokemon($nombre, $poderBase)
{
    $bonosLocal = 3; // variable local
    global $nivelGlobentrendor; // variable global
    $poderTotal = $poderBase + $nivelGlobentrendor + $bonosLocal;

    echo "$nombre -> Poder total: $poderTotal <br>";
    $nivelGlobentrendor++; // se modifica variable global
}

echo "Nivel inicial del entrenador: $nivelGlobentrendor<br>";
mejorarPokemon("Pikachu", 10);
mejorarPokemon("Charizard", 20);
echo "Nivel final del entrenador: $nivelGlobentrendor\n";
?>
