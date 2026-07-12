<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Cookie Set</title>
</head>
<body>
    <?php
    function rechazar( $valor )
    {
        echo "Entrada no válida $valor <br>" ;
        echo 'Por favor <a href="cookie_form.html">Log In</a>' ;
        exit() ;
    }

    if( isset( $_POST[ 'user' ] ) )
    {
        $user = trim( $_POST[ 'user' ] ) ;
        if( !ctype_alnum( $user ) ) { rechazar( 'estimado usuario' ) ; }
        if( isset( $_POST[ 'pass' ] ) )
        {
            $pass = trim( $_POST[ 'pass' ] ) ;
            if( !ctype_alnum( $pass ) ) { rechazar( 'Password' ) ; }
            else
            {
                setcookie('user', $user, time()+3600 ) ;
                setcookie('pass', password_hash($pass, PASSWORD_BCRYPT), time()+3600 ) ;
                header('Location: cookie_get.php') ;
             /*En el ejemplo se guarda un password en las cookies;
             sin embargo, no es buena práctica. Para este tipo de
             datos se recomienda almacenar en sesiones*/
            }
        }
    }
    else { header('Location: cookie_form.html') ; }
    ?>
</body>
</html>