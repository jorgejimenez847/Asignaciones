<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calificaciones de Estudiantes</title>
</head>
<body>
    <h2>Calificaciones del Último Examen Parcial</h2>

    <?php
    $notas = [72, 85, 90, 68, 78];

    $total = 0;
    foreach ($notas as $nota) {
        $total += $nota;
    }

    $promedio = $total / count($notas);
    $maximo   = max($notas);
    $minimo   = min($notas);
    ?>

    <p>Notas registradas:
        <?php foreach ($notas as $nota): ?>
            <strong><?= $nota ?></strong>
        <?php endforeach; ?>
    </p>

    <p>Promedio: <strong><?= $promedio ?></strong></p>
    <p>Calificación más alta: <strong><?= $maximo ?></strong></p>
    <p>Calificación más baja: <strong><?= $minimo ?></strong></p>

</body>
</html>
