<?php
$productos = ["Disco SSD", "Memoria RAM", "Ipad"];
$num_prod = count($productos);
for ($i = 0; $i < $num_prod; $i++ ) {
    echo "Ítem " . $i +1 . ": " .$productos[$i];
    echo "<br>";
}