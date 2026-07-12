<?php
# Calculo de ITBMS para un monto definido

$monto = 2000;
$itbms = 7;
$impuesto = ($monto * $itbms) / 100;
$total = $monto + $impuesto;
echo "El $itbms% de impuesto de $monto es = $impuesto <br>";
echo "Total con ITBMS = $total";