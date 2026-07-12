<?php
$email = "ana@gmail.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email valido.";
} else {
    echo "Email no valido";
}
echo "<br>";
$nombre = " <script>Ana</script> ";
$limpio = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);
echo $limpio;
/*
FILTER_VALIDATE_EMAIL verifica si es un email válido
FILTER_VALIDATE_INT verifica si es un entero válido
FILTER_VALIDATE_FLOAT verifica si es un número decimal válido
FILTER_VALIDATE_URL verifica si es una URL válida
FILTER_SANITIZE_SPECIAL_CHARS Limpia caracteres peligrosos HTML */
