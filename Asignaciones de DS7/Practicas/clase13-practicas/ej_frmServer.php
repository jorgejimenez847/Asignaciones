<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Server</title>
</head>
<body>
    <form method="post">
        <label>Nombre: <input type="text" name="nombre"></label>
        <button type="submit">Enviar</button>
    </form>

    <hr>

    <p>
        <?php
        echo $_SERVER["REQUEST_METHOD"] . " - ";
        echo $_SERVER["SERVER_NAME"] . " - ";
        echo $_SERVER["DOCUMENT_ROOT"] . "<BR>";

        // Uso practico: detectar el metodo antes de procesar
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            echo "Este dato: $nombre fue enviado mediante POST";
        }
        ?>
    </p>
</body>
</html>
