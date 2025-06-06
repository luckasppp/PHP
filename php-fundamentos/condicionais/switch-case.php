<?php

$a = 6;

switch ($a) {
    case 0:
        echo "Tenho o valor 0";
        break;

    case 1:
        echo "Tenho o valor 1";
        break;
    
    // É possível agrupar vários cases:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Tenho o valor entre 2 e 5";
        break;

    default:
        echo "Tenho o valor $a.";
}

echo "<br>";

$curso = "PHP";

switch ($curso) {
    case 'PHP':
        echo "Curso de PHP";
        break;
    
    default:
        echo "Curso de $curso";
        break;
}