<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de contacto</title>
</head>
<body>
    <h3 style="font-family: tahoma;">Formulario de contacto</h3>

    <form action="action_handler.php" method="POST">
        <table border="0" cellpadding="8" cellspacing="0">
            <tr>
                <td align="right"><label for="nombre">Nombre:</label></td>
                <td><input type="text" id="nombre" name="nombre" size="30"></td>
            </tr>
            <tr>
                <td align="right"><label for="mail">Correo electronico:</label></td>
                <td><input type="email" id="mail" name="correo" size="30"></td>
            </tr>
            <tr>
                <td align="right"><label for="comentarios">Comentarios:</label></td>
                <td><textarea id="comentarios" name="comentarios" rows="5" cols="32"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
