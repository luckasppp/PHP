<?php

$escola = "FeMASS";
$curso = ["PHP", "Java", "C#"];

$frase = "Faça o curso de " . $curso[2] . " na " .  $escola;

echo $frase;
echo "<br>";

$string1 = "Faça o curso de {$curso[1]} na {$escola}"; // interpreta as variáveis.
$string2 = 'Faça o curso de $curso na $escola'; // não interpreta as variáveis.

echo $string1;
echo "<br>";

echo $string2;
echo "<br>";
