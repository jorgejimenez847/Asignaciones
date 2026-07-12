<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

<h2>Fases de reentrada de la Cápsula Orión (Artemis II)</h2>

<form method="POST" action="">
    <label>Altitud (pies):</label>
    <input type="number" name="altitud" required>
    <br><br>
    <input type="submit" value="Determinar fase">
</form>

<?php
if (isset($_POST['altitud'])) {
    $altitud = $_POST['altitud'];

    if ($altitud > 400000) {
        echo "<h3>Fase 1: Separación del módulo de servicio</h3>";
    } elseif ($altitud >= 100000) {
        echo "<h3>Fase 2: Interrupción de comunicaciones/h3>";
    } elseif ($altitud >= 22000) {
        echo "<h3>Fase 3: Despliegue de paracaídas de freno</h3>";
    } elseif ($altitud >= 6000) {
        echo "<h3>Fase 4: Apertura de los tres paracaídas principales</h3>";
    } else {
        echo "<h3>Fase 5: Amerizaje en el océano Pacífico frente a San Diego</h3>";
    }
}
?>

</body>
</html>