<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

<h2>Mayor de dos números</h2>

<form method="POST" action="">
    <label>Número 1:</label>
    <input type="number" name="num1" step="any" required>
    <br><br>
    <label>Número 2:</label>
    <input type="number" name="num2" step="any" required>
    <br><br>
    <input type="submit" value="Comparar">
</form>

<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2) {
        echo "<h3>El número mayor es: $num1</h3>";
    } elseif ($num2 > $num1) {
        echo "<h3>El número mayor es: $num2</h3>";
    } else {
        echo "<h3>Los dos números son iguales</h3>";
    }
}
?>

</body>
</html>