<?php
// Arreglo 2D numérico (matriz)
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Acceso por índices
echo $matriz[0][0] . "<br>"; // 1
echo $matriz[1][2] . "<br>"; // 6
echo $matriz[2][1] . "<br>"; // 8


// Arreglo de calificaciones por estudiante

$calificaciones = [
    [85, 90, 78],
    [92, 88, 95],
    [70, 75, 80]
];

// Acceso: [fila][columna]
echo $calificaciones[1][2] . "<br>";

// Arreglo 2D asociativo
$alumnos = [
    [
        "nombre" => "Carlos",
        "nota"   => 88,
        "ciudad" => "David"
    ],
    [
        "nombre" => "María",
        "nota"   => 95,
        "ciudad" => "Alto Boquete"
    ],
    [
        "nombre" => "Luis",
        "nota"   => 72,
        "ciudad" => "Chitré"
    ]
];
echo $alumnos[0]["nombre"] . "<br>";
echo $alumnos[2]["ciudad"] . "<br>";
