<?php

/**
 * insertion sort
 */
$arr = [3, 44, 38, 5, 47, 15, 36, 26, 27, 2, 46, 4, 19, 50, 48];
$len = count($arr);

for ($j=1; $j < $len; $j++) {   
    $key = $arr[$j];  
    $i = $j - 1;    // set the first element as sorted
      
    // when current element smaller than before element, set current element with before element
    while($i >= 0 and $arr[$i] > $key) {  
        $arr[$i + 1] = $arr[$i];  
        $i--;  
    }  
    
    // insert current element  
    $arr[$i + 1] = $key;  
}

print_r($arr);