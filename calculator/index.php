<?php
// include_once "calculator.php";
function __autoload($classname){
    $filename ="/./" . $classname . ".php";
    include_once ($filename);
}

$b = new calculator();
$b ->prepare();

$b = new Sony();
$var = $b ->good();

print_r($var);