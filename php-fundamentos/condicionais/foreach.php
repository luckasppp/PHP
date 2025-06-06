<?php

$numeros = [2, 3, 5, 7, 9, 10];

for ($i = 0; $i < count($numeros); $i = $i + 1) {
    echo $numeros[$i] . "<br>";
}

echo "<br>";

foreach ($numeros as $key => $value) {
    echo "Chave: {$key} - Valor: {$valor} <br>";
}

echo "<br>";

foreach ($numeros as $value) {
    echo "Valor: {$valor} <br>";
}