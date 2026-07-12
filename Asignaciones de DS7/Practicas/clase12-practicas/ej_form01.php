<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <div style="text-align: center; border-color: goldenrod; border-style: solid;">
        <h2>Formulario de Registro Nuevo Estudiante</h2>
        <form name="formulario" action="ej_form01.php" method="post" autocomplete="off">
            Usuario: &nbsp;
            <input type="text" name="nombre" placeholder="nombre apellido"><br><br>

            Cedula: &nbsp;
            <input type="text" name="cedula" id="cedula"><br><br>

            e-mail: &nbsp;
            <input type="email" name="mail" id="mail"><br><br>

            <p><input type="submit" value="Enviar"></p>
        </form>
    </div>

    <?php
    if (isset($_POST['nombre']) && isset($_POST['cedula']) && isset($_POST['mail'])) {
        $nombre = trim($_POST['nombre']);
        $cedula = trim($_POST['cedula']);
        $mail = trim($_POST['mail']);

        echo "<p>";
        echo "El nuevo usuario se llama $nombre con CIP $cedula. Contactar en $mail.";
        echo "</p>";
    } else {
        echo '<script language="javascript">alert("No se ha recibido los datos!"); </script>';
    }
    ?>
</body>
</html>