<?php
/*Crear una cookie
setcookie(nombre, valpr, expira, path, dominio, secure, httponly);*/
setcookie("usuario", "ramon", time() + 3600, "/");
echo "<script>alert('Cookie creada exitosamente!');</script>";


/*Leer una cookie*/

/* if (isset($_COOKIE["usuario"])) {
    echo "Bienvenido, " . htmlspecialchars($_COOKIE["usuario"]);
    echo "<br>";
} else {
    echo "No se encontró la cookie, refresca la página!";
    echo "<br>";
} */

/*Eliminar una cookie*/
setcookie("usuario", "", time() - 3600, "/");
echo "<script>alert('Cookie eliminada!');</script>";
