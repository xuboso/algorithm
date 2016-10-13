<?php

/**
 * select sort
 */
$arr = [3, 44, 38, 5, 47, 15, 36, 27, 2, 46, 4,19, 50];
$len = count($arr);

for ($i=0; $i<$len; $i++)
{
    // set the first as the minimum
    $min = $i;
    for ($j=$i+1; $j<$len; $j++) {
        if ($arr[$j]<$arr[$min]) {
            $min = $j;  // set element as the new minimum index
        }
    }

    // swap
    $temp = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $temp;
}

print_r($arr);