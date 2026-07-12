<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

<h2>Promedio de edades</h2>

<form method="POST" action="">
    <label>Edad persona 1:</label>
    <input type="number" name="edad1" required>
    <br><br>
    <label>Edad persona 2:</label>
    <input type="number" name="edad2" required>
    <br><br>
    <label>Edad persona 3:</label>
    <input type="number" name="edad3" required>
    <br><br>
    <input type="submit" value="Calcular promedio">
</form>

<?php
if (isset($_POST['edad1']) && isset($_POST['edad2']) && isset($_POST['edad3'])) {
    $edad1 = $_POST['edad1'];
    $edad2 = $_POST['edad2'];
    $edad3 = $_POST['edad3'];

    $promedio = ($edad1 + $edad2 + $edad3) / 3;

    echo "<h3>La edad promedio de las 3 personas es: $promedio años</h3>";
}
?>

</body>
</html>