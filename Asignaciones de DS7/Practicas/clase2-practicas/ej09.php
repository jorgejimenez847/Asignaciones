<?php
$nota = $_GET['nota'];
echo "Resultado de evaluación del Estudiante";
echo "<hr>";
if ($nota >= 90 && $nota <= 100) {
    echo "Calificación: Excelente";
} elseif ($nota >= 75 && $nota < 90) {
    echo "Calificación: Bueno";
} elseif ($nota >= 60 && $nota < 75) {
    echo "Calificación: Aprobado";
} else {
    echo "Calificación: Reprobado";
}

# Nota: Sale un error y da reprobado, pero si se pone en la barra de la url "?nota=100" 
# o algun otro numero, entonces se actualizara a ese numero y dara la calificación.