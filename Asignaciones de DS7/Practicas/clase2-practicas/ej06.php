<?php
$titulo = "Calculadora Simple";
$fecha = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <p>Pagina generada por PHP el: <?php echo $fecha; ?></p>
    <button onclick="calcular()">Iniciar cálculo</button>
    <p id="resultado"></p>
    <script>

        function calcular() {
            let num1 = prompt("Ingresa el primer numero:");
            let num2 = prompt("Ingresa el segundo numero:");

            num1 = parseFloat(num1);
            num2 = parseFloat(num2);

            let suma = num1 + num2;
            let resta = num1 - num2;
            let multi = num1 * num2;
            let divis = num1 / num2;

            document.getElementById("resultado").innerHTML =
             "<b>Resultados:</b><br>" +
             num1 + " + " + num2 + " = " + suma + "<br>" +
             num1 + " - " + num2 + " = " + resta + "<br>" +
             num1 + " * " + num2 + " = " + multi + "<br>" +
             num1 + " / " + num2 + " = " + divis;
        }
        </script>
</body>
</html>