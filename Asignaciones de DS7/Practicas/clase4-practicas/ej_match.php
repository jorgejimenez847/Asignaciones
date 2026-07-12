<?php
$letra = 'B';

$resultado = match($letra) {
    'A' => 'Letra A',
    'B' => 'Letra B',
    'C' => 'Letra C',
};

echo $resultado;