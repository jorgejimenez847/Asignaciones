<?php
$alumnos = [
    ["nombre" => "Carlos", "nota" => 88],
    ["nombre" => "María",  "nota" => 95],
    ["nombre" => "Luis",   "nota" => 75]
];

foreach ($alumnos as $alumno) {
    echo $alumno["nombre"] . " - Nota: " . $alumno["nota"] . "<br>";
}
