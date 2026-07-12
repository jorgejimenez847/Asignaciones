<?php
$mensaje = '';
$nombre = '';
$codigo = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $cantidad = (int) ($_POST['cantidad'] ?? 0);
        $costo = (int) ($_POST['costo'] ?? 0);
        $nombre = $_POST['nombre'] ?? '';
        $codigo = $_POST['codigo'] ?? '';

        if ($costo === 0) {
            throw new Exception("Esta operacion no puede realizarse");
        }

        $resultado = ($cantidad * $costo);
        $mensaje = "un total de:  " . $resultado;

    } catch (Exception $e) {
        $mensaje = $e->getMessage();

    } finally {
        $finScript = "Fin del script.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parcial - Codigo 2</title>
</head>
<body>
    <h2>Formulario - Tienda</h2>
    <form method="POST">
        <label>Codigo:</label>
        <input type="number" name="codigo" required>
        <br><br>
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label>Cantidad:</label>
        <input type="number" name="cantidad" required>
        <br><br>
        <label>Costo:</label>
        <input type="number" name="costo" required>
        <br><br>
        <button type="submit">Total</button>
    </form>
    <hr> 
    <?php
    if ($mensaje !== '') {
        echo "<p> Hola $nombre, su compra con codigo $codigo tiene: $mensaje </p>";
    }
    ?>
</body>
</html>