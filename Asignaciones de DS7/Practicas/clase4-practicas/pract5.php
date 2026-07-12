<?php

$codigo = $_GET['codigo'];

$interpretacion = match($codigo) {
    200 => "Peticion exitosa.",
    403 => "Peticion denegada.",
    404 => "No encontrado.",
    410 => "No disponible.",
    500 => "Problema inesperado.",
    default => "Codigo no reconocido.",
};

echo "El codigo $codigo significa: $interpretacion";