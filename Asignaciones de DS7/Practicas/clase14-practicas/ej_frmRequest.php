<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario con 3 datos usando $_REQUEST</title>
</head>
<body>
    <h2>Formulario</h2>
    <form action= "ej_actionReq.php" method="post">
        <label>Nombre: <input type="text" name="nombre" required></label><br><br>
        <label>Email: <input type="email" name="email"></label><br><br>
        <label>Edad: <input type="number" name="edad"></label><br><br>
        <button type="submit">Enviar</button>
    </form>
    <hr>
    
</body>
</html>