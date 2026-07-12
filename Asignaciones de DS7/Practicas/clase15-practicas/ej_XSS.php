
<html lang="en">
<body>
<h3>Ejemplo de Formulario Ataque XSS</h3>
<form method="POST">
<table>
<tr>
    <td align="right" valign="top"><label for="mensaje">Comentarios:</label></td>
    <td><textarea id="msj" name="mensaje" rows="46" cols="25">
    placeholder="Escribe tu comentario aquí..."</textarea></td>
    </tr>
    <tr>
        <td colspan="2" align="right">

        <button type="submit">Enviar</button>
        </td>
    </tr>
</table>
</body>
</html>
<!--
Simulacion del ataque:
<script>alert('He robado tus datos, ya no estas seguro.')</script>
<script>alert('He robado tus datos, adios.')</script>
<script>document.body.innerHTML = '<h1>He modificado tu pagina, XSS.</h1>'</script>
-->
<?php
// Escenario 1: Sin proteccion XSS (Cross-Site Scripting)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = $_POST["mensaje"];
    echo "<div class='comentario'>";
    echo "<p>Resultado obtenido: $comentario</p>";
    echo "</div>";
}
?>

<?php
// Escenario 2: Con proteccion XSS (Cross-Site Scripting)

/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = $_POST["mensaje"];
    $comentario_Seguro = htmlspecialchars($comentario);
    echo "<div class='comentario'>";
    echo "<p>Resultado obtenido: $comentario_Seguro</p>";
    echo "</div>";
} */