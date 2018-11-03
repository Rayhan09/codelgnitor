<?php
// include_once "calculator.php";
function __autoload($classname){
    $filename ="/./" . $classname . ".php";
    include_once ($filename);
}

$b = new calculator();

$b ->add(30,25);
$b ->sub(2,1);
$b ->mal(5,6);