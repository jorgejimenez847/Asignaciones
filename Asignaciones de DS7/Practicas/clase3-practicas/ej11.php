<?php
$velocidad = $_GET['velocidad'];
echo "Control de velocidad";
echo "<hr>";
if ($velocidad <= 60) {
    echo "Sin multa";
} elseif ($velocidad <= 80) {
    echo "Multa de 100";
} else {
    echo "Multa de 500";
}
