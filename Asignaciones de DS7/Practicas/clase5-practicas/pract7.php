<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Entrenamiento de Pikachu</title>
</head>
<body>
    <h2>Entrenamiento de Pikachu</h2>

    <?php
    // Lee los valores que llegan por GET, pero si no existen, usa valores por defecto
    $nivel = isset($_GET['nivel'])? intval($_GET['nivel']): 1;
    $accion = isset($_GET['accion'])? strtolower(trim($_GET['accion'])): null;
    $historial = $_GET['historial'] ?? "";

    if ($accion !== null) {
        if ($accion === "pelear") {
            $nivel++;
            $entrada = "Pikachu peleara, y ademas ganó! Subiendo al nivel $nivel.";
        } elseif ($accion === "huir") {
            if ($nivel > 0) $nivel--;
            $entrada = "Pikachu huyera... Bajando al nivel $nivel.";
        } else {
            $entrada = "No pasara nada porque esa accion no es valida, intenta 'pelear' o 'huir'.";
        }
        $historial = $historial === "" ? $entrada : "$entrada|$historial";
    }
    ?>

    <?php if ($nivel >= 5): ?>
        <h3 style="color: yellow;">¡Pikachu, estás listo para la batalla!</h3>
        <h3 style="color: greenyellow;">¡Evolucionaste a nivel 5!</h3>

    <?php else: ?>
        <p>Nivel actual de Pikachu: <strong><?= $nivel ?></strong> / 5</p>

        <form method="GET">
            <input type="hidden" name="nivel"     value="<?= $nivel ?>">
            <input type="hidden" name="historial" value="<?= htmlspecialchars($historial) ?>">
            <label>¿Qué hace Pikachu?
                <input type="text" name="accion" placeholder="pelear o huir" required>
            </label>
            <button type="submit">Confirmar</button>
        </form>
    <?php endif; ?>

    <?php if ($historial !== ""): ?>
        <h3>Tus acciones hicieron que...</h3>
        <?php foreach (explode("|", $historial) as $linea): ?>
            <p><?= htmlspecialchars($linea) ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>
