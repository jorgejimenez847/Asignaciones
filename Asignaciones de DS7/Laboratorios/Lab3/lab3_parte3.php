<?php
/*
    Laboratorio 3 - Regex y manejo de errores (Parte 3)
    Ejemplo de implementacion con preg_match(), throw y catch.

    Integrantes:
    -Jorge Jiménez
    -Jonathan Martinez
    -Briant Arango
    -Dayelkis 
*/

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $telefono = trim($_POST["telefono"]);

        if ($nombre == "" || $correo == "" || $telefono == "") {
            throw new Exception("Debe llenar todos los campos.");
        }

        // Solo acepta letras y espacios.
        if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ ]{3,40}$/", $nombre)) {
            throw new Exception("El nombre no cumple con el formato.");
        }

        // Formato sencillo de correo.
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $correo)) {
            throw new Exception("El correo no es valido.");
        }

        // Debe quedar como 0000-0000.
        if (!preg_match("/^[0-9]{4}-[0-9]{4}$/", $telefono)) {
            throw new Exception("El telefono debe tener el formato 0000-0000.");
        }

        $mensaje = "Datos validados correctamente.";
    } catch (Exception $e) {
        $mensaje = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio 3 - Regex y manejo de errores (Parte 3)</title>
</head>
<body>
    <h2>Regex y manejo de errores</h2>
    <h3>Registro de contacto</h3>

    <form method="POST" action="">
        Nombre:
        <input type="text" name="nombre" placeholder="Jorge Jimenez">
        <br><br>

        Correo:
        <input type="text" name="correo" placeholder="Jorgito777@gmail.com">
        <br><br>

        Telefono:
        <input type="text" name="telefono" placeholder="6539-0674">
        <br><br>

        <button type="submit">Validar</button>
    </form>
    <hr>

    <?php
    if ($mensaje != "") {
        echo "<p>$mensaje</p>";
    }
    ?>

    <p>
        Nota: se usa <code>preg_match()</code> y <code>throw/catch</code> para comparar los datos y manejar el error.
    </p>
</body>
</html>

<!--
Ejemplos para probar por si acaso, pero bueno son simples de 
igual manera asi que se pueden poner otros ejemplos, esto era
solo por si acaso:

Correcto:
Nombre: Jorge Jimenez
Correo: Jorgito777@gmail.com
Telefono: 6539-0674

Incorrecto en nombre:
Nombre: Jorge123
Correo: Jorgito777@gmail.com
Telefono: 6539-0674

Incorrecto en correo:
Nombre: Jorge Jimenez
Correo: Jorgito777gmail.com
Telefono: 6539-0674

Incorrecto en telefono:
Nombre: Jorge Jimenez
Correo: Jorgito777@gmail.com
Telefono: 65390674
-->