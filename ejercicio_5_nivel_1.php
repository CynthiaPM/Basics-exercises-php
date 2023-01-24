<?php
$num1 = array(1,2,3,4,5);
$num2 = array(6,7,8);

$num2[] = 9;

$final = array_merge($num1,$num2);

echo "<pre>";
var_dump($final);
?>