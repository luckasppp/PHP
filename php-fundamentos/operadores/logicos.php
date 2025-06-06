<?php

$a = true;
$b = false;
$c = false;

// && - and
var_dump($a && $b); // Operador && 
echo "<br>";

var_dump($a and $b); // Operador and
echo "<br>";

// || - or
var_dump($a || $b); // Operador || 
echo "<br>";

var_dump($a or $b); // Operador or
echo "<br>";

var_dump($c or $b); // Operador or
echo "<br>";

// xor
var_dump($a xor $b); // Operador xor
echo "<br>";

var_dump($c xor $b); // Operador xor
echo "<br>";

// ! (not)
var_dump(!$a); // Operador ! (not)
echo "<br>";

var_dump(!$b); // Operador ! (not)
echo "<br>";