<!DOCTYPE HTML>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>PHP Cookie Data</title>
</head> 
<body>
    <?php
    if( count($_COOKIE) > 0 ) 
    {
        echo '<dl> ' ;
        foreach( $_COOKIE as $key => $value )
        {
            echo "<dt>Campo: $key" ;
            echo "<dd>Valor: $value" ;
        }
        echo '</dl><hr>' ;  
        var_dump( $_COOKIE ) ;
    }
    else
    {
        echo 'Por favor <a href="cookie_form.html">Log In</a>' ;
    }
    ?>
</body>
</html