<?php
// session_start() genera ID de sesión y lo envía al navegador como cookie
session_start();

$accion = $_POST['accion'] ?? '';
if ($accion === 'crear') {
    $_SESSION['nombre'] = $_POST['nombre'] ?? '';
    $_SESSION['curso']  = "Desarrollo de Software VII";
}

if ($accion === 'vaciar') {
    session_unset();
}

if ($accion === 'destruir') {
    session_unset();       // primero se limpian las variables
    session_destroy();     // luego se destruye la sesión completa
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demo de Sesiones PHP</title>
</head>
<body>

    <h3>Estado actual de la sesión</h3>
    <?php
    if (isset($_SESSION['nombre'])) {
        echo "<p>Nombre guardado: <strong>" . htmlspecialchars($_SESSION['nombre']) . "</strong></p>";
        echo "<p>Curso: <strong>" . htmlspecialchars($_SESSION['curso']) . "</strong></p>";
    } else {
        echo "<p>No hay datos en la sesión actualmente.</p>";
    }
    ?>
    <hr>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Escribe tu nombre">
        <input type="submit" name="accion" value="crear"> <!-- antes era button -->
    </form>

    <form method="POST">
        <input type="submit" name="accion" value="vaciar"> <!-- Antes era button  -->
    </form>

    <form method="POST">
        <input type="submit" name="accion" value="destruir"> <!-- antes era button -->
    </form>

</body>
</html>
