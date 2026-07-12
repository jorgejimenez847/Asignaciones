<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Entrenamiento de Mario</title>
</head>
<body>
    <h2>Saltos sobre banderas</h2>

    <form method="GET">
        <label>Altura de la bandera (N): <input type="number" name="n" min="1" required></label>
        <button type="submit">Entrenar</button>
    </form>

    <?php
    if (isset($_GET['n'])) {
        $n = intval($_GET['n']);

        if ($n < 1) {
            echo "<p style='color:red;'>Por favor ingresa un número entero positivo.</p>";
        } else {
            $altura = $n;
            $pasos = 0;

            echo "<h3>Secuencia de alturas:</h3>";
            echo "<p>$altura</p>";

            while ($altura > 1) {
                if ($altura % 3 === 0) {
                    $altura = $altura / 3;
                    $tipo = "Salto Largo";
                } else {
                    $altura = $altura - 1;
                    $tipo = "Salto Corto";
                }
                $pasos++;
                echo "<p>$tipo → $altura</p>";
            }

            echo "<h3>Total de pasos: $pasos</h3>";
        }
    }
    ?>
</body>
</html>