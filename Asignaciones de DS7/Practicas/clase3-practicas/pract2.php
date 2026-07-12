<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

<h2>Área de un triángulo</h2>

<form method="POST" action="">
    <label>Base:</label>
    <input type="number" name="base" step="any" required>
    <br><br>
    <label>Altura:</label>
    <input type="number" name="altura" step="any" required>
    <br><br>
    <input type="submit" value="Calcular área">
</form>

<?php
if (isset($_POST['base']) && isset($_POST['altura'])) {
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    $area = $base * $altura / 2;

    echo "<h3>El área del triángulo es: $area</h3>";
}
?>

</body>
</html>