<?php

/**
 * bubble sort
 */
$a = [12, 1, 8, 9, 23, 36, 48, 52, 66, 72, 80, 91];
$len = count($a);

for ($i = 0; $i < $len; $i++) {
    for ($j = $len - 1 - $i; $j > $i; $j--) {
        // swap 
        if ($a[$i] > $a[$j]) {
            $temp = $a[$j];
            $a[$j] = $a[$i];
            $a[$i] = $temp;
        }
    }
}

print_r($a);
