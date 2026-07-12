<?php
/* try {
    // intentar algo
    throw new Exception("Mensaje de error");
}
catch (Exception $e) {
    // Maneja el error
} finally {
    // Código que se ejecuta siempre
}
*/

$mensaje = '';
$finScript = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $dia = $_POST['dia'] ?? '';

        if ((int) $dia < 0 || (int) $dia > 31) {
            throw new Exception("Ha escrito un numero invalido!");
        }

        $mensaje = "Numero invalido";
    } catch (Exception $e) {
        $mensaje = 'El programa detecto el siguiente error: ' . $e->getMessage();
    } finally {
        $finScript = 'No te preocupes, se aprende de los errores.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validacion del dia con try-except</title>
</head>
<body>
    <h3>Ingrese un dia del mes</h3>

    <form method="POST">
        <label>Dia (1-31):</label>
        <input type="number" name="dia" required>
        <br><br>
        <button type="submit">Validar</button>
    </form>
    <hr>
    <?php
    if ($mensaje !== '') {
        echo "<p> $mensaje </p>";
        echo "<p> $finScript </p>";
    }
    ?>
</body>
</html>
