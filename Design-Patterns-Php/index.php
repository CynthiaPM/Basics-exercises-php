<?php 

require "nivel1.php";

$tigger = Tigger::getIntance();
$tigger -> roar();
$tigger -> roar();
$tigger -> roar();
echo $tigger -> getCounter();

?>