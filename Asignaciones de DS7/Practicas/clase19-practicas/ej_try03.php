<?php
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $nombre = $_POST['nombre'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $edad = $_POST['edad'] ?? '';
        if (empty($nombre)) {
            throw new Exception('El nombre es obligatorio.');
        }
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('El correo no es válido.');
        }
        if (!is_numeric($edad) || $edad < 0) {
            throw new Exception('La edad debe ser un número positivo sin texto.');
        }
        $mensaje = 'Formulario enviado correctamente.';
    } catch (Exception $e) {
        $mensaje = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validacion de formulario con excepciones</title>
</head>
<body>

    <h3>Registro de usuario</h3>

    <form method="POST" action="">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br><br>
        <label>Correo:</label>
        <input type="email" name="correo">
        <br><br>
        <label>Edad:</label>
        <input type="number" name="edad">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <?php
    if ($mensaje !== '') {
        echo "<p>$mensaje</p>";
    }
    ?>
