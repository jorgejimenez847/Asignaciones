<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 14 - Rival Mundial 2026</title>
</head>
<body>
    <h2>Rival Mundial 2026</h2>

    <?php
    $paises = [
        "Mexico" => 3,
        "Portugal" => 5,
        "Argentina" => 1,
        "Panama" => 3,
        "Francia" => 4,
        "Uruguay" => 5,
        "Brasil" => 1,
        "Inglaterra" => 4,
        "Alemania" => 2,
        "Espana" => 2
    ];

    if (isset($_GET["pais"]) && $_GET["pais"] != "") {
        $paisConsultado = trim($_GET["pais"]);
        $grupo = null;
        $rival = null;

        foreach ($paises as $pais => $numeroGrupo) {
            if (strcasecmp($pais, $paisConsultado) == 0) {
                $paisConsultado = $pais;
                $grupo = $numeroGrupo;
                break;
            }
        }

        if ($grupo != null) {
            foreach ($paises as $pais => $numeroGrupo) {
                if ($numeroGrupo == $grupo && $pais != $paisConsultado) {
                    $rival = $pais;
                    break;
                }
            }

            echo "El rival de {$paisConsultado} es {$rival}.";
        } else {
            echo "Error: el pais ingresado no existe.";
        }
    } else {
        echo "(Ej: .php?pais=Panama)";
    }
    ?>

</body>
</html>