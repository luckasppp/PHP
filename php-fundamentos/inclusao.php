<?php

error_reporting(E_ALL);

echo "Início do aquivo inclusao.php";

include_once "variaveis/variaveis.php"; // incluir apenas a primeira ocorrência. A outra ignora.

echo "<br>";

include_once "variaveis/variaveis.php"; // Ignorado

echo "<br>Estou mostrando a variável nome no arquivo inclusao.php: $nome";

include_once "funcoes/personalizadas.php"; // incluir apenas a primeira ocorrência. A outra ignora.

echo "<br>";

include_once "funcoes/personalizadas.php"; // Ignorado

echo "<br>Estou chamando a dunção somar no arquivo inclusao.php:" . somar(25, 16);

echo "<br>Fim do aquivo inclusao.php";

//require_once