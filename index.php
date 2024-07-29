<?php
function triangleArea($base, $height) {
return ($base*$height)/2;
}

//Example usage:
$base=5;
$height=10;
$area=triangleArea($base,$height);
echo "The area of the triangle is:".$area;

?>



<?php

function findSingleNumber($arr) {
    $occurrences = array();
    
    // Count occurrences of each number in the array
    foreach ($arr as $num) {
        if (array_key_exists($num, $occurrences)) {
            $occurrences[$num]++;
        } else {
            $occurrences[$num] = 1;
        }
    }
    
    // Find the number that occurs only once
    foreach ($occurrences as $num => $count) {
        if ($count == 1) {
            return $num;
        }
    }
    
    // If no such number found (though the problem states there should be exactly one)
    return null;
}

// Example usage:
$arr = array(5, 3, 4, 3, 4);
$singleNumber = findSingleNumber($arr);
echo "Single number that doesn't occur twice: " . $singleNumber . "\n";

?>
