<?php
// Método 1: array() vacío
$notas = array();
$notas[0] = 85;
$notas[1] = 92;
$notas[2] = 78;

// Método 2: inicialización directa con array()
$notas = array(85, 92, 78, 90, 88);

// Método 3: notación corta [] (recomendado)
$notas = [85, 92, 78, 90, 88];

// Asociativo en una dimensión
$config = [
    "host"     => "localhost",
    "usuario"  => "root",
    "password" => "12345",
    "bd"       => "mi_base"
];
// Funciones especiales
print_r($notas);        // muestra la estructura
echo "<br>";
var_dump($notas);       // muestra tipos y valores
echo "<br>";
echo count($notas);
