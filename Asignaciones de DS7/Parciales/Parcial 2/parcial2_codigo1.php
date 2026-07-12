<?php
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    try{
        $nombre = (string) ($_POST['nombre']?? "");
        $edad = (int) ($_POST['edad']?? "");
        $temperatura = (float) ($_POST['temperatura']?? "0");

       if($temperatura < 36.0) {
        echo("$nombre");
        echo '<br></br>';
        echo("Tiene Hipotermia " . $temperatura);
    }elseif($temperatura > 36.0 && $temperatura < 37.5) {
        echo("$nombre");
        echo '<br></br>';
        echo("Tiene una Temperatura normal " . $temperatura);
    }elseif($temperatura > 37.5) {
        echo("$nombre");
        echo '<br></br>';
        echo("Tiene fiebre " . $temperatura);
    }

        $resultado = round($temperatura);
        $mensaje = "El resultado total fue: " . $resultado;

    } catch (Exception $e) {
        $mensaje = $e->getMessage(); 
    }finally {
        $finScript = "fin del script";
    }

}

?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Problema #1</title>
</head>

<body>

    <form method="POST">  
        <label>Ingrese su nombre: </label>
        <input type="text" name="$nombre" required>
        <br><br>
        <label>Ingrese su edad:</label>
        <input type="number" name="$edad" required>
        <br><br>
        <label>Temperatura corporal:</label>
        <input type="float" name="$temperatura" required>
        <button type="submit">INGRESAR</button>
    </form>

     <?php 
    
    if ($mensaje != '') {
        echo "<p> $mensaje </p>";
        echo "<p> $$finScript </p>";
    }
    ?>

</body>
</html>