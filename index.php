<?php
function triangleArea($base, $height) {
return ($base*$height)/2;
}

//Example usage:
$base=5;
$height=10;
$area=triangleArea($base,$height);
echo "The area of the triangle is:".$area;