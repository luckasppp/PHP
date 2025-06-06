<?php

$a = 11;
$b = 22;

if ($a > $b) {
    echo "Realmente A é maior do que B <br>";
    echo "Segundo comando<br>";
    echo "Terceiro comando<br>";
}

echo "<br>";

if ($a > $b)
    echo "Realmente A é maior do que B <br>";

echo "1º comando fora do if<br>";
echo "2º comando fora do if<br>";

echo "<br>";

if($a > $b) {   // recomendado sempre usar bloco
    echo "Realmente A é maior do que B <br>";
} elseif ($b == 20) { // Recomendado usar junto
    echo "B é igual a 20 <br>";
} else if ($a == 10) {
    echo "A é igual a 10 <br>";
} else {
    echo "Nenhuma condição é verdadeira";
}


