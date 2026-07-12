<?php
$dia = 3;

$nombre = match($dia) {
    1 => 'lunes',
    2 => 'martes',
    3 => 'miércoles',
    4 => 'jueves',
    5 => 'viernes',
    6 => 'sábado',
    7 => 'domingo',
    default => "Día invalido, error."
};

echo "El dia $dia corresponde a: $nombre";