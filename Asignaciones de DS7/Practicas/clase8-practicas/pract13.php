<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 13 - Notas de estudiantes</title>
</head>
<body>
    <h2>Notas de estudiantes</h2>

    <?php
    $estudiantes = [
        ["nombre" => "Carlos", "Redes" => 85, "Programacion" => 90, "Ingles" => 78],
        ["nombre" => "Maria", "Redes" => 68, "Programacion" => 75, "Ingles" => 70],
        ["nombre" => "Luis", "Redes" => 95, "Programacion" => 88, "Ingles" => 92]
    ];

    foreach ($estudiantes as $estudiante) {
        $promedio = ($estudiante["Redes"] + $estudiante["Programacion"] + $estudiante["Ingles"]) / 3;
        $estado = $promedio >= 71 ? "Aprobo" : "Reprobo";

        echo "<h3>Alumno: {$estudiante['nombre']}</h3>";
        echo "Redes: {$estudiante['Redes']} <br>";
        echo "Programacion: {$estudiante['Programacion']} <br>";
        echo "Ingles: {$estudiante['Ingles']} <br>";
        echo "Promedio: " . round($promedio, 2) . " <br>";
        echo "Estado: {$estado} <br>";
    }
    ?>

</body>
</html>
