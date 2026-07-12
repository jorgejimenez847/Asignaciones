<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>

    <form method="POST" action="registro.php"> <!-- // parte 1 del formulario-->
        Nombre: <input type="text" name="nombre"><br><br>
        Cédula: <input type="text" name="cedula"><br><br>
        Fecha de nacimiento: <input type="date" name="fecha_nacimiento"><br><br>
        Correo: <input type="text" name="correo"><br><br>
        Teléfono: <input type="text" name="telefono"><br><br>
        <button type="submit">Registrar</button>
    </form>

    <hr>

<?php // parte 2 de las sanitaciones y validaciones
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];

    $nombre = trim($_POST["nombre"] ?? "");
    $cedula = trim($_POST["cedula"] ?? "");
    $fecha = trim($_POST["fecha_nacimiento"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $telefono = trim($_POST["telefono"] ?? "");

    if (empty($nombre)) $errores[] = "Nombre vacío";
    if (empty($cedula)) $errores[] = "Cédula vacía";
    if (empty($fecha)) $errores[] = "Fecha vacía";
    if (empty($correo)) $errores[] = "Correo vacío";
    if (empty($telefono)) $errores[] = "Teléfono vacío";

    $nombre_limpio = strip_tags($nombre);
    if ($nombre != $nombre_limpio) {
        $errores[] = "Nombre contenía HTML";
    }

    if (!empty($correo) && !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Email inválido";
    }

    $cedula_num = intval($cedula);
    if (!empty($cedula) && !ctype_digit($cedula)) {
        $errores[] = "Cédula debe ser número";
    }

    $telefono_num = intval($telefono);
    if (!empty($telefono) && !ctype_digit($telefono)) {
        $errores[] = "Teléfono debe ser número";
    }

    $nombre_seguro = htmlspecialchars($nombre_limpio);
    $cedula_segura = htmlspecialchars($cedula_num);
    $fecha_segura = htmlspecialchars($fecha);
    $correo_seguro = htmlspecialchars($correo);
    $telefono_seguro = htmlspecialchars($telefono_num);

    // parte 3 que es la validacion
    if (empty($errores)) {
        echo "<h2>Registro exitoso</h2>
              <p>Nombre: $nombre_seguro</p>
              <p>Cédula: $cedula_segura</p>
              <p>Fecha: $fecha_segura</p>
              <p>Correo: $correo_seguro</p>
              <p>Teléfono: $telefono_seguro</p>";
    } else {
        echo "<h2>Errores:</h2><ul><li>" . implode("</li><li>", $errores) . "</li></ul>";
    }
} else {
    echo "Envía el formulario para validar.";
}
?>
</body>
</html>