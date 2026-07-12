<?php
$frutas = ["manzana", "pera", "uva", "melón"];

foreach ($frutas as $fruta) {
    echo ($fruta . "<br>");
}

// Con clave e índice
foreach ($frutas as $indice => $fruta) {
    echo "$indice : $fruta <br>";
}

// Foreach con arreglo asociativo
$producto = [
    "nombre" => "Laptop",
    "marca"  => "Dell",
    "precio" => 850.00,
    "stock"  => 15
];

foreach ($producto as $clave => $valor) {
    echo "<strong> $clave </strong>: $valor <br>";
}
