<?php
session_start();
$mensaje = '';
$passNew = $_POST['passNew'] ?? ''; //?? operador fusión nula
$passLogin = $_POST['passLogin'] ?? '';

if (isset($_POST['cerrarSesion'])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
if ($passNew !== '') {
    $_SESSION['hash'] = password_hash($passNew, PASSWORD_BCRYPT);
    $mensaje = "Hash generado: " . $_SESSION['hash'];
}

if ($passLogin !== '') {
    if (isset($_SESSION['hash'])) {
        if (password_verify($passLogin, $_SESSION['hash'])) {
            $mensaje = "¡Contraseña correcta! Login exitoso.";
        } else {
            $mensaje = "Contraseña incorrecta.";
        }
    } else {
        $mensaje = "Primero debes registrar una contraseña.";

    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hash simple</title>
</head>
<body>

    <h4>Registrar (crear hash)</h4>
    <form method="POST">
        <input type="password" name="passNew" placeholder="Escribe clave">
        <button type="submit">Guardar Hash</button>
    </form>
    <h4>Verificar (login)</h4>
    <form method="POST">
        <input type="password" name="passLogin" placeholder="Escribe clave">
        <button type="submit">Verificar</button>
    </form>
    <hr>
    <?php
    if (isset($_SESSION['hash'])) {
        echo $mensaje;
        echo "<p>Hash guardado en sesión: " . $_SESSION['hash'] . "</p>";
        echo '<form method="POST">';
        echo '<button type="submit" name="cerrarSesion" value="1">Cerrar sesión</button>';
        echo '</form>';
    }
    ?>

    <hr>

</body>
</html>
