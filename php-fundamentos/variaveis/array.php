<?php

$linguagens = [
    'PHP',
    'JavaScript',
    'Python',
    'Java',
    'C#',
    'C++',
    'Ruby',
    'Swift',
    'Go',
    'Kotlin'
];

echo "Imprimindo índice [0]: " . $linguagens[0] . "<br><br>";


foreach($linguagens as $linguagem) {
    echo $linguagem . "<br>";
}

$linguagens_2 = array(
    'JavaScript',
    'Python',
    'Java',
    'C#',
    'C++',
    'Ruby',
    'Swift',
    'Go',
    'Kotlin'
);

echo "<br><br>";

foreach($linguagens as $linguagem) {
    echo $linguagem . "<br>";
}

$dados_pessoais = [
    'nome' => 'Lucas Damasceno',
    'idade' => 28,
    'cidade' => 'Macaé',
    'profissão' => 'Desenvolvedor FullStack'
];

echo "<br><br>";
echo "Nome: " . $dados_pessoais['nome'] . "<br>";
echo "Idade: " . $dados_pessoais['idade'] . "<br>";
echo "Cidade: " . $dados_pessoais['cidade'] . "<br>";
echo "Profissão: " . $dados_pessoais['profissão'] . "<br>";

$numeros = [
    [
        1,
        2,
        3,
        4,
    ],
    [
        5,
        6,
        7,
        8,
    ],
    [
        9,
        10,
        11,
        12,
    ],
];

echo "<br><br>";

echo "Acessando valor de array de arrays: " . $numeros[1][3];