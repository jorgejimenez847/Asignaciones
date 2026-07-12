<?php
for ($i = 1; $i <= 3; $i++) {
    echo "i = $i\n";
    for ($j = 1; $j <= 3; $j++) {
        if ($i == 2 && $j == 2) {
            continue 2;
        }
        echo " j = $j\n";
    }
}