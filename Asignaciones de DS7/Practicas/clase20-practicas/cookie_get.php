<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Cookie Get</title>
</head>
<body>
    <?php
    if( isset( $_COOKIE[ 'user' ] ) )
    {
        $user = $_COOKIE[ 'user' ] ;
        echo "<h1>Bienvenido $user !</h1><hr>";
        echo '<a href="cookie_data.php">Contenido de las Cookies</a>' ;
    }
    else
    {
        echo 'Por favor <a href="cookie_form.html">Log In</a>' ;
    }
    ?>
</body>
</html>