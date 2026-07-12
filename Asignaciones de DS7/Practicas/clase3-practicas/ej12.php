<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<body>

<h2>Calculadora de suma</h2>

<form method="POST" action="">
    <label>Número 1:</label>

    <input type="number" name="num1" placeholder="Escriba número entero" required>
    <br><br>
    <label>Número 2</label>

    <input type="number" name="num2" required>
    <br><br>
    <input type="submit" value="suma">
</form>
<?php

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];


    $suma = $numero1 + $numero2;


    echo "<h3>Resultado: $numero1 + $numero2 = $suma</h3>";
}
?>

</body>
</html>