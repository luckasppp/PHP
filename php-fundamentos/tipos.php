<?php

echo "<p>Variáveis em PHP são fracamente tipadas, ou seja, não é necessário declarar o tipo da variável ao <br>criá-la. O PHP determina o tipo da variável automaticamente com base no valor atribuído a ela.</p>";
echo "Também é case sensitive e diferencia variáveis com letra maiúscula ou minúscula. A seguir, veja<br> exemplos de variáveis com diferentes tipos de dados:</p>";

$nome = "João";
$idade = 30;
$altura = 1.75;
$casado = false;

echo "<pre>Variable: \$nome \t|\tValue: $nome\t|\tType: " . gettype($nome) . "</pre>";
echo "<pre>Variable: \$idade\t|\tValue: $idade\t|\tType: " . gettype($idade) . "</pre>";
echo "<pre>Variable: \$altura\t|\tValue: $altura\t|\tType: " . gettype($altura) . "</pre>";
echo "<pre>Variable: \$casado\t|\tValue: " . ($casado ? 'true' : 'false') . "\t|\tType: " . gettype($casado) . "</pre>";

echo "<b>Uso da função var_dump():</b><br>";

var_dump($nome, $idade, $altura, $casado);

echo "<br><br>";

echo "<b>A variável nome é do tipo: </b>";
echo gettype($nome);

$nome = false;

echo "<br><br>";

echo "<b>A variável nome agora é do tipo: </b>";
echo gettype($nome);
