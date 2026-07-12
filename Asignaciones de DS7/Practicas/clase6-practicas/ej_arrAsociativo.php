<?php
$estudiante = [
    "nombre"  => "Ana López",
    "edad"    => 20,
    "carrera" => "Informática"
];

// Acceso por clave
echo $estudiante["nombre"];   // Ana López
echo $estudiante["carrera"]; // Informática

// Cambiar un valor
$estudiante["edad"] = 21;

// Agregar nueva clave
$estudiante["promedio"] = 90;
